<?php
include_once "model/DataModel.php";

class UserModel extends DataModel{
    function __construct() {
        parent::__construct("users");
    }
    function authenticate($username,$password){
        $user_id = 0;
        $sql = "select user_id,password from users where username = '$username'";
        $statement = $this->conn->query($sql);
        if($row = $statement->fetch()){
            if($row['password'] == $password){
                $user_id = $row['user_id'];
            }
        }
        return $user_id;
    }
    
    public function deleteRecord($id){}
    public function insertRecord($values){}
    public function readRecords(){}
    public function readRecord($id){}
    public function searchRecords($keyword){}
    public function updateRecord($values,$id){}
    public function readCars($id) {}
    public function addCarRecord($values){}
    
}
