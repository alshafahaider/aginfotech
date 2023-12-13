<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'aginfotech' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?EiFx*wVXL [-|M)+i @F/!osni24iovA,S;?]AW)Af,(v.(^PjIXArzX8H(O)7a' );
define( 'SECURE_AUTH_KEY',  'VdzPz3qQjPVBeZfOo4CGg@U27rNDu%eF{!FlMc67R5!vMTZSLOl*6TreoO4mw/mk' );
define( 'LOGGED_IN_KEY',    '{N2cgCljNaxJlp7R/zQ7i+xgy7^8lpzRve)m?P#s&DoohB,u]=KsPN?7jvsZS&_L' );
define( 'NONCE_KEY',        'i]Qf2cQsN]0;n!?N1]#}e<Dr5&xkMx|Ro{V)%IP{B>P7`A3#*GqB@w{LVlZr>Ah2' );
define( 'AUTH_SALT',        'W9B-slsy/$~,<4xZb`oVm8.bev_?*w2L.0kEWrQ JM&9Z!HNC(m~_Gu)X(-@m>W]' );
define( 'SECURE_AUTH_SALT', 'Zk_`$LcyLNXO}6E^,.z5tvi%/<Fh[/2Cvw+Dw23O;@)OoXcdth/},W K>Q@KBY|^' );
define( 'LOGGED_IN_SALT',   'D]+`w+{rfY!G^Vq%k-,,nO6U!Pc9Oh2q)/.7wtuOP<nnR#c-Z;&YWOHx1?siS[40' );
define( 'NONCE_SALT',       'w,PCo;XI!J0`F%f@%2boCr_oG5bbs^E*8UB}5RKim$^aiyp:(SU*{O){/iuT]-~(' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
