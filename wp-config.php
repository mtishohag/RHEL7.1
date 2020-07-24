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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rhel_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'F]i#Zvt)C^bHL=r-6[]+>}h}e2YR]3fxaBMCpJ*Y7w)dZ={,WA[4 {6e;T0zJqGJ' );
define( 'SECURE_AUTH_KEY',  'V)V>(Lheg&7KId5/9)jcQ*%wC8$<5^h0v)mi}Sk!wkKzZH,_[] skf=H%Ssh !Co' );
define( 'LOGGED_IN_KEY',    '_adLDURU$~7u3}Z|[w>qW+.[jQ4M>z}Pc [!fT2If&iGwh+1P{|$`#v-wZHVE?E{' );
define( 'NONCE_KEY',        'fv@W|=omB=R?{Li$V53f]ciKJdZL^TCVmZ%/0|+2ohNeC-xYiGZ=1;U@o?,6ev?~' );
define( 'AUTH_SALT',        ' tEIVqqckv{`UO3d#)7&Zqa!^J/:kYk4Xm`!|yg@@Qjb>ZKM[o{OSDwuuBSv[l0/' );
define( 'SECURE_AUTH_SALT', '7r2kctYAzCNI|RL7h<EU,ofEPrbap<i61>9R=:v)8zZhX,m#F[x3j>-^Aih3d)c*' );
define( 'LOGGED_IN_SALT',   'sV+&z(UcO0.OwySd<q/ZT`bZt2pLkR;3[DvDw~yxzBJ_<* Syc&5%@&X$ucG(!p}' );
define( 'NONCE_SALT',       '/^,PSwsY+017<tu+gH0?k&QiRA.^A=x} xM1{dSOSUpla?Z`2e-fsh#|w~TII4}A' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
