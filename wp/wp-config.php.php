<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'iamjuststaneu01' );

/** Database username */
define( 'DB_USER', 'iamjuststaneu01' );

/** Database password */
define( 'DB_PASSWORD', 'Mcndf2p3s?n>V9LcuchdWZV+J5iZPq*7CRYKVPQknpz2gho4<*' );

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
define( 'AUTH_KEY',         'a37?HWd+4AjW5m=fSMJQePCAU5TJWgQmsCLNSJZm' );
define( 'SECURE_AUTH_KEY',  'MERU<PAM<xin*xpx7q4LVh4yFcP??K3is4!5EbfT' );
define( 'LOGGED_IN_KEY',    'PT4kwAtCtr=c7DFApjXuCZvH=hA!n>ZnvSJ<R3A+' );
define( 'NONCE_KEY',        '=DzNcc2T+!P=*Rtigtcq=9+C<>9=YXEQ*39Dmogi' );
define( 'AUTH_SALT',        'b9bCxkf*5hgno7=ckz9CPgthwv!uJvwji=nQSFUj' );
define( 'SECURE_AUTH_SALT', 'hRcQ27AAWgKJe*L<Vg!u!>Wpe!Dt9vjdKYx<WZd=' );
define( 'LOGGED_IN_SALT',   'Qo9>er4+j!Pb7<!TLwcsSX7dks4MUKoNi7VkRcU?' );
define( 'NONCE_SALT',       '*=J3Zgc9!avgLUA44cT9bF+A>vi=vu=Azb2*QHrj' );

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
