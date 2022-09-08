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
define( 'DB_NAME', 'wpps_divi' );

/** Database username */
define( 'DB_USER', 'wpps_divi' );

/** Database password */
define( 'DB_PASSWORD', '0_Djg!+xH-Vv' );

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
define( 'AUTH_KEY',         'O)]mZ]jB~.V#lV@D@tF,OgX]|8f>w_X>bQ+jjMydXNEVOCz[/lEd@ESd/11G%3Z^' );
define( 'SECURE_AUTH_KEY',  ':Ew7380r z:_[wwgrHZ}(O2=7&mJ3.4r>|8v1 `r):ns K%6Agz-x DRej[Lj ;a' );
define( 'LOGGED_IN_KEY',    '|Ps&j9M`7YOs$R0lgrMuLM<k..qM)M}@&#d3)=/ K5*zBGs>:xi}UqUC?s$uphUJ' );
define( 'NONCE_KEY',        'K0Je[k(;tO_aKU,qiFn59.VR8I0(e`sh{a|&{H144@[N3Qs@}e8xhKYa,6V0zby$' );
define( 'AUTH_SALT',        '$XF=q.-d>`upaZxnloUrgzWsF~aX=m!&Q[Mkl;;@`Qy#pg8>9;9S~WSW1k>4zyN+' );
define( 'SECURE_AUTH_SALT', 'r rXcEc)XK7/tNXkYuw1cwL}ms!e}sZ1l$l(- NIzS64bhz(e|i]bY&%-4`~P}fO' );
define( 'LOGGED_IN_SALT',   '`vJBP`SDIc2)#,G-2~0MCjnK1[Dp|K3^/MLmy=0G-/Q?}1ESu#bJ28[gjSmM#0)f' );
define( 'NONCE_SALT',       'i~<QTw{.F~P[|H|8Ju`HX@#U5LTB]ZzN1=n0-}a_)w*-#5#{LcP.%WL`y2og@Nop' );

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
