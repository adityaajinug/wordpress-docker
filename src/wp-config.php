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
define( 'DB_NAME', 'wordpress_dp' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'sandi_wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '{i^s4q,fcXL*ORA [S~WV//9kd+qii-hs_HI.uw:4j.]nV}W![W,uHS~eI`wBZ6n' );
define( 'SECURE_AUTH_KEY',  'PX^y>S%.>-Zxvm=q{b5}mz[|Nm=Q6dr).fbhza>NH +=*Ro) 9fMw4LHU[l#n>}[' );
define( 'LOGGED_IN_KEY',    '5b^^_5{+>V/C&K|6FG].4)|{j7,11vEdBuVWBppWzDlxZ$Oz@sjnkLHf=VrN5l-i' );
define( 'NONCE_KEY',        '9<@#2K<u3q]j0#YK*PaB*m%V)l-5<urcHH}>kO+p3x|o-#9yCVKQSd :0mU@.McC' );
define( 'AUTH_SALT',        'd12x&aj%D%Xj~x7`F<o$0LSH4PAi[bq;K3#i-{tV;Fj(dok.@2/i,_YA=M)0L;UL' );
define( 'SECURE_AUTH_SALT', '!+U|}M4!b!Z-{UjJ1`5zW:^iqnwVBJdMY9d9%QKRA;kgWO(OeAS_O@rz#5 6,f8B' );
define( 'LOGGED_IN_SALT',   'L8!roYZQT+}%>z(XRgQ:LhK+U=/Bz=2g99KTM@7E*J0EE`!.4fe%%eLsH,K:W&rM' );
define( 'NONCE_SALT',       'FudNQw^kbC/$p7tf{R}9&b?^O>#-/tW46Kr4T4a*8Km9=Xf[^sm(8p4Y4$>{UZ6e' );

define( 'WP_REDIS_HOST', 'redis-server' );
define( 'WP_REDIS_PORT', 6379 );
define( 'WP_REDIS_PREFIX', 'dolanan' );
define( 'WP_REDIS_DATABASE', 0 ); // 0-15
define( 'WP_REDIS_TIMEOUT', 1 );
define( 'WP_REDIS_READ_TIMEOUT', 1 );

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

define('FS_METHOD', 'direct');