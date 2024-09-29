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
define( 'DB_NAME', 'pustaka-buku-nusantara' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'P{Z+;:bPmA&z7_%VK~25;~!Wf?.01i13YQ[[e[~d7IBgRsSzpX/e61)<.2j_7]_q' );
define( 'SECURE_AUTH_KEY',  '=0fUzK|Td;t#CvI@4H~{O;|{M3qQu_KI:d+UhY_i?*aOH6!O.=k<#RHx~OZ&5C9v' );
define( 'LOGGED_IN_KEY',    'WvRcAMb[/o=n&KCWn?ASmM_]#3VC[(t#efw5wd&rUP%rBftK~mE<.Ig95N44G412' );
define( 'NONCE_KEY',        'q,Y4Jy4Ybd3/8.]kE9|AlH!{?l-TSP}58E%w#ksi66vA:H/MABM`4iT*/tp>fjQA' );
define( 'AUTH_SALT',        'Ny3=d:sSf$wD~_6-?%b_fo_[n;+y)?y?v#|zKb&akVr5:TxKiir93NY;M>0TS:7[' );
define( 'SECURE_AUTH_SALT', '(_{(ni>*uiJi5$qRPj^%<$9g6%Z/-`@r%(id2/<AwzEbWbk, |h^eO$mh1kD1z)G' );
define( 'LOGGED_IN_SALT',   ',g~;)0{)XaQ0,4cAGTO+|mgNK^wJu!,0<<!jR+{?$(`+!#V(VqJ@j^X>|2@74h<Y' );
define( 'NONCE_SALT',       'G;aU*[5krqw+}~1~{`$&DaF%d=Rd%6ei:7B:epg*MN)?-{]qMavLCDtmymU)8Svb' );

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
