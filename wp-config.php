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
define( 'DB_NAME', 'my_report' );

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
define( 'AUTH_KEY',         'o?j.K@EbrclxgH_.^WtZx-sDs.fZ tP9$(bk)}vsUKnDVsNoDT|v._3MXoN1[_R0' );
define( 'SECURE_AUTH_KEY',  '3_)vyUlm0&3V}Eaw6)LZXKZ^r)~=fq5OoXc1kSE-LHYw2^ _=W7}0GqKEbL51:c$' );
define( 'LOGGED_IN_KEY',    'IZQ7DL:6. qAxQCTwW{@vgx2hCDI_T@9~ ,(>w;<prP@B3ItkG< s%*UDpvGR`dg' );
define( 'NONCE_KEY',        '^IYA:.r&k>ie4l_XheG=NT[t/w%!Cybe)4=q?<^)nsl Z{A+jX7H1Rw:(OP3L$EV' );
define( 'AUTH_SALT',        'AOVAn2UnNGYXnTp/VxHz^&0b,f3igDd4gU_J0[G/$x@mDsdXOJQm8<p@%{GXF=bt' );
define( 'SECURE_AUTH_SALT', '(u:T.BL.Z?ka09W/rPu<nx+U`+2dILd6lsml@?/u9rqY56w|AJkR/g#`Sy8+}T=%' );
define( 'LOGGED_IN_SALT',   '0~76^E8Pe1$Xk/I<6WvNGxz*~O}e>X5XnV%xjMJzRZ1xG?lV72@c%x^s_M:EKet^' );
define( 'NONCE_SALT',       '!}|zfgU?%5{`rWB==;_o!AEl!Ce!P~P*@A3Y3u}y=cdlVqiL#:GYI-fA* TSeqlC' );

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
