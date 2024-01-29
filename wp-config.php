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
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         '#Z!JaadtLJe#e?+AosB$S]lYS6l>7+n@|tRW2!-<8m;%j(.AnwB-/qvJTKiLc<#b' );
define( 'SECURE_AUTH_KEY',  'AhJ&xLd2{t/peuhAD;K0]8k%K)Z?=82h%a=Ib_sXxOnZMX%=MhL<OX?ZQiw.!H%V' );
define( 'LOGGED_IN_KEY',    'L&6FQAT`yRevVa;1*n9ZuV0k9U$}]nypsVdlpuc!2N08W$R:L*J-v)^!DF-Ed*8i' );
define( 'NONCE_KEY',        '=!n+%j/l&6/G1tl{xb#zpHse*=&eL8U:<5bwIIAVInN?-PF{yPt4-e`$apEoue1Y' );
define( 'AUTH_SALT',        '(f}89eN]1L`4?|<9tq|>J5m.aNEe$&I#3Lb;c+,`?5?p@Yzf$X[g(_ZP4PP16CE!' );
define( 'SECURE_AUTH_SALT', 'M1-kh3%hb)BxheiS1$z[VN*_4OmjE[$Sgw4-#S.05uD>wv]1u;Z,7dI-;4ue1?uu' );
define( 'LOGGED_IN_SALT',   'L4o:iK[nXQ/uKB.bT nP >o. gF b,PkWaznpUP*E)uZG.- d^hp*IggF87G@0kM' );
define( 'NONCE_SALT',       '8$n]c;dXp`n?30`&xFidVX[I1.p!8XL+XFb!L^[*7cUea{}|Bg rHA[c#S!~Ep(;' );

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
