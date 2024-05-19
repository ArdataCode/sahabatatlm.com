<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u726706882_lZqw0' );

/** Database username */
define( 'DB_USER', 'u726706882_RiMHs' );

/** Database password */
define( 'DB_PASSWORD', '0bWiaSjFjw' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'xbt`^+d&]G,7m{9}LYOhbOr9E?#C(#5>H<<yWhChI3A;/>R#V+`3KruZl}TRy{V5' );
define( 'SECURE_AUTH_KEY',   'Q_#DuScqr]ZoZk@,Bc ;LpAT2>[}ph/H[e8A:Y:4!$A^D7A-x`tj&%szm{h9@M+^' );
define( 'LOGGED_IN_KEY',     '9jM^.-k*WO2r ZvgP.Ub5e5v*Bf4=#w,{Z*oD`*eLF@jBsvJS&][qlZ&b0{_5YuV' );
define( 'NONCE_KEY',         ',Qo7zgeZ+(2TmOUdZHG9)`N7=EKj?)>e|0,KFj2=x!|W|Mzu1+[$>34/y75GB^)?' );
define( 'AUTH_SALT',         '$y*5#}o~ x T#T2xT^reHcsC~Pu%<;h8?W7.fr]:(PtBi9BF<6FDk@.dc{zdmhv3' );
define( 'SECURE_AUTH_SALT',  'IOP)nsfSFDz)V4~fyfeSudix5q59<|f4FP>r:3&DMc6weUB#s-]:%<}dMWNE6v*U' );
define( 'LOGGED_IN_SALT',    'Oiuj@=<1nr[W6g:9yS?q.6*-5M7;=#Mt}C}oQZo{%kq>m$X+Y{KdFJb`rsi2HVk#' );
define( 'NONCE_SALT',        'Z.^qE$:0E5e|:OhlD{Vmb5{(b:wXNkPN{VXbGm~7^`fW19iT=rJlD?{XZ.e3%6qk' );
define( 'WP_CACHE_KEY_SALT', '<:Y{?eZYR_do4u4cl@b`G.D`l<|l_yL|jq*EM:B;5PFcrI^f[?4^n2q81|pLsEOX' );


/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
