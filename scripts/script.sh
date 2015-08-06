#!/usr/bin/env bash
APPENV=local
DBHOST=localhost
DBNAME=wordpress
DBUSER=wordpress
DB_ROOT_PASSWD=peloia10
DB_PASSWD=WordPress

echo -e "\n--- Start installation of the packages needed for Wordpress, installing now... ---\n"

echo -e "\n--- Updating packages list ---\n"
apt-get -qq update

echo -e "\n--- Install base packages ---\n"
apt-get -y install vim curl build-essential python-software-properties git gunzip > /dev/null 2>&1


echo -e "\n--- Install MySQL specific packages and settings ---\n"
echo "mysql-server mysql-server/root_password password $DB_ROOT_PASSWD" | debconf-set-selections
echo "mysql-server mysql-server/root_password_again password $DB_ROOT_PASSWD" | debconf-set-selections
apt-get -y install mysql-server-5.5  > /dev/null 2>&1

echo -e "\n--- Setting up our MySQL user and db ---\n"
if [ ! -f /var/log/dbinstalled ];
then
    echo "CREATE USER '$DBUSER'@'localhost' IDENTIFIED BY '$DB_PASSWD'" | mysql -uroot -p$DB_ROOT_PASSWD
    echo "CREATE DATABASE $DBNAME" | mysql -uroot -p$DB_ROOT_PASSWD
    echo "GRANT ALL ON $DBNAME.* TO '$DBUSER'@'localhost'" | mysql -uroot -p$DB_ROOT_PASSWD
    echo "flush privileges" | mysql -uroot -p$DB_ROOT_PASSWD
    touch /var/log/dbinstalled
fi

echo -e "\n--- Installing apache and PHP-specific packages.... ---\n"
apt-get -y install php5 apache2 openssl libapache2-mod-php5 php5-curl php5-gd php5-mcrypt php5-mysql php-apc > /dev/null 2>&1

echo -e "\n--- changing user to Apache ---\n"
APACHEUSR=`grep -c 'APACHE_RUN_USER=www-data' /etc/apache2/envvars`
APACHEGRP=`grep -c 'APACHE_RUN_GROUP=www-data' /etc/apache2/envvars`
if [ APACHEUSR ]; then
    sed -i 's/APACHE_RUN_USER=www-data/APACHE_RUN_USER=vagrant/' /etc/apache2/envvars
fi
if [ APACHEGRP ]; then
    sed -i 's/APACHE_RUN_GROUP=www-data/APACHE_RUN_GROUP=vagrant/' /etc/apache2/envvars
fi
sudo chown -R vagrant:www-data /var/lock/apache2
echo -e "\n--- Enabling mod-rewrite.... ---\n"
a2enmod rewrite > /dev/null 2>&1

echo -e "\n--- Allowing Apache override to all.... ---\n"
sed -i "s/AllowOverride None/AllowOverride All/g" /etc/apache2/apache2.conf

echo -e "\n--- Setting document root to public directory ---\n"
rm -rf /var/www
ln -fs /vagrant/public /var/www

echo -e "\n--- Turn on PHP errors ...... ---\n"
sed -i "s/error_reporting = .*/error_reporting = E_ALL/" /etc/php5/apache2/php.ini
sed -i "s/display_errors = .*/display_errors = On/" /etc/php5/apache2/php.ini

echo -e "\n--- Downloading Wordpress Latest release....  ---\n"
rm -Rf /vagrant/public/*
wget --directory-prefix=/vagrant/public https://wordpress.org/latest.tar.gz 
echo -e "\n--- Extracting Wordpress Latest release....  ---\n"
gunzip -f /vagrant/public/latest.tar.gz
echo -e "\n--- TAR -- Extracting Wordpress Latest release....  ---\n"
cd /vagrant/public/
tar -xvf latest.tar 

echo -e "\n--- Chown  Wordpress directory....  ---\n"
sudo chown -R vagrant:www-data /vagrant/public/wordpress

echo -e "\n--- Add environment variables to Apache ---\n"
cat > /etc/apache2/sites-enabled/000-default.conf <<EOF
<VirtualHost *:80>
    DocumentRoot /var/www/wordpress
    ErrorLog \${APACHE_LOG_DIR}/error.log
    CustomLog \${APACHE_LOG_DIR}/access.log combined
    SetEnv APP_ENV $APPENV
    SetEnv DB_HOST $DBHOST
    SetEnv DB_NAME $DBNAME
    SetEnv DB_USER $DBUSER
    SetEnv DB_PASS $DBPASSWD
</VirtualHost>
EOF

echo -e "\n--- Restarting Apache ---\n"
service apache2 restart > /dev/null 2>&1

