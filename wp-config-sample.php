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
define( 'DB_NAME', 'plugin-tutorial' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '#t|juiRN}KK.bAD:l28~k$q2SAI 5u^M*POw&y8YS,Z,<gY<|n: 48eS/:YI`W;}' );
define( 'SECURE_AUTH_KEY',  ';*Y@Ggd{S71T+X)bYAk+l9,k8CG[G:_[#P;inzDM7rpN;0E+.Kv28($Ey,]JV#_:' );
define( 'LOGGED_IN_KEY',    '9N+4[Y[id XQC#~f&HYI`R5N}t[Lb[;mG&(rtx2v|]BU(OmJp*d]raBdDBR@w`PL' );
define( 'NONCE_KEY',        '-9q<dd|`bqs8Y#8J|/2Q]0B0XU^u)fz%/xugx>Zr%R|7SbUD~n;[={DI|gh~f8hE' );
define( 'AUTH_SALT',        '^o*em8YT&D0_=v@v)QUE8 ,@-vJvsdDKLOC{-h& *p5i[Q{Gv5dRZ#rF;zOYHt?]' );
define( 'SECURE_AUTH_SALT', ';N)>|t@0?A15xc?8=ad@ 3F N`@P6$e D,A_giZW:}O@k;VUhl65%b2Qt[p-rDg-' );
define( 'LOGGED_IN_SALT',   ':MSp*7dC=b5Z@OVUP>Y_ZxN7eu#HiM^nt-OI0NHY`$!5G%)?_a&XI)Sv:u?o3~Da' );
define( 'NONCE_SALT',       'Y?hOGcYE%DSv)l]QT2AA5;h%T&NG)D&f2LXtfq&p N6@KyO5<g?=hm52}vY:~w|!' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

