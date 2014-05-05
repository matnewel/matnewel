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
define('DB_NAME', 'matnewel');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '(;Qvoq%;Jyy8KaXt1B& ;=Np# t3r=[iwh!.H#m,0]p)?w/|Z|47Y&$xcV[@HCrx');
define('SECURE_AUTH_KEY',  '-EF6NEz66@HyJ|cM6qU}04Z<5_? <n^Js5;_~l=c|KFHBkGhz/<G%x[8:xPQ+ZWH');
define('LOGGED_IN_KEY',    'X6--5$rQx:V2.rq|NLAf,OfxX<G#ySdiU5NU?ecys]j[b#ghW{l|{m|6+de%5>H1');
define('NONCE_KEY',        ':=$)OS6UuHs|v!=@;Y{2NQ-t%#C:6i7f|g*_d.4Rpr1<o&U_7g=/]J`+M^DIi;,u');
define('AUTH_SALT',        'j9Nr-!foqFx)RAZnx2bYbZ4~W{RAX;ixnACAUqKwD9!p29.HI7+fD6a9:/U}zhI-');
define('SECURE_AUTH_SALT', 'o~PM: Y;-#a|<rOpEb{PtQdrLn=t5%G^cn}Wg@Jw#Jm|#_&P6uz3AZ-}KfH^%4]I');
define('LOGGED_IN_SALT',   'LMk!NE[t4k9WUl(OdnZkd^)*%IA/iYxu+--bl-Ii||-K+-mk6}*T#WemM{=a@[zd');
define('NONCE_SALT',       'gs.dztyaISB2d+?lVAeM$aFS&`P4|KhW;>AhK@yU#NxPprs6I_UFDxV$blY}YEJJ');
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
