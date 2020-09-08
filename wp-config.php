<?php
set_time_limit(180);

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
define( 'DB_NAME', 'fixperto-cms' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'AutisticScreeching' );

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
define( 'AUTH_KEY',         '2CW4l!MDyK[ts57FU.H$a9s>ZhjCKv8@/ FwDinxu_ybxdp8.l&qEk[BQXe(dbNX' );
define( 'SECURE_AUTH_KEY',  ' ^=D6t@560OmfSKM-f1(@CC0^yvXDyWuT(a,r?v]}u!Kxs|-d#xV4jbwBxO!,a_V' );
define( 'LOGGED_IN_KEY',    'DzT-T0,c>mc4(ms!0;IWiu|eTAqP526i()saZ4?tIlPR[kAJJg<WJ]rFtA/2F8yq' );
define( 'NONCE_KEY',        ']+j^N+0Up}Hoo]U)!7tp()}u0>W*d%[<jG{5FIcO]66YpHJLQE`PUd*I4jU+yZIj' );
define( 'AUTH_SALT',        'xW7_/VsPLJ~M3XXp<ma>8Y2n&j]j*MG0Hd*]q`Ha0-D[j4^(e!m8FL6+x&CzOAc!' );
define( 'SECURE_AUTH_SALT', 'cMIDa)/.O-[flq |oxxPZ%2_&<8d0BTm{_m$8yyR3<B7)IpH#3AZ9XBkhI^amspS' );
define( 'LOGGED_IN_SALT',   'n9_Vi+c=W}CvF IXa0Ht.x]w/0k6i%z^_!JOX=*.rr@uud+3[aY=>-6&J~0v2_|x' );
define( 'NONCE_SALT',       '77X)#9Z L8CA%Z>W{k:4ZGKN-]LB0TuoF.L[SW?Lx.s@N0lu{,E|e]<4`%6u$?cw' );

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
