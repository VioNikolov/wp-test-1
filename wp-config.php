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
define('DB_NAME', 'wp-db');

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
define('AUTH_KEY',         'E2 WR3R[*cpG2nq|/Db0fan7>of)BYhN.-(mb?%|%X,q*6}d<N21kBT$<${O}wN>');
define('SECURE_AUTH_KEY',  '#S=s7%EBz!djpwkeg&MM):j<:ig6Bv^JeIRW>Yi15Mn#&<QXs65&*=z3>oQlBlM8');
define('LOGGED_IN_KEY',    ')QZGr^jHRcD;uywEbZXp$eUWVIeeTd =N]-$e2L|=oR7P-6pv_lj}7FlE;zW2E2^');
define('NONCE_KEY',        'D-`+H#w=3PCcz-T:Ubh)Khe`gtfS >K/vH7lsw-QY,}_;pFl{4@O{S#mqItjgU6C');
define('AUTH_SALT',        'C=riYB|f>q84aS~gWf1<}./@i0f^{3qbnu=Mcv>C Unuf f ]tUB}.6Wk~n/2T>L');
define('SECURE_AUTH_SALT', 'bsU?{?4mHgQjqP[E57wLQl s([ZW2KQs@s#6X[F.vXTwBd*lv5? rZvazB5#/&.P');
define('LOGGED_IN_SALT',   'o6[VFkjru!y,z.Ll@89pm_=L[C; TEesW/d*}(c)N7-%|1+4zuMaPIMdtic`v&AR');
define('NONCE_SALT',       'J4;ebsp[t{&rTsyeo # ]1p*Nfj.N`$OL]GTb.@<{5mC)awAhPK!L ]O6UBVfk g');

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
