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

    <form>      
  <input name="image" type="file" class="feedback-input" placeholder="Image" />   
  <input name="foodName" type="text" class="feedback-input" placeholder="Food Name" />
  <textarea name="materials" class="feedback-input" placeholder="Materials"></textarea>
  <textarea name="making" class="feedback-input" placeholder="Making"></textarea>
  <input type="submit" value="Share"/>
</form>


<?php include "footer.php"; ?>
    
</body>
</html>