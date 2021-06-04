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
define( 'DB_NAME', 'my_db' );

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
define( 'AUTH_KEY',         'eoUx?BPcG%nP|yM0;k@e</[k|O8]pVQX`2@|^t7vHQ`X5W7zC4o!Mmu0<1^reUze' );
define( 'SECURE_AUTH_KEY',  'KafF|`ki#T4m`CclJ2VH?.UV2uylwL IyL<:>I}rn# dYbg(XP11YpfOUa>*9OWN' );
define( 'LOGGED_IN_KEY',    'F?n(i#Ituv,(g Rt&P9lAuJO^:7VVUY;M8ZQbGb5utRv!{CT+7tR 1jSUu{.Ie F' );
define( 'NONCE_KEY',        ' dfNhG)^VBZ4R^dAT@@G&a2*Wbk`9o`Z]]SU%B/`{Wm{bm0B6SG1Vc5iYw+qM>v}' );
define( 'AUTH_SALT',        'mGS}>{$Wu9GF `tiy6M#D:?4eUp_uv`D`7V.7+NhJtpTKjoKi-2%J {{BCV}e?{7' );
define( 'SECURE_AUTH_SALT', '=$`#P^|pywPQd:f@v1jGYnkpoe3;{U`6EX8Krcbw]fN;fZW)@i^ir1LeL;<Uf|DT' );
define( 'LOGGED_IN_SALT',   ':3inBEdxcr{S-A1Hbi|EL? &l;G* >?68T2Uj8:`gNIVwHFgH$z;-&F6aNzP!o3l' );
define( 'NONCE_SALT',       'o[SfG9f4yKo6|~{`XtlgWWO><Nrz#!+r6hb2N)`(8BoM0g7?n[0c<e74#|Ut&cG:' );

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
