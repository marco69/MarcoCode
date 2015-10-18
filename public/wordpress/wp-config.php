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
define('AUTH_KEY',         '|v-^)*XM->JH<|izC:k4FZBI(v;ZANc@t4(m(u9E# x|g516S]&1&V/TP!|d?gO+');
define('SECURE_AUTH_KEY',  '+[2z%#U6-r+-=oV(K9N64n&=ogrvfou@b.b+GAw|G!~.62_QU[}/se)g#,UK@Ks/');
define('LOGGED_IN_KEY',    'H@Q1XPYks+wZ>po}%Znu|Ros?Uru`iK C_},&!#*g?(sPu|_<=GN!@J{~wl:_TL0');
define('NONCE_KEY',        'TJ9m?^@Y{`E`3w+Ua>4N/{v5,U/d+Vk-w 73OgJ%,Gw)maaE4p9G|F([ji76Dp p');
define('AUTH_SALT',        'X,@Cqkf[1q>S4mD7IFl- K+#i#O/uub*Y,WcxTG+nv=[ +E~P2?0f!_3p*w!4*+6');
define('SECURE_AUTH_SALT', '%]Qc/.(KM!+GeQu&Q!<.TFob}{O%!=+NVSBS!?a~IkmNK/IQ)4#t~Ooq}<h+$@ux');
define('LOGGED_IN_SALT',   '0AAR{ty1_[cDQ|qJP>|/qt[!k&c9L7r<iBq4H?WS^ZJc}2u~9!IE);N;FUcD4{00');
define('NONCE_SALT',       '%W~CNv,}|ovd6]O%^+qLwHRR8a+#$7|g,9!(6Wt3Y7a-~tM3,Im_qQ=iy>>;oppb');

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
