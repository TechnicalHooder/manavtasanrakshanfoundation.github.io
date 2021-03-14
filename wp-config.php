<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u933071540_28bNY' );

/** MySQL database username */
define( 'DB_USER', 'u933071540_mXbjx' );

/** MySQL database password */
define( 'DB_PASSWORD', 'gYPMoylvwv' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'JfLifwEhg({$ywy^A[xjqd6dM:Z+EWTD{g6]}.742yqsv|J{]yOUpd[=xVHA/s_l' );
define( 'SECURE_AUTH_KEY',   '|X(vVl2!nDI<h+A[xQ8$cU-Jj.q `@qHz-%SVUsUqI=hhAr@eVvSy#mKX+0=:]%4' );
define( 'LOGGED_IN_KEY',     '1rH^6+K]THp<U~/oI ~tE:+5S<HXd(`87/r]_z#r37 d}:Q_D I$=2m%9:T17%@Z' );
define( 'NONCE_KEY',         '`)~c^%QBsk8^T_CR*bvmd,Wel<aWR$HkB*lo{KfF_sg+Lz9u98:}mJK&eqA MFHZ' );
define( 'AUTH_SALT',         '-YSH@Sm&&Glm0Vh68J%qDw`lJm_5J)pzqT2?]<P`T|$lfAfXnQ=SWixF919[u6AY' );
define( 'SECURE_AUTH_SALT',  ',L[WZPZC<3?{6YU[:3-Kos4]X.1yDi)N0!cR>J%1pX^:5T~mEwL-z{,+ez@3LQ,H' );
define( 'LOGGED_IN_SALT',    '5^UXN5[Xg)X%3h~fsHE#{kx}l5v ?i}%b[m%csY4u:V`:XI_%rT{XIFpLU._q7SR' );
define( 'NONCE_SALT',        'O;s=@zLXz1z,alvae),#w>qv-mdLS&tT$I/vm[0(gdwG2x;p)ELO_I{eKmkW|_I)' );
define( 'WP_CACHE_KEY_SALT', '01iG@:QR!1LKRIl>L>JcLKzWCBEw&p1Tp=r1^wa1znlO{#OON[:EUfPYMc$c^zBL' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
