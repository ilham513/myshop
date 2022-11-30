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
define( 'DB_NAME', 'myshop' );

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
define( 'AUTH_KEY',         'o.A<>&mWI??G5?Ta{@cXauV(D9MFleju|u 17w*/HFbS@~Vf=mP#_eKx}L9&,fh5' );
define( 'SECURE_AUTH_KEY',  'Yi<Lw)7-=]uUt)9Fu1%)P)& l;7)I1=!e=;l_:}ZHcr0=+gH8jy[]W:Dl>`S>;jd' );
define( 'LOGGED_IN_KEY',    'FO-iADn|L3)fbv+Jlj4tU).<sd %(l!2sh{|*xqjmbmzmMaO^h`=MGah,#7@ ,6?' );
define( 'NONCE_KEY',        '>ZrL<bCSed]Y|w~,}:SDZ8w{M[3#^1<$osbY?$3l7H8S&io8CXD@_NC{FdT7Lv.X' );
define( 'AUTH_SALT',        'bAR4]A!Hv=Vn5teMEk*X~x1XIbMLD_Z{rVAWStw2]vSWatk]d[rQ&9$5,f~c 8Z-' );
define( 'SECURE_AUTH_SALT', 'q-PO55=3mZ+>i5 J0474C9xe#2B s95E:mdfRucy${eCrRt,c&b0]Mm?tG/#2.S|' );
define( 'LOGGED_IN_SALT',   'Fy+f,$=,TR4%_NMXQJGC48,kXaD/q!}%k6p@J*^}FSln$F_w}?j*g]vCe[ub$(W-' );
define( 'NONCE_SALT',       '~>$bqb[9|n^?0|#YFS#TD@y[exSVSanGGb[93{ZC9?@SpYl}s0.)G7&kBH0Q%{aH' );

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
