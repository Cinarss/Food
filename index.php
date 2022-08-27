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
    <title>Home Page</title>
</head>
<body>
        <?php include "navbar.php"; ?>

        <div class="header-image">
            <div class="image-header-container">
                <div class="image"><img src="image/homeFood.jpg" alt=""></div>
            </div>
        </div>

        <div class="foods">

        
            


            <?php 

                while($foodGet=$food->fetch(PDO::FETCH_ASSOC)) { ?>
                    
                
                    <div class="foods-container">
                <ul>
                    <li>
                        <h3 class="title"> <a href="#"><?php echo $foodGet["name"]?> </a></h3>
                        <div> <a href="#"> <img width="350" height="250" src="<?php echo $foodGet["image"]?>" alt=""></a> </div>
                        <div class="footer">
                             <?php 
                             $user_id = $foodGet["user_id"];


                             $user=$db->prepare("SELECT * FROM user where id=:id");
                             $user->execute(array(
                                 "id" => $user_id
                             ));
                             
                             $userGet=$user->fetch(PDO::FETCH_ASSOC);
                             
                             ?>
                                <a>Tarih: <?php echo $foodGet["time"]?></a>
                                <a>Şef: <?php echo $userGet["username"]?></a>
                        </div>
                    </li>
                </ul>
            </div>

            <?php }?>
            


        </div>

        
        

</body>
</html>