<?php

date_default_timezone_set('Europe/Berlin');

error_reporting(E_ALL | E_STRICT);

global $CONFIG;
$CONFIG = (object) array(
	'dbprefix' => 'elgg_',
	'boot_complete' => false,
	'wwwroot' => 'http://localhost/',
);

$engine = dirname(dirname(dirname(dirname(__FILE__)))) . '/engine';

require_once "$engine/lib/autoloader.php";
require_once "$engine/lib/elgglib.php";
require_once "$engine/lib/sessions.php";

require_once dirname(__DIR__) . "/vendors/autoload.php";

function elgg_echo($message_key, $args = array(), $language = "") {
	return $message_key;
}