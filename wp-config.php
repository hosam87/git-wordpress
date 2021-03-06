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
define('DB_PASSWORD', '12345');

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
define('AUTH_KEY',         'k7aH<z(kZIl,S):hCj#,T}oUx57)pR`?%naf[*1PL5xVxI*)`eGXoXkWB0RGWT3(');
define('SECURE_AUTH_KEY',  '6GOsKHas=b-mqj@5Ufx-_s<nG`U)iKv2 fnyOGiaLLx<XysRH%P/QU~~c5_rr !X');
define('LOGGED_IN_KEY',    '4W3(12es#woC]d1f`fUh]<],OoId6zoXxto=}FU ,pVi.<38ul0yN-A1P%;3IBFD');
define('NONCE_KEY',        'eB/S*X``o-It6t]l4{Epp7oRfX9mo?;;n-G{cq*Cu6,M<O|s^CW-1;>JzX}1(1D)');
define('AUTH_SALT',        'sl7[|hwj5X?f0/+DSzy1]1Qd6(Y6VTZgVhIta2CA*zc];P4*/:;8%0a/DF^)^wsB');
define('SECURE_AUTH_SALT', 'C_0]xn99$ix6Zj)3MI!e5$U};s)Hq[*TPEge vCh8ASjZF?MdJ+ABPecU>v6>SLk');
define('LOGGED_IN_SALT',   '@jr/5GV _ek)f.}S4!QB|!:B8d${pyjv|;rQph9d&Nm-|3: 1H-}C#a{vF%iB:7%');
define('NONCE_SALT',       '8cC8glheJ-HjIom;v?[1Egd0Ya Ezan|,Y82u$5X[y1 SV<?JN]UQ3q1m4YFDDtZ');

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
define('WP_MEMORY_LIMIT', '256M');
require_once(ABSPATH . 'wp-settings.php');
define( 'UPLOADS', 'wp-content/uploads' );
define('FS_METHOD', 'direct');/**if you dont have connection information wordpress**/