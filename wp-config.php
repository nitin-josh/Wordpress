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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'O--!dbuqpz9Cu55=GqINqIR$u-0*e Nn*Iir+pCzS7}hABIy]_z[)hb{s5Wf~}H^' );
define( 'SECURE_AUTH_KEY',  'u))iR(^1/`_.VOob[jp/f6LwrY4w[!XA@R7yr $1j$nAej1eCS_a-(k+VDZ[VMlo' );
define( 'LOGGED_IN_KEY',    'CGXQPdZ5(<HPA9jsDoJ1NEUm)VKaos651ssHUda<ns]Mf@.nJ*(Fo~Aq[x<^]gi|' );
define( 'NONCE_KEY',        '9S2!W[7tljdP5E{}^<zOVo5n(WZ]lTl[A=@%Q3Q~C#m!sftK>}gGmRrDs?A-{x=C' );
define( 'AUTH_SALT',        'GS*R5AWb*S?%3B9%-bHXBB%Oat{2??`poj?R9]~*s2GM{ZQ[70i:rAzMEZ+$qE~Z' );
define( 'SECURE_AUTH_SALT', '5V+s&YO!Ub^IR.9cFt=_E[M4+U%>dv&`(f-v^KSUGG?~3AqY)y[:,+^ O9n[&pe>' );
define( 'LOGGED_IN_SALT',   'ce8cc`|;65`{arNZ5ukV_J,;:i,PAZyE0Q4d=}}X.`H,Q;V<|gt<!83( *|/A[aF' );
define( 'NONCE_SALT',       'R!t*rj%+R}kl>JU1}<2]Dp)15{CQ+^35eNjYDHJ$Q{O(PC_Ak;a(Z@EV;nEw@4i5' );

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
