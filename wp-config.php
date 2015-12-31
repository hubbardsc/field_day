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
define('DB_NAME', 'Field-Day');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '>vt$M@4P~Sk#C|SG05!8!2pYb.?A5c[]!=]:C(4f3zEb]plX$L%8fG<Suowqa1=y');
define('SECURE_AUTH_KEY',  'G<^n=s#[qR|YgdC[G+kyczj?Iw]^a[X!/J$-.L;,1T);5:Bc0,TO+MIPs!g(>uf%');
define('LOGGED_IN_KEY',    '|#a|p PJzyFd4{/ `p)F49Sm24XwGU4suV3sw`|qrvwtSGx-uxJf>88hjm2?N|aV');
define('NONCE_KEY',        '9r!Hw$60EKbGOW7LpOD~-f$dQ5HQUJP:$Y[0|>_P-(5n:]`!J~m;7!)A%GMv,EE`');
define('AUTH_SALT',        'fx.wJ%j(=Mn%Z0rb`$-x<EwaU!NS1VRMCPUta<_TLTf>9blF=Dmg29-reg{qN0pX');
define('SECURE_AUTH_SALT', 'dnhp?Z!`IDut-[g0d:o+k cQhHN!=}$?J&8Gm@,3{}~j.dt.[5Q0ckHB{<{p5W5/');
define('LOGGED_IN_SALT',   'cHq;ts6G6|T{<. ?mmAXf?P+GXsZ7T]4iIa#eT~UxYkf^(7,p z5~e`+Q`i[u4:u');
define('NONCE_SALT',       '^h3_cnAX`13dJ=1:E+|6eTgC$5j.VE/*6[.*VIN5Q#9/4Fsh-f(Y6}C/r5L@n1VY');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
