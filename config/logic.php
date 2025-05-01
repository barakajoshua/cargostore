<?php
session_start();
include 'connect.php';

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
        header('location:/cargo/viewing/dash.php');
         }else{
            header('location:/cargo/');
            echo"<script>alert('user not found') </script>";
         }
}

function UserLogOut(){
    session_destroy();
    session_unset();
    header('location:../');
}

function addNewProduct($furniture , $owner){
    $sql = "insert into furniture(furnitureName,furnitureOwnerName) values('$furniture','$owner')";
    $registerProdut = mysqli_query($GLOBALS['connection'],$sql);
    if($registerProdut){
        echo'product registered successfully';
            header('location:/cargo/viewing/dash.php');
    }else{
        echo'Erro while inserting ' . mysqli_connect_error();
    }
}

function stockin($product, $id){
    $sql = "UPDATE import SET quantity = quantity+$product  WHERE furnitureId=$id ";
    $update = mysqli_query($GLOBALS['connection'],$sql);
    if($update){
        header('location:/cargo/viewing/dash.php');
    }else{
        echo"Error while perfoming this request" . mysqli_connect_error();
    }
}



function stockOut($product, $id){
    $sql = "UPDATE import SET quantity = quantity-$product  WHERE furnitureId=$id ";
    $update = mysqli_query($GLOBALS['connection'],$sql);
    if($update){
        header('location:/cargo/viewing/dash.php');
    }else{
        echo"Error while perfoming this request" . mysqli_connect_error();
    }
}




?>