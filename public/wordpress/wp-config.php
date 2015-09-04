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
define('AUTH_KEY',         'J|MW?{+DtS.QQ!W2zwZT|VN;~:Hhu_P9!P5?~6yleu)Af+a?++DCAwp?{oJpj <o');
define('SECURE_AUTH_KEY',  'q|%E0n:txEdSB7RtUOkkSWS{y${8RTy4P>#xY{u?C*hhTFBb)U.+FKC*{PyoM=gM');
define('LOGGED_IN_KEY',    'k:B,ExX6;1u{Q?<#3PA^Z[T_+SPVbIEGVrc0bfX=o{EM`-^QQ+Nr  q|A/yaA:4l');
define('NONCE_KEY',        ';AX@K.o.U}0fS-L7DYzP+Rpx!c-!MhV #CE5!)$|3{b|j+:dPig]M!O9(Wj!B:HA');
define('AUTH_SALT',        '?H$G5>yFM*AUiZe)w_uYix$DIV[pE*?WL3]gXZ~qDr|/nWpz-tGtCT_5C 7^4B=i');
define('SECURE_AUTH_SALT', '%SeG$Z,!2,A._2-jhDsV@RuG7+o0d>YwwT-yX$`ioWuF67>0^!rJ8M2l[.kRhxVo');
define('LOGGED_IN_SALT',   '=7SOOBGya!i/a]ab6*2 [lh9=~<qC?_5,o3Lbx&6+G9Z*2{bF/]B/=-%P:Y(KZb]');
define('NONCE_SALT',       '~~juOOZcnp5Vg9<,:S9aH;;1nS68++YAX^D7/Yux%g^6ZE4TpJ>(%ftldf(+XZ~s');

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
