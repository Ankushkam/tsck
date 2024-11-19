<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tsck' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password@123' );

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
define( 'AUTH_KEY',         'Y;[(713d$[V_.Fb<E]YJ/_*CkI|<pFyM=8SvbO3PRL18MmU1}Sk r@{_N)u<Jt`j' );
define( 'SECURE_AUTH_KEY',  'PRaw}~0lwd^psF^#j:O_Q[}it;Paxmo034pw#4zC=T>Mz$W/4op,-CJ-N]UHLGM)' );
define( 'LOGGED_IN_KEY',    'mibaa-|GZWcB$_-ZO0.tcVJ3-MyD0$kKqI$nr(n=b7Cp:]wGDslsIt|O>_f7!:?<' );
define( 'NONCE_KEY',        '1&Q$%Kgc9R)`8WqW/(l/]osy)JG=KYIy~c|qq)aGQcM.Udi|>@3yBIN;b-bO$PAj' );
define( 'AUTH_SALT',        '%yWDh([5aa1Wz:v*qSKh&B/kT<?T7W B6*a89N1d*:+%;]AnUr#H)h+u P^.c.}*' );
define( 'SECURE_AUTH_SALT', 'ckh}bhR8t1v(Cs>K^,^V[_OR}~m&5!Uqm$&;5O/q#2hm=6vFU*-/LP1]GfD<?b[(' );
define( 'LOGGED_IN_SALT',   'P!oE92t$fsV}N/@I7>Q(lKL1J`s$3 }~;4;{zn NS>OK(Gupa+6d)|AuJBQk],3}' );
define( 'NONCE_SALT',       '/YaT?VY{WsWV3h_V_NT,@sNz~x%^44}R~@rCP|bfk0B$z>0{9E!j3u6Fin`]l=%h' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

define('ALLOW_UNFILTERED_UPLOADS', true);
