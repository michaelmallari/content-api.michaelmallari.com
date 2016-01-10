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
if($_ENV["PHP_ENV"] == 'production') {
	$DB_NAME = $_ENV["DB_NAME"];
	$DB_USER = $_ENV["DB_USER"];
	$DB_PASSWORD = $_ENV["DB_PASSWORD"];
	$DB_HOST = $_ENV["DB_HOST"];
}



/** The name of the database for WordPress */
define('DB_NAME', $DB_NAME);

/** MySQL database username */
define('DB_USER', $DB_USER);

/** MySQL database password */
define('DB_PASSWORD', $DB_PASSWORD);

/** MySQL hostname */
define('DB_HOST', $DB_HOST);

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
define('AUTH_KEY',         '/GS48*w!co@D;T(x9J.Q|AER2]tiqpa=GWAoK-eR]|gk$ym3O+*=) aL&sCeit)n');
define('SECURE_AUTH_KEY',  'FlAt#Wlca]=ms`IP}Cq`$^mx*G!eMck[c{ViwedD.1r-00FrJl5}x7CR+^=1UeNV');
define('LOGGED_IN_KEY',    '7r3>;c`]2;n/4c{Vtg//VJ=H}1sAbQAW#KhH;~O}qqB97PxO2;{b~q}4Aa@e#)1I');
define('NONCE_KEY',        'hm$fZ+s|=q0J1)}|wU&Sv0c!.M7+i &~qBd)+_U} {+[ lE>qYr(L2Xw/q (F#WR');
define('AUTH_SALT',        'Ui-bogwR*fTb!SR^eY=89xiXm8,.(2l]R[rhAgKt<vX3(Oc//R+4>pL001QT-2CU');
define('SECURE_AUTH_SALT', '9PKPcs)z[5`<`PlSz?>bR5@e(:iIUax{sLhn|~Z;T$^@-@Y%^2%vDuAN?g_s+zY.');
define('LOGGED_IN_SALT',   'OhcAk7~ngW}),_6A25v#7lnDk$wNVEjpt=e--]TAS7NqAua<^9f.M|z~*QEIW|jf');
define('NONCE_SALT',       '$Bb#Ip}Ay2lXzLOx@{//ckv 6k+wUj<z.1w3+nnJI;,H+j$~a5.=tzyxh_/VjE%A');

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
