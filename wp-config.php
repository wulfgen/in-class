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
define('DB_NAME', 'di_wordpress_0813');

/** MySQL database username */
define('DB_USER', 'di_wp_0813');

/** MySQL database password */
define('DB_PASSWORD', 'RTNUUsQZ2BvAaKsD');

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
define('AUTH_KEY',         '[!-,Da9MCH%z9{[^jC!h%Psz}r;VHD+)gaI;P WC<`$?kucy:fkVW??LZj-p!mGQ');
define('SECURE_AUTH_KEY',  '1@oS1c2Rj(=FH-Tisg)m[;GX5-hYK2SZ#xVO*FK6hzCs;Y },/8V/~B}&nZQas6P');
define('LOGGED_IN_KEY',    'm(|VSzg=.[|{z8??[+u}PsVPqo=TN>C% 0 VnW->-/Os#<Twof=ZsH &|C|5S^{P');
define('NONCE_KEY',        'hCgu_yHgM$(]jOnW67%`JOJCy<jUcs7I}uiMBW_9|j!+`iD@2KS|[f|N!Bq5L.2]');
define('AUTH_SALT',        '.f?.%_dsVHmh?K3N3m+{mkDR+kLW*U=;$+G$T@Up}D&uHMQ2cmR~E]C~E{-qqn$i');
define('SECURE_AUTH_SALT', 'z.YffuVQ*t~/:q-dd, /u+|5b0is%4wb`/?_v[n(|{nw%_pFaOf4[*r_0`wdmJ4a');
define('LOGGED_IN_SALT',   's<4+i),j]3oQy^u!~8Pe0mt/Y3B:P=hm0V^{h4D2J.To}> #l)[YlO*a)QnQ*9AG');
define('NONCE_SALT',       '-K(x@h:%eL^A=|w|Pj#]O>`&F-3|-](tu.K*Wo-dI#zQtktV-%|kg {lxuV%WP?X');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'di_';

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
