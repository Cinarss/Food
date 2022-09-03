<?php 
ob_start();
session_start();
include "admin/connect.php";
include "navbar.php";

$food=$db->prepare("SELECT * FROM food WHERE food_seourl=:sef");
$food->execute(array(
    "sef" => $_GET["sef"]
));

$foodGet=$food->fetch(PDO::FETCH_ASSOC);

$user_id = $foodGet["user_id"];

$user=$db->prepare("SELECT * FROM user WHERE id=:id");
$user->execute(array(
    "id" => $user_id
));

$userGet=$user->fetch(PDO::FETCH_ASSOC);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/global.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $foodGet["name"]?></title>
</head>
<body>
    <div class="header-details">
        <div class="details-container">
            <h1><?php echo $foodGet["name"]?></h1>
            <div class="image"><img src="<?php echo $foodGet["image"]; ?>" alt=""></div>
            <div class="materials"><strong>Malzemeler: </strong><?php echo $foodGet["materials"]?></div>
            
            <div class="making"> <strong>Yapılış: </strong><?php echo $foodGet["making"]?></div>
            <div class="footer">
                    <div class="chef"><strong>Şef: <?php echo $userGet["username"]; ?></strong> </div>
                    <div class="date"><strong>Tarif Tarihi:</strong> <?php echo $userGet["time"]; ?> </div>
                </div>

        </div>
    </div>
</body>
</html>