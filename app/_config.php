<?php

global $project;
$project = SS_GLOBAL_PROJECT;

global $database;

// Use _ss_environment.php file for configuration
require_once("conf/ConfigureFromEnv.php");

Config::inst()->update('GDBackend', 'default_quality', 100);

Config::inst()->update('RootURLController', 'default_homepage_link', 'home');

// hash links will not be rewritten, to allow "Back to Top Button" and smooth scrolling on OnePagers
Config::inst()->update('SSViewer', 'rewrite_hash_links', false);

# disable security token globally, as we are hidden behind proxy
SecurityToken::disable();

Config::inst()->update('Member', 'login_marker_cookie', 'uli');
