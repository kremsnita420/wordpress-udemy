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
define('DB_NAME', 'local');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'root');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', true);
}

if (!defined('DISABLE_FATAL_ERROR_HANDLER')) {
	define('DISABLE_FATAL_ERROR_HANDLER', true);
}



define('AUTH_KEY',         'wyzk6sSMHK2TaTx9SaYBdKG1SJzM7Apds5Oe3/nH21wCMp96oa0j4qgS0/FL4fNFM4Anf4ut/HQpVKKAl7zzkw==');
define('SECURE_AUTH_KEY',  '03SuXY3JlWxGWeBrrFow4zIrkkNK6Xl6ZUw2smGkCvfPqEiDSJyDnsvQkawKReRBrbJ+7bYxZ8IZrQb4CaHdUw==');
define('LOGGED_IN_KEY',    'Vf+xMUbZjkw5TooeqC4VvpwJfMCaGaJFoFyxWF+3c0uNvBz6kuLSnPHiKWH43q7Ecu0vtL795jwuH5G72i+ugw==');
define('NONCE_KEY',        '0/WqPWwSKUM0UP58CxFGdlHmP6E2nPKaCUuXCRSSngXRmu8V8Fk9yG4ZFVJO0M+9Mp+i8rZ2e5t3ZNkaguj52w==');
define('AUTH_SALT',        'BNIgbQ6DHzwDeyg39FHA8U32brXG/sd+j3becKFsDwDAQkRPO8egz60VqfNO2+AdXipbCmgMIOQy3lHs6Qg/CA==');
define('SECURE_AUTH_SALT', 'wV+haqaTXZjl53IbOpIvK+yJ8/vEvGRXufcy62u4aGrvVAw2/Tf6Rkqcc9HEReyVp3lUoFB2VMoCj1fiQMMgGg==');
define('LOGGED_IN_SALT',   'OE5VtlvF3FOnioVnqB2qO+MbF8WqlwL4I/LORPKpSc81mof3aznt2Kh6Bg67g6Xeoora+vehvY5BjMwqJo/muQ==');
define('NONCE_SALT',       'Hpj9evIBXSi365rvNXwG/7nM/4OMT7AiExutjRLr2y79fzhBozFDQDmlMDJeGKZvP8tT0xXQne+uR7Dgn19R5w==');
define('WP_ENVIRONMENT_TYPE', 'local');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
