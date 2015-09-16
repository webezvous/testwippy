<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'testwippy');

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

define('AUTH_KEY',         'jg=UKb19(!sb`CQ;q+!`erxANB]nFBU&XkL^0y,wmS~t6, ]-J3HV;qb/]%A!URb');
define('SECURE_AUTH_KEY',  '+U|,7uo~A;I+<Qjb+f(<{-O#!^LthrkVGr[Yg[[|Opi*]h2.C^>$*6[s#O>k%K6|');
define('LOGGED_IN_KEY',    '2y:(|:r k86<]$i--0I[P|d<2btm^F9NAGrG%*M.dN$Wy$b#>/?WZ$Z4m]i<M3NK');
define('NONCE_KEY',        'ti-n X9+,a~0`nfpD%6!6.NR.:CG5/o<lgE07zBL^Ju)Q,%^ZHvEy4+}CXABM;kX');
define('AUTH_SALT',        '+v^ <]CvpfS6Z^xOllT >O8Ayy@YdS8Ue6i1;|.U]K9sB+6kJz+XD(0I?))8$kE>');
define('SECURE_AUTH_SALT', 'k+sdH%}@rOqYG(wVQ xbV$K.{jvL+&|_Q-=E9iSCJknpds_*X5,~%4LslZVOf{dD');
define('LOGGED_IN_SALT',   'E6P63O?BF7gxL&JL-xl_<QcMnLz5Yt64X v+J+[e>K$#vl#<Q~Pk0cC-5H/lB+rP');
define('NONCE_SALT',       'Q+d4Y+QVrN`ca{J Izc6o$A }klO$[I%A}D|i<;P;C;m rz*?!:GIJT4~,,[lA-A');


$table_prefix = '6bc7_';


define( 'WP_DEBUG', true );
define('WP_ENV', 'development');



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
