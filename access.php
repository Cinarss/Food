<?php
ob_start();
session_start();
include "admin/connect.php";
$user=$db->prepare("SELECT * FROM user WHERE email=:email");
$user->execute(array(
    "email" => $_SESSION["email"]
));

$count = $user->rowCount();
$userGet=$user->fetch(PDO::FETCH_ASSOC);

if($count == 0){
    Header("Location:login.php?basarisiz");
}

?>