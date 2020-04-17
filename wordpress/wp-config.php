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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mary' );

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
define( 'AUTH_KEY',         'z%$kfMtz[<Ww[Yy|kiS{ML6GnQU43pk]EQY>7YU*4kzX!YULmr3Oc[Hn0bU|+-6,' );
define( 'SECURE_AUTH_KEY',  '=(JnGh1NrOqA;D8dyY/{uDW8;_p}2>WBm0Pt`Ia4g_@s-bJMK]9|{$aKFT$#W6A)' );
define( 'LOGGED_IN_KEY',    'py8iW&YAFL-Ax-9XIQ!4q@{}9kCdtaY>aay,&fSb0K~l@2vok9gG(kJl-lCHO>ky' );
define( 'NONCE_KEY',        '+)vV0cPHkP=y5vZYidD,hIxLk2ns^yZ(|Kqz@^LB@:edkH &bo=17pZ,KT)vK/iz' );
define( 'AUTH_SALT',        'J-O)3?h&eZ&J)sv*;7d%Q]]Cel`,)M),3UI4h]U-czll&Nmgj.[B:HE4(ph-0_}b' );
define( 'SECURE_AUTH_SALT', 'e;KjK#/,xgH1_{/ocY`kN )XgODlE>I|UJ<5|B}3 NGE]C8mQR%??B>*Xs{9#*N,' );
define( 'LOGGED_IN_SALT',   'vZ>ObcYC0p-/@9Pvsb|G~kEpDup4IvN42o]k#4F.o2.$6)pRI~F,c%|#;KE*??,i' );
define( 'NONCE_SALT',       '8.9yoruCwa`+[<hgssn{UnMA5Qq7[_QM F+5<M<P9cH)-_W_na!Xes;G&j`al4Il' );

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
