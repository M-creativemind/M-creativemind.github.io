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
define( 'DB_NAME', 'creativemind' );

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
define( 'AUTH_KEY',         '[_cAQJxa.E+P$EJB~dhClh g4O+H(,WOfs1a#/b[CLk#kq9;?LW98rh27@{E~KFK' );
define( 'SECURE_AUTH_KEY',  'O|P,[_Zia)U;3vF9p|P~zte[GUjL(l-B=P{P%eKFq6lJrG_/Hy+FbV$THU?z5U8H' );
define( 'LOGGED_IN_KEY',    '4J^SP*~[W<Y!ly.|,j-wTXENr4R9RjNkh{{B=QOn5e.zR$qX8CF;{+^k{]tTB`B[' );
define( 'NONCE_KEY',        'd`>k`T/U<OgLcn3tg0gwszEkh pvO%9p$KX#ArbvQs8*dzE&@%4gIqs}ip~7Qr0i' );
define( 'AUTH_SALT',        '$@>{I+:E>+YT;Km,8e1Pr=YD2YklZ@Pun/,[K@DQ)).SwphjvS>nl}7}eWr$Wqj+' );
define( 'SECURE_AUTH_SALT', '6_l2>~}b:51FX^1Lc|ZU!];p$Dw)l[qG)kISP&eUC=iMhV?!H`(AdB67TT4=?my6' );
define( 'LOGGED_IN_SALT',   'Q-)x!|RsEA{XJvoq)L3!zIFKl=1pRFLySk?s.fCCBqj0]L$dgy~R:zoB(>&3XqmR' );
define( 'NONCE_SALT',       'XI]<()yw3xy!5#BLM[;rP%GhTYtECHxr!GJw).C[0$r{vmr2s5|?EJv7:%;q[;n$' );

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
