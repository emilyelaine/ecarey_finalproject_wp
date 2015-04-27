<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'emilyeca_wo6928');

/** MySQL database username */
define('DB_USER', 'emilyeca_wo6928');

/** MySQL database password */
define('DB_PASSWORD', 'iE5ymB5XyNQ9');

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
define('AUTH_KEY', 'd&+fXA-)<XUd)!SW$SBi|iF]G!%M_/kgkzM_E{zpmZN;@zUzeNjpuBn+emSGOgrnI^$tXMBmGu>LZhwQ{bD-Q<c)^_dSql^Tjm)xQ(t+&$db]<qa<xRrdp;eaAi=!T_X');
define('SECURE_AUTH_KEY', 'ynZBF|K)u%R(S|AZd&j!veVGtPavaFsjfzdzSb]RNiqDA{KbSUoCy{cfvPaBzZdttnuwwHJMaaZDGF|GEh=[@-GydKBtBxhOcm]tZt)Z[g>BP?aN;ko*CzOtRXuLaHGB');
define('LOGGED_IN_KEY', 'dcnv]U[xuNnWtHlyPi!N<HH/(tZJR=ZUSi}<i+Dd!*S<acwtEfV!CJ%(oo&qChEci&qwDENs=DJQdyzigcolRK^SVxRI[lVXUcL{_x;u(|+YsAbA=Ust-I-/hWPOrb=|');
define('NONCE_KEY', '<Bz-IJONJFml[</lz+oyXQKF=Y(|-Rk{fD-mUe/|cbWXFYgM-+EDZzkPDX!-y]AjEPCY$V<-cAzkuuO-Kfm&OpiK-v_Te$Gp%BX@g{=aaz]gzVYjq{]O_ee/@%xcMgGt');
define('AUTH_SALT', 'U+)tU=Dyp?-x[y?njewNlwyJT!rFkirbP}HaC/wK?YMdy[<ROa|FXwAdu{R=;mwGsoVcXcr@^(BSixR|ooBTqmrU^]HtB}$yR_IEKKBGs-G>&A[%Wph<kZoYjQsDc@*z');
define('SECURE_AUTH_SALT', '@a@LPG<gKT%oCQ*!Dq{f!VTejiQ!cKkfgAwSYPR/g?Ix?@w^Ch)&g-@<Tqvrl(<z_qM?+]D;WOYj{?_?wULLhC;l={iqv%+gC{&/u?unyi;|dJ/<-inN!(CTrYJ<+a=n');
define('LOGGED_IN_SALT', '^;lmaC;-Z>x)ig!Hnz<&feYY/@Ula]XZN(ljRp[IPT{s/)xC%@qUgPc&_!_caFO=&gDTeIDVTCbD+/?gQfwMcFCJgjL@/g;&giN{jzTYlTKb<[cn@oRnQOL|P]HbXnxG');
define('NONCE_SALT', 'sXKslg==uWgMUzmRm%p)bn?WIh>};tB|O}}ch@@*R;Ba?QeXI(Gc_fLfvrYRcKYsQ]B?MsNIX_)CjOQB@Fq+BT+z&{aS@-bPLP<e;B@e]zwg|^{^z%vVzEGG;@^z(EV]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_iywt_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 */
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
}
