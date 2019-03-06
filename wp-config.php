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

//CUSTOM
define('WP_HOME', 'http://localhost/remanu');
define('WP_SITEURL', 'http://localhost/remanu');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Tip.?|l{gV>3lEj!:l7/#.CL<Qk:SDG>SrIswuprFR5D }WhY.F{d|1w0[A3Irh_' );
define( 'SECURE_AUTH_KEY',  '[SV1HAiAnTQ;[1How$ULP@5&P/a*@XPq8*twQ5~98HBg4$WS7<TJj;i6@Tv.D<5v' );
define( 'LOGGED_IN_KEY',    '+sL!OAN}E:v6KSC#`u%@r4lQAKfMARj0*#pqy_6RlBEY.-#q*@WUs)w{2C6]Q<1f' );
define( 'NONCE_KEY',        'pLkKIcD>FY@8amm6g3{6CLofx%Ew Z;L-UcQ,v&KIY4(bbWLrV0j>S3Z:JEyg+T>' );
define( 'AUTH_SALT',        'hrcL1;E}7G=:R@64lnSI^is+l^+N!2]=b Sn6G?H2<KH^s?-z-|# 1.sY^a^t& q' );
define( 'SECURE_AUTH_SALT', '+T5pMDN][s=Q0-.Cxpr9<F_T;9nEo{3db{b+Y~q7c~`J`4spwvbwYC%V][Ta-:dd' );
define( 'LOGGED_IN_SALT',   '*]/<63U(U65Rg` q 4L;{:A:I@gC],W2pCDhqSoa<CTx;H#H@MFA_Xa?wfpAua@U' );
define( 'NONCE_SALT',       'vKD/H#>_/b!7J%A9Y$I*`j!fl<{rzH-2m_lLh&Hb/Q;$SYli-.#! 6G<B<M=u;9}' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
	define('WP_TEMP_DIR', ABSPATH . 'wp-content/TEMP');
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
