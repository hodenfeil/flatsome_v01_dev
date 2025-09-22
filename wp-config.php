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
define( 'DB_NAME', 'flatsome_v01' );

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
define( 'AUTH_KEY',         '{gab?m9:M@kmUymp$54du?Kk?AmJ&uDvK<AC_ly=eEyE&kj(ket$ `$S{mZE8 @T' );
define( 'SECURE_AUTH_KEY',  'H*l(5}66-o0g8lU;~3|:XT7o+^,{r&*12`SNn.iNST$:2E:2l9y3e)3^lJ4i,>QI' );
define( 'LOGGED_IN_KEY',    'GdKr|7wQfwjPcigp*hjS%s(&vMrTo$AU1<{lHRDS2fx<i4FAIHAx}^x3+--ei:;p' );
define( 'NONCE_KEY',        '<wF7<z`81RF@X#! 0.8AI_w<O(J]PkX@bqLf LK<#Azf](v,!t9Ih$|ASebfd 9|' );
define( 'AUTH_SALT',        'o0x>&G,.SzrM~9<cr3z3<qAL~m<jJAxm Maw%dM_;V(1E.YbMk2z,D KN5Yv>4NS' );
define( 'SECURE_AUTH_SALT', 'V#i.Ae/l9*Xv5]%_&vDDbyfhF d.13ZlkvHGDL.ycODqAkB$cy+%v9Ar}209Te}8' );
define( 'LOGGED_IN_SALT',   'K*};)eZiQS1J17Z,q-I-hGC*k`]4L#tl7HH5Pl@IhJ-56Xh*6O89IM4B;vR5IcuO' );
define( 'NONCE_SALT',       '=-$=;|{n~^)Wc9K%I7:em4<%}3pc6:&1NpUv%ce_]_V!vy>Q>k_H|dM_2VyY;Q=t' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'SCRIPT_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */

/** Force correct site URLs for local dev directory */
define( 'WP_HOME', 'http://localhost/flatsome_v01_dev' );
define( 'WP_SITEURL', 'http://localhost/flatsome_v01_dev' );



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
