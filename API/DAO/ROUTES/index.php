<?php

init_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

require dirname(__FILE__).'/..vendor/autoload.php';
require dirname(__FILE__).'/flights.php';

Flight::start();

?>