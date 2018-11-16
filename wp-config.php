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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'mysql');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '1@iYoZ9eXIR~~hI0QGMqv8cr6Y;&zaj>.+PQ28VURkQxMY-U!YdTpPM}aAX`_-oS');
define('SECURE_AUTH_KEY',  'oS&^00outIyv~wx+*A/hy]]:!*qlC6AXdX4ip$Iv|&Eq^X;`Ixa^r];V=7D;TJG*');
define('LOGGED_IN_KEY',    'PExeXA-_$G%T{v/<T/H;DXntkeTE9m1sJEd!q9]ZR7sU8K}VlMRECyi]:S91D%;B');
define('NONCE_KEY',        ',TG &!!M?})Y<]dDRkr+9)fPZ@TEkHf#_xI_@rwF$4X!FgT@a(@ZbrxV=l.~1 !X');
define('AUTH_SALT',        '0[ qd~LF/PTOhF~U!thIqkn!dU-VU3l15/EgCr;4(~2kJtAuJ aAr`&aBSSyX=-_');
define('SECURE_AUTH_SALT', '}+12!R3zC); &Rr#r>(>o^><L0ZEE)ig%+kLG:h{^H0^PMsJLfSo&6w-X9>!U;;7');
define('LOGGED_IN_SALT',   'zBJJ=p}`y2FHcvVS4@5nP7=R:ImTQS`<A_mXUrvaUE+DrWOuE{n@EpLe%s]1BJ(.');
define('NONCE_SALT',       'Qb88$GwWa{^xju}sBk+GRm-rQrmzfzI@}-^JwbDUA_HE-BDQ:[`v|^25!YK,k;B:');

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
