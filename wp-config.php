<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_tedxabq');

/** MySQL database username */
define('DB_USER', 'tedxadmin');

/** MySQL database password */
define('DB_PASSWORD', 'uzpbrN8LS9eKzyLQ');

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
define('AUTH_KEY',         '7%xBwI9LtpT%R-~y8:0;A$h.j{3-HBJCn6++%vD[B{t[ moU`9G_|nAv,)r@MMkU');
define('SECURE_AUTH_KEY',  'KB^}7W%Wi|4p1(i)RMMktiGX]K{U+*hm^{<#Y5d:Y`N,5)B9xE23C];O;+J+[]pc');
define('LOGGED_IN_KEY',    'IlR.GzX/n6:SuBfc{s{q[msx(e5RwCH7KfS(S_|/}ln=wGVO/*4X?.+deu&pIoXT');
define('NONCE_KEY',        '=FTeRRg|/xF=*.bY-,ZV)(BD:iZ@.,[^YaBSNnEN[*YT>3jrcGi|adA=e+Q5>0k3');
define('AUTH_SALT',        'f|Ni.0@ 4F>@wBYklLkH,K=ValFW!i0dh9p-qf|M)b,;Z<5D)u!+:k5g<8%vGaoH');
define('SECURE_AUTH_SALT', '%dv*]~|LOxw9jESYX2%u&F6)|^|D~A3V+qkX|jG?!nrU`VW!*JXz}Czv|[c>_jAy');
define('LOGGED_IN_SALT',   '#rOH{ozZj)1?E2D^n%-@e+d{[2]--Ihs6{g+fF|3m0eGV~&|?G@#5a5Nx72-K%9y');
define('NONCE_SALT',       'F|aaBtjdW;h&v^~Q2(.=V4Xv|}UsMcy-NomL _qWhtd;Zcchl oYw6e!3a@+/M~~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
