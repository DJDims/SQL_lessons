<?php
class UserModel{
    public static function createAdmin() {
        $countUsers = UserModel::countUsers();

        if ($countUsers['COUNT(id)'] == 0) {
            $password = password_hash('12345', PASSWORD_DEFAULT);
            $query = "INSERT INTO `users`(`username`, `password`, `role`) VALUES ('Admin', '$password', 2)";
            $db = new database();
            $db -> executeRun($query);
        }

        return;
    }

    public static function countUsers() {
        $query = "SELECT COUNT(id) FROM users";
        $db = new database();
        $response = $db -> getOne($query);

        return $response;
    }

    public static function findAll() {

    }

    public static function findById() {

    }

    public static function findByOffest($offset, $limit) {

    }

    public static function showCreate() {

    }

    public static function create() {
        
    }

    public static function showEdit($id) {
        
    }

    public static function edit($id) {
        
    }

    public static function showDelete($id) {
        
    }

    public static function delete($id) {
        
    }
}
?>