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
define( 'DB_NAME', 'rev_panda' );

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
define( 'AUTH_KEY',         'CUjyUk#^1z3s+Og.T4*vA2{9p0i7^R3#o?6>czsv2bf(gj~-BEBBMdPotFM]Jz p' );
define( 'SECURE_AUTH_KEY',  ':2P*?^wx-2qC$,B-@(G{UH],r[_4u-Lpc{WWH1$pWzQ}BhEpGBW~EN6HzDh7#H@V' );
define( 'LOGGED_IN_KEY',    'Fu- et&&$7bTfH+u`P/Tj<SK?G@J7nX/Y/B7dMj/Cn.?Ka]pr%.;~izw6D2 +LS!' );
define( 'NONCE_KEY',        'eZ5b&2Jp2Iz6)xkGwn!8)/AD&Y X?Mh^SuBdaB{iqI*J#uKY&&>#UYDYcC4MU!K)' );
define( 'AUTH_SALT',        'Fr$&Epyg9yd35HP`$|TtJM.h7R[ALw65;Yl9B]6_8 ?I@vkt,VRSmB3LXL<?(o/u' );
define( 'SECURE_AUTH_SALT', 'O%| l`uL_?n_p Dl__bYgPxoPPG(3Gzqd.PQ@FnW r9@t@d`bOF.RX5}wFg>9CwG' );
define( 'LOGGED_IN_SALT',   'Fb!Kla^*y}p1I_h7&6/3{i[3^DCB(:e`rYonEk|%IAn}3uxv&ClyI6lW:wEBbM|s' );
define( 'NONCE_SALT',       'C9O2y<u{|G=UUNqGA-w dU&1z;yuSLH7^5vy;<;cgK,,*L7ZsV{=abATh=3^a$;A' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'rev_';

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
