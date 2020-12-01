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
define( 'DB_NAME', 'db_scelestia' );

/** MySQL database username */
//define( 'DB_USER', 'adminwecan' );
define( 'DB_USER', 'adminwecan' );

/** MySQL database password */
//define( 'DB_PASSWORD', '_*8gTYWqM9FHU' );
define( 'DB_PASSWORD', '_*8gTYWqM9FHU' );


/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define( 'FS_METHOD', 'direct' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '~zB5:R&@99@dR6%_{t^?#ee}-H@<DBxb>&52j5y~5<UdH=N!V )5[Jj%e}Yg2$ke' );
define( 'SECURE_AUTH_KEY',  'g*:{ID;%%j!%sFuNhsI.7sSH%ZTSXNVQt1XsA2:g.EVNG3i8l_yy@yXd.~p2ngIk' );
define( 'LOGGED_IN_KEY',    'lq0i09@ne-enkEEs2[$sQ{eAIw0r_)}]WJCQy^Ph2 qMJ*@R$i22lRS2;|+d:RO>' );
define( 'NONCE_KEY',        'Bob<m?#{9|?d]l})ph9DEVT3dd3/)|D~YoS}]7tN`5D)iVuqRx^XN~pzyO1l)*LZ' );
define( 'AUTH_SALT',        'Pdtx7<!ND2G.BfRa>i7i~@Byb#!K-m5L1;;vqEo*S@lt)mB6+P@yMOO{n`?gTSYr' );
define( 'SECURE_AUTH_SALT', 'm;?^kyyZs0#Z:e!t-?t9T/g.*GU7-J@ sJi&zONlD<,so^yW)@&uuIUlWh5`CWJn' );
define( 'LOGGED_IN_SALT',   'zo6*$a[>C;Fr!T:t,K|Nr*ohq[B.R].29:BlS%=Px`juXtSDgkI&nhj bbdMCj]H' );
define( 'NONCE_SALT',       '+7y*B@5x&wtB w0|Vb{D??{%psx#eMw&|5}n#!>fl7I9*}cuh73Houc*(+kVl>]D' );

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
