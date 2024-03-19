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
define( 'DB_NAME', 'alesdb' );

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
define( 'AUTH_KEY',         'k09K.bIoiS@]iQ.-M?qyuzibyLLD4f0Z`3w]/)IGU8aY>30LJ++]0uczM{{cuU~[' );
define( 'SECURE_AUTH_KEY',  'i6!nb;cz/iRbqX?`LgmqI:Qz*jlkPf}{p-zKC*0u^?}SNj7*dv< 0C//8B5e]I_k' );
define( 'LOGGED_IN_KEY',    'tEw1$ZB^T:BWS/d4aDVZH@O>t0OQit}:=Q6[p3iP&{gBRT.Bb<$18g8w[|]#!DxN' );
define( 'NONCE_KEY',        'g)dfQx[EZOk!h`k&9OPgDr[zGw<)44nP`R-V_vIAZeUl4J~ZIh*>FAzGt@bm%o[T' );
define( 'AUTH_SALT',        '2Da_eR>my*Yvn~)WjymHqaWD*ce6Ooeu%|J0mgBHhaJ {W|+YU tSI.yTDb:B-}#' );
define( 'SECURE_AUTH_SALT', ' qrlp7.f?6Yh,YOWC*?4Jz!xRc[!HWaU7drMaUUA@#z<I67u-W`*+(bA#j$i~wRV' );
define( 'LOGGED_IN_SALT',   'RMN<%EmYhc8H]MGnBMYWw N(Oh5cV]$/V2/+Y$V.C1~CXz1-({Wx?Gx}rT`<C.k/' );
define( 'NONCE_SALT',       'iO{fd.?Ie0:W mZ8[/Z&t=hUUcMZYZf2fD0^L.@i6f,-tQ8gxKWEO&;pz2[X!5)T' );

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
