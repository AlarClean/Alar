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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'P;nNgq$?w,.-Qc1^mCerVwaCo^Vs>r6AF:qPz?FLu6JbY2|Dy@,~J0{P0K]^0+ee' );
define( 'SECURE_AUTH_KEY',   'x:wJ9%@XnQ[O=|&(ujf(R-&@C4hJzLdV%?m}&J*g#j-E;oXypL=4rOgp+QdOY,fE' );
define( 'LOGGED_IN_KEY',     '[h^f9G!8_|e0_BW&^q4.o0w:3g}?oK?:7uHArY6nZk*Gq|pg)r&0=/A_B#%QHI`F' );
define( 'NONCE_KEY',         '69D:um.N1$!n3=g72pwUzj_0>N|Uf1wN6,}K[FrYrzjJ+kI7|o@;5(rp %-0*1E}' );
define( 'AUTH_SALT',         '><Jv~V_FK]2{r$u`ka`z&Hi)(NFn+Cbz[ld{uc/7pkdt^@=.D]f5GY_z{*L_o4B&' );
define( 'SECURE_AUTH_SALT',  '9n.f5BX0:COl:IW]TLCL^IfoP:!],$PY10r/@Z9;6~b$;aoZ{Srz&o}5]02YlK75' );
define( 'LOGGED_IN_SALT',    '}r6tW^0mA;YGjxymBuUpxjD=<>3HbHeAX^|99%blB%;E!UcQSF0U_Ssgj[0;HC?L' );
define( 'NONCE_SALT',        'm&jWsX}p.N97K0d[9),pC@9>nYEajpX2Vh^3q},-n^nwN.Q#I6$x.<XZ;e_tz&/X' );
define( 'WP_CACHE_KEY_SALT', 'vdr~uUGn8kfZa yAqV!vYhze?OO}TlV#~>9uv84[Lc6PJQR7D5/P{Iqi8_QW^u-6' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
