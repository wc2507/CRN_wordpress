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
define('AUTH_KEY',         'aOIjcVR|]tp}~NHG:ZkFz=PDC|qcPrDM9gdJSd@d.4EaT0C|H/6!a=^M9y4)c4|_');
define('SECURE_AUTH_KEY',  '?0rh[cKt-L+d5fDkU*&RY7rLj1l4OcjHCLHy(cyL]98k ]r}VbIsHeiHSQ9R|PcE');
define('LOGGED_IN_KEY',    '$8}(U.kH7Ez3BFVluA92Gr|hH/}L0k@{!rZ,tKx(coYZ{i(9oK<p[o`oue3c2H$;');
define('NONCE_KEY',        '+~%/kPYsDSd![z]4W)u_.+&E%L3N%,<[+sMzJ~@_@Es.Ua%%<P$HMk/QaXBEOle5');
define('AUTH_SALT',        'sHc:kR$2B.3eomT*xOk%%AGYaUZ:}z$!0CGkNt47u!x8g8d,$G)_$2xZqw%Vi]oq');
define('SECURE_AUTH_SALT', 'hx9fIY*SQ^_p7OeID6sol^Z3=:`{UZ%_ExBKBYPsajQ%?jxG#,o?79bxa&Z,AhaF');
define('LOGGED_IN_SALT',   'F*7rHlVERk(k%RGV~_szY/:2Vl635[G[0?oJ2hr5KNttC)#a)`%t-t4&QkUNWA~p');
define('NONCE_SALT',       '~3j2s:gZgRYdJYhLX!/rZ[Cb+M%=,f@#DC3mPakMwSNc(2$ax[PW^R+zVp^rBJ+i');

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
