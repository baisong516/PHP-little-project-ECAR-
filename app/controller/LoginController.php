<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}

include_once  'controller/Controller.php';
include_once 'model/UserModel.php';

class LoginController extends Controller{
    var $user;
    function __construct() {
        $this->user = new UserModel();
    }
    function index(){
        include_once 'view/LoginForm.php';
    }
    function login(){
        if(isset($_POST['submit'])){
            
            $username = $_POST['username'];
            $password = $_POST['password'];
            $user_id = $this->user->authenticate($username, $password);
            if($user_id > 0){
                $_SESSION['user_id'] = $user_id;
                $_SESSION['username'] = $username;
                header("location:./management");
            } else {
                $errors['username'] = "Username or Password is incorret!";
                include_once 'view/LoginForm.php';
            }
        } else {
            include_once 'view/LoginForm.php';
        }
    }
    
    function logout(){
        if(session_status() == PHP_SESSION_ACTIVE){
            session_destroy();
        }
        header("location:./../");
    }
}
