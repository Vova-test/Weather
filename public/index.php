<?php
define("ROOT_PATH", dirname(__FILE__, 2));

require_once(ROOT_PATH . "/env.php");
require_once(ROOT_PATH . "/vendor/autoload.php");

define("TEMPLATE_FOLDER_PATH", ROOT_PATH . "/" . TEMPLATE);

session_start();

$router = new Router();

$router->setRoute(include_once(ROOT_PATH . "/routes.php"));
$router->run($_SERVER['REQUEST_URI']);