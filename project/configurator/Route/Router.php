<?php

$route = substr(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), 1);

switch($route){
	case '':
	case 'index':
	case 'index.php':
		MainController::StartSite();
		break;
//---------------games---------------
	case 'error403':
		MainController::error403();
		break;
		
	case 'error404':
	default :
		MainController::error404();
		break;

}

?>