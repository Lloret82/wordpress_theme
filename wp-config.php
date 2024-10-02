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
define( 'AUTH_KEY',          'P|)TET?XLi6WuzW@)Cfu#@}K6aQ)8cR[Y@JH|`^Yys4kvPO/!XI^-13Y6`IRyo(Q' );
define( 'SECURE_AUTH_KEY',   'ZyD>mj5%<KCc8,:UFrft7:WBMQb-Uoj2^(hUj1g=!kyR@du-pEt+cEl;@A9$jJ`%' );
define( 'LOGGED_IN_KEY',     'GAt)+eTTY#3 VsgeSxs(y5X#RLKKx/gzDbWab4z`42[])K)Z5_ *7w`)2S#I6=}a' );
define( 'NONCE_KEY',         '|jjd>.3-i!+(6P5a8aq|l[2##9S!Q@7{X1tOcG1ek]JK;M86%]$/)s{KDw++ie&]' );
define( 'AUTH_SALT',         'K]L)^P#S!ztSl@R=6699%C:FXG6AN[$Q5X%/V,d{djOFTv{*G[Rgjrk<V^;V| RZ' );
define( 'SECURE_AUTH_SALT',  '<W}eqaC3v,m+y*k6ctKui1S{8e2g*`lnHsH[SDudo87@OXNPzM!zvKcpqliYcYtz' );
define( 'LOGGED_IN_SALT',    'j|pSYNe?S<sqRe98CI[WrdLj7Sp/cadcrPD<Qew5cSQe}70<?cpP}Nzt6(9jlZY`' );
define( 'NONCE_SALT',        'uOnUj~W@(U-eoP2041{s@WRnY[NkS*4c<H`=x+ov8$`/5mbm8Vzm&8R=TB&n|{Ix' );
define( 'WP_CACHE_KEY_SALT', '.>5zq{xRY6%@WXWRZiI0/[SV+I|*JB{Y)CFofYgr:mw+NWk+pEuPO$r%x/&OQKQ_' );


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

	define( 'WP_DEBUG', true );
	define('WP_DISABLE_FATAL_ERROR_HANDLER', true);

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
