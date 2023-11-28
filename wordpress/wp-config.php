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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'y_A(o6>N`En)<b:bNQ-G#%Oq0kYycw?mBN0sr>4g315RD#t5u!tl%u;NMGOtT)WH' );
define( 'SECURE_AUTH_KEY',  'rnLx`0/%yzU=(@_1vROPxd6Co|;-Sc=!vWsZ]kF.7z93%YChy.Bc>>1]@SW^yPP5' );
define( 'LOGGED_IN_KEY',    'KqqYuc3$?dvJ=[#,t<,(gH/U:D/G1I=n4MuLF$#d}Q@G,VW}owqhBT3`Gb{0W)kl' );
define( 'NONCE_KEY',        '4X]8fng2wCmZachwk^J;PKVJ<F~Cw57?a3If<T!<f4G3|973G!0w!0%T@gbd=z?g' );
define( 'AUTH_SALT',        '1[X%.t9%RMPq[A`LT+3YG.D5[c-`D_3`{C}s`8WF!nl[3H7P/q^vr@9F-!/boVM*' );
define( 'SECURE_AUTH_SALT', '9-Z(2]3!HA&XWm!:iGoM|c39Y+cx1Car6Jbf?5!3Zdt5K&*H78hdY/5a@fhxHD[o' );
define( 'LOGGED_IN_SALT',   'c*_~6:yXS@5@XJo $w61gl>E9A?&{rLM~W ZldjVLC4j,R]g41J1R24+OSx#Gj T' );
define( 'NONCE_SALT',       '`FI3uJ-i/1Ih#`eAB 1COki2&Yp&l%=i%JCzcEzybRjP+e2&7J+>~D#BNXPfNHl&' );

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
