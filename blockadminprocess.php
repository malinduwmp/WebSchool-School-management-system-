<?php

require "connection.php";

if(isset($_GET["email"])){

    $admin_email = $_GET["email"];

    $admin_rs = Database::search("SELECT * FROM `admin` WHERE  `email`='".$admin_email."'");
    $admin_num = $admin_rs->num_rows;

    if($admin_num == 1){

        $admin_data = $admin_rs->fetch_assoc();

        if($admin_data["status"] == 1){
            Database::iud("UPDATE `admin` SET `status` = '0' WHERE `email`='".$admin_email."'");
            echo ("blocked");
        }else if($admin_data["status"] == 0){
            Database::iud("UPDATE `admin` SET `status` = '1' WHERE `email`='".$admin_email."'");
            echo ("unblocked");
        }

    }else{
        echo ("Cannot find the user. Please try again later.");
    }

}else{
    echo ("Something went wrong.");
}

?>