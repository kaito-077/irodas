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
define('AUTH_KEY',         'XeVDcR97tDhYFn29thPwbt223WtzKX15lSOBUgBuOyxihE9yY4GdgjmGpMmw+8qsdps2GlxrqQAHd1G8lY6YeA==');
define('SECURE_AUTH_KEY',  'DlK2E1CvSOYZnR4dI8wJ9VBaS/7SHSVA2HTv9nu/TsziBJpqJUQW+T8OhQayDvDFfGZbGMkVqCN6rkv/fQ3arA==');
define('LOGGED_IN_KEY',    'mWweT/46MnLiwf9HtErCSDsAOHT50JH5Omu678WV7OlGZFxm+RkpBec/Z+Wy8q5OFuLiIN3LgS+5Ok6oKRO3hQ==');
define('NONCE_KEY',        'aYfrAuYWQO2xIlTLuZVcCxdkC/QRnRDw8fcwWRwmBkBcsLDHuMbMHU6EfTh4ZGBNF6xRC4cxagpw1LTVKtRD/w==');
define('AUTH_SALT',        'yvJA4yIPSQjR+8IPVt94nU6qrit2SxcHxg2aYLMyVmk9XRtQK01nh6CWywvqYMGeS6mfq0KY8MdqZplqH+uHbQ==');
define('SECURE_AUTH_SALT', 'aQm/gmam2IghGmuz5cqcVVdmT390nufjt1XEUf4uHnc2ijjnv41NUpGwZC7LR80UfG5HUi5vSIIQ2TUkIvuQQg==');
define('LOGGED_IN_SALT',   '75gPPAoJjIc2X+oW6IXacQ/rM+mzgpxnCe6zHb9d4PxqL5rgOCEjl+MAmg29kR5mF9etepfPha38+sTemRjorA==');
define('NONCE_SALT',       'H7t4QeGeioRiBW0Jm1FL60RzDxUEJYG9OdzxbpZWmtRehDbaItKtGJUDOLn/gVOGy1oeY35cjiqMyGpUcRtWBQ==');

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
