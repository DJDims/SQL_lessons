<?php
class UserController{
    public static function showTable($page) {

    }

    public static function showLogin() {
        include_once('View/login.php');
        return;
    }

    public static function login() {
        if (isset($_SESSION['userId'])) {
            header('Location: profile');
            return;
        }

        $result = UserModel::login();

        if (isset($result) && $result == true) {
            MainController::showMain();
        } else {
            $_SESSION['alert']['message'] = 'Неверный логин или пароль';
            $_SESSION['alert']['type'] = 'alert-danger';
            $_SESSION['alert']['icon'] = '#exclamation-triangle-fill';
            include_once('View/login.php');
        }

        return;
    }

    public static function showRegister() {
        include_once('View/register.php');
        return;
    }

    public static function register() {
        
    }

    public static function showDelete($id) {
        
    }

    public static function delete($id) {
        
    }
}
?>