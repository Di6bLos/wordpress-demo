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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         'P/D~$l3ea<,vjWoSEPhQ6O|pdXW%.20X6UYHK-h8]@N^%{W5<Xf)iw*H/2nSEu8d' );
define( 'SECURE_AUTH_KEY',  'X@G@>`zkC!t^{5DY3TbqUJA]ME^;>L]zrm4Y%{-25Lz?fiH::C{3!^6YRny@Nfo^' );
define( 'LOGGED_IN_KEY',    '/sfR+.I36|z(U7r%YPCSv1T:e]ns.q8FL(%rb8h|;.$PD!!}NA4H.LS}g{6dK|l.' );
define( 'NONCE_KEY',        '7q5iW`9)T3OlY5n#3pARZBRr:`8!!G^K<?m`wf~7JDUj[x5/us-F(k#.wuvkCGi>' );
define( 'AUTH_SALT',        '(d]?ro9=%Cc~fzgY-1e/0]>lj5EKLk>/Vj< cBZm&IxC_FnIr8v  tGB7vdqTOSd' );
define( 'SECURE_AUTH_SALT', '_F(vS2~F 8FrES/#0[f,*Nz}UmPq3q^:I`P9LSA=7!sD 8v~znVj|q):<cua0^&C' );
define( 'LOGGED_IN_SALT',   'n7xr4-B+JRqzf^,IUUoHx8L-IABzu}]0~*jo1v(5Ev~[~}}B,fU~kwwGk<#*Fql]' );
define( 'NONCE_SALT',       'MmyC;YB,IBDT_C5J@c:0y]y`8P_-ahgs6AEtOv{vUUg;AR7,q|A%(X{5/IH7QyRb' );

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
