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
define('DB_NAME', 'conpolco_wp1');

/** MySQL database username */
define('DB_USER', 'conpolco_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'Q]0dNGm2b~hNSF*#4#.64]~5');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'owcR7WqU4epw7imShMZCw7640RZkahlZ6hOiVNSNXT8GROiPYj3eJST5CQ0fnT1e');
define('SECURE_AUTH_KEY',  'YaLRuRPzMxl67Scrx5BSwIUYuTuwTxev5u2R00fVzdpRCp3mQLV0mFaZY2cpH9SD');
define('LOGGED_IN_KEY',    'sFaoaKlQStiHrZRNtn4tzHLjro7npcjE8OLEerqa7UaMSjdAxXR836z7lrGAQdr1');
define('NONCE_KEY',        'pYyIolIMFWjrmuU68Ix6UTPUR51Z5ZkTWHOHhh5k8FHiShNih1UgsnjJxa4A7zj0');
define('AUTH_SALT',        'Ne2WmxBeWGHrfdJ4bFvxKYolgogzfjwLy8ePsXCJFFtjINZzTVxk75ws1Jajd1rg');
define('SECURE_AUTH_SALT', '9D1Col5L3mAdBZUV3FDbnZuQosf3GZc93Jn9IIBtA28S1hGxOa1sUzp7sBhTjFgs');
define('LOGGED_IN_SALT',   'gjncbDfdRqUMnGI5dYUGLph3XFiFQiA5XvWUwhMXBzGuQSxlb7Bsdi788blBuAhL');
define('NONCE_SALT',       'zpeZQvPlAUTpngUMoyrk6lPAqDfwHyIFSg0VwtF4hCzP3yoX5eOfjfbGlVcF5i4B');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
