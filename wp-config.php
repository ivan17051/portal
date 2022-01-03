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
define( 'DB_NAME', 'portal' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '%T]K`ssnKv<5Fj9YHcbou3xva:,[Vf0^[] 2gDpM[$2$MJ#V/`JRblTO%DZMfU4(' );
define( 'SECURE_AUTH_KEY',  'O-C3*Ql8+o4,{oWWljX +rEf>4)o>?Xwm>!k&znzJJ[z}CtI]3F)n=n;@U<G1OCF' );
define( 'LOGGED_IN_KEY',    ':N`jBicaY/CN^`Q|h|BX&v&JQsN!wVHLwfjh2L_$/ueCRJ-x5:sQ];e!]8o`h&PC' );
define( 'NONCE_KEY',        'e|}g|A0Pf;7>2S)^PnD7G,$r?OBY@wd)5GNl :~ev3BD xqsHgrET-@*i=Lkv*%i' );
define( 'AUTH_SALT',        '<<1SYt{k?P;X@|]bB@?]Lja[5W 7rRI.abL~m&2f|W?{ktm 4`A!ta@`];4|bmTK' );
define( 'SECURE_AUTH_SALT', 'N_J*j-N9*Nyn9opAvmQH|JAaWO++xpo?`:M?.^:8=utVF*pv&=*[!oRt[<EI_GVl' );
define( 'LOGGED_IN_SALT',   'yX`4nCJVF?c!@W86Ef$?4/d8;NuRZqf:;)r)[H<fF:+9yx-m1ZIpCUZ[NCud=aP/' );
define( 'NONCE_SALT',       'Z?<M_O*M|].S;T F:IvOG~P.TUBss>{(niphzynr^WTD7rM%kItz.4u92]lTG3_@' );

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
