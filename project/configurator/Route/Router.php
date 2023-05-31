<?php

$route = substr(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), 1);

switch($route){
	case '':
	case 'index':
	case 'index.php':
		MainController::startSite();
		break;
	case 'showLogin':
		UserController::showLogin();
		break;
	case 'login':
		UserController::login();
		break;
	case 'showRegister':
		UserController::showRegister();
		break;
	case 'register':
		UserController::register();
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
//---------------cooler---------------
	case 'coolers':
		CompanyController::showTable($_GET['page']);
		break;
	case 'showCreateCooler':
		CompanyController::showCreate();
		break;
	case 'createCooler':
		CompanyController::create();
		break;
	case 'showEditCooler':
		CompanyController::showEdit($_GET['id']);
		break;
	case 'editCooler':
		CompanyController::edit($_GET['id']);
		break;
	case 'showDeleteCooler':
		CompanyController::showDelete($_GET['id']);
		break;
	case 'deleteCooler':
		CompanyController::delete($_GET['id']);
		break;
//---------------cooler---------------
//---------------corpus---------------
	case 'corpuses':
		CompanyController::showTable($_GET['page']);
		break;
	case 'showCreateCorpus':
		CompanyController::showCreate();
		break;
	case 'createCorpus':
		CompanyController::create();
		break;
	case 'showEditCorpus':
		CompanyController::showEdit($_GET['id']);
		break;
	case 'editCorpus':
		CompanyController::edit($_GET['id']);
		break;
	case 'showDeleteCorpus':
		CompanyController::showDelete($_GET['id']);
		break;
	case 'deleteCorpus':
		CompanyController::delete($_GET['id']);
		break;
//---------------corpus---------------
//---------------harddrive---------------
	case 'harddrives':
		CompanyController::showTable($_GET['page']);
		break;
	case 'showCreateHarddrive':
		CompanyController::showCreate();
		break;
	case 'createHarddrive':
		CompanyController::create();
		break;
	case 'showEditHarddrive':
		CompanyController::showEdit($_GET['id']);
		break;
	case 'editHarddrive':
		CompanyController::edit($_GET['id']);
		break;
	case 'showDeleteHarddrive':
		CompanyController::showDelete($_GET['id']);
		break;
	case 'deleteHarddrive':
		CompanyController::delete($_GET['id']);
		break;
//---------------harddrive---------------
//---------------memory---------------
	case 'memorys':
		CompanyController::showTable($_GET['page']);
		break;
	case 'showCreateMemory':
		CompanyController::showCreate();
		break;
	case 'createMemory':
		CompanyController::create();
		break;
	case 'showEditMemory':
		CompanyController::showEdit($_GET['id']);
		break;
	case 'editMemory':
		CompanyController::edit($_GET['id']);
		break;
	case 'showDeleteMemory':
		CompanyController::showDelete($_GET['id']);
		break;
	case 'deleteMemory':
		CompanyController::delete($_GET['id']);
		break;
//---------------memory---------------
//---------------motherboard---------------
	case 'motherboards':
		CompanyController::showTable($_GET['page']);
		break;
	case 'showCreateMotherboard':
		CompanyController::showCreate();
		break;
	case 'createMotherboard':
		CompanyController::create();
		break;
	case 'showEditMotherboard':
		CompanyController::showEdit($_GET['id']);
		break;
	case 'editMotherboard':
		CompanyController::edit($_GET['id']);
		break;
	case 'showDeleteMotherboard':
		CompanyController::showDelete($_GET['id']);
		break;
	case 'deleteMotherboard':
		CompanyController::delete($_GET['id']);
		break;
//---------------motherboard---------------
//---------------powerblock---------------
	case 'powerblocks':
		CompanyController::showTable($_GET['page']);
		break;
	case 'showCreatePowerblock':
		CompanyController::showCreate();
		break;
	case 'createPowerblock':
		CompanyController::create();
		break;
	case 'showEditPowerblock':
		CompanyController::showEdit($_GET['id']);
		break;
	case 'editPowerblock':
		CompanyController::edit($_GET['id']);
		break;
	case 'showDeletePowerblock':
		CompanyController::showDelete($_GET['id']);
		break;
	case 'deletePowerblock':
		CompanyController::delete($_GET['id']);
		break;
//---------------powerblock---------------
//---------------processor---------------
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
//---------------processor---------------
//---------------socket---------------
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
//---------------socket---------------
//---------------videocard---------------
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
//---------------videocard---------------
	case 'error403':
		// MainController::error403();
		break;
		
	case 'error404':
	default :
		MainController::error404();
		break;

}

?>