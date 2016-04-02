<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'WordPress');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!a{ [XZ.EP=9iuy -q)%32`W=Q9q,wp &O.l%Wd+`crUym-0M07F7%5o6 -|#W<|');
define('SECURE_AUTH_KEY',  '+bJ|X:&v#X[,_HM>D5*Z0H&w-$jf>roquUfAw?On3QKbeN?@4=9p[dZ$Og|8G]2V');
define('LOGGED_IN_KEY',    '|z<:8Z=i|_a*-Wl{)>$pW*~ z*(9P?}bqs+fa,pxK2%JUw9 ^{[oc><W*[Q~A-th');
define('NONCE_KEY',        'h9@G5IIe+}[4PND[2Fkm68DA@NQ$% .tyN{NPV}&+*~9N-tg{l8i=X(!8u.YGrkg');
define('AUTH_SALT',        '#u`iqh1sv;_.%@|)}f$Q%kIH(F@d{x35c7-_a,vsWea6wz3<$mual< bzq`4Z-&I');
define('SECURE_AUTH_SALT', '_hzx]5*U<ed+z%m-odle$=|t9-{gmC[5/x@b-5;*hV$QObzBg1l/31Ft_Va-tJUX');
define('LOGGED_IN_SALT',   'P  d9RQ(.{a@E=K.A$?k8^S}Ij<ywps*~K=wyZ;+|:%2+*>D7#tTRb>%V{_Q2P$|');
define('NONCE_SALT',       'kssxW#Ay;PM4$EiN>)TaZB]xm?fhAoq]8]OT dPp_31V[+<}D%M+-d=(zL>e#pMi');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
