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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ali' );

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
define( 'AUTH_KEY',         '+&(qNX~6:;/0${m*vX*`,5Yh%xr;5;u>N*;,i0#W71j!?qhB,]{e^Jl<6X@Kj7ZW' );
define( 'SECURE_AUTH_KEY',  'KnSd4k^,gpK)qO^S4>S)JX(&YG>A1zildjJ9305+7(1<UW[tv.f0DG>+ QAR}Y.8' );
define( 'LOGGED_IN_KEY',    'z&G@>kr`IBHYiiPHCZQ)M;S9TNR cz{A&1M^CU)V42X^WR:uSs{Jh:@/;9|e5LP,' );
define( 'NONCE_KEY',        ',:GWKle=sT+U;yg@5I}I-7Q6]S]TA>Q,ma8JCfcyPVmtmTzwZebiA[@HZ0dY#G5#' );
define( 'AUTH_SALT',        'FK?9[6sT[Cf6JnQ`&~UPDhx|D6ZNJi2^oR@yr#G)5y?p :Z`@w1K[{tp3.@c)1&&' );
define( 'SECURE_AUTH_SALT', '6;@]Z)*[Y*Img-dM myTFU!ZOT_Apu2h@e8FGTm&3)%tv{WthZ-HVw]p;bq>t#.o' );
define( 'LOGGED_IN_SALT',   'o`J :?W|1G4]>M&!%2&$,=K{^B~k>&}})2T0JJzf(`s~1P|NxDC*ShrgEL#_taZ]' );
define( 'NONCE_SALT',       'Y_CKkv@!Dz5%<Ey2UU fI[.al$P!t&,ssy,U~BsRQqcT1L]Sm%P0:.MJc:PgeSC-' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
