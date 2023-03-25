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
define( 'DB_NAME', 'classcoffe' );

/** Database username */
define( 'DB_USER', 'dogan' );

/** Database password */
define( 'DB_PASSWORD', 'dogan' );

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
define( 'AUTH_KEY',         'vaEpl{B/a0^BbeHxCgX.ID*O nO}MS=`ac7+mfF^&,*!@tM[0v Hqf{:Mo4J4X;V' );
define( 'SECURE_AUTH_KEY',  'xenSc;2ZCOsbz|RIv+CHDG!5<O-&DV%RnljgvbRE03KqzaDh,VSkvM).Plx1YZdy' );
define( 'LOGGED_IN_KEY',    'cii`gAErYGgfby^4EQAGVt%/oG$%<LU}?qnL,Fc5Q2L;JtQJ*FAd/Cl[e?h(C]B%' );
define( 'NONCE_KEY',        'so%I,oJj9(v(dt}9eNK<m* rqzpmRhs,,P]VX+6hi2Nl_Ees-Q/~A<`1Rxh^g>M9' );
define( 'AUTH_SALT',        'J:6Yf^BCTd~:C5(QII}|JczdAm@YbETu*6bN9&b,,z<!1qrI+W&;=_55/(P[5CZ^' );
define( 'SECURE_AUTH_SALT', ']s/eTIPx+,bK=,a7,{vCj56CpJR_Lnb_-`.XCo=[I:=r_)#[Zc@_[$1YjbsZOaO5' );
define( 'LOGGED_IN_SALT',   'a2z*D~rQS60,I&.<R8S] hF[$.Z2,5T1 >{nUB}*WX#Oex}l3[lIoN4|59UNK}_i' );
define( 'NONCE_SALT',       '-kc9O |AQ0ZF8%9&`qLBez{q/nMSWbOw=+VV=DG<ckiGlb ^P#1Ot5kdPw3F!AIr' );

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
