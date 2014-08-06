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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         'Di&89s|QJ]:3bA1H=4YF(LP_wf6Nv{~Am,njZEcX5Uh>u N(]ek[[+nCujCj+4L=');
define('SECURE_AUTH_KEY',  'li~$`ADg@qwfNZ5;~2y7IKfS(jshXR%A[J2|l%+=:*!:c%FabTK.Y2a!pHFmj6g.');
define('LOGGED_IN_KEY',    '|j*O#7Jx|A@nXTaV49B!++iMvEp-xbENE2w{68h+z9e-vfWxvhpNok3N@NZ9y+qu');
define('NONCE_KEY',        'XTVCSfWLC^eMHDW v_-|ijP<xI:|yE)XDTMdnBSO4EX~Fm }AS4x+Wh(KoN]}0Lr');
define('AUTH_SALT',        'gjm$/0`z?p=ElThJ+jy(c>7bIA$p-C=CP(+0P6hZV3-C$)`6)*[4/Guw=|]-sV`K');
define('SECURE_AUTH_SALT', '%|iNi@5|GEhMW~+4`H#K~y8B/U*Pg0(l@Zc|:,;C3$Tlon+r0Qcjj+<AVw-c5M+i');
define('LOGGED_IN_SALT',   '[@){&lPc.>KO]3^|1IocA ~N[haDnsA7O6-l~pL2Q&7=$|*+}LwB~^<efiEi*tM/');
define('NONCE_SALT',       'H_p=BvDxSYNW=C]^kn$|xG?NZQH/Dr,!nFf.O+M+ {^c5M62ebU*zN0po&,gfRa}');

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
