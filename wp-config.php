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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_NTk2NGVjZ' );

/** MySQL database username */
define( 'DB_USER', 'user_NTk2NGVjZ' );

/** MySQL database password */
define( 'DB_PASSWORD', 'NTk2NGVjZjYxYmEz' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'p>(x/FQn`s/Z(,z$x$%P,Ty9|Vdc@Ag+*+C!<AQx>^6ltd=QX6ZB2wSjV?d@,!;S' );
define( 'SECURE_AUTH_KEY',   '(P^ rY@Qus8slAKD|gWt7-/N/.~lNvn>8:ynLtONi;[=r+Z|bS.AOFJH0gX`MxII' );
define( 'LOGGED_IN_KEY',     '@=MSmeyK+N7f!7K%8-k=@7eNq-&^N V+6hkeGe4 K4q;NB9lZF2bR~NsDHNw 8&G' );
define( 'NONCE_KEY',         '9<vNau,Pl@dcy37GCxp5hN+v]hih1Rbh3^`u>K4/RnaX{nV,WbGL<NJZC3 -+.VQ' );
define( 'AUTH_SALT',         '{1PR+j:Xon_FL$AURI1rQgB7y7&X-acJT;$J<4A]#v;of:Gk:.=#(;i[vwLvd0f=' );
define( 'SECURE_AUTH_SALT',  '42 r2k+oSQk/ Ru=Y{L*~: lZQGezqYkhLuaE.;TD{46Y@4[yc22/71}ii5qNd_+' );
define( 'LOGGED_IN_SALT',    'a7UETwU<$>NH81cIc6^!{];(gm% 6+@]sIvczZL1Sk6+0zG!r#zQJWXN25)q7.<c' );
define( 'NONCE_SALT',        '+T@>fHa-/M7|X<c~TKD3a^pZgjsR#|H5 jR./~F8:VSp<57G:~hjHXYcYl2e+9R[' );
define( 'WP_CACHE_KEY_SALT', 'cn;1l(ybHL?S:UNp5rk=p^iha$J$%*v!X}_0+!d5!9jgiR)u9Dh<@XI[S/xLhvpH' );

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
