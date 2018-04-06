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
define('DB_NAME', 'webdesi2_phr-centers');

/** MySQL database username */
define('DB_USER', 'webdesi2_phr');

/** MySQL database password */
define('DB_PASSWORD', 'U,EpA5Rtk!Mf');

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
define('AUTH_KEY',         '<L3`*sc-Y9|[+QX:ik7_pnjXHk8A;Q;G/SfZl:!rPG9wcb%>!si|>*+!K:;S$+Qy');
define('SECURE_AUTH_KEY',  '^]kCyC]N$dk#kFqoYF]QjN.Ts e`?K=^A}6#Rnx9x+IFH=n|S?y5OQGD`Soh5mG:');
define('LOGGED_IN_KEY',    '^9 60o OU.F&2+m_kFFhHw_9o1o!3.FlZKrp7ZBNKv9+Xh* <gUP4{A`Lx*Y!8Z|');
define('NONCE_KEY',        '|n|0>@}VZe[|6dDqRxI+#z{$`rR#C97:Z-EWE-r>{8>->+l$(G>g[!]MGvJ_W-Lq');
define('AUTH_SALT',        'ga&!2v.%$vj*6LTe&sv-Xlv$i0~BGG-?5}Y5f[0xc>le5iHtN4zO=P0[>8_ aM?c');
define('SECURE_AUTH_SALT', '.+LX9n<3&o4wc:RR;_a,zKjNNsfb;+@<BcR,>^Zx;l!=jrF`-M/+XM?|YDn!Q5S5');
define('LOGGED_IN_SALT',   '@|4?@6mY=#P4,{hYwJfSo&j{^&tjb-)UeD-h|0@wHb?ej2!g7285-z%zlf`ssQiD');
define('NONCE_SALT',       'htfH E*8Dl:s@c! I-9gFgDI`?P=Hd0vA%jQJpw1s1k+|rA=DuKYCscci~5+Vp/^');
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
