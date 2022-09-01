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
    cate_id=:cate_id,
    image=:image,
    name=:name,
    materials=:materials,
    making=:making
    ");

    $update=$food->execute(array(
        "user_id" => $_POST["user_id"],
        "cate_id" => $_POST["cate_id"],
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


if($_GET["delete"] == "okay"){
    $delete=$db->prepare("DELETE FROM food where id=:id");
    $control=$delete->execute(array(
        "id" => $_GET["id"]
    ));

    if($control){
        Header("Location:../shared-foods.php?delete=okay");
        exit;

    }else{

        Header("Location:../shared-foods.php?delete=nope");
        exit;

    }
}


if(isset($_POST["foodEdit"])){

    $uploads_dir = '../dimg';
      
        @$tmp_name = $_FILES['image']["tmp_name"];
        @$name = $_FILES['image']["name"];
  
        $id= $_POST["id"];
  
        $benzersizsayi4=rand(20000,32000);
        $refimgyol=substr($uploads_dir, 3)."/".$benzersizsayi4.$name;
      
        @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");

        $edit=$db->prepare("UPDATE food SET
            image=:image,
            name=:name,
            cate_id=:cate_id,
            materials=:materials,
            making=:making
        WHERE id = {$_POST["id"]} ");

        $update=$edit->execute(array(
            "image" => $refimgyol,
            "cate_id" => $_POST["cate_id"],
            "name" => $_POST["name"],
            "materials" => $_POST["materials"],
            "making" => $_POST["making"]
        ));

        if($update){
          $resimsilunlink=$_POST['eski_yol'];
          unlink("../$resimsilunlink");

          Header("Location:../food_edit.php?id=$id?status=okay");
          exit;

        }else{
          Header("Location:../food_edit.php?id=$id?status=nope");
          exit;
        }

}

?>