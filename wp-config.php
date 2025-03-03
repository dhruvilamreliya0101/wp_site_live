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
define( 'DB_NAME', 'wp_site_live' );

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
define( 'AUTH_KEY',         '%M}SPp=#K8=n)]</Hz5OO[t7<1C716U~yxev&xv#arfDTAra;W}MJc~]pmi:@Sf9' );
define( 'SECURE_AUTH_KEY',  'y~G;gdg9|Mvxit9=9wCy*rS=uJ%5/d,pV7*hXRM|jpU0#@r<J+_C><Pp*lUbNKnH' );
define( 'LOGGED_IN_KEY',    '-uo7$aCn~7:<.W9a^#P=W%P>)cPKS+_w2R<I5Ykk]}H}r+a4)P_DazXR!PTu<M>{' );
define( 'NONCE_KEY',        '!5=gd~W3NBuVc[HI+14jed~~F/=lE<:9+)*e M8fZ LTRm~&KeQi<{R!tev`Dw(J' );
define( 'AUTH_SALT',        'E9.h-QT3-6<TDjVx*8Tcmpo8JMx]+:n;58bhX3eURZVZNQ/uG)dw?ynP7ogzfO$5' );
define( 'SECURE_AUTH_SALT', 'K&8Js3Xk:Oc#X3M6Bn$C4b^rk0l^/TTkMQINJ1fz`Nn?*J_g!rk-3I]#|1~W<,(?' );
define( 'LOGGED_IN_SALT',   'fOTX5AZ}?mY,qQnjC`:r)]idLD4uY>evz%sP,69Twy*I2vSoaEY4FinkSNW-T&,T' );
define( 'NONCE_SALT',       'jEW`oJyC`[&Yp,AV{Awn=#|<`JQ[i{B[o|jqO?<(:DVP&cbC$3=@K6{ZvJ&R/Q9)' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
