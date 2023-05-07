<?php

$route = substr(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), 1);

switch($route){
	case '':
	case 'index':
	case 'index.php':
		MainController::StartSite();
		break;
//---------------company---------------
	case 'companies':
		CompanyController::showTable($_GET['page']);
		break;
	case 'showCreateCompany':
		CompanyController::showCreate();
		break;
	case 'createCompany':
		CompanyController::create();
		break;
	case 'showEditCompany':
		CompanyController::showEdit($_GET['id']);
		break;
	case 'editCompany':
		CompanyController::edit($_GET['id']);
		break;
	case 'showDeleteCompany':
		CompanyController::showDelete($_GET['id']);
		break;
	case 'deleteCompany':
		CompanyController::delete($_GET['id']);
		break;
//---------------company---------------
	case 'error403':
		// MainController::error403();
		break;
		
	case 'error404':
	default :
		MainController::error404();
		break;

}

?>