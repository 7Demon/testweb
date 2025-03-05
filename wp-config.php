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
define( 'DB_NAME', 'testweb' );

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
define( 'AUTH_KEY',         'g_MV<))sP<8?l5#kAmwNGU61[2G)uJ=~PGj=8sQQgIy<(j6~s;fLHN/w9t0iJ2Fo' );
define( 'SECURE_AUTH_KEY',  '}+7T}+V_#{*ysWFBx|4h%9M[1.Dmhqqr=zi3@tUVkx}jfg,],&:LUC@uD)H)MnzY' );
define( 'LOGGED_IN_KEY',    'dY|Hoa,1vgA*y1][ok)?(U6+$LpuF|s1`1H^Hf7,(+>B!NU|{!d(=QJ*SS@~>@e~' );
define( 'NONCE_KEY',        'Nd6iXwpK E el[Mz,Wz/(+~vs3Kz3umF1O9.|/tdULANE3<QzIu<68(G3V|s3D2s' );
define( 'AUTH_SALT',        'NZ~Xum<E2UtcE|GR;A6S;1s_T5OjG^r&F%=+BC#wX3a)nMoahrUtiW}bvv*$!dn]' );
define( 'SECURE_AUTH_SALT', 'M&BQ02oou;0eEtsB<h0D`>5x13l&bBUo/c2pBx#J~E?6Smik.4|z|,fBL?3:R2D5' );
define( 'LOGGED_IN_SALT',   'YBa=*]]`W?[J$_;nU76]:Mq_~?fU/=*3_Q{PfID?jj`eRu+iNb%]%R6~6E1>06uy' );
define( 'NONCE_SALT',       'Em(.[<Lkm>Cp7Kv]rLM8;:Loo?92K/30&jJ&2<YX*HLy)e$r*yDZho0|k;&RCT3&' );

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
