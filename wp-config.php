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
define('DB_NAME', 'hoitomts_ecsh15');

/** MySQL database username */
define('DB_USER', 'hoitomts_ecsh15');

/** MySQL database password */
define('DB_PASSWORD', '3I.P36Wp)S');

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
define('AUTH_KEY',         'iyelcjfxgc5oqtmzmtbwqkog4zzwqvb9e6wmglimromwmebdwxwcxpsmu3agbrds');
define('SECURE_AUTH_KEY',  'l6uksjgyaib4nopdtf7fh3mwjufsuagrcraukp11c3ehtr7kcw8ahjgys2i5mpv8');
define('LOGGED_IN_KEY',    'behhzacviytysdfwxbvlc9vmoepzfxtqqjj4onebvbabuovbq04ftaomiaqdapuj');
define('NONCE_KEY',        'icufdlxey4w1ehfzda8bz1vsw1c5wo8zm1ujxsgdf5vhitdwhpycz6sedwxjhzm4');
define('AUTH_SALT',        'fmj0iikbvrwdsiap9mhw3aisb5s6hb9rlhz25anqn03sxp5sl0yyjdjauep74mu7');
define('SECURE_AUTH_SALT', 'tv1lucgal1isjl7tqrqyfepx6bntnpp7pvfnewsgnfhffrn7xossh7zkoarzpzfp');
define('LOGGED_IN_SALT',   '4pb21me0mfzojacx9hvid0kzfafk4wr2tym9zhhuc1zvlshmfkpid7ziywd8evvl');
define('NONCE_SALT',       'pw5bdviaffbuwtelfcftih9vlxzheujtfwnalc2ajxg2qpbe3b6l66a2aiu8nvs8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'shamrocks';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define( 'WP_MEMORY_LIMIT', '128M' );
define( 'WP_AUTO_UPDATE_CORE', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
