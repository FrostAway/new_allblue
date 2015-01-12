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
define('DB_NAME', 'allblue_db');

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
define('AUTH_KEY',         'w.tW 6*sA1Q*Jz}t6Oq7RP)RW[qVr-1!-|M55qphIU6x=-(hZ*.xJ9R.#%ZX!K#&');
define('SECURE_AUTH_KEY',  '32i_#0S8_YqW1P>]H^(v4egB-p)Kp`sKJ2j8ir$dh=bX*OOt+f/45q,elN*d.Og>');
define('LOGGED_IN_KEY',    '.Ys e9<Op$LBB1aa6;NKsNVce+&kkmHL2P+OHZ}3MGvj;BTNVD_7I;$<}b MecgZ');
define('NONCE_KEY',        'y?G5!fc0AFm5eVG_Q|B7<YfZTT7`j6DTI;?w2VERcIut|>gLFnd5)s94Skb~x-|0');
define('AUTH_SALT',        'dd(4/NA$Fg+J`5~R;83(-IGwGnHIVpqu+8Y)4o3Ws/u3rr+veN{u`-fC*8-ikg-V');
define('SECURE_AUTH_SALT', '=NaO}s@*}osP,8pl,n$7N`Tb1yZ-5K*7U/d6iH=X kj-d-|p:U Frd Xh(d7ACe8');
define('LOGGED_IN_SALT',   '1&)(gaC=v[5qi/1Wy3,8xgnfBhs5q9!Q44G=`^-FiwJrV|) + %fV+a0lr{kZDX4');
define('NONCE_SALT',       'E8]_x.J{Je:g8PXL^tSSKdu_gYw%_XE3${-t_E^Zpe-@jY7d*#E&j]D}@Y8[x+@;');

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
