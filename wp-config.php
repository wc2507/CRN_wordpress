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

define('WP_REDIS_HOST', 'wordpress.e6dowe.0001.usw2.cache.amazonaws.com');

/** The name of the database for WordPress */
define('DB_NAME', 'CRN_db');

/** MySQL database username */
define('DB_USER', 'crn_admin');

/** MySQL database password */
define('DB_PASSWORD', 'chinarainbow');

/** MySQL hostname */
define('DB_HOST', 'rds-wordpress-crn.cyz4uolctbwl.us-west-2.rds.amazonaws.com:3306');

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
define('AUTH_KEY',         'Qr<B7ZvdV<C6>1@2UVU(eT`90]bW }P[{Pn2|i[}V}<-gd39*#5M.9xn| kQPAhc');
define('SECURE_AUTH_KEY',  '+=Pqrd_Lnr/=oQu7 [5d6aVTm4~@|(qPok-<Y/&ze&a/x-M<,eMlaD*yR|C]!??W');
define('LOGGED_IN_KEY',    'Wgw+/R<m^aY28W]O}@_1!=>~kSggx6s[2.%9_X`B.XdX%:C06JUs-D+cv!~lqv2M');
define('NONCE_KEY',        'hX}])|s+VqZZTHvIFKt0Cz@>BR9Vn4g59]s^Ehj@D=#mf_<Az-IYttKWOKun88*k');
define('AUTH_SALT',        '7)6kKl++N!o/b0d}sznFL!R6%_x%VsLL^;v]q}XN|ydrSAc&G<u9Vc]_<7CCZ?ej');
define('SECURE_AUTH_SALT', '~mM$q4@DhF0U<-K:f~<8?uo,X}II$[!xJnvi_lf<(;A:@));S%rMqMiB0{sFvY5&');
define('LOGGED_IN_SALT',   'Q]b/cHcFUdt7zNB0$^g{qW?=}{eL91Jk9Yr}53_b5`s)qYZ2hl)WLrG}vkG6L&YM');
define('NONCE_SALT',       ']yY9ghz46)-U^;N/B|JW^F9KSpp*J*V58e,/bgn614~XaTGzO8M??t%8bL4^Q1~l');

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
define('WP_DEBUG', true);
define('WP_DEBUG_LOG',true);
define('WP_DEBUG_DISPLAY',false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
