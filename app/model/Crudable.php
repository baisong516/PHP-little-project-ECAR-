<?php

interface Crudable {
    function deleteRecord($id);
    function insertRecord($values);
    function readRecords();
    function readRecord($id);
    function searchRecords($keyword);
    function updateRecord($values,$id);
    function readCars($id);
    function addCarRecord($values);
}
