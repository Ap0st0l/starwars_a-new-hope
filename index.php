<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>3 дня гнева и боли=)</title>
	<link href="styles.css" rel="stylesheet" type="text/css" />
</head>
<body class=body>













 <?php

require_once "function.php";
require_once "session.php";


$action = $_GET['action'] ?? 'index';



switch ($action) {
	case 'login':
		if ($_SERVER['REQUEST_METHOD'] === 'GET') {
			echo LoginView();
		} else {
			$login = $_POST['login'];
			$password = $_POST['password'];
			loginUser($login, $password );
		}

		break;

	case 'register':
	if ($_SERVER['REQUEST_METHOD'] === 'GET') 
	{
		echo RegisterView();
	}
	else 
	{
		$login = $_POST['login'];
		$password = $_POST['password'];
		createUser($login, $password);
		header("Location: index.php");

	}
		break;
	

	case 'logout':
		session_destroy();
		header("Location: index.php");
	break;	

	case 'index':
	default: 
		echo mainPageView();
		
		if ($_SERVER['REQUEST_METHOD'] === 'POST') 
		{
		
			$text = $_POST['text'];
			createPost($text);
			header("Refresh:0");
		}
			

	break;

	case 'session':
		print_r($_SESSION);
	break;

}




?>







</body>
</html>

