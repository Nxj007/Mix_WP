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
define('DB_NAME', 'wordpress');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'root');

define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'WKkLZEf#sk1|QW-FXuY_#>#B84VMS#;C2>GW1J*oWuP8Y}N~Fz9Fgo/0h)Gw4>,<');
define('SECURE_AUTH_KEY',  '!m&(c{hEbd-W8*3}N5Ug]d.WUzR#<moeCH6/&[ov*Kc]w2cJPzbOg0TvL*dVqdp(');
define('LOGGED_IN_KEY',    '^C8(V`Vn%D2c+_vQ1tV5Wd-3{}Tt[r0Hr3j z)QIfR[83>:Yq e8EobHiry(O!=i');
define('NONCE_KEY',        'J=Gaa| XN_Ek)%:J[3|D#o@ZY-;];0wCZR$q_CkiPO0!5jl4rdib]B{jurWgRMC[');
define('AUTH_SALT',        '5S4AQKE`(NnmM:Gv>s?-L&R]U1xe+&-nTD+ sJ=i?&mg]7M.R^PsX;>j2V7f=e|2');
define('SECURE_AUTH_SALT', '0E1V=DATJS+Xn3=Y3:h3Az=l/niqeM,}%o]Q[v$ACt]If_}vx&o`u!B=m/+];)W}');
define('LOGGED_IN_SALT',   'h2dTU~{.g-5muX:s{ab$7KE(aE;h0X@m2BZ]$eW%3+t*Z=]RM8bMfU|p n.X,lB<');
define('NONCE_SALT',       'Z_KA+MDW8E}oL)6R<b3Z)dhihy;|}K|7!`pWr_lyU%fq=27:;fTP ~w&2$UwjqN^');
/** Database hostname */

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */

define('WC_REMOVE_ALL_DATA', TRUE);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
