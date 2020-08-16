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

// ** MySQL settings - You can get this info from your web host ** //

if (strstr($_SERVER['SERVER_NAME'], 'fictional-university.local')) {
	define( 'DB_NAME', 'local' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );
} else {
	define( 'DB_NAME', 'u107548975_eLdoy' );
	define( 'DB_USER', 'u107548975_8ZEhO' );
	define( 'DB_PASSWORD', 'Lo9ypdxK4I' );
	define( 'DB_HOST', 'mysql' );
}

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
define('AUTH_KEY',         'N81c2mG7d5cGhtjQpwTuNqf5iQGzvj7SvbjEfQNt7aCwH7stiDrFdXn9okKke205GMP3ugsiGyQ9+DAwYGTfcQ==');
define('SECURE_AUTH_KEY',  '17k0XLNQP3NOLwN3S7MNSbCaWGlGIFBzOYNucEzQzHEceIqlbRTeXYfT+evSJt3oFaZpjXO9gPx0Fgm+sqK8rw==');
define('LOGGED_IN_KEY',    't5FEBCNbmh3zveYwfBUNPaG4X0NrNfvUmXZyZhk7p6ItZnxFVhWxigN++c7ORN21z/OrVmkcUAaEyVSAX6xi6w==');
define('NONCE_KEY',        'EVujDiv9j4MDWBHWLhOQHI9/qGq1+KR7dNqzJY59i5f8ot5S06132wCh6oLaIrRsTZzB7brZRbzUAS46vY4jUA==');
define('AUTH_SALT',        'MggCBwGIunjuo9Gb+UNWBIrdZ3v5hcHCPrD0xuMTX0RdHOufMfQYjUFGgGgRKtVzqTLpzX77F+5xx+funElhKg==');
define('SECURE_AUTH_SALT', 'TzNF/ZzcFEsGtUbePLqaMwD/CVokCnuk6tk8buLDLcJUfNRZdkWwfd7DDQLgLp2PkF5f/2+B56ejsQNAb6zQZA==');
define('LOGGED_IN_SALT',   '6dy0UbDkLNUHVqBuDfAh4LgrkivcAFDR00O6o96jgjYpXALWLC7xV3CxFrgpXxNNr1ZhrTPwtp3XWQTs8VoqAg==');
define('NONCE_SALT',       'QfFpJTqBRK7XfDzzXDZrhwgU+NxtNeSHXCJjNDsZOogzJRFH80heHL5bUoTeANXR0pm5gHE4ZYhl4YeRQGkmcA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
