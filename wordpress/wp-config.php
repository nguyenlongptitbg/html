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
define('DB_USER','wordpress_user');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress_passwd');

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
define('AUTH_KEY',         '+TGjfEYvP6Vq!R<ss7>}voZXm[E_y%fG3DY>q+!(+tV3?|gdF}B68ZC?*d7UNa|Q');
define('SECURE_AUTH_KEY',  '1h8*BS9~G?bZ><dO_Q`_.r^&rSCtdY.8<%s!s!Q}DbC[O0fajUItY|!:CTldSxva');
define('LOGGED_IN_KEY',    ',-_=^c-?`|$1xb&&p)uO~+6Apru(gH4X{bhpm6P~xO=o|q<B1mq6_`0F$71)>%g|');
define('NONCE_KEY',        'f|$M<^!FoF^7+:O&l9=(UwLY?Vj.C|6t5=:PT-Y7cf@,cB85WTtsCs(<j32yu|/2');
define('AUTH_SALT',        'K$2E#$@psj7QO*RXJ=U}|z*DeQ},HF=?dHj##R5%C`0s<|2QPWm|b6A!kiY Rg|X');
define('SECURE_AUTH_SALT', ')`HKgMLwFW5pM5O9eCbUW=~$x^OWO i3{%hFtf@#n3k-~!C!n[30/?gSu6PL1:fL');
define('LOGGED_IN_SALT',   'QabE{d8f]C+rm+(+JDqU.-l$Yzxje+[Jc44~LJ-|$Poi.66b8=?91<_i>#gOB9VL');
define('NONCE_SALT',       '!2[!S+%|RuS?DVQ9_#_sS.swDIMl.40#bDmSeK3)mdOsi,|[_+c11)Wt7o:6y_XJ');
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
