<?php

class MainController {

    public static function startSite(){
        UserModel::createAdmin();
        MainController::showMain();
        return;
    }

    public static function showMain() {
        include_once 'View/main.php';
        return;
    }

    public static function error404(){
        include_once('View/error404.php');
        return;
    }
}

?>