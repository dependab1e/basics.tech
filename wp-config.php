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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'z14' );

/** Database username */
define( 'DB_USER', 'z14' );

/** Database password */
define( 'DB_PASSWORD', 'ne8r7fxh#H' );

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
define( 'AUTH_KEY',         '$oEns#>o?zaE.-t_bY8SqU[Gf-`$Ql<-cC:W5 |?5kEzg*7 j*h3#{7&iZ^!x9[]' );
define( 'SECURE_AUTH_KEY',  '}FrRO-Dt.T!#Sgk!f fmUQSXfC>g1O*7YTo:5k0#-,vkXEx(1NdK1R]vIJvE_M$]' );
define( 'LOGGED_IN_KEY',    'O5ZK}1aKfnTS,:3^PPa^i(R8_.UA7YQ=Ai{V%Dps2sVMIKGan:VqA)VS:&L!Y^f}' );
define( 'NONCE_KEY',        'ooaRV0]bu~X/q0 (C@.?~K2qcsd-^NptyJB4RKg?> awh$``S$(DC:W5gbPd%wHt' );
define( 'AUTH_SALT',        '`%AQU-DV3@#H<NFv{/ =H[&FR!bG-&Ym=7Y<Ll}lDWecB{@5RAASg1z8=k}.PUt5' );
define( 'SECURE_AUTH_SALT', 'l8m*7D5I}WL*mWp}-N{&QY(.~giAduiB[9K._b4(6z_$ wL$jUR;r(A}sj]J8p<x' );
define( 'LOGGED_IN_SALT',   'B$}sG]r)fD:RL^9kSF,vo^z,$tO1}dUBKKCue/`j7$<p{uEK9%rfVZF5Gno)k!_+' );
define( 'NONCE_SALT',       '-VXmc;fXEcfF(W~Jrfcj$$Loo)k.Sk/EI$4(ilX42qG)/*6]C! Ow4O>Oypbhs q' );

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

define( 'WP_CONTENT_DIR', '/var/www/virtual/z14/htdocs/wp-content' );
define( 'FTP_BASE', '/var/www/virtual/z14/htdocs/' );