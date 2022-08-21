<?php 
ob_start();
session_start();
include "admin/connect.php";
include "access.php";


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
        <tr>
            <th>Food Name</th>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <td>et met</td>
            <td><a href="" id="edit">Edit</a></td>
            <td><a href="" id="delete">Delete</a></td>
        </tr>
        
        
    </table>
</div>
<?php include "footer.php"; ?>
</body>
</html>