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
define( 'DB_NAME', 'wp-base' );

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
define( 'AUTH_KEY',         'absC{@9aEV5~%9l=m^gS2;Z;q;ziRs|baITlguirvQ|N<7mU4cEB#n~HVoie3{xT' );
define( 'SECURE_AUTH_KEY',  '=e4zITRt!M/N)Z{w#!HxovG~7_q7VOyI@m-tuYruZAh$Tp?TxO,4G6j.W]1f;KBl' );
define( 'LOGGED_IN_KEY',    '{e:7!cJ;-k1TZ7}|p=0H GnUx>bf<.bMp[MdLiB0{$IemjT!vbqc9uu,VL4ZkeJ8' );
define( 'NONCE_KEY',        '/dyahdP<!)ec;iX3a)PlEyScf;TRZ:}:n;N5U7xbS(HtYutc|he!)@:ilJN%3/@j' );
define( 'AUTH_SALT',        '_mfzWdXYGp3<WVXs!89cE{umqPK^Lq$X&}M#?g<{ZGs*k92y.Pr:mW-M/MM0B8`!' );
define( 'SECURE_AUTH_SALT', '/5oeRG}9ZZR9{qX[L)ez14n<mzC%GSNJq`DW[1U}5}<Kx&vhoGNHd`u_2h<`qj_B' );
define( 'LOGGED_IN_SALT',   '^zk=HPs}i]XIK]nNdwS9ZqKr;2$yFXh`y`7IH<aK#as2xRet0yQ&^rG<oB0(VU6Y' );
define( 'NONCE_SALT',       'EAwb<~kkH?p%W+/Vu)]R_::hhY%+E_#gVdp3((R#>#]~=nd yiTRZ&(QWTZzPq=c' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
