<?php 

session_start();
require "connection.php";

if(isset($_GET["av"])){

    $av = $_GET["av"];

    $admin = Database::search("SELECT * FROM `admin` WHERE `verification_code`='".$av."'");
    $num = $admin->num_rows;

    if($num == 1){
        $data = $admin->fetch_assoc();
        $_SESSION["au"] = $data;
        echo("success");
    }else{
        echo("Invalid verification code.");
    }
}else{
    echo("Please enter your verification code");
}

?>