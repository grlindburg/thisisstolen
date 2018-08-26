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
define('DB_NAME', 'stolen');

/** MySQL database username */
define('DB_USER', 'gmoney');

/** MySQL database password */
define('DB_PASSWORD', 'hullo');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '&xJT#/N29ynonIrIiMJ5&-2}W=;Dt$iwU&g+n_Sl$coFn+LijS+u9#do$!Ed?}qL');
define('SECURE_AUTH_KEY',  'U8_{N{:4pmDgy=,XSf1=:,#)n5ZS<uB|byDgC;*R%M?;UW&WCRZP@q+>xkj,#vM.');
define('LOGGED_IN_KEY',    '.d2pw1[0C$c#mw*c|D|4-~k1QUPip:vWmzy*.[pB?y0Z+4!:+B1tCbey-J/qQ2p%');
define('NONCE_KEY',        'LoDdjRsk&9CF+2#=+G~>c6k?STx%*S2C[h9#Aq;FAnWfJ>bE*7fEBun[l$7HIz0m');
define('AUTH_SALT',        'fxXJsb/K93_Pr DV2lSN>7?XcHnF;h&MNgoCMf?`<3chlBy:[R/2>d(HcNF|F_);');
define('SECURE_AUTH_SALT', 'D;0+<&Q70<FF-a#qFbcpL>#dwxrXCDD{zcGgjqpib,]>z{P7UPn37!V6[9&>]f>E');
define('LOGGED_IN_SALT',   'y_n%S~f9%ht-jTF=HxmjlaIO8r<Ay!`0FHDUNxVBL|SVar;4HLj?085tDZ?f<vE)');
define('NONCE_SALT',       'vV?e}&O>Wp5Tfm9IobC+BjZDhez4qMSH`y+> 2n/;&QmeOs@F@fr^5WW.nG>jmgv');

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
