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
define( 'DB_NAME', 'Brief7' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '@xSjn,+t_OcqE.ma#xmq!Aojk7M+Qem-W|6aIJty6udg;z <U8VD>~1bifu#Gm`D' );
define( 'SECURE_AUTH_KEY',  'd4D!^!l]Ieu9bWugF x>KY4%54WlcAWFs[8q]?t=yOX]bVdnxUb1IfV$s1t6M}(q' );
define( 'LOGGED_IN_KEY',    'Az+R~K{!gtjM71X#.R3FVhIa_@@G97m!P)5~L1Oyq9 EMq]Pi@#6XM9Aq ;,E40{' );
define( 'NONCE_KEY',        'OmBr,s]8/&hFcz7/JP)6k4BI!#@>C=si/5myhZsvTe+iDp!mv|[b&EM6t{[d/[{.' );
define( 'AUTH_SALT',        ' piv,|lM%+U!,]1[!4?wjH6h-2^EZ1%?[;w`7HV2>cRUe/qU~lu5D5U~s$-KB_OH' );
define( 'SECURE_AUTH_SALT', 'Tk`TO*G_f+5nF#-sE%0EZXN$6.-:4Z`4<PF;IQ;CwkvT&`<>7l]FU~e1khaI;6c*' );
define( 'LOGGED_IN_SALT',   'j@M.1,A3e!x/QZiG]P!U5k e?Z,lnaJS`xnicrn|=6MwHqi:t@%.r@mstACf^OgP' );
define( 'NONCE_SALT',       'vGH=z37#P!!WhIq?;o6St^<f)jB%bW~%7M/ DV^Iz)=<ov&5M/7Ko2M:wJr-0;0Y' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
