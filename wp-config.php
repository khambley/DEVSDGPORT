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
define('DB_NAME', 'wordpress520');

/** MySQL database username */
define('DB_USER', 'wordpressuser520');

/** MySQL database password */
define('DB_PASSWORD', 'M&]HaY.He|Bn');

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
define('AUTH_KEY',         '<&xwJM=oL~LZCw)Vz<-NFt_VBu dY@Quw4lA0RPL..rQ|ON32{;P}*M8P9g+h@j;');
define('SECURE_AUTH_KEY',  'dgl2U%ne#S=<0+NM 8p.4AfeH8/{.y?~rs]+@:ph~u2qsM|V4_y}>*/G;-s_!O0M');
define('LOGGED_IN_KEY',    'eC}:Q;yD!A/DlMln]Uuk{|WU[5Q>S P?UO#H}|OS%9L;D5_C|/zTd@}-R,_,Sc.N');
define('NONCE_KEY',        'a+V9N)qAN92N2F:@=/JbwOZBUc|Z.8w&rGM*r#)&K46ux|]88!8qHZ8 Hn^1xH+o');
define('AUTH_SALT',        'CoMr&hQ0OBBx-efC^Da>#2c%4Uaz6,Yo{iC([+h/a(2+->Gm|oNAMds3;lE|s[d]');
define('SECURE_AUTH_SALT', ']<6T:uRvPa!Mwy-L/XD#:K_W@bsO;iDC?G7Ua*%|CVpZc.00:[P-BQE,7:#|<|@m');
define('LOGGED_IN_SALT',   '-4-+0E}~^|K~^PN?!H1plpYjjW5_r<,vzbl7,OGj/A^D!%m@;9;CN-X<%Gajy7gE');
define('NONCE_SALT',       'fY C)[G*1f[HBsY}:~XB;qd%1!8Qj-8~b|9@R]yCnu*QCV%aNh!K<|;-SS(]QWUS');

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
