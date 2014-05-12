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
define('DB_NAME', 'kafkaslider');

/** MySQL database username */
define('DB_USER', 'kafkaslider');

/** MySQL database password */
define('DB_PASSWORD', '123qwe');

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
define('AUTH_KEY',         'K(ij9-!|y<m<3Epul&t;D-%^T$-/owAJ#ioGY?U+/[A6)j(P9OJ*@Gj{XuwDkq|-');
define('SECURE_AUTH_KEY',  ':{-T,rq.DZ74R$NKc}p$S#O}6<DkB%f.a(t606]ha<;$Jf +!c[~fj<|4fozRVIE');
define('LOGGED_IN_KEY',    'GI~b<-s~qkKa@N0&5?q+WX:-o~)pJ[]U#+&n]+z: h(Q/C#b@2N4`*T]x^.:;Rb-');
define('NONCE_KEY',        'TaZAY+3[!;8 xHwBEw&}C6d5;lT]%dYY<o$*6f-t-4Va)0-- Dj^]iZ>6a#v8P t');
define('AUTH_SALT',        '&z|uD4w|t|iij0PtPYzw~}lQ&%_)C:4G+9Ko+OonQ:v]b0?+#[MZ;28d;0yT1:i?');
define('SECURE_AUTH_SALT', '6ui8gZIhr|S;Y3q:zk?|9lN[z||V8ZJm7yYcH#)]S-Ytvd01jmDFAT2t q{9|+T+');
define('LOGGED_IN_SALT',   'y}{pAzj f@*ny4%%9qmdm(NLY*}-MX9Ox8CkJmFmMi:JpW|=AJ&VN^spgS2.<u:H');
define('NONCE_SALT',       'Nq&9}Zt-O+$}`1h2|Z[_/[[/C`<0kRkH)g@t#hi>4Pe4[ eC0?n[b/eX&8d%EWB+');

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
define('WPLANG', 'nl_NL');

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
