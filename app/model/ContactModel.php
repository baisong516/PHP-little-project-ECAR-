<?php
include_once("DataModel.php");
class ContactModel extends DataModel {
    function __construct()
    {
        parent::__construct('contacts');
    }
    function deleteRecord($id)
    {
        $sql = "delete from collections where id = $id";
        $statement = $this->conn->prepare($sql);
        $success = $statement->execute();
        return $success;
    }
    function insertRecord($values)
    {
        $sql = "insert into collections(name,period,make,model,car_type,origin,user_id)values(?,?,?,?,?,?,?)";
        $statement = $this->conn->prepare($sql);
        $success = $statement->execute($values);
        return $success;
    }
    function readRecords()
    {
        $sql = "select * from collections";
        $statement = $this->conn->query($sql);
        $records = $statement->fetchAll();
        return $records;
    }
    function searchRecords($keyword)
    {
        $sql = "select * from collections  where name like '%$keyword%'
                                                or period like '%$keyword%'
                                                or model like '%$keyword%'
                                                or origin like '%$keyword%'
                                                or make like '%$keyword%'    
                                                or car_type like '%$keyword%'";
        $statement = $this->conn->query($sql);
        $contacts_records = $statement->fetchAll();
        return $contacts_records;
    }
    function updateRecord($values,$number)
    {
       $sql = "update collections set name = ?,
                                        period = ?,
                                        make = ?,
                                        model = ?,
                                        car_type = ?,
                                        origin = ?
                                        where collection_id=$number";
        $statement = $this->conn->prepare($sql);
        $success = $statement->execute($values);
        return $success;
    }

    public function readRecord($number) {
       $sql = "select * from collections where collection_id = $number";
        $statement = $this->conn->query($sql);
        $record = $statement->fetchAll();
        return $record;
    }
    
    public function readCars($number){
        $sql = "select * from cars where collection_id = $number";
        $statement = $this->conn->query($sql);
        $records = $statement->fetchAll();
        return $records;
    }
    
    public function addCarRecord($values){
        $sql = "insert into cars(image_filename,car_id,details,price_paid,collection_id)values(?,?,?,?,?)"; 
        $statement = $this->conn->prepare($sql);
        $success = $statement->execute($values);
        return $success;
    }
}
