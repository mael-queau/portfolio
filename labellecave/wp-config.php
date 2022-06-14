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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'limpbizkit1999D@$Hwordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
/*
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );
*/

define('AUTH_KEY',         '/.-UHWXH*Jk$4+mF<U>@uR*qzbvDP9@5,>p.:G4Fg+v4qmjFu 1.QZ*@(6C.[kw^');
define('SECURE_AUTH_KEY',  'J(LE_:f1^d%+~7LFV{ui.M68z.>I~B#G/`nH0x-PUYc^|JP=%%Bx!=70f&?m%br|');
define('LOGGED_IN_KEY',    'E*h;J/WuBBjnnscG8b:?~E$)+t:PtR/c=(Bo.buKn!b/kh.K^HV9loyL:,H:I((~');
define('NONCE_KEY',        'L-l+@$.+SHv|d)5 08C]}gxhsrN/Q#(@gp|Y,YmJR[z~X+);Hki{{NY#El-GbL%q');
define('AUTH_SALT',        '^3bvtc5bd*ERqV *JqiA+vt1c<t..!|!+MNT9JEcbZ#&L1Ql-`Ei&ZfMRK[]>4/w');
define('SECURE_AUTH_SALT', ')Il.ln.}@-XHGw }%1y-!E5%KK|gkdE.S-q#%B#CntFw96xj|.@ti$@J|Dr9XGn|');
define('LOGGED_IN_SALT',   '0A*2|Gue3#Owif*zw]MN6j:X22-(sSrNq+K%!h;F&W+1~My-]])%|VjBw-pD-y-I');
define('NONCE_SALT',       '0uH}MKud.Q1c+Ci00B|xn6qv|sT./Q4@tX{u+:a{t2?(.7GE<p0`,5 l]4}rlsx+');

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

define('FS_METHOD', 'direct');
