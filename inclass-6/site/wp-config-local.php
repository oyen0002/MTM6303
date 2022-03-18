<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3YPt7PF9xy9SBOuDokquDoQFOQijb4bok3NtUfE04BWKnde6UFl87vC6X6z3kdEPKMTggbM06mk9S6OHqJRDug==');
define('SECURE_AUTH_KEY',  '50af2TNgLkaR9xL2a4/LwMrDlkxp+1CC0zwz3FcZx9wk5GRPYA2aJyUdN5Bq8/AUgyvEEewKbM6cD7Kr2+ZBtA==');
define('LOGGED_IN_KEY',    '0MxovH7+59zDrnCFpqKWSR8lpb5sl45rO9Lpj/T8lJL1GCXXHAW+27vEg81MmeJFOXrRt8l1sBOBipX2JBEqRw==');
define('NONCE_KEY',        'BpYqEQKCIELlekwYK7vX3p9kqEioGKwj+0jvrbQNJFhMQBDcKRcgIhSpdEJnlKoB/FXsoLySX5kZkju3q1cXRA==');
define('AUTH_SALT',        'nXUUs2Pbqrnke/pepZ27if8+0VwczG0gs04t7YaJwXS9wz/lcpRxX5Z/IP+AGu3RmqChdkkU8niBbN4GaQZpGA==');
define('SECURE_AUTH_SALT', 'a4nr+l/qGJfphkIUvZBDCAqNrDC5eBUDVuBQNxujLLfODlvr0LT/WrekONgGY8JTLQjbhtwcuCxkP+rGdncmgQ==');
define('LOGGED_IN_SALT',   'onj6ziB7X4oEoou89X2cO96+hTzT21sGym9k4uCByS5ynYjYGFw7nZQsbvV2oGg7mkznSuB8HGBJh/ZxJaELZA==');
define('NONCE_SALT',       'ww/K4cECkE6O8BInEagIMZFWyrTjV8eEbBjC0f7ZDc2r2E/6BfT8DEjpuXrY+0V78CFSLxQ0XFg1m1zm7fPXOA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define( 'WP_HOME', 'http://devoyen0002mtm6303inclass6.local' );
define( 'WP_SITEURL', 'http://devoyen0002mtm6303inclass6.local' );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
