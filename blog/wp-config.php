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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'clarkiaagro_clarkia' );

/** MySQL database username */
define( 'DB_USER', 'clarkiaagro_clarkia' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin@98567' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '8ZuVfVaszK9;%=a~t%d$&tHANiK%2r7g?wGOw9n1TPDmah7ZH4c]YK-@e19rQ<Fh' );
define( 'SECURE_AUTH_KEY',  'Ui9c?00GFPG!:B^15c(cZDP{#etP<|TW(,Q+INwan cOn*pIFb#{FC.I*cY7TXBR' );
define( 'LOGGED_IN_KEY',    'ua><{]jL.%@ZD#XeSGXK:z_3E;)$L)/z?,lO{l(BCPRD*ZwWlk_BPEy)RUPLHg<)' );
define( 'NONCE_KEY',        ';_;/~T(#W@1|3DV}]k@%1X;L.Qp&}06h.U^6=Hs{5Ssnq~k3$_r-mF`[IR4Bt]1n' );
define( 'AUTH_SALT',        ']R[9pqOo.y95nn)M&:NZ:eaP|e<fuwQ&1EvO,H`oC-Debk8[ZS-#Reg-U_~~A&qu' );
define( 'SECURE_AUTH_SALT', 'aZ-])8&,d2w.PKHqi?D:2nAiGke5t#2n%_`/@;P)R=V~QSLe6z%1p=M~15qB`sNy' );
define( 'LOGGED_IN_SALT',   'h3yzGK8_=#q9gk5FCk688^nBlyz.hsKKTBDd5E0(V>IW.b~1nSKAYFG>Datn;jp-' );
define( 'NONCE_SALT',       'l4j]u4iiaV@u:G^)]r;y[Bs8gliUB):YG*x+rt$#@mr:rwLHw&h.P11Dok7K$=@[' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
