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
define( 'DB_NAME', 'wp_backend_2_products' );

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
define( 'AUTH_KEY',         '&XGbalV|jap{0WP+7/M!CnU ?|l]oZxk_<FE-1_QFK-Cr?>Q`~<msP=YT&s~b+NT' );
define( 'SECURE_AUTH_KEY',  'xf6}j[>`3AW<n${z^I5YL#4|t=o[<z0TZw:t(%I`O:*vS8au:UUo)20![t]2B;ki' );
define( 'LOGGED_IN_KEY',    ':(_To<YBzc6]%FY:fp}+*V,r)<%4_^F^]w8-+B^Q1K18(]TRQ3<T8tPe%Z~[ J O' );
define( 'NONCE_KEY',        '<I*X0l$lj9_@MVZk`/_58lUBV48KJGCuuE8>eNVr?kETm-::(HQPr[M{q/#Jd@Mz' );
define( 'AUTH_SALT',        'kI($1*50_z)Q92?wYXs^e;<LY<EK5snV)~>P}}#?kW/&x+O_~t,-QAs)C.1m$4[!' );
define( 'SECURE_AUTH_SALT', 'oK|f>;,s<hCq>U;Z.Vu_7z]_y9cnpXa]~i1#Yn2 rl1*>+,2kY/JnZSPU(V}S`T(' );
define( 'LOGGED_IN_SALT',   'g|>p~8l2c 0uo4=.Sn5mN;N*?rtlZ{ElXlyHqJi?!;O:&^5wLh{.NrN?jA#H]0Ez' );
define( 'NONCE_SALT',       ']i@%IM]-*Qk9KVdF(=*Slg$Tq@tCe;:6P@K=xhV@>Y{mzC{_+nK{@EPgi%R0Y}e ' );

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
