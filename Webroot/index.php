<?php

define('WEBROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_NAME"]));
define('ROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_FILENAME"]));
/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/
require_once __DIR__.'/../vendor/autoload.php';

require_once(ROOT . 'Config/core.php');

require_once(ROOT . 'router.php');

require_once(ROOT . 'request.php');

require_once(ROOT . 'dispatcher.php');

$dispatch = new Dispatcher();
$dispatch->dispatch();

?>
