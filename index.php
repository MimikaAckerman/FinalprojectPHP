<?php
require_once 'config/db.php';
/* require_once 'config/baseConstants.php'; */
require_once 'models/db.php';

if (!isset($_GET['controller'])) $_GET['controller'] = constant('DEFAULT_CONTROLLER');
if (!isset($_GET['action'])) $_GET['action'] = constant('DEFAULT_ACTION');

$controller_path = '/controllers/' . $_GET['controller'] . '.php';

if (!file_exists($controller_path)) $controller_path = '/controllers/' . constant('DEFAULT_CONTROLLER') . '.php';

require_once $controller_path;
$controllerName = $_GET["controller"] . 'Controller';
$controller = new $controllerName();

/* Check if method is defined */
$dataToView["data"] = array();
if (method_exists($controller, $_GET["action"])) $dataToView["data"] = $controller->{$_GET["action"]}();






require_once "config/constants.php";
require_once "config/db.php";
require_once "core/classes/Database.php";
require_once "core/classes/Model.php";
require_once "core/classes/View.php";
require_once "core/classes/Controller.php";

require_once "core/Router.php";

$router = new Router();

/* require_once 'view/template/header.php';
require_once 'view/'.$controller->view.'.php';
<<<<<<< HEAD
<<<<<<< HEAD
require_once 'view/template/footer.php';

=======
require_once 'view/template/footer.php'; */
require_once 'view/template/footer.php';
