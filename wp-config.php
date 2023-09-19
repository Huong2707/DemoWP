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
define( 'DB_NAME', 'webtintuc' );

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
define( 'AUTH_KEY',         'w8{0AZILM.@^qElfcadCnm<i2H,mAAkDae-IgF6nah-:uR E/]i]Ku7LO@mti.MV' );
define( 'SECURE_AUTH_KEY',  '_k1:YW lA=|`9t!(tqz<^?/wH.mJPv B*}ZjBiX#`wlK7bQb2+ATt@  %6ZrUc!k' );
define( 'LOGGED_IN_KEY',    'fNZKu]>rZh<y<orKJ%!wm3NcbAgBu!2Y|SO0}EnCpa`qU b~[V2IQY2gY{#/=nVY' );
define( 'NONCE_KEY',        ']i>j(j~s,qeBl)AZrXR2KJRf9Re3~XVG%JY~qI]gd=<)Y_6r4bmBPCaG[R$JH*TE' );
define( 'AUTH_SALT',        ']W)~=7hiN:=Hj.jDbb#m]3!~(=Mpg7PJ|VD94N0g]i3YYCoUnzwV7[Qg3Xwd[E`J' );
define( 'SECURE_AUTH_SALT', '+weA%Wp2<XR[N5C|_9hYU%}($^]e>iM`9GfRU1zJgzO]VcE}-:&t$S&E3`$t`N,W' );
define( 'LOGGED_IN_SALT',   'hzz7hv!8(wk0LP~U+pb~*=F7z|[u1nNox:aN2.E*abzc*RLr^^Yo1yMc%kXo1NYW' );
define( 'NONCE_SALT',       'o<c)::Z1-R#-B($2jS^c-7}%FXajLB`=8N+GEr.dF;fMD~FK-P?f(YAMg+Q8`&~`' );

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
