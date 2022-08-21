<?php
ob_start();
session_start();
include "admin/connect.php";
$user=$db->prepare("SELECT * FROM user WHERE email=:email");
$user->execute(array(
    "email" => $_SESSION["email"]
));

$count = $user->rowCount();

if($count == 0){
    Header("Location:login.php?basarisiz");
}

?>