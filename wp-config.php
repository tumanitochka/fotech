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
define( 'DB_NAME', 'magicset' );

/** Database username */
define( 'DB_USER', 'magic' );

/** Database password */
define( 'DB_PASSWORD', 'jU5pK0tI1i' );

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
define( 'AUTH_KEY',         '@T-1lA1dK;|ICwe+|[Zd[?}0w[uB$+VEzEl<4RM{F ?[x{MOh&`M<4,Y! _y-nL!' );
define( 'SECURE_AUTH_KEY',  'g-?7<L:3EFAc?6_im;Q4Lz:5odu 2{Lk$AJ]8p`J7OtR2<Kf#{t(SyHhp#ikh A-' );
define( 'LOGGED_IN_KEY',    'C+%a_S4C1N#qIVeEr`#^esz_2mE&zlgdtV..=BmP>},@uYBMvQ$H}>u5@Z.|9Q]6' );
define( 'NONCE_KEY',        'Ei*{=2qWs+Le5b3g>yc/,wiGuL9$e5okDiUsm>rENAJf=[=Y<[lKa%/%bn qc)x.' );
define( 'AUTH_SALT',        ',YM$9]6Z,`2`Kwv|Dv.thB=,jK0Kww{;YXJ+4+(f;7+13;#^m`Mn7{)z{Jm8yq}g' );
define( 'SECURE_AUTH_SALT', '`W&=30Lk|<sXWhJ90?H[3:d,[gf?4DH(Kj_I#%Pp1}t 2JDj/&Wy&iY48&$e1Uc!' );
define( 'LOGGED_IN_SALT',   'i_eugLtH]C)0~Zq.{4b%LmKnl+:2?[M9|*s!ogn_vb`[=W4|a#X&q9{`D5i|)l)1' );
define( 'NONCE_SALT',       'Mb-EA6@=x=(&)UqBR-l5?zD{j2cy2<n9@mIMsE)ZY@I`:2r79q2O]#+5GD:m:R-7' );

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
