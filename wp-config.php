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
define( 'DB_NAME', 'latihan3' );

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
define( 'AUTH_KEY',         'x9D n`hV5<R(e}xf94!Yqz#5m.z:8qN5&FrWaaY6m9aC4dsgAYD66@dn(oKd!pAe' );
define( 'SECURE_AUTH_KEY',  'r8Vgl{MZ-FBi^=|[}>zt4mmc7o9OkMMT?gB;F%FgA-;MM.$:~.*;FJVm*l~QGMnZ' );
define( 'LOGGED_IN_KEY',    ',WC(O;y34Ps`u&H#$aaUWA<`QsiTiZCs]o!y?E+BYZN4~2:Z6j*)?scP>e/9$#$D' );
define( 'NONCE_KEY',        '*7V0NXluk9OPa~S80H.)N*=gMlb{C[R@]z6zGVJjo;E:s)h8Wg{$ oAX_Mr`0/c|' );
define( 'AUTH_SALT',        '#=}UO8^Q}<lv#0=x3wnYBy8`-xMBATxGH%5vF_5Ha9#zE0nmhl|;fU&:A3II.fF[' );
define( 'SECURE_AUTH_SALT', 'I{6|H1pbU5Q.Zo&t.j`J?Zi84MW>X%YS.u$m:={[>fd-d*g6LDd;cA;WG8H_%LW~' );
define( 'LOGGED_IN_SALT',   'h^@8b-C5;ME#-<%#v%n[nn=+`pQkNlR$RY5git`u*]#8X2ypJ-4Lq.vb[WBI)s2W' );
define( 'NONCE_SALT',       '>nmKSAeZ,2xcX3vQ*$W7{n?vf.OS:BN~b9@.+j@]SnRour?5`cXfqL&qS5.:i(-5' );

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
