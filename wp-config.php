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
define( 'DB_NAME', 'wp-marmelada' );

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
define( 'AUTH_KEY',         'V%}&3G[q%9e_LK} B1K)OTCGlT{E:yc^sa<Ouof)~9b%cb9P^a)kU1XC@%+_5a;w' );
define( 'SECURE_AUTH_KEY',  ':eN~~_dB316:`0xKpWdFKMFT-gmvLZ/,P9Z`$p#}Xt25Ha+Gya#7A9;xuPGa8B;c' );
define( 'LOGGED_IN_KEY',    'H!c>GM79j:y2ehsu0da;:OuJ7hG+MWz?N-$avr84HGjGzLJH}~M/y2L.KJ*L>h=6' );
define( 'NONCE_KEY',        '<t.rEzV>?a3PSCF(z=;f1QFT`P)xDt6du|Z(i$i^le35F-udDd{m2RpNlp$,NL;.' );
define( 'AUTH_SALT',        'q/<.l2v/|u<ulg%Pp$CdgOr) P{Vk[%va-zo0:DwN|Rg8<Bm)Ap|F^]G*C^a2,ZS' );
define( 'SECURE_AUTH_SALT', '_e^e!T&cJG,oH40rO,*HYqL` XZ)>faw!sMc;IqN0E(SbunkY=9zw&Mp.,PSf~O/' );
define( 'LOGGED_IN_SALT',   '#f7B}zj~yO@|*Zj9@uUUCn:xd8^W8wiYF6;c{YeT?;F.DK!.94obaw)o+_[p1]xo' );
define( 'NONCE_SALT',       '^%[lv9$];I%pDG1Y]cgmhpK(c@> xaA8Ak)wp$E,%W0{R;,=(P:H@-sdDUVKUi^*' );

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
