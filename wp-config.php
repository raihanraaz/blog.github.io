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
define( 'DB_NAME', 'raazwiki_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'qR(]P/C#i[a>M8T${yJL]dU><f+UfD1J9LgB3A)!&W:|.0Myd`-n,bR^!V=0#D>x' );
define( 'SECURE_AUTH_KEY',  'DBxtHY0/S-6y?+a#XDw4jtm+H9HdX@_b({+3,^$Q:U(<m~.H[:y0AUDv9^g3bJ<Y' );
define( 'LOGGED_IN_KEY',    '.u-N:G#q~WO4p0sf}*-.nKbM-MJnw&@JC2P#JUmKk6wOG s7[~; tjLOHI-.hl-~' );
define( 'NONCE_KEY',        'A$fH[MpE0m3`Ej!4yIqt-{vN_YZ(53sl{=,G^8QR{og;@M.FG1K$Utx>OKh  q!F' );
define( 'AUTH_SALT',        'mj?GtFa$wpGjH:D<)x;Z-R0A4FqiM9!y<9KR0;D^kVW8zh2x`koh{q[d4v@D;{}<' );
define( 'SECURE_AUTH_SALT', 'eh6A%z:VPu&SI@P(a]j:tHrZhSe{t hn?~sJv3ntE!r=S50]fDp<Pj&`@@D#{IVf' );
define( 'LOGGED_IN_SALT',   'MK*:Y:?k2hy5P4-:FK`;(234.~^@-$>8~s@+~o?1=KS/&R#4k_!p>[%UdvD?q*J|' );
define( 'NONCE_SALT',       'R%d*:mE<7mFqQ>=%e8h.1RuCv#Ku};|I[:G).pwjAWgvBA&I|U8hHQuY+wH_QfUe' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
