# -*- mode: ruby -*-
# vi: set ft=ruby :
VAGRANTFILE_API_VERSION = "2"
	Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
	  config.vm.box = "precise64"
	  config.vm.hostname = "master-test-vagrant"
	  config.vm.provision :shell, :path => "scripts/script.sh"
	  config.vm.box_url = "http://files.vagrantup.com/precise64.box"
	  config.vm.network "private_network", ip: "192.168.50.4"
	  config.vm.synced_folder ".", "/vagrant", id: "vagrant-root", owner: "vagrant", group: "vagrant"
		config.vm.provider "virtualbox" do |v|
  			v.name = "master-test-vagrant"
  			v.memory = 1024
  			v.cpus = 1
		end
	  config.hostsupdater.aliases = ["simpliit.dev"]
		if Vagrant.has_plugin? 'vagrant-triggers'
	  config.trigger.before :halt, :stdout => true do

	      info "Backing up database: wordpress"
	      run "vagrant ssh -c 'mysqldump -u wordpress -pWordPress wordpress > /vagrant/database/backups/wordpress.sql'"
	    end
			config.trigger.after :up, :stdout => true do

		      info "Restore database: wordpress"
		      run "vagrant ssh -c 'mysql -u wordpress -pWordPress wordpress < /vagrant/database/backups/wordpress.sql'"
		    end
	  end
end
#This is the file wÒhich will fire the vm Ciao .. 
