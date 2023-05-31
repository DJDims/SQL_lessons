<?php
class CompanyController{
    public static function showTable($page) {
        $offset = ($page-1)*10;
        $companies = CompanyModel::findByOffest($offset, 10);
        $pagesCount = CompanyModel::countPages(10);

        include_once('View/Company/table.php');
        return;
    }

    public static function showCreate() {
        if (!isset($_SESSION['role']) || $_SESSION['role'] == 'USER') {
            header('Location: error403');
            return;
        }
    }

    public static function create() {
        if (!isset($_SESSION['role']) || $_SESSION['role'] == 'USER') {
            header('Location: error403');
            return;
        }
    }

    public static function showEdit($id) {
        if (!isset($_SESSION['role']) || $_SESSION['role'] == 'USER') {
            header('Location: error403');
            return;
        }
    }

    public static function edit($id) {
        if (!isset($_SESSION['role']) || $_SESSION['role'] == 'USER') {
            header('Location: error403');
            return;
        }
    }

    public static function showDelete($id) {
        if (!isset($_SESSION['role']) || $_SESSION['role'] == 'USER') {
            header('Location: error403');
            return;
        }
    }

    public static function delete($id) {
        if (!isset($_SESSION['role']) || $_SESSION['role'] == 'USER') {
            header('Location: error403');
            return;
        }
    }
}
?>