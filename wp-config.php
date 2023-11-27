<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
define( 'DB_NAME', 'wordpress_10' );

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
define( 'AUTH_KEY',         '@&!+BqH-(@Z>!9&Kgx5*WiCc{o`5,LU43*Ak%2WiE03hr $xx3|v]ulr`Rt=k{3W' );
define( 'SECURE_AUTH_KEY',  'rvTL-US42dQ`_`,;FZwnEN{_LaBH$fqn4#QI,EVTps8jl|;b&#g(jfA%;=^6=}dO' );
define( 'LOGGED_IN_KEY',    '9:.9rr|*9yj%{q9I!X$ ?`/&;:LD5_iHg&>j,g`0<gbZ$9jQ`q5`PS3e&F+qATpF' );
define( 'NONCE_KEY',        '!t S m$t,TG}%%TB?EL#k(#LC o_^d,okcR5R+^y1O%V+7_hA3x[+;M,nn,W4o~.' );
define( 'AUTH_SALT',        'vS2_IjOi#wprij{^-{ I}#zd;3SorV($f_Ox6ox+};tMl:S6ZD?@:1F<npnA(FB[' );
define( 'SECURE_AUTH_SALT', '!*8`q(929zpjqwTj6K?d[slt4d]r4L^kd>MLzn?YYSAq*=QG~tq0%n<}2z-1P|t$' );
define( 'LOGGED_IN_SALT',   'Tb]-}b<Lo6aZU=]Q%`T0g[[+yDX*TlZ8{LTH{|MAw<zY%Kc=cW<6ny3<<*O#vfjO' );
define( 'NONCE_SALT',       'KZ+JZ(|D9vQF$3rDM5iWi*$mvFx8&yN>fWp|kYYKIGe6weySEbUS}w=$O`#oB%DX' );

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
