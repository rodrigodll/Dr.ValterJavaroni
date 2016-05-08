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
define('DB_NAME', 'u881544300_vjava');

/** MySQL database username */
define('DB_USER', 'u881544300_java');

/** MySQL database password */
define('DB_PASSWORD', '[&0fxU=RL*nP');

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
define('AUTH_KEY',         '_uv-21Et{z!M@l1#%-=5ZD*nzLSjZy_,D)l>QqT:N|gy.M6DdUjg2T?H|>xGOWyR');
define('SECURE_AUTH_KEY',  '0IGZLhbv$Qm^6(aDdt3cCs7rhqs8do2n5zq/rdT5P2}lQ(ttLN;jnayi/#NTwMkv');
define('LOGGED_IN_KEY',    'Kqpoh+^C4;Z^fI4R[xe<i{uJH${ts|+:e.sSW@2Iu(r1${Co:)lm~Z4B+*;w5*rf');
define('NONCE_KEY',        'ti6We:QESk:0m~[g}e*Kh/UZWB)1V(rr`F5<o5bsMC@~f_$dg+ 1nePU#QTK:PcG');
define('AUTH_SALT',        '``[IY@:u{}Sk)^_(t[Mzfp=J/R1@y(*CBl<!;=$9g.ZswE !ztGES=QDI~?S%oki');
define('SECURE_AUTH_SALT', '$kvKfY4&s!ZB>o{+V)M5,Hi-qPwjt&J]b4-DR#->S,VYJ/5:Qtxwe!-Ic$o7lTS^');
define('LOGGED_IN_SALT',   '6/ ]`/</Fu:$mzTiyZ6,kp{>bfecRbwcR>-e:-@uSrs@E.+4o_C7Tse!V;fop2+Y');
define('NONCE_SALT',       '-$I.Zq]o=t Z|| 3YH*yO-+|}BuD;!<f=5BIN_7@~p51yV+SPiQ#{1^Et;$=0gn?');
define ('WPLANG', 'pt_BR');

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

