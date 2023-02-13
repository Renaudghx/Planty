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
define( 'DB_NAME', 'planty' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'J_Lrm/LYb,6& l&rlP|?{!}UMp`sKl)qZaR3$xQx#/-%2`H3Yi.>%^3S<.DB9+6v' );
define( 'SECURE_AUTH_KEY',  '(zSnBGBL3HPhg{N2Vat+gr>K}uB*@fWylXIC[`=0t373dojx;?pZkVdPG3-tVQrI' );
define( 'LOGGED_IN_KEY',    'iiGe=*lvh^qcD8zuFSAw(M_;*0.Pv!VU3R~d6t~:s?;;4@Cr-Ww/G vxE1pu^.UA' );
define( 'NONCE_KEY',        '^+ t)0s p;9{lO=rX{1Afr,;xY7iZG31COW#jQBWMhPGK!#>Rq4PB5]{A*9-:$Z:' );
define( 'AUTH_SALT',        '0X@~P@9cC@kzQc#&;PJ):18vC%Kt//cGy8}Yty)c0_tPjfLo;bs%mXuHy>+Fy|cy' );
define( 'SECURE_AUTH_SALT', 'O[k#txb:~e>q;GbU=t~}QE8MezLwT(YI:t|z22Uxg&Th+y_h?FfqoMPMT,X*JRcj' );
define( 'LOGGED_IN_SALT',   '5&znRMV2$O)A1)Xf8G)2_-Tiq9sa@G4s1iTAD`d<H%oA#,fPLDI@LHcIdUJFg&X!' );
define( 'NONCE_SALT',       'OZW;wJ<SmEcNRwEOGv,oDyMC1SH_QdOx0UDEc!RpVsqFC{n6SggiRG!8P$?Un38a' );

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

// Set URL du site
define('WP_HOME','http://localhost/P6/planty');
define('WP_SITEURL','http://localhost/P6/planty');