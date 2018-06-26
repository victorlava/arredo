<?php
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'arredo' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '*s1nD4JN<Zlfyz7neHcQ$4$9VFN#GO O975gt|X4;*4:!fu4:fXA&Z~g>0Zg78#S' );
define( 'SECURE_AUTH_KEY',  't KUWWO8ZPw3T%{xDf=S5|tl4PAwBB=VeG0_-^~}p3b|l->L<N-(X(p`m5Hm0a.4' );
define( 'LOGGED_IN_KEY',    '7Bp179O[$i9fN}s)/[z[Xi,E2*Tbo:jM77T_JdxOUs#=-l{CzFnD?$/O%#)#g#jr' );
define( 'NONCE_KEY',        '8bPAbWq|}r?J}EDT3;QL:?BGH@(s>R=vK]+TlU=Ve:lF_F0*:We7[9vP.gQ4 _6<' );
define( 'AUTH_SALT',        '0 _VI9RXQkvIJc7f$,|VH4Doz;+>zu:8 tQZ&q7_)b0R-N09m80-d!5.}Y<3]ABk' );
define( 'SECURE_AUTH_SALT', '=!I{+AcNMwvzfcqJ%b0oTQAZ#p.oF{]XZg%cM&aWh39eF4,UZ4G=E?kQwPV@m$h/' );
define( 'LOGGED_IN_SALT',   ']Q?{NFf*+,qfq[J%`|UwRqOG_%vH??@-AwBc)DD7!r{ivdK5NjKR]m1=;e53<2Vx' );
define( 'NONCE_SALT',       'z<^fV;g:3A<l qY4$05%eS.zM=3#Atgzh5DebQdRARb]:m6U5;0Bz1/$k79J%Q Y' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
