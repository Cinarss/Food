<?php 
ob_start();
session_start();
include "admin/connect.php";
include "access.php";

$user=$db->prepare("SELECT * FROM user where email=:email");
$user->execute(array(
    "email" => $_SESSION["email"]
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
    <title>Document</title>
</head>
<body>
    <?php include "navbar.php"; ?>
    


<div class="food-table">

    <table id="customers">
    
        
        <?php 

         $food_user = $userGet["id"];
        
            $food_user = $userGet["id"];

            $food=$db->prepare("SELECT * FROM food WHERE user_id=:user_id");
            $food->execute(array(
                "user_id" => $food_user
            ));
            

        ?>

        <?php 
        while($foodGet=$food->fetch(PDO::FETCH_ASSOC)){
        ?>
        <tr>
            <th>Food Name</th>
            <th></th>
            <th></th>
        </tr>
        <tr>    
            <td><?php echo $foodGet["name"]?></td>
            <td><a href="food_edit.php?id=<?php echo $foodGet["id"]?>" id="edit">Düzenle</a></td>
            <td><a href="admin/admin.php?id=<?php echo $foodGet["id"]?>&delete=okay" id="delete">Delete</a></td>
        </tr>

        <?php } ?>
        
        
    </table>
</div>
<?php include "footer.php"; ?>
</body>
</html>