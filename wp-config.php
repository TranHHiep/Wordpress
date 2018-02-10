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
define('DB_NAME', 'webwordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '5<8ACDDN,- <w0/q-<5{w?sOnTV0UnUn@pO&dmHf5ccm0Ng&}$;(XS:q0igf`2jF');
define('SECURE_AUTH_KEY',  '[wGH}%k(/ZchCE&I+};31o<[5s+NmhZA=mG;-Rm/nLGE,m05-qc-euVd]UCw!:Ke');
define('LOGGED_IN_KEY',    'NAV7u! ,52Inl,H82t*o^qkq[*U/F|e&J.QA^J1Q`WpuNQ,DmcbXPB|<7J!ASW[r');
define('NONCE_KEY',        '[%zG<`R?VieZVKqf? $8U7]GrjQYY+2OF.j*k+D7nG+gsw*c(Mo*W>HO1=zXFM<6');
define('AUTH_SALT',        '_>nnCZ)K_ps/*9 c_4O_kB?NyRG-DPK,I63(Iij ,CT6&ZdSbBG$~bg,h{ZUFA.%');
define('SECURE_AUTH_SALT', 'h&xx>uq9q=-RtBZ0W^e<*UN,cRi3:_oCxi^{eCp2q6I^nv4i+QxlJOAT{PizyA-?');
define('LOGGED_IN_SALT',   'Eg/D$JUHVx&x+jY<TW r!OZ061R{*QsiDNA5HU0{kfX$):D5(o(5x&K*Hw]n}*yw');
define('NONCE_SALT',       'ZmI41I6#vGGVY8=hY9yq (0]H;1X8L?Zb*8)1/z4Lv+0?H!>+(O1=7&5T/`[8+6t');

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
