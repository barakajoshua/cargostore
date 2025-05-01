<?php 
require(__DIR__ . '/../config/logic.php');
if(empty($_SESSION['username'])){
    header('location:/cargo');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .add{
        padding: 3rem;
        display: block;
        width: 25rem;
        background: transparent;
        box-shadow: 2px 2px 5px gray;
        margin-top: 5rem;
    }
    .add input{
        padding: 10px;
        width: 20rem;
    }
    .add button{
        width: 21.5rem;
        padding: 10px;
        background: #111827;
        border: none;
        color: white;
        cursor: pointer;
    }
</style>
<body>
    <center>
    <div class="add">
        <h1>Add New Product</h1>
        <p>Register new product in stock</p>
    <form action="/cargo/controller/controller.php" method="POST">
    <div>
   <br>
    <input type="text" name="owner" id="username" placeholder="furniture owner" required>
    </div>
    <div>
    <br>
    <input type="text" name="product" id="username" placeholder="furniture name" required>
    </div>
    <div>
    <br><br>
    <button name="register">Add Furniture</button>
    </form>
    </div>
    </center>
    
</body>
</html>