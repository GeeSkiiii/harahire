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
define( 'DB_NAME', 'harahire' );

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
define( 'AUTH_KEY',         'f_RLt=^4b?ms!8;S#]4DRrP! iBNCBJ)Z5_v8:kk@:UknFez9$X9U<~cr[l-|-wq' );
define( 'SECURE_AUTH_KEY',  '}zLnj>5-!Dn!<x7D=ZxDjU5A -t&w?][aI~=,;1d7vQqKicizA.x9x%7K#LQvyup' );
define( 'LOGGED_IN_KEY',    '2XV32LirIlmwM:Z@EdqC@irZj.*W/k7TA.I8fciQ%,@h:[4qq3uJNQ!`@vx(Z(TT' );
define( 'NONCE_KEY',        'W&oAOf?Q%JlP`GUahFP>p%<n0A1i(FeZ|3LPT,0xA~_2BF=}mzp3Zyb]:*lO~@kt' );
define( 'AUTH_SALT',        ']ubw,iA<z8[F6=Q1Q;Tey3QN 4rCuabBrJ}%{HY4J#oVzrg4%J+O[]~naa+4tZ$U' );
define( 'SECURE_AUTH_SALT', 'x^hE@o<G;jQYe,(D1Xc_)N)T.|cmVK)m%vfY_vwKjc+KT`Y?G269/}2CTmODLo){' );
define( 'LOGGED_IN_SALT',   'nJwfF7|&sY{)e+|f2 ^ _Yp?ue?Fj5.u-a00V!i[p@m|b#?2&D(<[& 6RkX#&g+?' );
define( 'NONCE_SALT',       'm;2p~8{VbrFku1Jvl>Pd|hI8(r~$S0B%*j|L+xGJF07={NSC5HsTw7zf0~NkJ`;I' );

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
