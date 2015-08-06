<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
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
define('AUTH_KEY',         '*#y~xL7;-r!]McojnUK}2SL&+n{,c( z+ExT-Cs?qVp=H0[u[f!r)TU;q:4D?1;+');
define('SECURE_AUTH_KEY',  '3&{dWX_2)#hagwWVP2VW]w-v;  |y,g/b+r{952W.,6VvK/Y/9StIi.-kLKah(j[');
define('LOGGED_IN_KEY',    'sFk%NDd~LN1XS5 3f&wz4gdNGX%~y|}a9P#|O dQIA4N!5eUrY8Uc-DGX^>oKf1#');
define('NONCE_KEY',        'SP.Uq7w.z&XYZ{8NO+D&6aZqTc!@q+w*GX>ve2a Ch}egw:#+/!L(6f7LL-6yl:W');
define('AUTH_SALT',        '0z2bXf%,o+F2R:gRbIx-9%^&%c6-ewz4%z_!l]{ie6Fv)2~Y_o;wzaaHxtwu]t+6');
define('SECURE_AUTH_SALT', '|jxnSyse&/X^-M4:s<.Q@y]d){6)kI[()SwDaL?1%x`YX=/e|zUwO_?%#]m}7dA-');
define('LOGGED_IN_SALT',   'Cm`(`3h!x1Vj?AI%1Vom1Vd_.ouQ7k8(aowb15H=Ko3t+@Y)-O+t4B4HL0dLbQOv');
define('NONCE_SALT',       'Z[#mD(8,YTylFG^:(O-P-w)2Mk+IW/XPK,mtE%]XYibX@JM3u<MWQ[2&tl$~,=O/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
