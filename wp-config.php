<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wptest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '8d(_hOw0fFX)$W_m3~! lvL_%;Pz(Ce9;{]<+qIpI0|ND9NC^`+$W9TB#RhhL2b}');
define('SECURE_AUTH_KEY',  'NNz9*5=]4+<<GkkOJYvB}k>6GvFGZ(Xi&Fs+v|apdF2tg@-GXB9)Qc_z$*%e^cD[');
define('LOGGED_IN_KEY',    'vdz{7||]LN4Io(T$_iD rD)wgq,KAX4tmQk?)=:s6vQp^Q99+5D*JH[H0jfwq[*2');
define('NONCE_KEY',        'eM]_9&=N,P>Ok;wvz!([nJCi|~^H<!K8UC+|%5t]M2FV`sGE-y>0-*c2hP6l.%h4');
define('AUTH_SALT',        '_m!nrnDb%-&40s3FdA%|gKlv-!mMX@+b_yTy|,W+p+x6Xx7>hj/*w^A8*#9D^-S9');
define('SECURE_AUTH_SALT', 'fxjyhw{p-IL{YU6o9upu0RP`lbz/Lm:erXfRGr=2YoL+f)8dI@b<QR~Xsf?}DL]u');
define('LOGGED_IN_SALT',   'x|Xx~eQOc6=/dZz3m~#*F^UODRvX9ElU$O,Gc5XX-~-ru!|Iwb +Lhp+O|h!EE!j');
define('NONCE_SALT',       'b%,Y|FoJ*LAZbXoE2.to5Ax}y>hdDS@cKrbN:v4F<oCo5B7yIF1||8|=ix9F-&~e');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
