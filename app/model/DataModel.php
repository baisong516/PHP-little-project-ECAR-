<?php
include_once 'Crudable.php';
include_once 'factory/PDOFactory.php';
abstract class DataModel implements Crudable {
    var $conn = null;
    var $table = '';
    function __construct($table)
    {
        $this->table = $table;
        $this->conn = PDOFactory::getConnection();
    }
    function close()
    {
        $this->conn = null;
    }
}
