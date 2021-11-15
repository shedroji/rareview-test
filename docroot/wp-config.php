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
define( 'DB_NAME', 'default' );

/** MySQL database username */
define( 'DB_USER', 'user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'user' );

/** MySQL hostname */
define( 'DB_HOST', 'db' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '!X/{B/(4T}W!ZB_Vy=c/[@yg$c]#yE@9+@:BK%0R~dabJm^wNwm a)cvCg@|@X:%' );
define( 'SECURE_AUTH_KEY',   'wg&+JqY*<:6cowRKJ>+u[WB-L1AASshFbS:w^mmn-v~T9X3<n>dIa{AKdo}dEyI3' );
define( 'LOGGED_IN_KEY',     '@#}mDsqxzUTtfnM@}<xIF_.1g%?y[@T`>?]Fd)=TGV=r-(Z}-4&{/Fq#gJ5xj^g%' );
define( 'NONCE_KEY',         'hmQrO/C/5L[-tlr1_0RqXGb*k(Ft>Z^*Nt%*#W&%m1u%[0Ew!>qG#5El>`E xz#m' );
define( 'AUTH_SALT',         'YtTt9,z p88W?B*s02=_XSy|ndgYkO^u,HLSe VdA|L{#/WQ6y4[8N#!p3$I*LL|' );
define( 'SECURE_AUTH_SALT',  'Z[,QdgfP8d>C[Hw+%fb6[@1;%D1+vKD8~T5v^LM[Hg8&;wUi*WFcAKZKNU?Qh=-r' );
define( 'LOGGED_IN_SALT',    'L$?V+{GL[/0cz2{`o,rW>b7=0J9ywEkLU<dza^W%W~3f8n2tuhGomnst$y^Vu`[G' );
define( 'NONCE_SALT',        '>K|S=2@g9EL*AgA@u[,z)xvz$!+Ok^Ix`34kTsd(,1`rm$M3o_h1PCwkCJ0;?f<J' );
define( 'WP_CACHE_KEY_SALT', 'xh^t29L jEkL^l1!`s,4,PA]dQPM%kMF$pZWm5$QXj{o/nP7O`X:wKIFV$$gg>@a' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
