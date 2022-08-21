<?php

try{
    $db = new PDO("mysql:host=localhost;dbname=food;charset=utf8","root","");
    // echo "asdasd";

}catch(PDOException $e) {

    echo $e ->getMessage();

}

?>