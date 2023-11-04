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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'innertherapy' );

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
define( 'AUTH_KEY',         'J)Z.Ma_.?Lnff;Z8<QwA[Jr$di/Kh0.;g/jjjBP:0]X-+a8a,rNzTd):qD9t=4cj' );
define( 'SECURE_AUTH_KEY',  'R}+9|P61ttf,oqd`O!K.>5GACNag;uIXg_(4#^Yri|:f<-=]1c@L?Bs&A3dHM-w]' );
define( 'LOGGED_IN_KEY',    'Iw}+nOOMvhJkK,R4+Z2c6nUF~B]f0?n~lcUC7g_[e}nJq5&p/Q%>giEx(Nsu`PRM' );
define( 'NONCE_KEY',        '3ne)el9(%VZ@nF>_}ev*I:JWm_ZG4iM:ZFZe6011)k)DjH8,?BAb-*eD%sZ#LCtC' );
define( 'AUTH_SALT',        'Kpw`,-JnP%-bo~$=QZh4*BD_@.B?`U$iXMbQPA}pQiMhFH_lA<Phg({~.LFLZ;bO' );
define( 'SECURE_AUTH_SALT', 'w6G<x#exO^go-xY+IdyKWe;C^.fwvj1T8x.~jFSCx34^u;)S+W_3SoceqO=VA{|9' );
define( 'LOGGED_IN_SALT',   'wSfsU~;94J^;>cN+mD{|g%&Ea*X9PrsuQvoOG}taY+wg?Esz-My{k.F`8,z))QI-' );
define( 'NONCE_SALT',       'jLQfTIYH_gN2vH]ul?eOQpXe~wf#O9O3FFdC!(kJEn$_>d60|?4 2;E^ScvTi.te' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
