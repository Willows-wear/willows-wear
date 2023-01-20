<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'walid' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'walidmyphpadmin' );

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
define( 'AUTH_KEY',         '=jZ6#(l=D]zXf@*6y!`N&SdKhxH7-UIB]ack%@16{jNOjus?b2~,g=g[MfC:N]Vq' );
define( 'SECURE_AUTH_KEY',  '(30i=#%}n$nKg~)~#`2{T~ Yd_@=]?#F,YtQbl$R> 1Fl5;=ezgI!U|4Q~|3(hH3' );
define( 'LOGGED_IN_KEY',    '&p(Jl+{AYo%KBxn)o}#xqkT/U?#2V=1UoXuxUMP)[$V8vvyR,!EW.{]J:{Y~C%rE' );
define( 'NONCE_KEY',        'eD8cQFh/SMsS&f;O1[O,{{s~1*c vKKIcpXBvy1ez%L2oF_Sp89-=evD/w9-s<;b' );
define( 'AUTH_SALT',        'h)JbGg-wDK$6,{Ns{eG|]c=VfD::Gj-,C^ <:IWr}$q ~_4fQw3>Ca*xX>@)E>R#' );
define( 'SECURE_AUTH_SALT', '.]QFT@>--brN=j$`,Cfsg7#CaN!3GflX`-`Y3D|2m0 @~l9GAIjipQyZ<YacGn^w' );
define( 'LOGGED_IN_SALT',   '&~dv@sEKDw3#WXUsk-p%QZ-t *US`,3L)br))3n)kWIq!,e=*r96:`F2h!gU?|QE' );
define( 'NONCE_SALT',       '+1[I;e/s~a: Bl_58=euM5t(KI:F[AgU^<~!U2N6*auF!;)X![>o;0tx?hj#G5eG' );

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
