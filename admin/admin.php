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



if(isset($_POST["shareFood"])){

    $uploads_dir = '../dimg';
    @$tmp_name = $_FILES['image']["tmp_name"];
    @$name = $_FILES['image']["name"];
    //resmin isminin benzersiz olması
    $benzersizsayi1=rand(20000,32000);
    $benzersizsayi2=rand(20000,32000);
    $benzersizsayi3=rand(20000,32000);
    $benzersizsayi4=rand(20000,32000);	
    $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
    $refimgyol=substr($uploads_dir, 3)."/".$benzersizad.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
    

    $food=$db->prepare("INSERT INTO food SET
    user_id=:user_id,
    image=:image,
    name=:name,
    materials=:materials,
    making=:making
    ");

    $update=$food->execute(array(
        "user_id" => $_POST["user_id"],
        "image" => $refimgyol,
        "name" => $_POST["name"],
        "materials" => $_POST["materials"],
        "making" => $_POST["making"]
    ));

    if($update){
        Header("Location:../index.php?status=okay");
        exit;
    }else{
        Header("Location:../index.php?status=nope");
        exit;
    }
    
}




?>