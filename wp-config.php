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
define('DB_NAME', 'idescoor_gestic');

/** MySQL database username */
define('DB_USER', 'idescoor_root');

/** MySQL database password */
define('DB_PASSWORD', 'gAQ{q=fFN0ll');

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
define('AUTH_KEY',         '#LIwm<z5(^3=HftiX&7^4$!In[B;D)I)Z!:)o?~Bx6vZc6+5z:q1@`{,Y:56}^7`');
define('SECURE_AUTH_KEY',  '3h(g8-jZo<?jGdG gXnwub2rUParUt8)tr%+=7)i@20<]K%h&wx:rgBM_vp~0r<&');
define('LOGGED_IN_KEY',    'ua,4{$r$rjJXx(}$E:|TDC}L-xbV;<7T+!&^yZPY^`uOXsNB|!:2W5:&x5*)H-2V');
define('NONCE_KEY',        '[.n+i:Br?n*Er+qiQ%p+%w)~XftDr+sq_0w;O3`$6zO+alW?%X1@@q:G6,k<G2+`');
define('AUTH_SALT',        'JN15Q`D/e-|<>/Si!I7L-75>(uGUFLvK)~ot-[*nYdK5^]a!fnC(10?|-E?+v|gg');
define('SECURE_AUTH_SALT', 'C8Zl=_M$1xC8{Oz7MhZU3h,g^,GPy}->A4/Y@+Jt0=go-(;l2I~+-jV-[Y+8m^PI');
define('LOGGED_IN_SALT',   'w.j^~L-G]YQDLzx &kE]-I i<o{<d{f-rPcx QIwClNp&tV!(-^ehIP3(s !@5PR');
define('NONCE_SALT',       'wmFR+>hZXm0!>J(I$D[zx,e0&,PypZ;)hD+hrhA{,]qcQC?Oy!5fbJUY>(Z$+yeb');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
