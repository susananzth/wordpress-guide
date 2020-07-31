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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '_P3vT= :~XR2a7tZh?b$;hMF0wqH*1%n$bK|9kg>m`VNb{sp~3kmJ^J:|g^0;p4{' );
define( 'SECURE_AUTH_KEY',  'sAe>VyObaUq&[{R$l)u^])[AwEgAh8*x!Ag@W#v7^Rn6LdYy-kcs4IUq(eSBmP(B' );
define( 'LOGGED_IN_KEY',    'WH, fXWcwx ({m#P;Z4:_|-nTu08[1_QV#%LX=),wkhjl<c{KJKrun|Y!e u1|&q' );
define( 'NONCE_KEY',        'izOXKm5WZ*#k5G6K^yL.>X2:~cMB#M}v=s+L_$;:RT{V2s$iDS+?zefY<$Zv^<tH' );
define( 'AUTH_SALT',        ';FG5Kmyupx6V(d`16hdTtRoWqf$K(Bz~r7h0;j4~yN/+Ifz7Q_PP>&%n_5]KbS:x' );
define( 'SECURE_AUTH_SALT', ';WQD-B!#XmXHRaYa]%{td|:0X(_{DgHf%]0s3~C.{|BahSm+b1NVhrvZ2GA%-EOB' );
define( 'LOGGED_IN_SALT',   '<O6q?xN+uhWuL:9RKU%Qn8)@a#I<c;%D9d[R((6`6OX{8eEA`Dqn5+%m:ZK5)%f<' );
define( 'NONCE_SALT',       ')fz^=5z0-xi[z%1 PA/3M$KhJJnYbb/=OR69g07BfxQ*Le%oQ)tfC[6D+NL=( bT' );

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
