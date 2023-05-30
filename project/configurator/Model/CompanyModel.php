<?php
class CompanyModel{
    public static function findAll() {

    }

    public static function findById() {

    }

    public static function findByOffest($offset, $limit) {
        $query = "SELECT * FROM `companies` ORDER BY `name` ASC LIMIT $limit OFFSET $offset";
        $db = new database();
        $response = $db -> getAll($query);

        return $response;
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