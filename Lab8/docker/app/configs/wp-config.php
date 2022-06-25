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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'FS_METHOD', 'direct');

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
define('AUTH_KEY',         'R8q+z:JHAHYnf(4MUjf#=Rmt_+j3LiP0~8/WcArwF++a?}G_T&%qsBRq4ES0g*Sc');
define('SECURE_AUTH_KEY',  'Q^F(H^Ehe66&n+jLV+-adg2i|Bf[4+zd)lMi+Q,GqNqcvKCS/fcrz%a,u+Ec.kUw');
define('LOGGED_IN_KEY',    'vGP52XL:OLg9!k&0DytN2Vsdwv{Yv=KV8!|0kfMh1w1/a+`<Exb9+`*sXwJ-igeY');
define('NONCE_KEY',        'YQ^LG,l5_{NWrWA{;jV=V}}/>d?>kt|eIs--8IlH~r?xg>5vG2v>|ZK{@i/<$Ob{');
define('AUTH_SALT',        'ts0wJ}m9I-6AxC@>cv_&nbW:~,5lS!(tMJ4[s98FE3T+:+--fR+0qBT+&)s~imYE');
define('SECURE_AUTH_SALT', '3(%S;h?ik9;?{iW%_.0}wfF0g+OPK(O/qIx2S4W Dcw./P&[WxyAWD5h8Z4wd9O;');
define('LOGGED_IN_SALT',   'ku)rJ{9S|*P+$}XrPF_L9M<.TbQPc%!Nl]My?8#u./B%D&6lZ|JevHg>coSxqIDg');
define('NONCE_SALT',       'R|!q4~+:0RE%_#r8l`Kcs`6<Q8#dg6{h[U>M],c*nq&)d10J||o)]CP?A7p-Ezg=');

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
