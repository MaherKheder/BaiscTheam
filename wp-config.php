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
define('DB_NAME', 'ecommerce');

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
define('AUTH_KEY',         '=kn$AJG<P>xI$g.|H(~YP8jR{kE%?^jP%|N_n5zr5vO_h][n9ZVbtWu_jL)k0Z1-');
define('SECURE_AUTH_KEY',  'FmveH+6uA&OuA287^.$haW^S3g63O|Mk3#;UI~7TM|^DSZDUhFk=EdaT9-Dpw/l(');
define('LOGGED_IN_KEY',    'O)BUZ>[GRp_HC8?H0IMpj~=+b%EF*s&!iv;dZ?Va%E5tM)$#xlPZkf,w=I~BC]@M');
define('NONCE_KEY',        'v3K2wCGfEM.V++e+LFW8 Y1%5;DlE8r$-*hG<4I93,v.s*p0)&MG9Xy4FoZ;i#i)');
define('AUTH_SALT',        'K=r%-#Tkipabqlh_BzD~L) u,&H a.)D*5*e>T^Ga2fE3(t):jX@@d^TjE(@w-k;');
define('SECURE_AUTH_SALT', 'XN.pBVUG$4DA1vn1O4BZ+f`5@.:W5he56i@BG>v+GsoK,Dqgk3cUY0tpRI!hW$jD');
define('LOGGED_IN_SALT',   'E2IQA}T]tS>fD||nbVh^O%_$<PS@X2uARXTgDq7#n9v#>2Zd9/m008)yz:f^rgS!');
define('NONCE_SALT',       '/>#W7`TG4ji{nQlQ*7Vr5C!XBcXgnsHdS`iL`-/[#_Sw+wFQe)3O]oW<t/3#gB/8');

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
