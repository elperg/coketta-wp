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
define('DB_NAME', 'barbarap_wor1355');

/** MySQL database username */
define('DB_USER', 'barbarap_wor1355');

/** MySQL database password */
define('DB_PASSWORD', '4kd3kr7moRhL');

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
define('AUTH_KEY', '*=B{iC<+QItXdjv=C);nBz%DQrbufTPZZa@L>uVI=PD<Z>F@!Mx^-<]|WsIdI/tgfDqB+yQn<Ms+&UuHgn{<eiC?TGOlfSfIvbfEH)i-vgNnamJIc)|Ekeq[<}Ndsm+w');
define('SECURE_AUTH_KEY', '@jc=avh=M<p[-{KCwaGfQKNhB*zVS%(hr>n}k&MPL>%gIjm<+sT]vaEGS?[lcf?R$Cm}dGOrt-kEgf@yczWBrGf{WC*jUXfFPJdk;;mDc-=GOt&mj]XqTYEX+]LhCOD?');
define('LOGGED_IN_KEY', '/EM!tia=^za<zBZvoKntM|!PWqm*x(%c>X){}S-aK^cHpAPti]f@uS)jvwUZZ&jgma/*v!PbyuO_Nd+a)LXmU>K$<?/^UwIZCxFPWPtD|Y&NC^<eTySsV>B+VgM[/+/)');
define('NONCE_KEY', 'KZu>wGvw-Yx}+hZv|vf)>>i>jr^qmz(+eWQ)A=Q>(/|&mha(_vwm!OSsbZX)+H&}TszZglUJ(Vz$Re]E=+)WaVVe)I@ulxYepB[khEUwZEcvyt>bUi(F=LsjyXXoVOxm');
define('AUTH_SALT', 'FgcOHj!sWgimYMlsO+[ONQNaz=KNdeT=P-K/c)FwY*I_wYwDG!ZjR=]CUH}]b_JFn)B)qYWuHZMQKcrMy>l<|%XNc|z[LNbJJ@gzRy$/-CTAKa;]fAhpH}&ezD@=l=kK');
define('SECURE_AUTH_SALT', '*B^(S%{jr_gm<mrrj&%PFF+PL]gkTZWIi;FE|=xTgltUU=AHU?rpqbfhSjrjLw@VYTTRDykJ|A?r<_QemSDReTZwXtIio_yH_!n/Bfka)?Gv<rdd+WMcM/XJQ}L;rAHz');
define('LOGGED_IN_SALT', 'hTS&!U]!UfrcuDJki&EnQMHt[@grYBsOp]D%tfWVvqY&dIJ[Qb;$wSkEf-O&=KLW%i+-He_[|zApIthx(whbe=fyd(w!C(KOo>HoKn?DFdtYf^)jy-Op-L?Ukj]KrzXP');
define('NONCE_SALT', 'zRlShelev!?&F+)tR+[=_|YYRAzXl?iCte<]y[dN;Ox=@jcw-}|-N{YWKN}l&;WOO^b>[f(;ss!cWZTBbeH}%aMVAqP=?_^vclCmdThuo-$OswP(|bAO@l+F<>]k*kMS');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_xypr_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
