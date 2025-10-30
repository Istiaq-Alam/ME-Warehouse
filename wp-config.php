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
define( 'DB_NAME', 'warehouse' );

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
define( 'AUTH_KEY',         'j0_?l=-9&63$A)x).g-QYdzJ0fC~e%)n/OE2z$fQP-;D:&9cE))K|YF:yCoi+K r' );
define( 'SECURE_AUTH_KEY',  '{/q5>-5PGSX)/-G,ak&wG)&Mm,W_nn:&c#dO;O.fPK3iG/Or)DA!S:Lv(Hy}dQHc' );
define( 'LOGGED_IN_KEY',    'tT^UC(9&w-*X2TX4YPQXbD]7Ibg,c9>OE*6v4*R_kIN*jG{f>Rx/;B6A]Kg|[_D,' );
define( 'NONCE_KEY',        'Lbv).MC| J?5w=c07W`UgOcH.m8#cFZ9huBQ7Dc!K9&O;pO;A3]q<!D9A+l4G}r&' );
define( 'AUTH_SALT',        '~At1^%JGdpn[$/s;g(Kf)%?+8b9O3Zd^!p8)gAiAdK<9kpuf8991Tc[qAakd|Nt$' );
define( 'SECURE_AUTH_SALT', 'uwA~iCGn.cT[6P:#URL0|`BJYTWLU.(#FKyzkYU[slI<_m7SnlB|$/OFIiLQNk5Y' );
define( 'LOGGED_IN_SALT',   'VS> H_??1enJjIR<M?;lOxTY`-Q_(A6zjz (:CP8<39f<3Eg* >f#.r|l[{2 /7r' );
define( 'NONCE_SALT',       'diYBG/EVC9;JzU[+V,V=JvMBo(g80zPJ}`l>/fF#@[a5}I}*dwCy$S~{v:I?k#|i' );

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
