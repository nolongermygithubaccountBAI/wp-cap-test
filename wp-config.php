<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_cap_test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         't&Pb>d~ku8!&~.7rVz:GE3tX!+G#l.V]Ec+J(4_|}W!`n6jDjM6J0OoT7|p%mh8$');
define('SECURE_AUTH_KEY',  '{]QQh}`@W1H`bvEf+t|{DGQUk0MI>}`xIZ|:7aH%l?qEwJy:yKW1JLX*2+wbxvT]');
define('LOGGED_IN_KEY',    'O|-X+|7vbechFHY)JaX%>b+Wd*VzvamJ--0MP$6B,`weFD&k)!6bk_1( 2qz{hmV');
define('NONCE_KEY',        'N6J6%mIe1wn|H,jitMiazc<pbSh*|HMCMU ~H.qH0oZ{X+kH2DFp<t6^o9{JK*vq');
define('AUTH_SALT',        '7!(C}!Wqwj{i]8iI[|iaJG8d~A6HGSObI7><g|3QCs~JqRB^N9Zff!f`ap*8&nFu');
define('SECURE_AUTH_SALT', '<!0k%S5z1Z/)7`5J|JyD)g]bFb*Q9vGZC>U0r_J^vpj`L3m5Fr$mtj8~CkC3[&18');
define('LOGGED_IN_SALT',   'IWY/0{8%~h(k:AbXGj|`QrEn}LCCGhy;u69)Sk>)|&Wz$-5lXs+gNu(V!+X9/MR.');
define('NONCE_SALT',       'DJD=uFp<|3_5b-=?m6(n--ZpvPBa10|}?Ij8koUau;[_GG3Pp9-b~Aaq[Q@N*V8%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_cap_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
