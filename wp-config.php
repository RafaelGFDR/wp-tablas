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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_tablas' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '9~m`F<().?:*KXZm_3gn(F P6[/P]~<|>_r|=K}coe!m0}@g2@~Uy5,S$SJoY~py' );
define( 'SECURE_AUTH_KEY',  '|uVm5ly*araP493mA<K9#H<^L7>$|>8P@#Tfe.Del0*U6Qua9:l0=:/(D%F%A.J?' );
define( 'LOGGED_IN_KEY',    'PS/%Oiy2L:V^x*@jcUbMFi{LWyI@6Qg-p2>cNkcg`jbch8!(IoO*]][_#0?NeM#k' );
define( 'NONCE_KEY',        'oAkhL/,P>lqgaLw&htO|K@=WNA3ywioAP|{SJCzZ#3B&<4w*wrwK0%OBN9k{reJz' );
define( 'AUTH_SALT',        '415)n?0 ?fPy%fg;g@]=L^E;PTp~ew;gCM%jfc=LC0o./eEWm3}VdR2{yhV}r$4C' );
define( 'SECURE_AUTH_SALT', '(|^8>[*,AvSN{*.YynLI!D/1D5>5?; {.X{C|Yf{QM/Sy{wy:-0*&~NW5`Ar2N;%' );
define( 'LOGGED_IN_SALT',   'ag7Uq$H!w9=LOX=pySj>|@]F}aYefF(lpT?`!HFhdpC%w1S}b=]}w7O!rywrSS;k' );
define( 'NONCE_SALT',       ';Kf[xV:OIf;im21R98_pQ,6G,p#vUbjIz syq>RQPr29oa vf4c,}Mw>`9MTw0{Q' );

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
