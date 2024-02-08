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
define( 'DB_NAME', 'bikepromech' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         '9mbWWF7SB6AYvHLFzx9KAdGeUTrdLjHtLz9BTab7HYUNqESoGnR5tXjvUQcxRkjv' );
define( 'SECURE_AUTH_KEY',  'VFODAQaOyRzMcZ0nKq4hBSvTD82lH5Awova7BbdVn2KK7NdWdcr6Mt8IDUFN4Kvq' );
define( 'LOGGED_IN_KEY',    'HSAPHBhg7DptzgBa6hy0fDENGBDpCRK0Amaz25U1Ucf081sPJFwHINRfDiutkUY9' );
define( 'NONCE_KEY',        'JI6A2x9p5EoV8iVW2ouY5mvx5bv7ahfA77NbAu04seV7skJFLWN8X27CB0gt6RwR' );
define( 'AUTH_SALT',        'BpSZleMuMopoOd6AHtEW0JqZB6sUsGpoxqpcbcqvZu1dIOCU7XO0DrUdmQWxqb0s' );
define( 'SECURE_AUTH_SALT', '1duBrWK0oh81BScR4tdcIWl1ZjGzswVwZZuZuTY1zOV24jobnpSgO1qPgT02pNlJ' );
define( 'LOGGED_IN_SALT',   'e33M0LFyGfs3LdVnH2tfpVKSnIeJI0qjYElGrWnM9ZIqUeUK3M2wvpNkIlDLi6df' );
define( 'NONCE_SALT',       'W946fV5kPH5Af4nSy6zcsSysqigbf2CHy5sDI1RtJSRWpnseGJzoOCcu6H300VgN' );

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
