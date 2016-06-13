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
define('DB_NAME', 'aseptic');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'u`exbo^xyo3,4,b>+tT@P+BUNIUT=OlaATmjh8d &nqC 76q$F1~raH#?tFPmkh[');
define('SECURE_AUTH_KEY',  'Fi$Nt+u7?C %uUC7Xy;BmW>]4z_FdfUYm<1v@qLauJog8LJl+v>8:2I1Dw?VdZIL');
define('LOGGED_IN_KEY',    ':])ZRv>wJ^)T<}Lz~K004>]zPBRMu:2@ [#eR5|d{tv$hq52sw?16B>2.Dq]6c_;');
define('NONCE_KEY',        '!i}l:gk-#~dQs$1(M!3RqRrXcYn{esQQWP6GPdpxT6nj7@SF0E^z@s}9+L)?H@?_');
define('AUTH_SALT',        'L.0=B+Kr2En7b[}gYQX*9!>K kq>3apB3BHc#Sk!$c Tj!:.=xp;QK@^?i5W#<!`');
define('SECURE_AUTH_SALT', 'rN=U`KgV+eSG@`B}RT%Q&(ycmG?j]TN*0hTi.(5(.b?yH=vhT*kB8V/XMB3*vn4Y');
define('LOGGED_IN_SALT',   'yLI/OAocHexz)dR~##xE(u,{1@<pI#{tK9W{0NY@_Ex`;ED2s6*=UJ3p1&*B0pgL');
define('NONCE_SALT',       '_MLa{,D](W9a3$UnYswXc>:`2,n@>>{w:_SSpKJ`-V{)$xRB0uy*IOiuQND5DWC0');

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
