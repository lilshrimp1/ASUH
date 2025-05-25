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
define( 'DB_NAME', 'ASUH' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Pathfinder11' );

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
define( 'AUTH_KEY',         'Ti[r^Y`2/236auI{^u9C17C~||%*GxQF*p,[xU|*@7ZWdfSJnei*HVS?j6<o^9@/' );
define( 'SECURE_AUTH_KEY',  '6Sr|SM;pB/0C.W t8vx:hi6d4u1=p}1pxui4fN1HJ&3Y5jwMv)-_]uaFG)?J=yU:' );
define( 'LOGGED_IN_KEY',    '8vFP2~+Yg*tA*9X8!B}Lj`|$-AyMIko^NMJGP8gT{cE%WP;( {k4mDo =2Br2Mx(' );
define( 'NONCE_KEY',        'qFy2^sh^9]60>`615g}p-A-:Rf_@a>f{$SA-YPIYK1YX#]sAM1,Wp_.s,wYSxxkv' );
define( 'AUTH_SALT',        'l)[RI:,uctqrjE0[<$ i!V=49*l1DBK%,.>E;p/((mtyBz)c,AffM(9$wrKqC^A$' );
define( 'SECURE_AUTH_SALT', '>^K0BlD$e>7_u!vB9H@hh#mE-}R(%p%TmkvN1/E{k~igSJ;CZ+)rNH0l0[U>~2H.' );
define( 'LOGGED_IN_SALT',   'c8vg`0/aag3MSJy F<352l<8}P ^L*io,|B5<@D+{k$kVNVl;+HpWcGR*gse]nU(' );
define( 'NONCE_SALT',       'At$o*Q=4<,*)Z6h6hTx}J),KhV6^Lo)uZFvqFhq#N.2aLlPEsie(#GlgCqgYum=q' );

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
$table_prefix = 'asuh_';

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
