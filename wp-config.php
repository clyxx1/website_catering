<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'catering' );

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
define( 'AUTH_KEY',         'O0>Fa`jHO#=E8o&fFI*`XXpXQ+z*9{*^qn`.v8Y-=x5,yDe>~$HV_8o*z cB|-1F' );
define( 'SECURE_AUTH_KEY',  'e!4!*jQ3,JoW:/i%J_D{/Qop+}3%|`,@* qNpc$SU^0sE9s^<+PZvh/wSV.=CT77' );
define( 'LOGGED_IN_KEY',    'x3Pwr!;j,-u;|-xO%t:#-f(gMwz-{?yhD`l]:dwKqJ]=3#M{<0%V9I|%V)s,Va3)' );
define( 'NONCE_KEY',        '<rv=?CfL0%Rcl!P>JTScV3[mHgWu<w>e1.4);t,wm:V/-5WdAMMmm*:86%KtV|6-' );
define( 'AUTH_SALT',        'z&AZOr`qdWAA<-sD-1T0j;%v|4d~,-m@72E~M.]0A>Yk,#rA^PsuEJTA?)Ib.gRb' );
define( 'SECURE_AUTH_SALT', 'W2~FX:`ke5y`k+3]|fr*}kn|YUL1u|6<{aZPA##*_FAA60pdeAEx5`Gv(1/l$T1#' );
define( 'LOGGED_IN_SALT',   'yY;RER0^wH~MB#0/}x?M=W i+}8<mr@eRE`<:P@6#xx?qj^pZoCN-S3c$#b^$7L~' );
define( 'NONCE_SALT',       ')vj<(83|F@Aau!`&~Y2Y6n,s}~]:e7epb.DkPpn(N*^afmkN~v>n79p6aT:01amS' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
