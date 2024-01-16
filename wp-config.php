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
define( 'DB_NAME', 'SteveDsims' );

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
define( 'AUTH_KEY',         'H+~uM-1X^QxElT3En]2#|T,|per=)v5S#l:R=V<itjQ&KCQvGGqXNw7&H,4}_)J$' );
define( 'SECURE_AUTH_KEY',  '/qil]KcU$Q@%>w5{{T$!C&NTu(ZV_{7;|`9#.As;} D~ap-.r=gDmb]9QL^TI%eI' );
define( 'LOGGED_IN_KEY',    '+k*qa][:f:W7[BlQiYG,+2&4;F$Sr@{y(a@}a(D_GZO~YY..p}>t[ML20<>jY+@e' );
define( 'NONCE_KEY',        'rMM;r-590L)UD3Wr+:+6dO/I.A7DiK:0a7UyyTBDg(;$PTgNAJi g;Xr34?zIc%(' );
define( 'AUTH_SALT',        ')1{X1RaJU<7Z1lV|l=_[cpZMCCQIjz2@*Cd,!`ntmJm]ny6HLij-kPrh-3bp^7[Y' );
define( 'SECURE_AUTH_SALT', '<7B#~k8MZ/.HqT?gOeyXc-)G*Huc;A:Gv`%kT|)/9~0-l{s9q$*0rTt0ebCzTK<E' );
define( 'LOGGED_IN_SALT',   'n!g=tpP:]0$DE<AW<=8zK}>oVdtuyY:0iDlk0Aw/;oNS}o{fs$9,&n)6c1vS!p:w' );
define( 'NONCE_SALT',       '?SP{dN^C.oNx-v1e.GrPe3nutIKxz$LoAT NwgfFHvq0C|]3!]xl?|OcQ6rg*p:I' );

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
