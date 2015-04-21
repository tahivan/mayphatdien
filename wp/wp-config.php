<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'magento_sample');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '`S+.v(/%EgpqhRqKW[1M*+[!5lN83|.2Lp7kR&>q-W$dT5@S^7OG5$$A^=pGQf^|');
define('SECURE_AUTH_KEY',  '-Wt, v5HM{kPc)x^h-~f1-t&oRNeDPd#Fr}!c-9$+y5aZC$GHo>7%{Ot:XDM6NU^');
define('LOGGED_IN_KEY',    'Z22)3lM1Z|=wB5q=9&x7nSnT+M;T%?0`MRT2ZCt>oQH37lg)w6}--zQq@^~/l.r2');
define('NONCE_KEY',        'l:PPe$7irH59i@pZJz<t$;-M7a1,0R+n3g7UCujsG_?tB%d^te;.+]=,MxgQ&>|G');
define('AUTH_SALT',        'Dv!Z{4nm&Ix<-Ds~k2-94:tl=wtzd|4-AY%|ZH831Mro6CBZ/jUC}KmjxJL-@J&y');
define('SECURE_AUTH_SALT', '%7<<5]Zp2SF-6d^5U/)jvc<+^kxOVqQ:-l+vS-6M]R;|e_fO1S<s_J_$i|-(|qLE');
define('LOGGED_IN_SALT',   '4tIUCRs8}rcL,Fn#[?xo}2oq3[Y1eKYeikUQwq?cAmmj6 Ec8jaYx1Uy!s=-zRHM');
define('NONCE_SALT',       'V@h5%+JF4;k~wuYC-5|[wPo-pPK0k+JJe4&QJV09Y9Cmr/&ivXitG,cj+PLrrDrQ');

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
