<?php
	session_start();

	include_once 'database.php';
	
	//Controllers
	include_once 'Controller/MainController.php';
	include_once 'Controller/BuildController.php';
	include_once 'Controller/CompanyController.php';
	include_once 'Controller/CoolerController.php';
	include_once 'Controller/CorpusController.php';
	include_once 'Controller/HardriveController.php';
	include_once 'Controller/MemoryController.php';
	include_once 'Controller/MotherboardController.php';
	include_once 'Controller/PowerblockController.php';
	include_once 'Controller/ProcessorController.php';
	include_once 'Controller/SocketController.php';
	include_once 'Controller/UserController.php';
	include_once 'Controller/VideocardController.php';
	
	// //Models
	include_once 'Model/BuildModel.php';
	include_once 'Model/CompanyModel.php';
	include_once 'Model/CoolerModel.php';
	include_once 'Model/CorpusModel.php';
	include_once 'Model/HardriveModel.php';
	include_once 'Model/MemoryModel.php';
	include_once 'Model/MotherboardModel.php';
	include_once 'Model/PowerblockModel.php';
	include_once 'Model/ProcessorModel.php';
	include_once 'Model/SocketModel.php';
	include_once 'Model/UserModel.php';
	include_once 'Model/VideocardModel.php';
	
	include_once 'Route/Router.php';
?>