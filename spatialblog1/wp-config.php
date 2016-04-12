<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'wordpressspatialblog1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'H@Cf*y`$yG*`-|@$6+tVd08_?cAX@#9`!L:+F+dY2T&L&1J42d+ay0Nq@;6v|HTL');
define('SECURE_AUTH_KEY',  'QyHf:ecwe($mvs]tuFWo@_VtWhN,Rby.cW2{gF*<1hSl~<^^%Wj@XX*p%v9lnrl4');
define('LOGGED_IN_KEY',    'hVs8?G|pmjy6=`*U%p.;Ds#;vkNlTfuG%0@#-t~=cD-ZD2k hr`Rcvbeg>LC9wS)');
define('NONCE_KEY',        'P:#zQi7?K$Zn*{{~eL=U3H;f@3j6J!{6kb><z=)sgrINiZebJ3S9lr>VQ@(^}o(C');
define('AUTH_SALT',        'rKWr}j+amC-ptHi~QU/FgKb[#^Ot[0mkFQS8_]O=]@>qbw^_u0<!4 rq[$}:l1wG');
define('SECURE_AUTH_SALT', 'aH`[Jfux&pqC_s2!- LWeVE>^M~$BM _9BLi4q,dH(Z5uo@x|z;3u(WxYrgDaT}A');
define('LOGGED_IN_SALT',   'qY(U_uQ%7vdfW?Pt}]ua9iOe*6O{wM^tK,w<j2 +_@_!H-7=7RymY3ZcDa}M+?N|');
define('NONCE_SALT',       '60F`3PLQEAR7I+H;oA8t]j8C*d=+7gMg_*lkmUM?E#DtUkQisZ#6r[2cJ x{jxEM');

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
