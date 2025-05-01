<?php
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
    *{
        margin: 0%;
    }
    body{
        background: white;
    }
    *{
        margin: 0%;
    }
    a{
        text-decoration: none;
        color: white;
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
            <li><button><a href="dash.php">Furniture</a></button></li>
            <li><button><a href="import.php">Imports</a></button></li>
            <li><button><a href="dash.php">Exports</a></button></li>
    </div>


<div style="padding:4rem;">
    <div style="width: 50rem; display: flex; justify-content: space-between;">
        <?php
         $getUser = "SELECT * FROM manager";
         $result = mysqli_query($GLOBALS['connection'],$getUser);
         while($row = mysqli_fetch_assoc($result)){
        ?>
        <div style="background:whitesmoke; margin-left: 4rem; width: 15rem; padding: 3rem; box-shadow:2px 2px 4px #111827,2px 2px 4px #111827;border-radius:4px;">
            <h2>Manager</h2>
            <p style=""> <?php echo $row['username']; ?> </p>
        </div>
    <?php  } ?>
</div>
</div>

</section>


    
</body>
</html>