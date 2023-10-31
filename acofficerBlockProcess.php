<?php

require "connection.php";

if(isset($_GET["email"])){

    $acadamic_officer_email = $_GET["email"];

    $acadamic_officer_rs = Database::search("SELECT * FROM `acadamic_officer` WHERE  `email`='".$acadamic_officer_email."'");
    $acadamic_officer_num = $acadamic_officer_rs->num_rows;

    if($acadamic_officer_num == 1){

        $acadamic_officer_data = $acadamic_officer_rs->fetch_assoc();

        if($acadamic_officer_data["status"] == 1){
            Database::iud("UPDATE `acadamic_officer` SET `status` = '0' WHERE `email`='".$acadamic_officer_email."'");
            echo ("blocked");
        }else if($acadamic_officer_data["status"] == 0){
            Database::iud("UPDATE `acadamic_officer` SET `status` = '1' WHERE `email`='".$acadamic_officer_email."'");
            echo ("unblocked");
        }

    }else{
        echo ("Cannot find the user. Please try again later.");
    }

}else{
    echo ("Something went wrong.");
}

?>