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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         '+VxakkHZrVT7rWQIhlB2WAKT1Rdjgn4UxFbsY769D+FWmGipwpInT2vZfdQl+OPgE1ilP2H6kdpb9AGh0Ci+6g==');
define('SECURE_AUTH_KEY',  'iBVFUXdCSxNTC5V3Uw1WWVcQfMYAsrvMW14W3fSQiohpvK6YgcakOJVHUX7OhJBeR/Mq2LQTOuXlsKh4sWxEPw==');
define('LOGGED_IN_KEY',    'ai5+OQCc1YWrXZ77VIJ22bxmQtXhzvuY4iBBPXXWQOm5g8iaxZxx2LrRaAjaWPHi0RGdM/S5ymk27CLIhQbRig==');
define('NONCE_KEY',        'E75TbXWCwqOjEqU/I4N8vCdX2qX1NaKT8RRrqje1rtZLLMxUMQOIhqZ/Yq3CYG8XOWJcrkGxzUmjrOgcNIsJiw==');
define('AUTH_SALT',        'U0K0uy9QaWIBR9h/Kmg3qj9W1pR2kZKoyG14eCL/Uq72pBU9i+j6Np4rdZU4fH7r0iLlA78hdoVe/fikFgBMmQ==');
define('SECURE_AUTH_SALT', 'rsVzJbIj9/3FLaLFtiIGDdKa9ZWE+XbvJHUXZi1/Php2w5C/EXSS6Ed8sk6Qw4gS2wLQ552TkJB7WY6oI+IfGg==');
define('LOGGED_IN_SALT',   'SUSBRYCJAXkuF+vB1ZAJqCCZwP3rOaRdkw6K4TkKIORv7YMffq8vnWIeDtUIfDhEx9iME1Tr0HhMaSMna4QEww==');
define('NONCE_SALT',       'EfRkye6k0r43AsiUuVOawZT/5BbBCMfwUBAm+zYeT8Zqeze11gvMoq2XYlAWqFamgFqogkQF06O8I/I5LYML0A==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
