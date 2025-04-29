<?php
include '../config/connect.php';
include '../config/logic.php';

if(isset($_POST['register'])){
    $regname = $_POST['regname'];
    $regpassword = $_POST['regpassword'];
    registerUser($regname , $regpassword);
    
}

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

}

?>