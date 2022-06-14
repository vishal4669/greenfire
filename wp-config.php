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
define( 'DB_NAME', 'greenfire.io' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Webby@123' );

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
define( 'AUTH_KEY',         '/<T)]x2[fpkwE`Fr_/An_3Jh;,^D|<tY4U HcsF9d&-a&yhA.z,[]1l|TpH*DRcd' );
define( 'SECURE_AUTH_KEY',  'E=tD=| +ox;DlNAEN*q!&EWM~z vqe8E?FM9^jlAWiR%+.QB1NDhVUz,v0M7lr~.' );
define( 'LOGGED_IN_KEY',    '7dFv|vYb@D$ewKfW~(jJQYGb!=md?% %V#|bgOEFEzH@:9h,zWDijNk8c1JkDFo*' );
define( 'NONCE_KEY',        '&R$(&NELv3jj~,Y?6c4gUXEOEQGD~2}3T*1mTH?..l~F)]dkaK.ucG4 asPpcUGw' );
define( 'AUTH_SALT',        '99;P7lxsurV|<:$pI#ays_3Qg*[O~+yglxy vvh584btEZ&NWlM5A#0BSKE  lCh' );
define( 'SECURE_AUTH_SALT', 'Xk(V?mH+<dzI.5Z=8g]gNl5sWzUE?>/cm)qz1e_Ok)|M7H1$IL*(.?<B>%8eyvx2' );
define( 'LOGGED_IN_SALT',   'c{0HA:p9?V{)K7s8_I8_tVUGRFI mbxU^&=`Agn0Uj^*0am6Kl$2@()@_jz{#vM2' );
define( 'NONCE_SALT',       'yRE(>!k9Btj)<H}<POr=x7a0K>P6uS{=[b G!:LqPI<6Y4~8!?5r,3e4}qIl.sG6' );

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
define( 'FS_METHOD', 'direct' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
