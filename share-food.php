<?php 
ob_start();
session_start();
include "admin/connect.php";
include "access.php";


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
  <input name="image" type="file" class="feedback-input" placeholder="Image" />   
  <input name="name" type="text" class="feedback-input" placeholder="Food Name" />
  <div class="cate">
                    <select class="select2_multiple form-control" required="" name="cate_id" >
                     <?php 

                     while($cateGet=$cate->fetch(PDO::FETCH_ASSOC)) {

                       $cate_id = $cateGet['cate_id'];

                       ?>

                       <option  value="<?php echo $cateGet['cate_id']; ?>" ><?php echo $cateGet['name']; ?></option>

                       <?php } ?>

                     </select>
                     </div>
  <textarea name="materials" class="feedback-input" placeholder="Materials"></textarea>
  <textarea name="making" class="feedback-input" placeholder="Making"></textarea>
  <input type="hidden" name="user_id" value="<?php echo $userGet['id'] ?>">
  <input type="submit" name="shareFood" value="Share"/>
</form>


    
</body>
</html>