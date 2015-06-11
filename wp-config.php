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
define('DB_NAME', 'floridahome');

/** MySQL database username */
define('DB_USER', 'floridahome');

/** MySQL database password */
define('DB_PASSWORD', 'k5p9q6vv4x');

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
define('AUTH_KEY',         'P+]joIOf4gP)j0#i)m^GpvKx)aus%`IS1e4o[5*)T Er.cy[!MT`0`u7J0%}Ep[S');
define('SECURE_AUTH_KEY',  'Yn)Vg-jx`xN)d)P2_ +uWkSsXd/>834OLkCg>a7gZeVW;m9GQr_{oz]B$z9K(1%(');
define('LOGGED_IN_KEY',    '3{fyfF1aaccJX5qZg?>_:3 -x-4GjjRW&68`a]>sC,DY)^}ZZ$D-7rbi`A8Hhfr&');
define('NONCE_KEY',        'oFqRzx?Hc2TWG(Sq]Ra?c5<$g1.9j)NnUw# sY~VwSVG(TI+8W7ZTo:.En%EWs.{');
define('AUTH_SALT',        'f7u*yUX]F2Z8}R+NBcyV$g(hgXtO;>h9)k(~kIDO4a8=rW_-@-<oE{Xcc#!=h7NX');
define('SECURE_AUTH_SALT', 'Wik(|$<a]`aY}M/0N5.(M2sOH,XC#tE4ko3hNb,%67`+T;K)fsaOqNFHG!eWk,)+');
define('LOGGED_IN_SALT',   '={+;9PnV.[Z5*&QbLt4O/yn2:065$KSVQs.Y*F:dhJ@8bbAR,G4W~1sM~%[XX[Cu');
define('NONCE_SALT',       'gYY)59>wqm*f?X5`($|z^,DH3Q3e>OU)#e{SN[3}P,(L~LsEcH<kKK-9xLU:zMcL');

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
