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
define('DB_NAME', 'site_2_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'NjL2qnQ4140BwB72mwCZD,k9utSQ5.<&r4~8K|Wgna{#m+9;e6VP1-Hyj<g?cZ[ ');
define('SECURE_AUTH_KEY',  '~~_s%9IW/gm9*k[dos]Fn)|^{.+E^D|-zjrUH)}MY*-R;n8{(%ypcX%0*zz<%gxF');
define('LOGGED_IN_KEY',    'w{pvrAb4a/]H=/QpS[!*v|-j4R;<7Lnp!IzX[s|Zss9XIGZc(|B$&eSTa?H|C9Yl');
define('NONCE_KEY',        'H ~;(50ZCxM7-sF4*+$o9-/%:=KRD8_nOn+e]_z6y<-obI,bsKDwV-M72w7;Afgc');
define('AUTH_SALT',        'qWK2Uvrqk_bXHxY8nY@(KC506x4i,+nP,jD5*kVDtmuO$ z&Qs@gbqEhtrpb@!V4');
define('SECURE_AUTH_SALT', 'c{`VfJ@-uenI-M;gj-e^F0-n.XGbjhC+xDQLF1Lkz-)WTj-1&J%QBXE_Uymw[jVu');
define('LOGGED_IN_SALT',   'asr!ay[N;|j[KvP!|G6NEaz(>A!*++nxw)?_-:q-gVUD)!>cYXQ=i85MoRT+7&.2');
define('NONCE_SALT',       'Ibv[+x!~tT5vWQL#%9bqIaL+g&fr[B?{h~H6BT+W1r s|Oj +zCts+x#m`N#<Fv>');

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
