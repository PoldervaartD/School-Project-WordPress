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
define( 'DB_NAME', 'testsitewp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '@@5Kd4J]fXDZ>LQzueo$;]{etv$3KE7rjBXW%Y.G;p.bEevyM,<^e8P.S_sy=oYT' );
define( 'SECURE_AUTH_KEY',  ';XsmFnAM*h+ <T<QDEC|U!7U<ZF4m3uX<t`1RzgU+*m2nKIx*A0)kXWwNT2V$Ef5' );
define( 'LOGGED_IN_KEY',    'OrZ470)iBRk/K2|dsEzK.~r.<n JTuGq85j7ec!pWtV@?}uK6EmVhuM}EFnjdQBb' );
define( 'NONCE_KEY',        '{K# g~860e@ew<PZEO@V(@(@k<Gf6wa?VdaL~xTy5AntzDFK./AsU[;RMfE|>-]3' );
define( 'AUTH_SALT',        'f_mFpd[C#MwK8B#J.0]#+X[7v,?U&(y!W2M5E+~g^$lZgaf|Mu|)uii`TayDnuC-' );
define( 'SECURE_AUTH_SALT', 'cz+K7]I@8F]Hp@raZ$19@*lrBl`^9Z|/l]sQj7b.nxr}QC[gt1kIXbZe#}/=_i8A' );
define( 'LOGGED_IN_SALT',   'JNWMZK3RhEHEQHMaDhBG2X&`xQE@!.q&;GgY;8`yzy`[kUm,~(!Cn&x?#kf3*}7W' );
define( 'NONCE_SALT',       '-<5tQ5q=!IzRX 5yf]FKI7FG-1}t0Hz&4JL7)AYSZCpF[b3KKb}1v+JAeoo.k4HD' );

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
