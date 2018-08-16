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
define('DB_NAME', 'fastcomic');

/** MySQL database username */
define('DB_USER', 'fastcomic');

/** MySQL database password */
define('DB_PASSWORD', 'cuong1995');

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
define('AUTH_KEY',         'g |7irp*ScgN.4%}L@i8XB{_M~#aPk:B=4PuZR/1`%/,`5LZvg*c29.^[9@Nb.y0');
define('SECURE_AUTH_KEY',  'I&]yS-Z#vzi)Kb|b{<lD*+ E|k(9MBJ&)0[}drafF-;C|Llx`!7/F,(jy=>gJyE+');
define('LOGGED_IN_KEY',    'h1kJO 6aw3QY), iCbL)%owj(r/7A+9_tEn;Be|cQ=%o/IZ:cj=8@#eDGf-fNNd3');
define('NONCE_KEY',        '#&669q|RJf.MfS@1Z`oGSbg{!&8U6+D Xp88jzZ?t[;h:2SkDvIQ{H3ltLv+$KGW');
define('AUTH_SALT',        'nR7U z7SMS|-rkT.e9>(;IZCZ_S?G<v,LOvI^-L(l9{mUb&8e}upWo0k[aMEGSIp');
define('SECURE_AUTH_SALT', 'MG`F?{Zf0D*@1B7*8tAuOVas7]A**!F/|?]G9OvveU((l;R5jDu$XHD%fc>@-fta');
define('LOGGED_IN_SALT',   '3~$VDmgI~Z F<9K,lJ.L2i<7mX}c1DwCYJbcd6FI|Vbay=O-h7&SjPZ`n[&ClaZ7');
define('NONCE_SALT',       'SZf7T]@@FF0FuhZV9%A*h:XUVeQb^[{B+41D1j!U74Z0j={G*!myE0)ap0x]1ws9');

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
