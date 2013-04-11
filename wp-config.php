<?php define('WP_CACHE', true);

/** 
 * 
 * Hardcode the site for testing
**/
 //Added by WP-Cache Manager
define('WP_HOME','http://continuum.io');
define('WP_SITEURL','http://continuum.io');

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
define('DB_NAME', 'wordpressdb');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wpdb-Nargles!');

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
define('AUTH_KEY',         'Continuuml@B4taFooU@f^*VPcz8KgZ36;.ec};Y*To!OPf#v!$m!?|U*{@1Z,0Dcfy1shE-g');
define('SECURE_AUTH_KEY',  'ContinuumD+p.KW|o^5%:MY_XdB!/nU^EO+K/u.E|];ex9Gk~-~]f8amk+}x`@g)z.{<Ajdx,');
define('LOGGED_IN_KEY',    'ContinuumMSjF&d 3T1`L@{whi@0WDE8jX[E,x,(@+:t,7I)/Ig|rI_}A=v#$e[B9K(HmIVw}');
define('NONCE_KEY',        'Continuum]}3L#Z$B[Y 6nKs=P<uGEc7(zND+P99j}4ia17)IxG~I.,)B>#Uyv73>3MtYBr,+');
define('AUTH_SALT',        '<YaIfp<rc|@m8S.|xHP{RFJ:T|QaAP&TR2cDfG$p9T7>@#uZI%{4-C~:/A}+s_|G');
define('SECURE_AUTH_SALT', 'm`<@O[[&8{/<JUUrHWgG~Ta>di5OvhUo#-h@b3/|x+hZf+AVpeO>pp@0.z]+M2W5');
define('LOGGED_IN_SALT',   'Cqd-4DBKc`7{dFV@#oBrtwu>]{.5|If~`,gJ9,nr4GT=w<(*:ua<ly7`=L1`lBvc');
define('NONCE_SALT',       '-!]bG[v>>-w=sV33sQ#.uF.{z{aQS3_&=`db*c[~j#Mql^(]z;mr7^{X5-*1F/Y3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
/**
*Multisite config **/

define('WP_ALLOW_MULTISITE', true); 
/** Needed for Multisite **/
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
$base = '/';
define('DOMAIN_CURRENT_SITE', 'continuum.io');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
