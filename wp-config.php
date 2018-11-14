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
define('DB_NAME', 'dequalsmcsquared');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '9L=q A,waQSq>7~Q]_|.<lQ$gQMW#{:/P*?Q,=^]pQO&8sQnMF}-WHA%-I.~g: #');
define('SECURE_AUTH_KEY',  '57XyPwQbX uFu6.L`S*2a(3,[X%2yv)E5Aa~(Lj1ViRp|+-+7S*77kSq#LZu:jUk');
define('LOGGED_IN_KEY',    'T?$#aR!@0b}WED7!sVeXK&GA`Jji4pD#!QY&58=E1;n%Fz5qF8:1c1?JX & @?u|');
define('NONCE_KEY',        '|J0wtx[MYl+~Pngd|4#((ztE{p!8nP+5B_*#!/e]K!HZDRn-|1v3ja6U8+^A=!xJ');
define('AUTH_SALT',        'p7g UKCGz|_&x!ms}9a)Jj{>y@KE{K!b)b^Dqpbv-9+#rlY2>IPRv6?.C2RuoSYF');
define('SECURE_AUTH_SALT', '~bsUzjR?4PYJi^1dpot]JxC5)>Ve0cf9^QyX.`*76l]4WMIu3zrT nVwef*%fpWD');
define('LOGGED_IN_SALT',   'K:u7fvte`PRx#_m|k,rp}4EvfVk:CD9 Qj;RS-~D[f$(Tz4~0P>YC{L3I~XHA+Dc');
define('NONCE_SALT',       '0l?#>knWz+YtSA3jomJS_IcNyjwl=(G8P<9upR,,7kMJ+RY.ip&vkuNQGGG%}j*t');

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
