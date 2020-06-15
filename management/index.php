<?php

if (session_status() == PHP_SESSION_NONE){
    session_start();
}

include_once "../config.php";
include_once "controller/ContactsController.php";
include_once "controller/LoginController.php";
$contactsController = new ContactsController();
$loginController = new LoginController();
$path = "../";

if (isset($_SESSION['user_id']) && isset($_SESSION['username']))
{
    $user_id = $_SESSION['user_id'];
    $username = $_SESSION['username'];
    include_once "view/header.php";
    
    if(isset($_GET['action']))
    {
       $action = $_GET['action'];
    if($action == 'login')
    {
         $loginController->login();    
    }
    else if($action == 'viewcontacts')
    {
        $contactsController->viewContacts();
    }
    else if($action == 'addcontacts')
    {
            $contactsController->addContacts();
    }
    else if($action == 'searchcontacts')
    {
            $contactsController->searchContacts();
    }
    else if(strpos($action,'deletedata') !== false)
    {
        $number = substr($action,10);
        $contactsController->deleteContacts($number);
    }
    else if(strpos($action,'editdata') !== false)
    {   
        $number = substr($action,8);
        $contactsController->editContacts($number);
    }
    else if(strpos($action,'viewcars') !== false)
    {
        $number = substr($action,8);
        $contactsController->viewCars($number);
    }
    else if(strpos($action,'addCars') !== false)
    {
         $number = substr($action,7);
        $contactsController->addCars($number);
    }
     else if($action == 'logout')
    {
            $loginController->logout();
    } 
    }else{
        $contactsController->index();
    }
    include_once "view/footer.php";
            
}else{
    
}
