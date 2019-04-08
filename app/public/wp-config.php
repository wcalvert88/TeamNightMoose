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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
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
define('AUTH_KEY',         'll07WdrkJ9rEzFxwZUuMENBLWNBQt72ZiGPzPmKtvrT9app6bhsXh+UULkXgabOSTkkA8ZvV8Es5GJDyYr+IAg==');
define('SECURE_AUTH_KEY',  'V9EzNxMQdD89OUnGPi9e6CqUq3QqtB44refzzufwGMagFQFNyfNlPUJkUGGuGYyQ7wG8ziEb3YXbtIirOzBx8w==');
define('LOGGED_IN_KEY',    'dxK4EXJw0kMfMabdrxoqpT0euI1pddSmnSP1WN49XipShaAh3BaxU4ZG0hsYjfmcz3snpr1hk2J2Ns2sKiNIcg==');
define('NONCE_KEY',        '8i3MsyczLWvGhfWgCe9VqxPx9SA6cl5bdhTOoF3mi3if4UmcwRacv23TlnUTTYgw+rgkQo98plrT7vcflyRh1A==');
define('AUTH_SALT',        '6hJA9A9/P/h7RFIdoYLp0YPWkyLY2EkLoTxPtXQN1mYvQdY1BLeYR0RAwOIiZBHmFzEygBX8Qrj6H0fSRUdXpA==');
define('SECURE_AUTH_SALT', 'Xp9vzo7oClTAk6NWSutKzVCM+R7y0JPFgRJaHE0M7SiO0TdtS7mN3gakHFH7jWjQEJtKNv55ZYURWq8Tt/EGbw==');
define('LOGGED_IN_SALT',   'J2fKMPVMCaBd4se58FYoBETBUYtzuctTw/jbkOA38Dj2GCgM295OnexVIr6mgd2Ea9sFcVhK3zSrQFZKhMeUuA==');
define('NONCE_SALT',       'SwjT/bEmz5IRN2e6wIuXZYiXVOlQ5WWcz16eIqYixrDpgfJrr5o2/gcyKm2rNU7V7nl8QGh+Lxuvda8jSYP7iw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
