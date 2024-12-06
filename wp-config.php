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
define( 'DB_NAME', 'siteWeb' );

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
define( 'AUTH_KEY',         'x[hd=4kkN AbW%J%!wob{;xgGP8 B$<W1C=`3@VW(7SB0e+j1u:4XZzLO!cgrIhE' );
define( 'SECURE_AUTH_KEY',  'dy~6+Y>G4xNpw>ymRZ?5yt}w+0u{xuB)/rWud|qp(b)HnzOt&A1,),wM /D>XR/S' );
define( 'LOGGED_IN_KEY',    '%pD<4-cOZ,mHR%$S2V9T,4D_3+OqvsTAk<:b`eG=#{B7oC4:/P5?mHl<G;aB;WE;' );
define( 'NONCE_KEY',        'zh{-2L%`GEHMg,8i-u;?@e%@DrhKf?[n~BAF%o:%H79lL*s *5]%MFyg7P_wv2~j' );
define( 'AUTH_SALT',        'o~ U+o@qo^vW1z5hBzq3CO=>UZfRz$<tm<}TmPrA ]({S~D9Q^xf[;aWdwNaL5Uo' );
define( 'SECURE_AUTH_SALT', 'CG4n6{2xFX7YS_QWsU%8=;;jS@el^LxA/|}<7*BJ?s9Rs7ht,cYa!-ZLJ]RZNLVP' );
define( 'LOGGED_IN_SALT',   '1G*sAqQug .+z>p?3ss+w2/nP2u |?2IaRLB|,,nN{!B?}G`_tK9Q9=G1C.T]/d|' );
define( 'NONCE_SALT',       '9f|?o#AK/hx_Fd@:m/iW 9gCk=Sl@mS[EWmxO&,05n6VW@mCays;2d>{p,hX8V_L' );

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
