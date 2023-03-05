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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'kxS+BR9CdcCp[6+?4lIiAH^HGTzaL@>e_gh%`jQT#^,hc)p:E/}ruB}MYl(.@zN*' );
define( 'SECURE_AUTH_KEY',  'kw^yB!!%sE.4$O>:W3oDT:e2){:MNDP@@|eLVCD+tXNN6]U!|}ybbGLaYj|0vbTe' );
define( 'LOGGED_IN_KEY',    'oY.:T7~t8e=*WC+:#%PC(3!nXX&:_C7/)s!yUq 0f$7ec`ihT]F~BjxhMERVU-JH' );
define( 'NONCE_KEY',        '@D,$<GaV7d#3Iw~aqJQC^q[^Ys$v2({ 3BZ+r+e`13F2[wrzqwzSY.pl4!30oO@E' );
define( 'AUTH_SALT',        'D]7*X9<VC@ND@lTNjE[LcbFa{/hI]b_}HqwH1G)~Hy1F^E,`_9Mxh_X4%v|UaO8G' );
define( 'SECURE_AUTH_SALT', ':=HBR<cjBIZXx(/_|o@F}dZ9YkUHsV%l}%}pT<cf=mY08HOVH%J472D:@cL](Sr^' );
define( 'LOGGED_IN_SALT',   'H1<:c?Fpra1_z _A?U6ayT5Ak,dm~3*>OGwMI}5Z7`ptDCwNXoLI<+-j<cNMh4DE' );
define( 'NONCE_SALT',       'KYlP2YXhNCx0guP8LkNatV15YYn#)wXH:wjguvCDFip%/9)2*Xkn[_kIN<qqcF-)' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
