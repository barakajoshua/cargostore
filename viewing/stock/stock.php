<?php
require(__DIR__ . '/../../config/logic.php');
if(isset($_POST['addQuantity']) && $_GET['id']){
    $id = $_GET['id'];
    $quantity = $_POST['quantity'];
    stockin($quantity , $id);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        a{
        text-decoration: none;
        color: chocolate;

    }
     .add{
        margin-top: 5rem;
        width: 25rem;
        padding: 3rem;
        background: transparent;
        box-shadow: 1px 1px 8px gray , 2px 2px 8px gray;
        }
        .add input{
            width: 80%;
            padding: 0.5rem;
        }
        .add button{
            width: 85%;
            padding:0.5rem;
            border: none;
            color: white;
            background: chocolate;

        }
        label{
            font-size: larger;
        }
    </style>
<div>
<center>
    <div class="add">
    <h1>Stock In</h1>
    <p>Add some quantity on the products</p>
        <form method="post">
        <label for="quantity">Quantity</label>
        <br><br>
        <input type="number" name="quantity" id="quantity" name="quantity" require><br><br>
        <button name="addQuantity">Add</button>
        </form>
        <br>
            <a href="../dash.php"><u>back</u></a>
    </div>
    </center>
</body>
</html>