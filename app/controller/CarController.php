<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'controller/Controller.php';
include_once 'model/ContactModel.php';
include_once 'view/Page.php';
class CarsController extends Controller{
    var $booking = null;

    function __construct() {
        $this->booking = new BookingModel();
    }
    function index(){
        
        include_once 'view/content.php';
    } 
    function viewDetails(){
        $path = "../";
        $id = $_GET['id'];
        $records = $this->booking->readCarRecords($id);
        include_once 'view/CarDetails.php';
    }
    function insertCars(){
        $id = $_GET['id'];
        $filename = $_FILES['image_filename']['tmp_name'];
        $destination = 'photos/' . $_FILES['image_filename']['name'];
        move_uploaded_file($filename, $destination);
        $image_filename = $_FILES['image_filename']['name'];
        $details = $_POST["details"];
        $price_paid = $_POST["price_paid"];
        $values = [$image_filename,$details,$price_paid];
        $success = $this->booking->addCars($values, $id);
        return $success;
    }
}


