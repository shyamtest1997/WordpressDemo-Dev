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
define( 'DB_NAME', 'wordpressdemo-dev_db' );

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
define( 'AUTH_KEY',         'yWS}GUIQ|)hWY<ae?;_-Y+%XQHqWHJ/Y.?UJfQ`|Ur52OW_j,[j-j]-(Mv5QZ: 2' );
define( 'SECURE_AUTH_KEY',  'UMw$kS{z+G=~Eym[{NCx:G$G]ppj81|kJF!Yc?m`vzA=G_>}Dlx.PH!d=LrCo7V:' );
define( 'LOGGED_IN_KEY',    'NyKblmS/8H>A[d=pUNN{y}.zklN57N{#gW,5.qo;I[uy?.y>N*ri]x+9K1g%/?~@' );
define( 'NONCE_KEY',        '6f.mZd7t-gTY=Ld`]6lo[Z|scc_9&K4?_rZB$?aGK,$RFTQBs;vDf,Ew[md#@+s.' );
define( 'AUTH_SALT',        'vBh]Z~zX)f/uc0{6&/v-]hAJTz3}PHhd%UziA-p5r2*5gNl8Ib|~TDxDfnC-]`8S' );
define( 'SECURE_AUTH_SALT', '225H3reuO{R>JAT]8__H7#6Ael4,6^TxqTIbM*4E9tD4Pu%G~})1~4-ak_C}rXj)' );
define( 'LOGGED_IN_SALT',   'L1&$]l#z @$1[Nd~j(^a=;3QiI#PWQy6^8K6w^v5%WPB<VfS(&~s6D;}Gr7J[(zg' );
define( 'NONCE_SALT',       'Zgn]q~=jJPVV{DGi]&I}v!/PV/nQJ u`|AjV]Gzp`Z#[=<yM97Q]g2+QN=:=8U$(' );

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
