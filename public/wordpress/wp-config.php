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
define('AUTH_KEY',         'I/8M^H^]+n39g2RFxIG3.P|yON X{ln,8X]UDWJJBV6e.Pf95 7,9aDbl>)dL?S$');
define('SECURE_AUTH_KEY',  'SLjA2gGX5yPk-4bccxN_B&JWO;FEW#B)Xj>6M?.e/7}Wu3>T#j^#&XeVn4*+#%+~');
define('LOGGED_IN_KEY',    'QT1L-g~b3.m$Rc_!AI;h-ZD qA%=Tw^qkW+y?lki5xGMJx30+q)WcBzFo*e=Bh{r');
define('NONCE_KEY',        '!e2 2H#*oLD,Kb%~]D)+$YhJe!z?rg  c!/@.rp=u5Z}BKSD+s|8HOEur^Q^u2UB');
define('AUTH_SALT',        'GU1VDq)}g-EPd$6}p*!W5m|mbHH*)>9lk7R$U]1hfa7{GiQ`gm,xslD.**t:XKkv');
define('SECURE_AUTH_SALT', '0l4>3CFF.]I__1Sl+-<v9P0L~tIqa`PN?I@-p|P8fE{@|#`+{g=hsXxWe+#=+x-~');
define('LOGGED_IN_SALT',   '$51T-y~-]VdE/@0:SkBJ$2y9IJB?WyUMaAiWCh$.IU|mT`fAEXYUMn+4S9+xEUu`');
define('NONCE_SALT',       'lltD.Ie2LOG3[EI<,4F(>q*1NqE&4(#!:>)}yr].=wkH9DfSCCT!+DH2=hys8=]o');

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
