<?php
require(__DIR__ . '/../../config/logic.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
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
    <div class="leftBack">
        <ul>
            <li><button>Manager</button></li>
            <li><button>Imports</button></li>
            <li><button>Exports</button></li>
            <li>
                <button onclick="confirm('ere you sure you want to log out <?php logOut(); ?> ')">Log out <button />
            </li>
    </div>


</body>

</html>