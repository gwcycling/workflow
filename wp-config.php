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
define('DB_NAME', 'workflow');

/** MySQL database username */
define('DB_USER', 'workflow');

/** MySQL database password */
define('DB_PASSWORD', 'weblogic');

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
define('AUTH_KEY',         'OTFaE;+2DeQ!daenD{`(6=ZwqJ_^]ey</3xpBySq;sp[$PyN[S9?<%nP0XD(S~D`');
define('SECURE_AUTH_KEY',  '@Z;M+Dtt?zOi9w+v-J8/6],K Sko9ab2nhlHQtxwP`r6*m@OD>{fE:f~7>0E9ycp');
define('LOGGED_IN_KEY',    '>TKFO~@S/}ZV/VN?5u}gj}e`~_nW-^{p$m}[p_4@.WN6^m%)z]U,YlG~U0d/%%G)');
define('NONCE_KEY',        't8t9~~h$RK%)i&%A#W;fRCocl:J86T^4oy{$gHDa7VbC6K1dJpVu[GDttuc~:k=P');
define('AUTH_SALT',        'Av%8]r7Czg7&s:8Gyry-`]Lc@~m{w)O:Cea/d,c Rg+YH_fLmR5hCp^m{<gM)Y^k');
define('SECURE_AUTH_SALT', '8Gu+|rH+p1MZ{}Uu?J0RXJB@},pZ*y;#rEX<6;0K]2gsoQ32$}csu.9dkfI^A=V0');
define('LOGGED_IN_SALT',   '9T/KX61|y,(u$2Uz,I3Nu{fChOhTMaT/VJ:$_;;][k,gPezB^`r,Fo%~*3>{Ne6H');
define('NONCE_SALT',       'UFwwi})z^-h50[bm5E2R[ItjAd-TqCK)|PK$)@/XM|Pekt$9eybVn~sP}lSXI@`i');

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
