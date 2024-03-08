<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'beloslava_help' );

/** MySQL database username */
define( 'DB_USER', 'beloslava_help' );

/** MySQL database password */
define( 'DB_PASSWORD', 'N7TUV%66ek5QSLB3' );

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
define( 'AUTH_KEY',         'Gi]lA{X%&x/~Ecz9sU3KX>{_=G^-[BU WB GKB$$^]JD.?6Nu9xTTISl%XP?@jyP' );
define( 'SECURE_AUTH_KEY',  'jR~GUdm{nz9,%t6hS-mX-LNY_1UZB5D)W{)[1mpI:@zx|g9L$<GDC;$4,sd`@$r8' );
define( 'LOGGED_IN_KEY',    ']@P+>E?W >I,q~9xOVr>buO-zKOp@gV-I^Xh70#G{dlB/kh-^,Xf$DW.,1G!Zs!w' );
define( 'NONCE_KEY',        'L}qABG.i 35wITb[L5i!_SJKPvF!LKTk{]Bhd4KCjTbBStoY|xN>8P+e&PsR#tYg' );
define( 'AUTH_SALT',        ')S!4@7B.<veIt3e1S)~&}Pm<3(b/Xi]wqhgGH-KvJh9&m^xY+Jww!BeX5fC),G M' );
define( 'SECURE_AUTH_SALT', '<?-AMufbZ:()z[jO8A5>:qvPBO&[b(>!X/cZ9n*JS*k)X gV<mdYy3}tI},Nom]L' );
define( 'LOGGED_IN_SALT',   '5evo<{;pLotoNBNk=?<e#;s{NHk([Zc6{el!iPx*CjK<1!,&U1&{yyEc!R.)m>4f' );
define( 'NONCE_SALT',       '* ~-?IKy.ze 8@sKV^r%*Tu<2IIO7A_f0=t_l+/4XOTRQMx0cKRFk(S3PLWP.c)g' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wbh_';

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
