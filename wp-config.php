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
define( 'AUTH_KEY',          '#Hv5<DN$F8`A{-EcNtjPHj?bg.ML_mJ%4Qx(iCaImCgi*z&=wWRP+|-s}59qj}H}' );
define( 'SECURE_AUTH_KEY',   'gU$[%n}4m{JWzU~TFdx3w8y}vHQ]^g1]ZLD+WISM$:7SHH[0O&tCINf?4*l//#<.' );
define( 'LOGGED_IN_KEY',     '.zxrO=k=PiR@~@%QRY% AkMfTny+?Qkl~VAJ{K?~iB7q``]_<Z>Glfv_56C/4QR4' );
define( 'NONCE_KEY',         '*_Ag8VY,K%yTG B|2Fk_oaaerRm{tUQF^{G1A* sZ<bw=t`,[}e6^g jAa$97C-a' );
define( 'AUTH_SALT',         'zl;t^We2@NtT?a|B&a%,=25^koj,M6[U[$vs1/voS0EzCV(|x[O9W$)$&o*nE D2' );
define( 'SECURE_AUTH_SALT',  'sE)Z{2X%vo,_WDnvWV0!<]q9c?R7Rvp;@W{7(Y 2dw7nVEwkzN_?MGkw;D4UwciN' );
define( 'LOGGED_IN_SALT',    '~Ew6sy?i%{%%p*F=7U[w^k#n+]R9KeYS-DlbTsft%+juh]tMX1@Qi31%ls<~hGNT' );
define( 'NONCE_SALT',        '.Z9po(.Lc1FL&7FE;3/ErEwB6N*CgQ1mv CZ7,5cx,hy~1Y=T08Xe|M%HTXGr;KS' );
define( 'WP_CACHE_KEY_SALT', 'tDF5XH%PFw/nnm &uJ:ezE{gL2vnmk@62,n]CZW<Ob=iSPu{@/<S<e4|lVeVF fM' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
