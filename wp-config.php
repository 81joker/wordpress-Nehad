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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'v&44i{V:4o^3#Hx8[]4zyGR?h~vJlgg+&!HgqvFYD!~z-WES9?=BFHsrPVHm)Siw');
define('SECURE_AUTH_KEY',  '_kAATF0>~X|xJ<rnW[1hL~8SO7<88x&>{mb~zg`Lqr`$h# Z?4ZBmYQS:M.QNj,B');
define('LOGGED_IN_KEY',    '&OhUH=GKjkt3.PClzoI)nxF2{^V64x@l5>N9A]cnhOH_0U&nxm~`a|`57Mlx7^9&');
define('NONCE_KEY',        'p=M0Qt=z)gw9TbxNCCZ:&}rJ6+cT2aST#6|ezXf4KQxF$w5cJ61HD&]PB$K!vgoj');
define('AUTH_SALT',        'Y|OXW7&8cC<nMWniF&{.R^$E)|/ugEP3NDlx8fu<nKTdFv)%Ine~|%#QXPi2[0qS');
define('SECURE_AUTH_SALT', 'Y{d{Xf@,N!LHCss>i=0z)tb-B{*/)XJ`{h65lEBpQ_(zRPS.aO^n2_>;Du0hZ)qQ');
define('LOGGED_IN_SALT',   '[hU1CJs+<F]$w%9@1mJ(=q2*{/Xkx:Jp{h._vs E]~Yf&i##jln8An}YhS3,+NQA');
define('NONCE_SALT',       '0&.M=;dwsuU8r#|S$M_tSLHMpvM5In|eAWAar~S?rYdREHY(s+t5_obAZ[MK|i4a');

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
