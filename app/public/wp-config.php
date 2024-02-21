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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'dW<WJ;?qt.}M;gzZ/ld:l$),Z]p&~ }]@TLS1T:v=Uj78C55?w3YzVhhuth7g{[z' );
define( 'SECURE_AUTH_KEY',   '&>2dVO*nv(T2g]#A%;[&#DEo2*?JnG LFO|e9bBM*hcIN$B$ag_BCRL7GfOiFu2]' );
define( 'LOGGED_IN_KEY',     'Z[&dldduRly*(x/{H1G_NCk/>lxI>6S1kU1_tCvp:=-#;&9$6}7hw|0 oprl|Ujr' );
define( 'NONCE_KEY',         'J+,ljZ1B@*(_8Acj~xsJ{Q$KlgS.1HfYPQJ:@zS-{S.|1.`))2cE-+?VzbN@?5@*' );
define( 'AUTH_SALT',         '1zT.!oW2]VK*dWT7.UEf6xz(l}2E2*{0+WLp>Rx?^^p^c+ZNVjc&~A%%,xf.6YTR' );
define( 'SECURE_AUTH_SALT',  '/P!_FYba%k0zt5&045VNy]MnC{/o0aYKhfxDTHRq}HKI|15V(MhcLG*87oT` ZfW' );
define( 'LOGGED_IN_SALT',    '&6`lqG?Hewo`;Y]cBdyHt=t/8|liMn9Z%:$,(MWF{yls_!=Dtsg][y#f8!c8uO]I' );
define( 'NONCE_SALT',        'qX)`$$quZ#)<=a-z^CUUS{!Z,BaM</#-/H/W__g7m[&&+f/WejEG7`jYCLXllc2E' );
define( 'WP_CACHE_KEY_SALT', 'L{Ae;39snmO*`FOn:Fz@-3YNCtziaf&f]^]srMOS(9LON;@Z) rG~0[h}=exrD1|' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define('WP_DEBUG_LOG', true);

define('WP_DEBUG_DISPLAY', false);

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
