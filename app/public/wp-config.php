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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD','direct');

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
define( 'AUTH_KEY',          '}H70Z@E3VhvqZwl<VI1K:u(ssDX~G$zFiZ?k@]$oyB@>{B$fi9=13/ND0Mw](bYJ' );
define( 'SECURE_AUTH_KEY',   'W-Ego[a@N{V-C1i/!fh?x<P{ S)&ucA X$AYoTt,@/bXaPSomW)ia!a5MQB=U>2d' );
define( 'LOGGED_IN_KEY',     '),T,}g4dkihMyk@HVP_}&R3x.(~$.+VO(&yz[mhwSYr)8XMJf6lUTqO{7?a@}?1:' );
define( 'NONCE_KEY',         'Z_RM!/UIBx{$*n6gHhBFt2em1u~IW~Z[Ya55CrHG~8!1]1RDkur?m>8#67-nHX(V' );
define( 'AUTH_SALT',         'v{R6]7Y&nq1G@IboiCt.DMra|;QslvYb=@&0EPWI.&CiA+Yk|-R18Hc}NJoEJyRz' );
define( 'SECURE_AUTH_SALT',  'LS5Up`:*y&Nv6%c5XrR |h%RYM]2DF_O&v%ioM@ FDq<y_(W1LRYzf0>O0}p5}>s' );
define( 'LOGGED_IN_SALT',    'Nh4J>}ixU_K^>u$Sp=1y2 ku<0v8o:,11{kFf,z{Y%-}cFvi||~XaI49k>ByhQ:+' );
define( 'NONCE_SALT',        'hLmf$P6zF]i-@#|A9w v|n5a+z{Aa`2d9[$fkr1sLg}7Y5~ nTw v0EC<}pGV.2,' );
define( 'WP_CACHE_KEY_SALT', 'fuWZ%(PbWhh`|52$F7qeLO}Eu1{a({ZTr:=cq7}a^y&V%?BM2e)N;>WTbACyO%fR' );


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
