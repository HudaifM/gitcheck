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
define( 'AUTH_KEY',          '64TiGx0?GV0CE+./Ef`-uKaHh2xP)Cl=~RdmZc`Wn:4cT*84xEg;qC6$Tn&</&h]' );
define( 'SECURE_AUTH_KEY',   'N9|Q=! VrTvZc^;uyATQy25q{il#9ca!,2SBFe1i?J t6u&&;^3aVQmR1XG)MkU#' );
define( 'LOGGED_IN_KEY',     '=uF}C-!4{:Kd[oUG P!_}$cW}[zaDW(!}(<?rrH!kj7T;*XVq8JdH!WbS{|(26+n' );
define( 'NONCE_KEY',         '5Ln`<xOSJw}`R/.K0 lps(IPpny$5&RDWQuB~jxLdu8y7t#c~5pD,Mn4/K}DQ4>(' );
define( 'AUTH_SALT',         'iB>z6K:cdXEh!4KH02,5fA_&?/Vu ,/,M#E^[.^=>JYUeMi[+do>c_L$Z+#}Y&Ee' );
define( 'SECURE_AUTH_SALT',  'A.jav,KLV`Z+,$7SUKsYlRE;$Ffl.BO:Az?vK}@vSp~U,p4R)O`-`GB_hmiC9~q<' );
define( 'LOGGED_IN_SALT',    'nHJ5oYk?F3!#Fq?6HJgpMK]JI.YCH|kB,&DvNHhuNlPtLMwCg&BvgXGQ,t2v}D|b' );
define( 'NONCE_SALT',        'quojuq-tzeA]<|hkmpVuuk<J(EP.s_i8PIMr.iC-g||3-<^!c6[,K6ss8 U;N<*?' );
define( 'WP_CACHE_KEY_SALT', 'k+{sL4);e:ON&wk}yN%>)!y[:tKYq?oQ?@O27iiP%Luq_ZX;l3di4lhj%0MqJUsn' );


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
