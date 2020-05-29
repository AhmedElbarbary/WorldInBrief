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
define( 'DB_NAME', 'worldinbrief_db' );

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
define( 'AUTH_KEY',         'XFR<+DG+=~=VQvlcI{K#_bvycWSxw3RH^P-jJVT*D=%3@miGt0w)B9#9Ip=SLI?=' );
define( 'SECURE_AUTH_KEY',  'Y26l5h5|X^<CWY(hO-lyrZj9xZGoDJK7-jYo+N${vS=1FMy&;L!6#NxI:VoQSGf-' );
define( 'LOGGED_IN_KEY',    ':wA]{rC#p?!x}MhMB1nsi@VSxVoWh[4Q^@O%N6(e/UI`<W@Q@ZZO:[huOl7A<>R(' );
define( 'NONCE_KEY',        'Q{P2I1sJaP-)@(z2vR5`%S6t&3MAdUOR8`3%|5-sO-][(puwG()NsB$1TORn>o.&' );
define( 'AUTH_SALT',        '+1;+!kxE7|[rC:eEaVYO&bgj.M:yseSe9E^?`Yi9&QndhoNy c-xjdpmkZ3-r1Q9' );
define( 'SECURE_AUTH_SALT', '}&3Jmy&)3*D~QNt~*R@5J0k7ir&Je3nkX,@v&A1A[Gp}(qB5OV Vsh?zO{1v*%wY' );
define( 'LOGGED_IN_SALT',   'oU*}.If0]k3uO4@f7+H5#6Y/f^`3})!^g1_Y1@JE:LQU-4t5KQs^7Dl4kmG-QDA#' );
define( 'NONCE_SALT',       'V`evJ )&!Vkwd1(i!cwP ,C`bP}]Lr32H&Igw&--sWfq{!qkzT$l,OlqLyt6Hr@N' );

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
