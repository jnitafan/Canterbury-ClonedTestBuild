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
define( 'DB_NAME', 'canterbury_international_hotel_db' );

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
define( 'AUTH_KEY',         '=TL=hd;Q[8+/4(yu2mtKH^*95p+`bGY=tN#3ajD[ahxu?b;9$i5D;?j,U5w@x%Ab' );
define( 'SECURE_AUTH_KEY',  ']V6E+5v){Z7>S%0XE E0=7kgX~L&&&uN>dF1WuupGXPwf%x]*g3W9{or;l>%!<]E' );
define( 'LOGGED_IN_KEY',    ')%/=SvBJ2$:>w)8mIk3jT;T3R%|xLdLP8r{Dpl2NVxxR+K9u7m5loB$nZyBJoYpj' );
define( 'NONCE_KEY',        '(I9H>]XGaT3>FvIz5&0]9&9A`^b)J/Co]aJr+!GJ#;;MRb^hvF]8.<8nM<CKPiPP' );
define( 'AUTH_SALT',        'N&vp@_rN?*W[=7:&3{*BKt+zJ)m!-E3k q+3#C}tH@ Hb$-HvJ*1wSR=A:zK0];*' );
define( 'SECURE_AUTH_SALT', 'i7B`CN+O/*S_ @qf^LJ9>=5~%Pt1yXGzSkL.4x/q3l{{5ZmGOy$dY;Q;=-ZwHq/L' );
define( 'LOGGED_IN_SALT',   'K=CmG|%~~PUJXYi)PZzvy9baai:;ASxjdfzP1DFoX,;Q)*DCkL!/TguFbMsGYJu4' );
define( 'NONCE_SALT',       ',=3R[@U(&(%J+B~bVNFt@2V4wFe8ukt3r|qOh7-`6OIX~}lWVm}|n(Q[]$J}$LB1' );

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
