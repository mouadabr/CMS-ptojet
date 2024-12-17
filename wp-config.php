<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'projet' );

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
define( 'AUTH_KEY',         ']0<6$E7G5Dbz]Pp5(|3u&vZr;pS%iwS[gA;Vp[bpnh$-CgVYXFFROpL0f%KXBoXw' );
define( 'SECURE_AUTH_KEY',  'VZu@~i7Ln_>LVui#1d07S@(6B>,gXcNy R>Fi<w<+TeL*T%uC/xdUJiB^{|>];[/' );
define( 'LOGGED_IN_KEY',    '?UQb(R);*wE)gr{r#(Ca .NwA*Dg=(p2RZUa}2?!uSNKQjaB=8u1UuSd@PNK?be^' );
define( 'NONCE_KEY',        'Gx%G[8Rqfsf=cc%+I2[skh+7*(w>)2kYtLI:EG2(eB+us9RJx0UagF#?VK.lVahL' );
define( 'AUTH_SALT',        'oie2@kJ4w6]<KA%Wht-Qju Yo6&=f%:_V<o=<N;EjG)Ng>NcrrAYt0K]$82W[qtJ' );
define( 'SECURE_AUTH_SALT', 'l:s.P1GyNP5o_UzIabpfOc:!#_Z4uc^|rk@7kxCEMKesWY/pg[,#ab`|<<@l:xAD' );
define( 'LOGGED_IN_SALT',   'B<WH,F {cTxgYRt&mF2AQ<6<gyh,WSl-]&ZultxH[Tb<bIPRA!5gbyxmn5F2cA*h' );
define( 'NONCE_SALT',       '_IN4+c3?WBiX@XEuqeuT*gDJqQGZ]%3?y-9{vr4k/C6Qe>jGHk#b{>u9Q3J$DYQN' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
