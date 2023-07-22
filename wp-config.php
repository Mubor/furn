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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'furn' );

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
define(`CONCATENATE_SCRIPTS`, false );

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
define( 'AUTH_KEY',         ' %.Vrw{?dNc&J6GIOvLK`w4w|7L=|@^mMwiUeth&/uq#^jb!9c1=&SUf`g[=k7Gk' );
define( 'SECURE_AUTH_KEY',  '9C^S~jU)*m>1-0R6KnMu]#c<OP]TM~`x^5ww8TSm0jg^|4YoRWULr5ets,;pM2@>' );
define( 'LOGGED_IN_KEY',    '3TOkgvhUSUcFs8i(Zx|)JEtATF6=$-JiR-2`BA_d4xJ)m#-`|.qbc~jFuRU=)%Pp' );
define( 'NONCE_KEY',        'Oh%iK|Xo~0v9[U&}B27+T]zC952t7`tb:J[r<MG3(*N(amHlFt281OO*3ZjP:*!x' );
define( 'AUTH_SALT',        '12zJpmY(@Mh;O%j=h7J53JZ/U}cB*1IRi(7{cd!~Dej2&WHX<!B[XLBOU^n+4gV ' );
define( 'SECURE_AUTH_SALT', 'O6;/a`wx|F<eo8#pM:Bg.X$*;<G#%{SsQ 79$UX9ZNzS)@?$0[.}O-GKT@2*&0C9' );
define( 'LOGGED_IN_SALT',   '6*Ss=zUUejM^9#T?ad:p;x`R$~;34p/?cf3i$%$>c@}m$(}0aJOv?9J:%-r4Hr*L' );
define( 'NONCE_SALT',       '2FxOv=jiolkEAFu%LCe2E;QAkXxCG?J3:*[]Y7}.|cDQI$C?hW UmP;;^ y_]Jmd' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
