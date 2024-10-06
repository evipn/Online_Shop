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
define( 'DB_NAME', 'artemis' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'H,JTg>k,U@j?g,gomgw@-N4G)MA~Q3gST:#Kx$Xa]4o@~fJbYd_,E%|8)ZL)6j$&' );
define( 'SECURE_AUTH_KEY',  '|<a?L4R%Zfg22GS#SNT1YEhC?DJQ`4T(r2VT(7T6*rA,)l)tcZl1A3Y1Ziw.$9aX' );
define( 'LOGGED_IN_KEY',    'nYwGS}*YZ8@fINR^^l7#7BIwG<JRb/VQt%VoUZ%M&^xfX]x+K~01mT,AorQpi3;r' );
define( 'NONCE_KEY',        'QOYoA:ey%rh0vc%.b4$;O!dj=9obye_;=a,!lCb@:t`CCP=DC%F*5|Cn4T*@x-p{' );
define( 'AUTH_SALT',        'd:lHXv!)#}ua2Ah1F25X-Mgh{wFtqE2vh6e,^Y, qNuS?$X99n)^N Qi}Z@{5w>s' );
define( 'SECURE_AUTH_SALT', 'a8d.Ls~d4[(O@zkz@5tA2W<xmI@Q2u5ar3 ^jD(0{37Ro9PZinKb-5k@@(5T_kS<' );
define( 'LOGGED_IN_SALT',   '2WK;v-npGKbZ0<:8o~D{_s3@Kn4nyD{BOxdR9s+Lp^/?d}?;~}UOij|h/6}Gq*Y#' );
define( 'NONCE_SALT',       'b2IR4Q*>zR&p|qFu~6iSvdEq[Oph=SPNP7|w)~w#PxNH(:z}xdVHUoxdO*8av%Mm' );

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
