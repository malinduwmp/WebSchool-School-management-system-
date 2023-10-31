<?php

require "connection.php";

if(isset($_GET["email"])){

    $teacher_email = $_GET["email"];

    $teacher_rs = Database::search("SELECT * FROM `teacher` WHERE  `email`='".$teacher_email."'");
    $teacher_num = $teacher_rs->num_rows;

    if($teacher_num == 1){

        $teacher_data = $teacher_rs->fetch_assoc();

        if($teacher_data["status"] == 1){
            Database::iud("UPDATE `teacher` SET `status` = '0' WHERE `email`='".$teacher_email."'");
            echo ("blocked");
        }else if($teacher_data["status"] == 0){
            Database::iud("UPDATE `teacher` SET `status` = '1' WHERE `email`='".$teacher_email."'");
            echo ("unblocked");
        }

    }else{
        echo ("Cannot find the user. Please try again later.");
    }

}else{
    echo ("Something went wrong.");
}

?>