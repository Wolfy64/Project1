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
define('DB_NAME', '@Projet1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '^ZT`Z)>Uz46L$aqdIX%Re[^s5J.Di1rE.w{x=o_6KL`*Ky~L<SUjP=<@3QwPRTBD');
define('SECURE_AUTH_KEY',  't_5h64PW,#09~>=ZRmT6M;SaYtfr)b>K$Y`rak09~815@|P1Wg2+Wht:GPz8D5Oi');
define('LOGGED_IN_KEY',    'Q{^S~dIWhGYpyK7>^=[-108.B<s]1mM?iy3-P0Lwt3l#<K^!y{^-0+`j8}p$b;;F');
define('NONCE_KEY',        'wxD;:,]zeUO._&@CyH:#D 5EM}yWAxatu9`?]>tIK0;8-!:Yi{Kb&8XP[+Ny8:UX');
define('AUTH_SALT',        'X,:n9{qH%+~ve_)sCZ(<GKFoP>7^=M/IbP=F1D.rmGS9ZpG3JYkv=?<^Bkn+v6Z?');
define('SECURE_AUTH_SALT', 'y]Pt.C[Jzf_q+AWT!yw=SFGKpOO6/n$yME-Yh:pUMBx#UI,*dM)/R%o4Z67y<f6,');
define('LOGGED_IN_SALT',   '<:Et{qRQ,&~q{@tdlux<`}K<j<8$Hr|@(l9[d1t}@Y4P>HM:mu57D0VAY+C]#e*g');
define('NONCE_SALT',       'T:Y_D86e&ZhH8MNrLnlbYFl-K-)80)M)o$.USEVp7y;JE9|RNZPC=s6S$y%v5!uL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'project1_';

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
