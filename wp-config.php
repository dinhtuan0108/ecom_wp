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
define('DB_NAME', 'ecomwp');

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
define('AUTH_KEY',         'P622.{doKnbOUS gq_Ib&@G6jtw^P:OA9[_ vklSM( h+9pM*MXdDZ?/>2>:,$w`');
define('SECURE_AUTH_KEY',  'k:L./?)k1Xlqzt+^3<AI:HZ59u!j;#JxzjY_1MC)}u,Pn;$_oz[GQ1moFasYG=5I');
define('LOGGED_IN_KEY',    'u(#u6xdOklHq)+hnNzT?#H@rt0dH:*T=IY[U/;7OLChaH))5u]DP%# %!`E|Rp~`');
define('NONCE_KEY',        'Yy kp]WoC%&>6bjb1YrW6$Lq2rQ+9O4Cd]]r~aR=FJ{>`E}cnh_ve9/w9P]MxFJR');
define('AUTH_SALT',        'Ss|<OW:qIv<(Pe)?u$-,_dgUc2Q)|c2;[V$6j2~Y(*Z*[axs6Ldji^AUY< #Mp@]');
define('SECURE_AUTH_SALT', 'Y{,_up%u|bNU|KauI%a)WW}j;uGlR`CQ]m(u8$Yl/^XJ^RCGB]s@2pfR`$:qQ 9P');
define('LOGGED_IN_SALT',   'Dq{Hnk_vN>:b%`=<:vM$*(Wn-b4NshQhW|/`uBIZXE4lnNRDr;p*y/uGD?&7k$`c');
define('NONCE_SALT',       ' qsCr-l<D+pC*>ujMyrK[(^Mv?ed&LA$>r9t*m&d}HBu,0;Vy<<[[JlZzMG|vmDE');

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
