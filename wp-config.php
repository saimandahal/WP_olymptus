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
define( 'DB_NAME', 'Olymptus' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '`t 7F/N]<z|XKSJ:s&A`({qf8#<^c~;364nmtst~TFi}Q4%did]Zm1s~+_5LX3LU' );
define( 'SECURE_AUTH_KEY',  '{<gwEi14#D78#r=SB8#Czw5OqVyx1&OpyjV*]u{KQFTKR*kUV(hrQUJF.A3o]FJ?' );
define( 'LOGGED_IN_KEY',    '`en2>;^Aq>~m!zv[:v[21>|pnS9N|ui!ME!RlFZ#wzQt)hk%t-0?%0|:cB=9kzO>' );
define( 'NONCE_KEY',        'lA1g2(2VL5k02^v9?11B:420`4NY*v|o_twuSHB?u4#:p#[isq|C:uiz6rm7d:.-' );
define( 'AUTH_SALT',        't6dp~*W?%h6G<pR7K m4 Hn?Y>T3x3*?-A#y #*US@m^*,de]FTkq*YQj@SkiG])' );
define( 'SECURE_AUTH_SALT', '8yD+=Fj:qa! Nm|V7qPnQ6B9WTisyFR&#C*p2BrysURkyr}-8y)G/],| *[] dyB' );
define( 'LOGGED_IN_SALT',   'mY6>!J ?uBU>yG&`+h3RNs[p2d%H )[^t=b4d%$SAPKXlep6;xdWj{j;o5;J_H!5' );
define( 'NONCE_SALT',       '65;a[4Rx7FSg!jzcUZ+5:B;cwttS9)jjXnXHii6K.P*(q2fuo#FzM/-}lhw-DYtP' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
