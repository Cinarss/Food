<?php 
ob_start();
session_start();
include "admin/connect.php";
include "access.php";


$food=$db->prepare("SELECT * FROM food WHERE id=:id");
$food->execute(array(
    "id" => $_GET["id"]
));

$food_id = $_GET["id"];

$foodGet=$food->fetch(PDO::FETCH_ASSOC);

$cate=$db->prepare("SELECT * FROM kategori");
$cate->execute();



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

    <form action="admin/admin.php" method="POST" enctype="multipart/form-data"  > 
        
    <img  width="250" height="150" src="<?php echo $foodGet["image"] ?>" alt="">
    <input type="hidden" name="eski_yol" value="<?php echo $foodGet['image']; ?>">
  <input name="image" type="file" class="feedback-input" placeholder="Image"  />   
  <input name="name" type="text" class="feedback-input" placeholder="Food Name" value="<?php echo $foodGet["name"];?> " />
  <div class="cate">
                    <select class="select2_multiple form-control"  required="" name="cate_id" >
                     <?php 
                     

                     while($cateGet=$cate->fetch(PDO::FETCH_ASSOC)) {

                       $cate_id = $cateGet['cate_id'];

                       ?>

                        <option <?php if ($cate_id==$food_id) { echo "selected='select'"; } ?> value="<?php echo $foodGet['cate_id']; ?>"><?php echo $cateGet['name']; ?></option>


                       <?php } ?>

                     </select>
                     </div>
  <textarea name="materials" class="feedback-input" placeholder="Materials" ><?php echo $foodGet["materials"];?></textarea>
  <textarea name="making" class="feedback-input" placeholder="Making"  ><?php echo $foodGet["making"];?></textarea>
  <input type="hidden" name="id" value="<?php echo $foodGet['id'] ?>">
  <input type="submit" name="foodEdit" value="Update"/>
</form>


    
</body>
</html>