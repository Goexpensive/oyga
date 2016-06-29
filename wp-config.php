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
$url = parse_url(getenv('DATABASE_URL') ? getenv('DATABASE_URL') : getenv('OYGA_CLEARDB_DATABASE_URL'));

define('DB_NAME', trim($url['path'], '/'));

/** MySQL database username */
define('DB_USER', $url['user']);

/** MySQL database password */
define('DB_PASSWORD', $url['pass']);

/** MySQL hostname */
define('DB_HOST', $url['host']);

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
define('AUTH_KEY',         'OIj?y9`iEMH538B/`3?Jxre|ulm.8#SH+]wrVhwgzKTGWCCrf|1[T/!-zeV@gXx1');
define('SECURE_AUTH_KEY',  '7C-s|q[(b0R.5M}A$MJt~{x8!~2U)!D{vb|WB1,yuco[NH:AS<%l1Mzp$`^W6k9b');
define('LOGGED_IN_KEY',    '1>V4weK73@E$#|&27tg_{`M,{[xx{?7_FZTse7XL$rkvSK&y*7(osiL!aUA$W(S0');
define('NONCE_KEY',        'T2axn2lipZW QkuJh,0+BW{kKZtPUv[Vx!2]o/S8vb^tf|xwSB4Iq|*?#9?|1y3;');
define('AUTH_SALT',        'mu!=bpE-+7+?z8zW5VNT(ki#WLMo@lDV%d4DiwD&/* _}8KvY>`i>y7%,nD2|O#T');
define('SECURE_AUTH_SALT', '^PVcI;BhYjeD9Is:2gjfXRM+C)c9|nG38{?d1Zg`jQVAF@cskbu^D-(pkjNO=B+v');
define('LOGGED_IN_SALT',   'sPG<@Fb;8Z2J}cPp)ThH]i:OtmVk&X%H6%7Py4y|j[+EUu%#w]VUO5fK5@-,L<o1');
define('NONCE_SALT',       '4cs+<-p3YR5TRJi>DCPeDJ_]?u([dp<1Otw4N0S4idJc[=/+Vz~N~|TFyTz$nL |');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'oygawp_';

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
