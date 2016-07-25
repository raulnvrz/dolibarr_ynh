<?php
//

$dolibarr_main_url_root='YNH_MAIN_URL';
$dolibarr_main_document_root='YNH_DOC_ROOT';
$dolibarr_main_data_root='YNH_DATA_ROOT';

$dolibarr_main_db_host='localhost';
$dolibarr_main_db_port='';
$dolibarr_main_db_name='YNH_DB_NAME';
$dolibarr_main_db_user='YNH_DB_USER';
$dolibarr_main_db_pass='YNH_DB_PASS';
$dolibarr_main_db_type='mysqli';
$dolibarr_main_db_character_set='utf8';
$dolibarr_main_db_collation='utf8_general_ci';

// Specific settings
$dolibarr_main_prod='0';
$dolibarr_nocsrfcheck='0';
$dolibarr_main_force_https='1';
$dolibarr_main_cookie_cryptkey='YNH_CRYPT_KEY';
$dolibarr_mailing_limit_sendbyweb='0';


//##################
// Login
//##################

// dolibarr_main_authentication
// This parameter contains the way authentication is done.
// If value "ldap" is used, you must also set parameters dolibarr_main_auth_ldap_*
// Default value: dolibarr
// Possible values: Any values found in files in htdocs/core/login directory after
// the "function_" string and before the ".php" string. You can also separate several
// values using a ",". In this case, Dolibarr will check login/pass for each value in
// order defined into value. However, note that this can't work with all values.
// Examples:
// $dolibarr_main_authentication='http';
// $dolibarr_main_authentication='dolibarr';
// $dolibarr_main_authentication='ldap';
// $dolibarr_main_authentication='openid,dolibarr';
// $dolibarr_main_authentication='forceuser';	// Add also $dolibarr_auto_user='loginforuser';

//
$dolibarr_main_authentication='ldap';


// Parameters used to setup LDAP authentication.
// Uncomment them if dolibarr_main_authentication = 'ldap'
//
$dolibarr_main_auth_ldap_host='127.0.0.1';                  // You can define several servers here separated with a comma.
$dolibarr_main_auth_ldap_port='389';                        // Port
// $dolibarr_main_auth_ldap_version='3';
$dolibarr_main_auth_ldap_servertype='openldap';			   // openldap, activedirectory or egroupware
$dolibarr_main_auth_ldap_login_attribute='uid';	   // Ex: uid or samaccountname for active directory
$dolibarr_main_auth_ldap_dn='ou=users,dc=yunohost,dc=org'; // Ex: ou=users,dc=my-domain,dc=com
$dolibarr_main_auth_ldap_filter = 'uid=%s';                       // If defined, two previous parameters are not used to find a user into LDAP. Ex: (uid=%1%) or &(uid=%1%)(isMemberOf=cn=Sales,ou=Groups,dc=opencsi,dc=com).
// $dolibarr_main_auth_ldap_admin_login='';					   // Required only if anonymous bind disabled. Ex: cn=admin,dc=example,dc=com
// $dolibarr_main_auth_ldap_admin_pass='';					   // Required only if anonymous bind disabled. Ex: secret
// $dolibarr_main_auth_ldap_debug='false';


// dolibarr_main_demo
// Login and pass to use in a demo mode
// Default value: ''
// Examples:
// $dolibarr_main_demo='autologin,autopass'



//##################
// Security
//##################

// dolibarr_main_force_https
// This parameter allows to force the HTTPS mode.
// 0 = No forced redirect
// 1 = Force redirect to https, until SCRIPT_URI start with https into response
// 2 = Force redirect to https, until SERVER["HTTPS"] is 'on' into response
// 'https://my.domain.com' = Force reditect to https using this domain name.
// Warning: If you enable this parameter, your web server must be configured to
// respond URL with https protocol.
// According to your web server setup, some values may works and other not. Try
// different values (1,2 or 'https://my.domain.com') if you experience problems.
// Default value: 0
// Possible values: 0, 1, 2 or 'https://my.domain.com'
// Examples:
// $dolibarr_main_force_https='0';
//
$dolibarr_main_force_https='1';

// dolibarr_nocsrfcheck
// This parameter can be used to disable CSRF protection.
// This might be required if you access Dolibarr behind a proxy that make
// URL rewriting, to avoid false alarms.
// Default value: 0
// Possible values: 0 or 1
// Examples:
// $dolibarr_nocsrfcheck='0';
//
$dolibarr_nocsrfcheck='0';

// dolibarr_main_prod
// When this parameter is defined, all errors messages are not reported.
// This feature exists for production usage to avoid to give any information to hackers.
// Default value: 0
// Possible values: 0 or 1
// Examples:
// $dolibarr_main_prod='0';
//
$dolibarr_main_prod='0';



//##################
// Other
//##################

// dolibarr_main_db_prefix
// This parameter contains prefix of Dolibarr database. 'llx_' if not defined.
// Examples:
// $dolibarr_main_db_prefix='llx_';
//
$dolibarr_main_db_prefix='';

// dolibarr_main_limit_users
// Can set a limit on the number of users it will be possible to create
// (the superadmin not included). Can be used for a restricted mode.
// Default value: 0 (unlimited)
// Examples:
// $dolibarr_main_limit_users='0';

// dolibarr_mailing_limit_sendbyweb
// Can set a limit for mailing send by web. Can be used for a restricted mode.
// Default value: 0 (use database value if exist)
// Examples:
// $dolibarr_mailing_limit_sendbyweb='0';

// dolibarr_strict_mode
// Set this to 1 to enable the PHP strict mode. For dev environment only.
// Default value: 0 (use database value if exist)
// Examples:
// $dolibarr_strict_mode=0;

// dolibarr_pdf_force_fpdf
// Set this to 1 to use the libray FPDF instead of TCPDF. FPDF is not embedded with Dolibarr,
// so you also have to uncomment line $dolibarr_lib_FPDF_PATH to provide path to FPDF library.
// Warning: FPDF does not support all features supported by TCPDF used by default. So using
// this library instead of TCPF will break some features like transparent logo, cyrillic, arab,
// and asiatic languages, total number of pages, ...
// Default value: 0
// Examples:
// $dolibarr_pdf_force_fpdf=1;



//#################################
// Path to external libraries/fonts
//#################################

// Value to overwrite path to use shared libraries instead of embedded one
//$dolibarr_lib_ADODB_PATH='/usr/share/php/adodb';
//$dolibarr_lib_TCPDF_PATH='/usr/share/php/tcpdf';
//$dolibarr_lib_FPDI_PATH='/usr/share/php/fpdi';
//$dolibarr_lib_FPDF_PATH='/usr/share/php/fpdf';
//$dolibarr_lib_GEOIP_PATH='';
//$dolibarr_lib_NUSOAP_PATH='/usr/share/php/nusoap';
//$dolibarr_lib_PHPEXCEL_PATH='';
//$dolibarr_lib_ODTPHP_PATH='';
//$dolibarr_lib_ODTPHP_PATHTOPCLZIP="/usr/share/php/libphp-pclzip";
// Value to overwrite path to use shared javascript instead of embedded one
//$dolibarr_js_CKEDITOR='/javascript/ckeditor';
//$dolibarr_js_JQUERY='/javascript/jquery';
//$dolibarr_js_JQUERY_UI='/javascript/jquery-ui';
//$dolibarr_js_JQUERY_FLOT='/javascript/flot';
// Value to overwrite some path to use font instead of embedded one
//$dolibarr_font_DOL_DEFAULT_TTF="/usr/share/fonts/truetype/ttf-dejavu/DejaVuSans.ttf";
//$dolibarr_font_DOL_DEFAULT_TTF_BOLD="/usr/share/fonts/truetype/ttf-dejavu/DejaVuSans-Bold.ttf";


//##############################
// External module
//##############################

// multicompany_transverse_mode
// Prerequisite: Need external module "multicompany"
// Pyramidal   (0): The rights and groups are managed in each entity. Each user belongs to the entity he was created into.
// Transversal (1): The user is created and managed only into master entity but can login to all entities if he is admmin
//                  of entity or belongs to at least one user group created into entity.

// Default value: 0 (pyramidal)
// Examples:
// $multicompany_transverse_mode='1';

?>
