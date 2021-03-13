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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '&i3)V9 @!c,<C|VI9Rb#NArqO^1N:oM9xgG|%Bn;X+7L`;rqa1bR!WPN|awgJD7-');
define('SECURE_AUTH_KEY',  '#A3Dy(${9v4V`}D<Q$Vh}Rw`ZvefW.!oA=Hf;2?pC5|M4o[`;SqdbIkIX>-~~IUU');
define('LOGGED_IN_KEY',    '  3+q!Tco8_}78OB|fk+4@5}jyg:{X;3W|]dLNt/rU%j-`~Ft^z=|2%NE92n^6|!');
define('NONCE_KEY',        '&D4U2PaF&&/*,`W6, #Y|{px-__:)>{*~i7Hrr`*P)Z KsATp:N6D^(ZU{^gNaFS');
define('AUTH_SALT',        'R0qi:c_sS{^CWN+e&-EF8^4[7}]n*9^j;R k(zFs2_a]sh|bN#fz?TKxQg<A%&Nz');
define('SECURE_AUTH_SALT', '<LYj1a* .5yiRCjt2gd?+@!|/t-pZW|syvoy^cwLsaGgLQ-}*#o&TCLg;2@i~MWO');
define('LOGGED_IN_SALT',   '+f<&_4-&=}Mw(7D@+q7%ezNY*Gb9B?W>Hu$(?4U4z)Qy*!H?rxyTdY}Q-@M.?_ 0');
define('NONCE_SALT',       'uwgtxk8>|6|2=-_?wc/-A5z[*QI}2H+bfT{C{Fn>mT#@,F_Q:c`c|Kn]+I+I3:AF');

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

define('FS_METHOD', 'direct');
