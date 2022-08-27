<?php 
ob_start();
session_start();
include "admin/connect.php";

$food=$db->prepare("SELECT * FROM food");
$food->execute();




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

    <?php include "navbar.php" ?>
    
    <h1 class="categories">Categories</h1>

    <div class="foods-rate">
    <?php
    while($foodGet=$food->fetch(PDO::FETCH_ASSOC)) { ?>
        
            <div class="foods-rate-container">
                <a href=""><h2 class="foods-rate-title"><?php echo $foodGet["name"]?></h2></a>
                <div class="foods-rate-image"><a href=""><img width="350" height="250" src="<?php echo $foodGet["image"]?>" alt=""></a></div>

            </div>
        
    
    
    <?php }?>
    </div>


    <?php include "footer.php"; ?>
</body>
</html>