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





