<?php
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



?>