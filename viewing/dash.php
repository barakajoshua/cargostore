<?php
include '../config/connect.php';
require(__DIR__ . '/../config/logic.php');
if(empty($_SESSION['username'])){
    header('Location:/cargo/');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<style>
    body{
        background: white;
    }
    *{
        margin: 0%;
    }
    a{
        text-decoration: none;
    }
    a:hover{
        color: chocolate;
    }
    header{
        padding: 2rem;
        color: white;
    }
    .leftBack {
        width: 9rem;
        height: max-content;
        padding: 4rem;
        align-content: ;
        background: #111827;
        color: white;
        font-size: larger;
    }

    .leftBack li {
        margin-block: 3.7rem;
        list-style: none;
    }

    .leftBack li button {
        background: none;
        border: none;
        color: white;
    }
    .leftBack li button:hover {
        color: chocolate;
        cursor: pointer;
    }
    .addbutton{
        padding:1rem;
        background: #111827;
        border: none;
        color:white;
        border-radius: 5px;
    }
    .addfurniture{
        z-index: 1;
        padding: 2rem;
        background: black;
        position: static;
        justify-content: space-between;
        display: inline;
    }
    .furniture{
        width: 68rem;
        height: 2rem;
        padding: 4rem;
    }
    .furniture table{
        width: 100%;
        font-size: 20px;
        text-align: center;
        border: none;
        font-family: 'Gill Sans', 'Trebuchet MS';
    }
    .furniture table button{
        width: 100%;
        padding: 5px;
        background: none;
        border: none;
        cursor: pointer;

    }
    .furniture table button:hover{
        color: orange;
    }
    .furniture th{
        background: #111827;
        padding: 10px;
        color: white;
        font-family: 'Gill Sans', 'Gill Sans MT', 'Trebuchet MS';
    }
    .furniture tr{
        padding-top: 1rem;
    }
    .furniture td{
        border: solid 1px #111827;
    }
    .furniture table tr:nth-last-of-type(even){
      background: gray;
    }
    .furniture table td{
        border-bottom: 2px 2px yellowgreen;
    }
</style>
<body>
<header style="padding-left: 5rem; padding-right:5rem; background: #111827;">
        <ul style=" display: flex; justify:center; justify-content:space-between;">
            <li style="font-family: cooper; list-style: none;">
               <h3>Cargo</h3> 
            </li>
           <li style="list-style:none;">
            <ul style="display:flex; justify-content: center; list-style: none;">
                <li style="font-family:Poppins;">
                    <h3>home</h3> 
                </li>
                <li style="font-family:Poppins; list-style: none; margin-left: 3rem;">
               <h3>about</h3> 
                 </li><li style="font-family:Poppins; list-style: none; margin-left: 3rem;">
               <h3>contact</h3> 
            </li>
            </ul>
            </li> 
            <li style="font-family: cooper; list-style: none;">
                <h3><a href="addf.php">Add products</a></h3>
            </li>
            
        </ul>
    </header>

<section style="display: flex;">
    <div class="leftBack">
        <ul>
        <li><button><a href="dash.php">Manager</a></button></li>
            <li>
                <button><a href="dash.php">Furniture</a></button>
            </li>
            <li>
                <button><a href="import.php">Imports</a></button>
            </li>
            <li>
                <button><a href="dash.php">Exports</a></button>
            </li>
        
    </div>    
    <div class="furniture">
        <div>
            <table>
                <tr>
                    <th>No</th>
                    <th>furniture name</th>
                    <th>furniture owner</th>
                    <th>Quantity</th>
                    <th>Stock</th>
                    <th>actions</th>
                </tr>
        
            <?php
            $sql = 'SELECT * FROM furniture';
            $selection = mysqli_query($connection , $sql);
            $count =0;
            while($row = mysqli_fetch_assoc($selection)){
                $count++;
            ?>
            <tr>
            <td><?php echo $count; ?></td>
            <td><?php echo $row['furnitureName'] ?></td>
            <td><?php echo $row['furnitureOwnerName'] ?></td>
            <td><?php echo $row[''] ?></td>
            <td>345</td>
            <td>
                <button><a href="stock/stock.php?id=<?php echo $row['furnitureId']?>">stockin</a></button>
                <button><a href="stock/stockout.php?id=<?php echo $row['furnitureId'] ?>">stockout</a></button></td>
            <td><button>Delete</button><button>Edit</button></td>
            <?php
            }
            ?>
            </tr>
            </table>
        </div>
    </div>
</section>

  
</body>
</html>
