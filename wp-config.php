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
define( 'DB_NAME', 'technovation' );

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
define( 'AUTH_KEY',         '#^emfH:-;q9q.;EFSq0dyp 8xE/7KY+yQ3o4m,2Tk@`Nyv0OUa/%a- /.FagB-xR' );
define( 'SECURE_AUTH_KEY',  'D+?vmxuLi9W4%r`Hy:vrGokC0p-H/#>Mj&y9r|iX<Rr.lhL:6*Ycwhj--fh@[0IB' );
define( 'LOGGED_IN_KEY',    'I6v,kBB?T|U(F`gK/z|~5#$lDkcW,+R/|]G8Tyf>P.{$];7aj7K+2ZJZ2_qwT0nV' );
define( 'NONCE_KEY',        'Y@Fe#l_;mQJSk%Xf!S&YP7;a[C8P|(}Ue}Qe>Y$2t5H/hs+lYjo{?.ZlGq}Ducl,' );
define( 'AUTH_SALT',        '&2lXcsX&knXt_|`H9N}_]UucB;5%J&&sjU1r?;2sp!-srkO{pB+@B;7C9P,6@*Ba' );
define( 'SECURE_AUTH_SALT', '}5 [#x/RuN/(U%gCD[Eeb0l$!M0~US;|E)AVE&YVs`$+uJj}A Fvb!W3#gP[?nw(' );
define( 'LOGGED_IN_SALT',   'q`OlZ2Eb?WKX:;V*0Gi^b{wGfI`G$nODuah(iU}$[,brgVQhdt@GO?Ozt;APwr%;' );
define( 'NONCE_SALT',       'C#m+KX^]aY1.6_ny/h;Q[)b(IQvi9[9NzGSDUWe0` lS~-svf:/m.f[X#;GM[V&I' );

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
