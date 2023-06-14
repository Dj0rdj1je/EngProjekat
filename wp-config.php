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
define( 'DB_NAME', 'Eng_website' );

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
define( 'AUTH_KEY',         '(#)7w,Dn@[;1lO#Tb##L>fCDkuDxzI|_(=<L>i.}Bqg|_r<VAdV:7gjY(`qX16Vg' );
define( 'SECURE_AUTH_KEY',  'BQ<P)z]`}?pW(A]A9yx<:G/^elD(#qC{OXkX8}kaC/OJ/ePAc]~WgFWmLLyH/%^e' );
define( 'LOGGED_IN_KEY',    'Y<E] NfBN0-t7!]P`jpsxzR/{1B;3H-qq3QaCb.Su~t!yjoP0]A{g(My#^i/Lt52' );
define( 'NONCE_KEY',        'Q(kt,7?pqQH-FXo8Xivlfy?75?*Dhej;&<8 `!4#l3&Nj3y~nwPit#15IP|r`4Hk' );
define( 'AUTH_SALT',        '35C**4E!Z3paj$FoK)qS7]h(8qsi+8PsDa)BHPk-3CQN?Of@djSh3$,g bpp}]Wk' );
define( 'SECURE_AUTH_SALT', '$5_FW[Nn[(JvM]Q;Xk`4>FZ pj,!f3`0E(a9@w<9z9ft6uAJ#6Z=Hd?l #PvM|5N' );
define( 'LOGGED_IN_SALT',   '>N&t,fIb%oeYHkiM2zCiQVW!y6NB8q!{tiZe3h8SI/&8IJ)SO5(WjFYfa={zyai$' );
define( 'NONCE_SALT',       'm00-ykj]-O3*$O28DqW_.x|a;mZyP#-6j_#u!i8XIQOoYkgpK Sb2[8~)>*$Zkgr' );

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
