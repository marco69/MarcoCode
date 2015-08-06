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
define('AUTH_KEY',         'o?R(|3x4 |b<6D,rL=zNf%%+~4b!4NogR$>}j|lxA3vW^rx93IXm@`TNli?iO<YZ');
define('SECURE_AUTH_KEY',  'e2s6c2/u9D+f7Sry},i3AqY[g.)1:G-o&u<vNuon;b*_LHtxhny }ROUE+-h35wG');
define('LOGGED_IN_KEY',    '7U94u^:d*t|v,F<Dp$|!7m;me+c,I=Tx3J<! dCR0n-Cu/WN788at(nN~eWiF*gw');
define('NONCE_KEY',        '(u6Q+1Tm8;fu9GJ%q)e-EV*U|Q-|RZt-&12[Mw4GkoW3N[fI,]4fJ2A?Z/)!H1j|');
define('AUTH_SALT',        'O|J]x h/+AloT1g|F<^pG#K91@K6J=dD`k=H+Rmrm+a1ZeUYxg}mIaNd<zd:D6Ic');
define('SECURE_AUTH_SALT', '?Sq(30<U<+5`6l%7yz<gD!gmJmd&eKQjTgk+L1FXv*+rz4TyXGr]sqi;71fTj=zm');
define('LOGGED_IN_SALT',   'JL`c:C}=3{#gYG-niepk&C{XnA[?0{#-b8<}?1h9U0rkGK^g{-lFpJ(um6r< QX[');
define('NONCE_SALT',       '2x^XwD} P<2[XK]/BhVC3832]~=svPug|Xz->+#9s0W4_A46yzr[6&b?1-H]I+n[');

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
define('WP_HOME','http://192.168.0.12');
define('WP_SITEURL','http://192.168.0.12/wordpress');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
