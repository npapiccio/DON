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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'don-test-db');

/** MySQL database username */
define('DB_USER', 'npapiccio');

/** MySQL database password */
define('DB_PASSWORD', 'papu9537');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0.]QcZLKKA`4[^woZysq|%]<>*X ^>tTUMr)::h-g+]6Q})*p(kf^65`}@yV^{b+');
define('SECURE_AUTH_KEY',  '$Ph7LosAD((nE@^8;/Z=xq56a~<uh3JAe)[:xD}ao2~d227FqefQpU1f}uwK#[N ');
define('LOGGED_IN_KEY',    'X ?eH2hKFKuTSJuGv04`b{7!D[KTFz>F*lD+78z/SRV?_nx2cS<gbrgQXqHWFPR!');
define('NONCE_KEY',        '@#,f}OI+J]BuyF[=B/VUD)E^D8Iu<VHQ`fj0:Ui_)A_qEF!V[(IhZs{Fc-i?u!sJ');
define('AUTH_SALT',        'K|`ff?:dn#)_gx.^02y.dLU5/uS4Er5!R`lf`IMl~esEOW)F{4$D<J_e$B03y5>a');
define('SECURE_AUTH_SALT', 'tZFhNGp$TI_>@Ej.bR2jr[Dpg3W]8[,zk>y[yvc_uS5x0EqM=:K<(YAmDRiGywpx');
define('LOGGED_IN_SALT',   ' F%_)h$b;P;P`u<1:vaR#x%&;t>7e,%nPQ Q3;sJ^e:x3];QRX~e=We-zROzt_JN');
define('NONCE_SALT',       'E[|vDi&L?*2,`s+1 i(lUC-etQwNA&9PmPPba;+OCRUTXBPtY;/L,GqIca s7H*:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
