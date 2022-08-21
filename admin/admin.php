<?php
ob_start();
session_start();
include "connect.php";



if(isset($_POST["register"])){
    $user=$db->prepare("INSERT INTO user SET
    username=:username,
    email=:email,
    password=:password
    ");

    $insert=$user->execute(array(
        "username" => $_POST["username"],
        "email" => $_POST["email"],
        "password" => $_POST["password"]
    ));

    if($insert){

        Header("Location:../index.php?status=okay");
        exit;
        
    }else{
        Header("Location:../register.php?status=nope");
        
    }
}


if(isset($_POST["login"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    $user=$db->prepare("SELECT * FROM user Where email=:email and password=:password");
    $user->execute(array(
        "email" => $email,
        "password" => $password
    ));

    $count=$user->rowCount();

    if($count == 1){
        $_SESSION["email"] = $email;
        Header("Location:../index.php?statu=okay");
        exit;
    }else{
        Header("Location:../login.php?status=nope");
        exit;
    }
}





?>