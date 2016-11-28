<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'hoteles');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         '7z8zc[l=i 5SIL45dB/+-t`TvMx~WX`[H d~6^|`/9^)A#n&mY[:*e Tj;X+]<Tt');
define('SECURE_AUTH_KEY',  'kHH5{L+8G>3K7<h;ikuOHp|;*PuwmTX=P-esI_s}ISA!ZuKuSg[q|p6}x 4s4q9;');
define('LOGGED_IN_KEY',    'C&--44O5HdR<ju5L3:>^-}C1/wKAHNAwkD18fq$r+~/_,Y.9lyLf)`IW#C$_eTe@');
define('NONCE_KEY',        '|Xzxsd_Xg[CmEaoQg15Aj2kf_XecOZ4qP6Fy+~Fz$|$ :kYzVeRR?c9yI@/rSny`');
define('AUTH_SALT',        'oNrN@Lr.S&OXQw3i&,|Y]bj~~OsQj($tiqlj,A;k07#~b~-{s`.qx{m9+4/1_s<)');
define('SECURE_AUTH_SALT', 'JdOMOkNX )IhCb& ^eOt~8e2%s#X0+#R(+ml3@[Y|c@!Hl?tp#PEO;{VS05a}cVf');
define('LOGGED_IN_SALT',   '8IU;|F3.-8QwB^z3(JTOD5;^_JwYU.1LD_i2GF<R=iAFy}8|14EJRsZcW4+Xuz^ ');
define('NONCE_SALT',       ':GR-@-]zR#>Oz|0`d8?RRTC!:.|r;,fN-9Z|sN-ge2iK#$bM*$IcJZq:+oWPQ*H>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ht_';

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
