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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
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
define( 'AUTH_KEY',          '99nTTia9aa%YfJ?ic@XguO+)?KQGeUWLGI)Hosk=mmS69][Chw=t%<}V>%ngehS5' );
define( 'SECURE_AUTH_KEY',   ',iQxyo.NWA^W*}}92/}&}iLl~)P=-GG:Rb&OlkY@7tGNxqQKB@E:i#.:Oc7J6bhx' );
define( 'LOGGED_IN_KEY',     'lw=[ZOqNZc{x=9X<G3Y#?!{[V%1D?]NK%(ysj9d3?PhHLQL#t<Rg)a@H9bneD4lV' );
define( 'NONCE_KEY',         't0e%H3J7 D>@tL8IPA7&+(ctSYCa[/am(]<6,LHN]BqMSui2j[HEt#UaoT.i02>~' );
define( 'AUTH_SALT',         '<{u7/(^LSUAT5sc !DaAp7d)Ioi0d&&t^PU_NotWdO{o$/Q@E~N_X3Gmh_ZLk=HD' );
define( 'SECURE_AUTH_SALT',  '[[?p).:k!PI%.{[(K6K?6miS+e -@-43^/)ni^23qU*C[C&^U|c5Xik(PK<F[n<k' );
define( 'LOGGED_IN_SALT',    'isgq6g6}7V5e1=/e|S^e_.hIElNa?BN==e^{6sN,00?K(P *DfFAY#m;&Ae8fmQ:' );
define( 'NONCE_SALT',        'jw|*%dA6y#c1|IWD^ ~t%nTott5>*IJ%ii*{_H3k@{Ba-W<=}OC6n^WF]{8K~<|}' );
define( 'WP_CACHE_KEY_SALT', '0&#[8Ohkwn}.W!)nZ3_u6N$F%mq|-iJ6p 0~2q2b7 @HX{,FnfXLHIxyGm7$$>ZO' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
