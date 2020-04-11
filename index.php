 <?php
require_once "libs/Smarty.class.php";
require_once "function.php";
require_once "session.php";

$smarty = new Smarty();
$smarty->setTemplateDir('template');


$action = ltrim($_SERVER['REQUEST_URI'], '/') ?? 'index';

switch ($action) {
	case "login":
	//echo getLoginView();
	header("Location: http://google.com");
	break;
}



?>