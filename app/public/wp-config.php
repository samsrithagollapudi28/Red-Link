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
define('AUTH_KEY',         'T7mfgHeLBSzMW0X1EKXJG1igiHMc3SnbgW+bYecdkbe2KFQHGmD+d84gQFWd3M55EfCOEnpsH8swyMUfLPlV9g==');
define('SECURE_AUTH_KEY',  'mP8rKgX8gpxhLAYR7MUtVtHDPclP1bRzDh+27yt3rfcAjW5rfjJg2j/lIIZznUsnzMCEEHswWgRQ3CptA3Xvwg==');
define('LOGGED_IN_KEY',    'ql4XEZ5pGR7IYmAS+zy50QxefsZHNtiSAwnl2b0kyAuX0wAWRVQKqtboMSI0nD1kNuiFJyyhnfOeZvTgpVkRvw==');
define('NONCE_KEY',        'Eba7oBZwzPo0+wvLu2TDnbd4FKdHoCLV1SBE51JHru+VrT9Jv7F8+gQhLgxBYOh7wZmIom/6sMjqNJ1s5VDy/A==');
define('AUTH_SALT',        'vJ4UhElSw5ND36lEwLelGhPI+GjfoOkM7jvc5qw0EPubxAqdxb4fYA/8fD+ljoxmfoYd1Med3atsfC4Ci4re9A==');
define('SECURE_AUTH_SALT', 'cmMiDGJvBsiieKOWUF7Jd5CVFMtC40cZVHkvMfdDwij7oUnandMNRZZfYUpMcP+wPwhpJuj/qSZf1+bIZDfkpA==');
define('LOGGED_IN_SALT',   'J4Y3L5UnzisQ0C/xH8Wj5Zp3gfQRWmSQsSVYt+Y2XleIl1VIjLjpu+MTLBLZ58sJ+os0Er0zEIm/NUVyM/PyHg==');
define('NONCE_SALT',       'Rhe8DKr5K8lyf+X/ipAT1+CRmoinYpqJhYatQMWubL7JwXqojDyM53zWEoMkZX8ZG+W+iDA99yrJleESMSitAw==');

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
