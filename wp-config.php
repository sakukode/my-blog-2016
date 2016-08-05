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
define('DB_NAME', 'blog_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '44A5m]1A3FE$ea_iCeHZCwkTI93;!!o5#^$6yT]6A}qkU0t#_drldmKd!6T3yph-');
define('SECURE_AUTH_KEY',  '&_Q0R7]&ek];@fM$!oTw^7r,~<,g>KC(D2hI;4LcG[C:&Q>5zNx$2fz)%VOU|4<-');
define('LOGGED_IN_KEY',    'UJwUk).FeL)So;aP<#c,rDF^ho|m^J~Q+9r.CH@pc~rf{QD:^7B|&[-af{_-8f|$');
define('NONCE_KEY',        'Cu{0%.CwR/u~P)k?sF(aYn_)nGdjj5Ok$iO{-BH;[ek{D|F14rB+gZOUot` 6{G.');
define('AUTH_SALT',        'Q#DF6*0MHSTY@:NteQ2FqZ@&h1kwJ0k}X,j.Ao+yq!C$q,#/U0G%u(xdG2G6L{XW');
define('SECURE_AUTH_SALT', 'of<tBltQ6.@O)!P}6g~/XG0K-x!Bub4f5.~;M$<[HBxA~&D*pY#/vFB0dnxhs]+P');
define('LOGGED_IN_SALT',   '>4NlmyhLDUj[_],df<4PR2^r/58yI+Ya6$qQ2)1>Ga`LoSB#BCS1>i/u]XzJS>Wx');
define('NONCE_SALT',       '-6]*qYuBWRv7.}i(Rl=wn(^B^(HE;q/N*oa3_h:hC]);E?n@;{m`q3{I?6Agh*?D');

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

define('FS_METHOD', 'direct');