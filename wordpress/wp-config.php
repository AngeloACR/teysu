<?php
define('WP_CACHE', false);




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
define( 'DB_NAME', 'teysu' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'h5e{XtZPj|EL+$K$t!<zBxNRv< x8$1}< c|dLG<zYA`gi7`?7s!9UadR*:?*2m3' );
define( 'SECURE_AUTH_KEY',  'Pg5DivLLR+P1Bm`rt5-d2,KA#V#^#QD$J`=}4NpbW)Uq>iY>h-um`@Rw#l^^.R0w' );
define( 'LOGGED_IN_KEY',    'KZ@ {h;wlaMy|*Vaf*VQ`,EV/b8Bh.25mw]Y>U|3lpK/g~eLjOm]DDs.n+]x(y[b' );
define( 'NONCE_KEY',        '.(.lNNnUVK[>h$B_+VhL)t%_7]gRiIx](aw-Nf^zS#)}i}5;u3 l!Z)>i;>hbGH5' );
define( 'AUTH_SALT',        'G-NnRSCTJtbi.I4{).fv<$X`*nZ}WYvdcr SO`({0nOqRF;,TLr{4.wNf^1J:?j!' );
define( 'SECURE_AUTH_SALT', 'L/06%1zpJI?C^+6?jI4hcYl6j-r_&%@A}xe=NQyt]JdP3>buRFeM *VH{;C]/Mrg' );
define( 'LOGGED_IN_SALT',   'l:y#AAI(tf8>G3&6(Fs-)Db/}kCAx|  8.,o&;ZY#x`4cnqn{ Uvm_LK~yj|&-4S' );
define( 'NONCE_SALT',       'c$svm<|4|^T}S~9/MsQ?0xVzj`k[,Gh^dt)7&?s_eVN?Pm.98jd_QvJk;Z},lkwd' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );
define( 'WP_DEBUG_DISPLAY', false );

//$localIp = $_SERVER['SERVER_ADDR'];
/* $localIp = strval(getenv('MYIP'));
$site = $localIp."/teysu";
define('WP_HOME',$site);
define('WP_SITEURL',$site); */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
