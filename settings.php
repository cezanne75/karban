<?php// Please adjust the configuration for your sitedefine("DB_NAME", "karban");	// Database Namedefine("DB_USER", "root");		// Database user namedefine("DB_PASS", "");  		// Database passworddefine("DB_HOST", "localhost");	// Database Server (If in doubt don't change)// That's it! Save and quit.//--------------------------------------------------------------------------// Advanced settings (for experienced users)

define("TITLE", 	"KARBAN - Simple accounting");	// Site titledefine("DESIGN", 	"default");						// Design for sitedefine("HOST_URL", 	"http://localhost/");			// URL of serverdefine("DB_PREFIX", "b_");							// For multiple installations// Internal settings (don't change)define("KARBAN_PATH", dirname(__FILE__) . "/");	// Path to KARBANdefine("LIB_PATH",	KARBAN_PATH . "lib/");		// Path to libraries	define("THEME_PATH", KARBAN_PATH . "themes/"); 	// Path to karban themes// UserCake General Settings//--------------------------------------------------------------------------define("USERCAKE_PATH", LIB_PATH . "userCake/"); // Path to database library//Database Information - will be set automatically$dbtype = "mysql";$db_host = DB_HOST;$db_user = DB_USER;$db_pass = DB_PASS;$db_name = DB_NAME;$db_port = "";$db_table_prefix = DB_PREFIX;$langauge = "en";//Generic website variables$websiteName = TITLE;$websiteUrl = HOST_URL; //including trailing slash//Do you wish UserCake to send out emails for confirmation of registration?//We recommend this be set to true to prevent spam bots.//False = instant activation//If this variable is falses the resend-activation file not work.$emailActivation = true;//In hours, how long before UserCake will allow a user to request another account activation email//Set to 0 to remove threshold$resend_activation_threshold = 1;//Tagged onto our outgoing emails$emailAddress = "noreply@" . $websiteUrl;//Date format used on email's$emailDate = date("l \\t\h\e jS");//Directory where txt files are stored for the email templates.$mail_templates_dir = "models/mail-templates/";$default_hooks = array("#WEBSITENAME#","#WEBSITEURL#","#DATE#");$default_replace = array($websiteName,$websiteUrl,$emailDate);//Display explicit error messages?$debug_mode = false;//---------------------------------------------------------------------------// For simplicity include common filesrequire_once(USERCAKE_PATH. "models/funcs.user.php");	// User managementrequire_once(LIB_PATH . 	"Message.php");				// Format warnings and errosinclude_once(THEME_PATH . 	"Template.php");			// Design files?>