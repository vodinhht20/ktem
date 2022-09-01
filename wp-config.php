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
define( 'DB_NAME', 'kteam_db' );

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
define( 'AUTH_KEY',         '<4TJiQlEgip(h ^iKV$gsZ/@}p4D0Ef)r3~fzp-fM)Evy7x#+sYW]AlRX-y!hJ4`' );
define( 'SECURE_AUTH_KEY',  '6Sh)Wm{E3PF:.2Wzq,y5FJz*Xp8m4{/FZE3LPUF|!|^IK%13#Uea@Tt#3hPPJfi`' );
define( 'LOGGED_IN_KEY',    'Cbz}CN6?1iK0z>y#!DHn5?d8M>AQ3lE#6l,*i~kO{;>wghQq:7Y]TiinT$cWOIQu' );
define( 'NONCE_KEY',        'pYYB^_DCLyBxI?$dXoBSxs/1:v5{<m)zH5I{[o<J<ej7<{$/0z0jiU7v:v@7JOt4' );
define( 'AUTH_SALT',        'PkulSY3DOzK%%<K{yCoAErg ;)y3j8siH&y>0=*SQ4Z[XsRgSA!Q*tViCRr0/vT+' );
define( 'SECURE_AUTH_SALT', '+8J/x@U&@7M@OJ|TN2/`WF&Xnt9wMOB@gf1j1.40ye8vM:VLHQX$r{C,$:a&n9*j' );
define( 'LOGGED_IN_SALT',   'IDx_9NnumJf;~Rb)^<^gDDN)`yLvNm]Q8|Q[6s;M ^uPz(Z-.^8o%xAk=WUx{7Zp' );
define( 'NONCE_SALT',       '}].y*$GdoqSy$j$D:LFmRY%5N34l+$q|jclL|Y=iwT]@sEDRur;FT|~pU%{?AMZ,' );

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
