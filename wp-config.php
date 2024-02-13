<?php 
define('USE_FETCH_FOR_REQUESTS',true);
?><?php 
define('WP_HOME','https://playground.wordpress.net/scope:0.8900933273356801');
define('WP_SITEURL','https://playground.wordpress.net/scope:0.8900933273356801');
?><?php define( 'CONCATENATE_SCRIPTS', false );
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
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

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
define( 'AUTH_KEY','4[UU3e5d_*aOY50jF[=]uPN&dUitv(Yk5mk1_+4q');
define( 'SECURE_AUTH_KEY','h%gX/A0#5+FlH!n]-E2-jLI(L+3_,sU,0VL[F2>b');
define( 'LOGGED_IN_KEY','BhFJGN>41UP9wz+ZVa6y@=4J,$f%rS#3ka?Vc*0o');
define( 'NONCE_KEY','4BS7>TRV[=m9BBngoyhmH2X]]cPSu%us.A-5et%b');
define( 'AUTH_SALT','4HNuh6Em!aFS<6p)b6E96oDl163Eq1$q@,)6%x,z');
define( 'SECURE_AUTH_SALT','m%rb&_mC<wSyqY+owwGQ$9y+[Mi!CLo8B<V[pWCJ');
define( 'LOGGED_IN_SALT','r[s5!9yle/]!M97<s.ULX*gr7$.*0Ei)fOaDoMh*');
define( 'NONCE_SALT','G-Udmt400EmNxY8d5]d9c2JZhqyry347U=M_p*pk');

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
 function wp_new_blog_notification(...$args){} 