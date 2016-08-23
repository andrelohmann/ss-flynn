<?php

/**
 * Default Environment File
 * altenate to your local needs and remove _default from filename
 *
 * see http://doc.silverstripe.org/framework/en/topics/environment-management
 */

/* Database connection */
define('SS_DATABASE_CLASS', 'MySQLPDODatabase');
define('SS_DATABASE_SERVER', $_ENV['MYSQL_HOST']);
define('SS_DATABASE_USERNAME', $_ENV['MYSQL_USER']);
define('SS_DATABASE_PASSWORD', $_ENV['MYSQL_PWD']);
define('SS_DATABASE_NAME', $_ENV['MYSQL_DATABASE']);


/* What kind of environment is this: dev, test, or live (ie, production)? */
define('SS_ENVIRONMENT_TYPE', 'dev');

/* Project Folder */
define('SS_GLOBAL_PROJECT', 'app');

// These two defines sets a default login which, when used, will always log
// you in as an admin, even creating one if none exist.
define('SS_DEFAULT_ADMIN_USERNAME', 'Admin');
define('SS_DEFAULT_ADMIN_PASSWORD', 'p');

//global $_FILE_TO_URL_MAPPING;
//$_FILE_TO_URL_MAPPING['/var/www/html'] = 'http://ss.demo.localflynn.com';

// Session Extender
//define('SESSIONID','PHPSESSID');
//define('SESSIONLIFETIME',(60*60*2)); // two hours
// if redis should be used for Session Savepath
// https://github.com/phpredis/phpredis#php-session-handler
//define('SESSIONSAVEHANDLER', 'redis');
//define('SESSIONSAVEPATH', 'tcp://127.0.0.1:6379?prefix=mySessionPrefix');
// if memcached should be used for Session Savepath
//define('SESSIONSAVEHANDLER', 'memcache');
//define('SESSIONSAVEPATH', 'tcp://127.0.0.1:11211');
