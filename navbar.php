<?php
ob_start();
session_start();

include "admin/connect.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/global.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="header">
            <div class="header-container">
                <ul class="navbar">
                    <a href="index.php"><li>Home Page</li></a>
                    <a href="foods.php"><li>Foods</li></a>
                    <a href="share-food.php"><li>Share Food</li></a>
                    <a href="shared-foods.php"><li>My Foods</li></a>
                    <?php 
                    if(!isset($_SESSION["email"])){?>
                    <a href="login.php"><li>Sign In</li></a>
                    <?php } else{?>
                        
                        <a href="logout.php"><li>Log Out</li></a>
                        
                        <?php }?>
                    
                </ul>
            </div>
        </div>

        
    
</body>
</html>