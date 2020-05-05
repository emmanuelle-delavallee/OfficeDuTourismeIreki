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
define( 'DB_NAME', 'dbs220339' );

/** MySQL database username */
define( 'DB_USER', 'dbu258681' );

/** MySQL database password */
define( 'DB_PASSWORD', '#OPN3m!59#3r3' );

/** MySQL hostname */
define( 'DB_HOST', 'db5000225688.hosting-data.io' );

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
define('AUTH_KEY',         'KAIQkWefDQouIr4HawWTxRz8JAdZcL6dKDpIb5KfnpBykFvp0cKBk2ODmTBj1/qUypmtJQ6fHcgA361i2o6Wyw==');
define('SECURE_AUTH_KEY',  'NO6HEj+9eZCcw7qW6qWuctbjMlA1LEHxdVH+rixBDNtR85w2U3HBbmw27C6ztG+SS83ZRbYvtFnzsAYfj8iVpQ==');
define('LOGGED_IN_KEY',    'M1GZgldLukGOGjLsyIzBqgwf1bzUEKYXlYEmdQJMr1tHlSgD/30gEwNHfx6JlW4v9zbSyxIyfgxnlWv+nzxJQA==');
define('NONCE_KEY',        'W5wGix7z5xb3rXftKpJXv/giRAzh4movks6oBmu0zLMUK+xgsJx9TM7ow3nGo6gNWa9zDY7CK7oOSnOK+gUygg==');
define('AUTH_SALT',        'mxV+jZrom1bdd3pnb47yw+aQqNuhVK1NlkQh/GwVRiw47ks/bFh6534vaR5pKsQakgJSlU0Niabxa/PTgu8Nvw==');
define('SECURE_AUTH_SALT', 'J60clBSF7vecu9t5nDH/6TuUgZxGI9JIMhiCnfub49SFU8SnW2ruaXCWUT7nAWUEKw2zjBW50pYbppwP2M8oFg==');
define('LOGGED_IN_SALT',   'uy1iYF73F04Rl1pjOOgZjKPseed8y7G54n0WsEmom9Iqw+yYyFSV8JbQuhacAbZFZCvWXsTCcfZtBFfDIBF1LQ==');
define('NONCE_SALT',       'SF8PbzSytAoUezCANGeJbrYEZ0XrLYd8Y+9rb0NRqSIjopwZrJVK9gFuIBuPaerYYLwcCHgZbxrgBb729LLsuA==');

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
