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
define( 'DB_NAME', 'project3' );

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
define( 'AUTH_KEY',         '9tRl28R3B? a!`[eq(v&Q}wSbLg6f9j1o,u{R}r>*JZ}boURUL(4?=9<l>@q$yGj' );
define( 'SECURE_AUTH_KEY',  '5=(_AH*IW4;;^*%-NxKon)Mn@nA2;KCU!*YnQ+S)(<RM`DbmO`8Cf2w<)uf?Eshl' );
define( 'LOGGED_IN_KEY',    '[9D+*C_9aO(rFGViTcjRUI`_khUN)0~,NGK(esDR^i33+mWrsZ|0P% O#4FDWpK}' );
define( 'NONCE_KEY',        'qUYxP[TLlL:o7/=tfp+yb3~>%*LM}LZ>Qaut!X}UQ7<9rJ&$Ld]{Fxc-zMEUx pb' );
define( 'AUTH_SALT',        '-wnT(z46~i4n,)Bb$nw](6[7{AVL+uuIwMHK#?yWca9#6vm~jyQ c&(d$c|u0)i%' );
define( 'SECURE_AUTH_SALT', 'Fuxey+e|/l3g G).Qh@-EeM11-2t}OB~#dw!_UGc}.Lg3aAwf>VD,l0*^h mj4>`' );
define( 'LOGGED_IN_SALT',   '0gg9)P0>#b6S:essM/un<7n|}1e&Ma.H{UL6Fq!|~]x4LMV#+^@B#?L-^XX+D.:D' );
define( 'NONCE_SALT',       'Jb$)XqXN.pAFOO+[[!gr/76skpPv4Nrj}EXfe)>@$K:,YCo`db;SC#$SaQVW%!_#' );

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
