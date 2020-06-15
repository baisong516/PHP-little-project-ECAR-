<?php
include_once "Controller.php";
include_once "model/ContactModel.php";
include_once "view/Page.php";
class ContactsController extends Controller{
    var $contacts = null;
    function __construct()
    {
        $this->contacts = new ContactModel();
    }
    function index() 
    {
        include_once("view/content.php");
    }
    function viewContacts() 
    {
        $data = [];
        $records = $this->contacts->readRecords();
        $data['records'] = $records;
        Page::getView("viewContacts",$data);
    }
    function addContacts() 
    {
        if (isset($_POST['submit'])) 
        {
        $errors = [];
        if(isset($_POST["name"]))
        {
               $name = trim($_POST["name"]);
               if(strlen($name)==0)
               {
                   $errors["name"]="Missing input";
               }else 
               {
                    $temp=str_replace(' ','',$name);
                   if(!ctype_alpha($temp))
                   {
                       $errors["name"]="Enter alpha only";
                   }
               }
        }
        
        if(isset($_POST["period"]))
        {
               $period = trim($_POST["period"]);
               if(strlen($period)==0)
               {
                   $errors["period"]="Missing input";
               }
        }
        
        if(isset($_POST["make"]))
        {
               $make = trim($_POST["make"]);
               if(strlen($make)==0)
               {
                   $errors["make"]="Missing input";
               }else 
               {
                    $temp=str_replace(' ','',$make);
                   if(!ctype_alpha($temp))
                   {
                       $errors["make"]="Enter alpha only";
                   }
               }
        }

        if(isset($_POST["model"]))
        {
               $model = trim($_POST["model"]);
               if(strlen($model)==0)
               {
                   $errors["model"]="Missing input";
               }
        }
        
        if(isset($_POST["type"]))
        {
               $type = trim($_POST["type"]);
               if(strlen($type)==0)
               {
                   $errors["type"]="Missing input";
               }
        }
        
        if(isset($_POST["origin"]))
        {
               $origin = trim($_POST["origin"]);
               if(strlen($origin)==0)
               {
                   $errors["origin"]="Missing input";
               }else 
               {
                    $temp=str_replace(' ','',$origin);
                   if(!ctype_alpha($temp))
                   {
                       $errors["origin"]="Enter alpha only";
                   }
               }
        }
       if (isset($_POST["user_id"])) {
                $user_id = trim($_POST["user_id"]);
                if (strlen($user_id) == 0) {
                    $errors["user_id"] = "Missing input";
                }
            }

        $values = [];
        unset($_POST['submit']);
        foreach($_POST as $key => $value)
        {
        ${$key} = $value;
        $values[] = $value;
        }
        
        if(count($errors)== 0){
        $success = $this->contacts->insertRecord($values);
        $data = [];
        $records = $this->contacts->readRecords();
        $data['records'] = $records;
        Page::getView("viewContacts",$data);
        }
        else{
        $_REQUEST['errors'] = $errors;
        Page::getView("addContactForm", $_REQUEST);}
        } 
        else
        {
        $data = [];
        Page::getView("addContactForm", $data);
        }
    }

        function searchContacts() 
        {
        if(isset($_POST['submit']))
            {
            $values = [];
            unset($_POST['submit']);
            $keyword = $_POST['keyword'];
            echo $keyword;
            $records = $this->contacts->searchRecords($keyword);
      
            $data = [];
            $data['records'] = $records;
            Page::getView("viewContacts",$data);
            }
            else
        {$data = [];
        Page::getView("searchform", $data);}
        }
        
        
        function deleteContacts($number) 
        {   
        $success = $this->contacts->deleteRecord($number);
        $records = $this->contacts->readRecords();
        $data = [];
        $data['records'] = $records;
        Page::getView("viewContacts",$data);
        }
        
        
        function editContacts($number) 
        {
         
        if (isset($_POST['submit'])) 
        {
        $errors = [];
        if(isset($_POST["name"]))
        {
               $name = trim($_POST["name"]);
               if(strlen($name)==0)
               {
                   $errors["name"]="Missing input";
               }else 
               {
                    $temp=str_replace(' ','',$name);
                   if(!ctype_alpha($temp))
                   {
                       $errors["name"]="Enter alpha only";
                   }
               }
        }
        
        if(isset($_POST["period"]))
        {
               $period = trim($_POST["period"]);
               if(strlen($period)==0)
               {
                   $errors["period"]="Missing input";
               }
        }
        
        if(isset($_POST["make"]))
        {
               $make = trim($_POST["make"]);
               if(strlen($make)==0)
               {
                   $errors["make"]="Missing input";
               }else 
               {
                    $temp=str_replace(' ','',$make);
                   if(!ctype_alpha($temp))
                   {
                       $errors["make"]="Enter alpha only";
                   }
               }
        }

        if(isset($_POST["model"]))
        {
               $model = trim($_POST["model"]);
               if(strlen($model)==0)
               {
                   $errors["model"]="Missing input";
               }
        }
        
        if(isset($_POST["type"]))
        {
               $type = trim($_POST["type"]);
               if(strlen($type)==0)
               {
                   $errors["type"]="Missing input";
               }
        }
        
        if(isset($_POST["origin"]))
        {
               $origin = trim($_POST["origin"]);
               if(strlen($origin)==0)
               {
                   $errors["origin"]="Missing input";
               }else 
               {
                    $temp=str_replace(' ','',$origin);
                   if(!ctype_alpha($temp))
                   {
                       $errors["origin"]="Enter alpha only";
                   }
               }
        }


        $values = [];
        unset($_POST['submit']);
        foreach($_POST as $key => $value)
        {
        ${$key} = $value;
        $values[] = $value;
        }
        
        if(count($errors)== 0){
        $success = $this->contacts->updateRecord($values,$number);
        $data = [];
        $records = $this->contacts->readRecords();
        $data['records'] = $records;
        Page::getView("viewContacts",$data);
        }
        else{
        $_REQUEST['errors'] = $errors;
        Page::getView("editCollection", $_REQUEST);}
        }
        else
        {
            $record = $this->contacts->readRecord($number);
            $data['record'] = $record;
            Page::getView("editCollection", $data);
        }
        }
        
        function viewCars($number)
        {
            $data = [];
            $records = $this->contacts->readCars($number);
            $data['records'] = $records;
            $data['id']=$number;
            Page::getView("viewCars",$data);
        }
        
        function addCars($number)
        {
            if (isset($_POST['submit'])) 
        {
        $errors = [];
        if(isset($_POST["car_id"]))
        {
            $car_id =trim($_POST["car_id"]);
            if(strlen($car_id)==0)
            {
                $errors["car_id"]="Missing input";
            }
            else if(!ctype_digit($car_id))
                   {
                       $errors["car_id"]="Car ID should be digits only";
                   } 
                   
        } 
        
        if(isset($_POST["details"]))
        {
               $details = trim($_POST["details"]);
               if(strlen($details)==0)
               {
                   $errors["details"]="Missing input";
               }
        }
        
        if(isset($_POST["price"]))
        {
            $price =trim($_POST["price"]);
            if(strlen($price)==0)
            {
                $errors["price"]="Missing input";
            }
            else if(!ctype_digit($price))
                   {
                       $errors["price"]="Price should be digits only";
                   } 
                   
        } 
        $values = [];
        $filename = null;
        $filename = $_FILES["image"]["name"];
        $destination = "C:/xampp/htdocs/Assignment2/photos/";
        $temp_file = $_FILES["image"]["tmp_name"];
        $target_file = $destination.$filename;
        $max = 3000000;
        $size = $_FILES["image"]["size"];
        $permitted = ["image/gif", "image/jpg","image/jpeg" ,"image/png"];
        $type = $_FILES["image"]["type"];
        if (file_exists($temp_file)) 
        {
            move_uploaded_file($temp_file,$target_file);
            if ($size <= $max){} else { $errors["image"] = "$filename is too big – upload failed"; }
            if (in_array($type, $permitted)){}  else {$errors["image"] = "$filename type is not permitted";}
        } 
        else {$filename = "notupload.png";$errors['image'] = "File upload has failed";}
        $values[] = $filename;
        unset($_POST['submit']);
        foreach($_POST as $key => $value)
        {
        ${$key} = $value;
        $values[] = $value;
        }
        $values[4]=$number;
        if(count($errors)== 0){
        $success = $this->contacts->addCarRecord($values,$number);
        $data = [];
        $records = $this->contacts->readCars($number);
        $data['records'] = $records;
        $data['id'] = $number;
        Page::getView("viewCars",$data);
        }
        else{
        $_REQUEST['errors'] = $errors;
        Page::getView("addCars", $_REQUEST);}
        } 
        else
        {
        $data = [];
        Page::getView("addCars", $data);
        }
        }
}