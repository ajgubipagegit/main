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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '+L@w^>0[yDQ9[l;Ok+a+9]={N}8+lfg?)H2CgS_4!JYc=[-X0z#M/^d2gFioJhaS');
define('SECURE_AUTH_KEY',  '--91gDeI1901Dz7rhJ[:-62/j}aD8.x-p#9U`E{;n?rp_v#JO-_*PH-B_nGxg${[');
define('LOGGED_IN_KEY',    ']i*[:8A@-q!9YT,VN1*7zZk$9=tlhwM07n`@G(b!4B~`;#9<OSQKqF{%?X=w%Jzl');
define('NONCE_KEY',        '5g[~~P;lI?</scZPH~?.p&t 8*>Nv_?i}9vY-O}!/=%uietYzOrWc2Y8CP3i-jtN');
define('AUTH_SALT',        'L7%rEDXi suaspX@xk&hZ.sPLTU9cu0fsgC4}tOr);~Ox%p*~<kx{Ha?~SSts?`y');
define('SECURE_AUTH_SALT', 'Z{@8.hEZP )!cJ~D|-ZL6z>w`#D6he!gqeFiELr0.)d:Zvv/,uvjAKR6Sy~c$K=c');
define('LOGGED_IN_SALT',   '{(2qlTGypMLDkc!O@PQvyN~Cbg|*~.o=@Z[gjrS(`E8HGY&8xox~pi)46$iurgVg');
define('NONCE_SALT',       'C2O,$A4atl D8H[9yP?KQY9B.im/u?0Nn|e}mQzN^LQKK#c2<X^?(>d1sPzzkna&');

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
