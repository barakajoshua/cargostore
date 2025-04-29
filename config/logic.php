<?php
session_start();
include '../config/connect.php';

function registerUser($username , $password){
    $sql = "insert into manager(username , password) values('$username' , '$password')";
    $register = mysqli_query($GLOBALS["connection"], $sql);
    if($register){
        echo"<script>alert('Registration successfull')<script/>";
        header('location:../index.php');
    }else{
        echo"" . mysqli_connect_error();
    }   
}


function singin($username , $password){
         $sql = "SELECT * FROM manager WHERE username='$username' AND password='$password'";
         $gettingUser = mysqli_query($GLOBALS['connection'] ,$sql);
         $checking = mysqli_num_rows($gettingUser);
         if($checking){
         $_SESSION['username'] = $checking.$username;
         header('location: /.././view/index.php');
         }else{
            echo"User not found" . mysqli_connect_error();
         }
}

function logOut(){
    session_destroy();
    session_unset();
    header('location:../');
}



function  getAlldata(){

}

function stockOut(){

}

function stockIn(){
    
}



?>