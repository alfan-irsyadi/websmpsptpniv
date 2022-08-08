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
define( 'DB_NAME', 'db_smps_ptpn_iv' );

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
define( 'AUTH_KEY',         'KB.c*$5?4,:fs0K5Z*[)^/^#VuXB<vZ%Ab^@>wA/{:7p%XF1*X9hk|lKZ<A76 Y7' );
define( 'SECURE_AUTH_KEY',  '?=|EN^=JNl2dl$G7u<>l+cc=8`Y;kK:o(kVolvd(iHnd>iBwMJO`*rr;cHu.a{j&' );
define( 'LOGGED_IN_KEY',    'jtzN6J5*~<90p6j4Lm mu+1pH7R/X=v,XKg~dr{#CnAYvaIo]#,?S3+:$)z-T#-5' );
define( 'NONCE_KEY',        'Io5jdS@*kZ`_>l6JRgJ=|@utY[5:nR0{`P]M7C4QoiMRUcuRf(Uwm*hc5&)mLh!H' );
define( 'AUTH_SALT',        'XB60;4F8Xa3u>tX9{yrNvrYX<2&jd#[x=O#$!NS^atr;R>;dSUw5YA/n*Qlx>Gno' );
define( 'SECURE_AUTH_SALT', '3Z.os-ke0xw+5lJKH<(mV|3bwVs<E(T>2s5=xtX`U*DBP|}|FB28<WCm,.s<[bhu' );
define( 'LOGGED_IN_SALT',   '0hTTN?6{$}Wp<{AinUnvkoR]08jmF}mPJoBY+y@lz[D8l26@*EozV/U${C>pRh].' );
define( 'NONCE_SALT',       'U165`YdLKBJh`0Z^vpS~ }2YQJjSZU6^U2y:owK=Bt4S{f~p(EZbNy53/X3lxH8h' );

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
