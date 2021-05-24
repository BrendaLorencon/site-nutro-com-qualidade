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
define('AUTH_KEY',         'u99LAdo4YGfMg4KEapyqiamgolG+nR4YGrYCgh4WwDycYSDylOwkWOvINk6yMPPbcnW4FmzlDKhsIMs/mYoMPA==');
define('SECURE_AUTH_KEY',  'vP2oaq493Sn579DW/5/ryst34HmfnGGIFXK24XGsAXbEL8DMVxxQdcy8FuJLpFSptISLld2X1nVqAqg5aunluQ==');
define('LOGGED_IN_KEY',    'IQUeYLPVD1F/tVTUiHhDHL6+q12JHXC/osEjbT8S5Fqk3eYYGrhrPhnlXWqjdZkeSwoOKLjzZF/BpdUirtHxIg==');
define('NONCE_KEY',        'Dg512kOzPW/AaJHSrc2aJbu9WWnriBPFLLZPQo9v8/ru4LarLR7VryxpMkJlWINGRlh8PsSjGQFNac+J1a9cFQ==');
define('AUTH_SALT',        '+GwkUvlgu1jHFmA5423uScNHM0/BxIj7czyZPU20p9ke2tsnFobF7KcLv5BgEwCzr/D3OJWmx8x326DmUg+lGw==');
define('SECURE_AUTH_SALT', 'yv7akYP085Xj2ZHlp4mJu6JXYTCg0lyxzDoA58oyvuAZ44RBwEn8BUxp1rWPa5xMaGZUYIOp0yUwvsOrSb3UPQ==');
define('LOGGED_IN_SALT',   'qwvLxTqOkyr2cT8GVWtEf57o9U7SDYB1/e4h6GVSsHbJQ6BerxNffx5rn02MuzvMFJdORnnl+xy/h2fmYdMSnw==');
define('NONCE_SALT',       'q67ZZtAIYPaxdIfYTiltixEWELMAEsjG5GvWHL7Hm+9vIKpiB2EcinlT/IM8tPF+NjZM/SwH/8tS92Sp4+2UNw==');

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
