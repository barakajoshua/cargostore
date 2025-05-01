<?php
include '../config/connect.php';
include '../config/logic.php';

//signup controller
if(isset($_POST['register'])){
    $regname = $_POST['regname'];
    $regpassword = $_POST['regpassword'];
    registerUser($regname , $regpassword);   
}

//login controller
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    singin($username , $password);
}

//register New Furniture
if(isset($_POST['registerProduct'])){
    $furniture = $_POST['product'];
    $owner = $_POST['owner'];
    $quantity = $_POST['quantity'];
    addNewProduct($furniture , $owner ,$quantity);
}






?>