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
define( 'DB_NAME', 'demowp2' );

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
define( 'AUTH_KEY',         '$(;1G#C2k>3uuuPEG 0Aq^)O6Bt.~<cw]I|S8Y!W[E&(A.lb[1*97!1@.uV2HU.x' );
define( 'SECURE_AUTH_KEY',  '*7QKC,QLBQ!;TcHoxN*TG}R>)RLL2a$>LjN!.]me*L[ViBNuI1p@[8Dhk$tyI8[7' );
define( 'LOGGED_IN_KEY',    'V_J)Q4[Ty{~k_.AXp<E32Z6m,5df,FW8@5YqJ<>L:;2[V[E{KgK@W1*u9L`{} DZ' );
define( 'NONCE_KEY',        ')=oE!JE}@^WJ<*xHt:W_)7$0Sn^$:KA{-vd:!$BP.DiSZN_sWtZ_O]$a k*0120j' );
define( 'AUTH_SALT',        '$T;e{)zv+on`;G9Hl]N@lD:-a,;|G^|FDWdZFdR^EJEJ+)2SBCHpD5.}+_p36J5&' );
define( 'SECURE_AUTH_SALT', 'c4&DZ+;*}?][CiY|:Y5()CFry7:hmr]WJ.?(fqhglL^}Qagx^)~.oZ![6_mCvCPY' );
define( 'LOGGED_IN_SALT',   'GbNKZ=CKw0/ie0/7j136tDZ[+`y$3%E<f35wL%+@7)n]ldFAHJdVs69r=EuFp;xd' );
define( 'NONCE_SALT',       '{SHmY5Vp{+7sZhh{g{EyHm4#>{h=qD>Y0bUNPyAv^yr2wBk/<PKQ/<ifJ1;@zJP>' );

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
