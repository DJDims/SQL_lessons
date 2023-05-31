<?php
class HardriveModel{
    public static function findAll() {
        $query = "SELECT * FROM `harddrives_view` ORDER BY `name` ASCt";
        $db = new database();
        $response = $db -> getAll($query);

        return $response;
    }

    public static function findById($id) {
        $query = "SELECT * FROM `harddrives_view` WHERE `id` = $id";
        $db = new database();
        $response = $db -> getOne($query);

        return $response;
    }

    public static function findByOffest($offset, $limit) {
        $query = "SELECT * FROM `harddrives_view` ORDER BY `name` ASC LIMIT $limit OFFSET $offset";
        $db = new database();
        $response = $db -> getAll($query);

        return $response;
    }

    public static function countPages($limit) {
        $query = "SELECT COUNT(id) FROM `harddrives`";
        $db = new database();
        $response = $db -> getOne($query);

        $pagesCount = ceil($response['COUNT(id)'] / $limit);

        return $pagesCount;
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