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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbajgtvcn4jgej' );

/** Database username */
define( 'DB_USER', 'uamwrki9b9jz2' );

/** Database password */
define( 'DB_PASSWORD', 'rkfwh9a2wesr' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'Acv~t-V3V%0@R6V5YmfhS0rXcH4Wa|yh@cEohei-n;xH_){o&~T7#L.mtAq3Wv[D' );
define( 'SECURE_AUTH_KEY',   'B[NEEo^K(X@9XM:_K6F!$Bj^MUtF:gxLeRM^`Mu d>z(5{h:>dhY2,za(k=@E*k*' );
define( 'LOGGED_IN_KEY',     'GhBf]W`E e1!sX@`S^Pf|wW8*]dpK8Q/A$.(9-W8RS~Z)n=~b92bF%|(|0Y;tcS^' );
define( 'NONCE_KEY',         'F;Eer3AubV+Mpvj;zj2VN[3|oNKI.nAUEQ^]|E@)Hi?Of%LUyJt=FAnI(r??>MhW' );
define( 'AUTH_SALT',         '<0tgULM2)+$l.(m*_!x=A+L}*6t3z?jHP~l|Atia tUQl0Fk$lb8V&$3dm@gb+>:' );
define( 'SECURE_AUTH_SALT',  'ZHT*_i_0jjH2DYOJ!GCsPx-p)5>A,i6B48-Kp)r>bPqruE}eM+0%=E[4HD&7em0n' );
define( 'LOGGED_IN_SALT',    'Bu=u.B$~vxrCnaK,],wGg@p6Gk!iuToS_UM8a*?r1}T9oklj01HWxM6j];..jf+B' );
define( 'NONCE_SALT',        'hi!MAV68kB-o{T$8uS3YvwB!<:R1a_d(aJ@:J[>K_&xH26aF9=`Iv&4G#d-bjDJo' );
define( 'WP_CACHE_KEY_SALT', 'lJ#+-<:JYKLXH7DIkPjY|%/m&a~JSRK/CNB;,jDxg6/78:Bh[^VLI-K@/eTv,ui7' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kbn_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
