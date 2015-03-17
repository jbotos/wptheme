<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'wp-theme');

/** MySQL database username */
define('DB_USER', 'mrtheme');

/** MySQL database password */
define('DB_PASSWORD', '81RqrZR6nxm09L2ZWe05kwbPuj1WCx');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'DP{s]c|5l.QI-G-+,K5|ug|-Pqbv+F1oVkl6zoN^gHCu4Cee%H9+]3fos%0}BJ7s');
define('SECURE_AUTH_KEY',  '<$n5!;@tF^0*fI1ZO%<SZ8d3Qt>*@,kN,EzGgjNTbMmlZL~PXkg:(5J%D9)&X/y8');
define('LOGGED_IN_KEY',    '?Hz:&*iK1ji8)w[.!$g^NrKh(|+baV@$nmGSJ6s<@h|zZQLe!OBxYIA{xLZLk_*n');
define('NONCE_KEY',        'wUq!f^OH!w~f@v| U~|fVW^4`}4TKk|yA+4atFtbz{(^mZmOaa!A{cKS_PDo.2q-');
define('AUTH_SALT',        '3atc-] -;x F[q7{V]BV_2RBB~jhfE7y8wb,xKUV#0P=qdj1=,Rt]0=}e[67v$ek');
define('SECURE_AUTH_SALT', 'L3(n7-VX}5&^Q78f*%M@QxenH t$.CnYu.~;7V%%QxfbV$$mHi=.5IYm1b+B_hYO');
define('LOGGED_IN_SALT',   't2G6QPo1 ns4t{:1qFfM~fwWk7/e,|wLX^%,<]q|+d2.q}|9.$D6jP(-vmY}+o.F');
define('NONCE_SALT',       'aG)$<_dY*?$P4`OLL0d:~$a7PX?AQ5?6<tGU!b8^aO](s9(EV41{0ODBuy1tvjJw');

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
