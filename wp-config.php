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
define( 'DB_NAME', 'wp-test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Root@123456' );

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
define( 'AUTH_KEY',         'L(X}S!+|gsQWX_m[*N3VYYe47OB5.D?PdLqUO.T>FFx:M3 &YRm] L>}{x/Lo$j>' );
define( 'SECURE_AUTH_KEY',  '1g5-z8q(v1.2{*[ViTYS(KqN3g&A_)nX$4SKS8G%WEg*fw}C9t,<r8LjE`GY)SLH' );
define( 'LOGGED_IN_KEY',    'Du=N#w9Fdjt3^ow+jJ3nqJ;QMN[A4yK9pH#I<np%!)k@Ge|*rlOczc+A:[!lnp/l' );
define( 'NONCE_KEY',        'Z}g1zc@ _@k#T;IOE`E1YLlye,DjlM`F/]N 5O2q9<.}$g#F GPNY3,otvpZ28!g' );
define( 'AUTH_SALT',        'm!+fI=`,(o[&wp.^q4sz`uS[}>9Yu)5]%1j0KGB>z!F#*1^w+vt/rj}7j/eMR=Mi' );
define( 'SECURE_AUTH_SALT', '$Z/j.|>@PbXvbkixs*I 9Rz;5b,#?{`4yKv.e#eq~ck!gyh8zX=i-;=3%SS%>!0J' );
define( 'LOGGED_IN_SALT',   'n]eCdo=CAeb+|UI&{iE,!jUYrU#I,/;40lk67!7kS]->/m5qk]) !sdKvC|9QeEt' );
define( 'NONCE_SALT',       '1>x=Bq83 s3B52![G{{Ym3A}j_)Hivz~X8h|@gTE%v{3.1}m3&:;?bgu ,J*HoPR' );

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
