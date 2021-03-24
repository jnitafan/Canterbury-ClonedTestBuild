<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'cihuserdatabase' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'nj#Jn)9I7<aTRZ3m{O5r-KAp^I+C[<cq|`(&XS!`xD`+i6WFX:@.1aapE5fxp)bA' );
define( 'SECURE_AUTH_KEY',  'w`<8-pAAmhJ}A4vE[26;z?]xBe>tz8$D,tAmHOF}E9L6#Z:->2:tm+?->)@9Ikdl' );
define( 'LOGGED_IN_KEY',    'n{PJz,VEtk2) @K>4QUx){5w$hRlT{7D3lLkvTg L$]#rQD*5xQ;L~@R}~v1f@*^' );
define( 'NONCE_KEY',        'eR,3Ow;NMkQf::C90rB.sBo]@ob22LWi1o=b~-G7gs$usRmcWR?:=W-EHY Wed<H' );
define( 'AUTH_SALT',        '2zcdW)TpUWn9`9jc^6(MtA[fa@ItIrk0j?1x.lp>1-7cF{x~mn2U:C]gI)fSyFU|' );
define( 'SECURE_AUTH_SALT', '9(d$(2@&K~ZRQ;%hDF/oJE^4+b`9Qj@%q+{%~4YA3Po>nFNK*&U:guFlsx0omv1z' );
define( 'LOGGED_IN_SALT',   'bh4@:azk],Mh:doN|H4)1:NyN|hkw*]D57o;mk-[$_^#GH@1olG8^i8lMm,f(_z*' );
define( 'NONCE_SALT',       'yt^r>]=/2v&<cG>m,+yA)}$hG^#JA-SW?$N.|b,/EVSin{NTwd<&Sk#.IpV?M>,g' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

@ini_set( 'upload_max_filesize' , '256M' );
@ini_set( 'post_max_size', '256M');
@ini_set( 'memory_limit', '512M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );