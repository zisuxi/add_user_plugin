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
define( 'DB_NAME', 'user_pluggin' );

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
define( 'AUTH_KEY',         '(c4m6+*!aAKhjRa#8bN=bkW,AOZ8Cg=exAHh**&,>C6r:9^DzeSB949(G{FdVDU_' );
define( 'SECURE_AUTH_KEY',  'x]GOF)5*}.79Y3)}K20XB@`8S[n!_BX]Akl);`eINyqJ$9?r)YeL[0?Ihg?yFZO<' );
define( 'LOGGED_IN_KEY',    '+%NXgDw &avdGVaowQR#brUcV|,@?tnVeCDD1]w^7YaOw=[CEr~7OeHnCEhK/DWX' );
define( 'NONCE_KEY',        ' u!-MnrN!ZjF;IhuV}<-{..wJ6>t3%~v:j#xR*bHI&qa[^4X[!.Lw![JI%1v,O/7' );
define( 'AUTH_SALT',        ']@#|=oMV{Dr|zzac<x7)9d).N^rYsM,d5JC34Eb79UU,G:%yX4>j?`Dj/}dE+v}.' );
define( 'SECURE_AUTH_SALT', '}QLS?0`x0rhc{D m@Tn}4*Y8]W1}HjCk,|rU#l,X_(v+HNe)KK*S%+n2[x_bNG&/' );
define( 'LOGGED_IN_SALT',   'yQ,W_#-^RMX4QDKc{3TT#qvnZ`k7se`&lKH6|~r+`m>6I|Z,O]lO-10:uA~DTbGv' );
define( 'NONCE_SALT',       'Gd8+*qvwh :nnx/ziTN,XO=uVI/?+eN:CE||#Og=eC~ QA1amG,]]}`mnZC+D@Cd' );

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
