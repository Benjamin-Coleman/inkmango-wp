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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'lvlGwDFLUelNvwIjZLgoApk3wGwPWES3mQsRbex80ENpKtAfcLz89VcuxjDkiYTijDw0TqO3Gs2RDa56T6n9wA==');
define('SECURE_AUTH_KEY',  '630Laks2E5Vyr4+NG1XO6YulVhOY0WwGmfqvLexRwE4YNRiQGnO06gkdqHXNgBbtVEeyHEn9x4GFGmpGe+d4QQ==');
define('LOGGED_IN_KEY',    'WkvzPY5jvb2gY9f94yB4BPWK0hM2TOYq6a/xJQpS0wp2GdO1NKDNXvDNfgZlqwMjEqXeAOUpdK/f93jDLmgaKw==');
define('NONCE_KEY',        'UFOH4sWVsuh4dAnc/ut20fik4TfmhwAkxcYHJlPv3ZdN5OqJndoLFcxlvN1rRZa1JKCS/OmoWQuaaUqpK+ZivQ==');
define('AUTH_SALT',        'Oz0wXL7Tqx5eLpAFzh86zd49WHwE/LsO6TNfvCl8nbbX86h6STDBQjQEGlnIPohE4iUggagVISjTCzeMksF3DQ==');
define('SECURE_AUTH_SALT', 'emDWJr6KpnEM15aMTWYwN6cPvgBag5fDuroqVRmCHs4I1FmG/BugT/qM3x0it57BNxSO+bEm1UcSsd6dGdRAzQ==');
define('LOGGED_IN_SALT',   'z8YUpFaDqR7eaeaK5E2aEcUTZv4PrSRqqVhGwskSw0d0kFbR9rXFChf0kWDjgQNQ5yLgLznrpaV2EvjAEKPgjw==');
define('NONCE_SALT',       'aeWHjEOlIE7ieZ6G89jO2U6O0jXek+rSsfF8D6JlEaEgL7kkO1LTjNrWGNH6zh1BEg5usc5Nd/09rxBvwgG3mw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
