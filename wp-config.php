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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ')(=]$tR$ h=2)ZC^=aaPl6MgG.tU|CVbwUw gf~QV;ORj7!5Lc?fr[AR<<5TW}N>');
define('SECURE_AUTH_KEY',  'HE^tFX!J-yw4WB46FRdc{l&<k%rJxQ(b[%3xOa-{g{;.pbVJos:B<08!IxkjT/5I');
define('LOGGED_IN_KEY',    'C-1_p>6ww-;s8{2dq=0pB<a.[k$O9]e9DWmA5,>wBI xjw=3Z[G;--+Z*1-uy8O|');
define('NONCE_KEY',        'z3-U-r++eC>Qzuj$R@`Y5H_i4(&,M>MoZM?zlZg2&B(em[tI:RX/eK5rG{L.t~8d');
define('AUTH_SALT',        ':W0|`Xd@i*/#a=pF|g @]7zy?|P-US5Q*wV-*ZfgW #_.ExL:Uz@Yjf#T8eqws7Q');
define('SECURE_AUTH_SALT', '=Q2xnls+!mr*!$L;2]_r4MDJeyAbFdKz8!,wF#f&(O&o?D+zB9BqE:Ww{j]0:l$P');
define('LOGGED_IN_SALT',   '2,@As<|$H.O C$o(+5Rr^Ev<?B)D7{T|k@#C&:6c@jy4M>xE*E|f^pd@2z#.!Kdt');
define('NONCE_SALT',       'WV:I-ic?yym$1o+)i]/]?<<xWSX1^!<o>g}*A++>Pmm|5#}K`|J+(_9I}Ah41oos');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sc_';

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
