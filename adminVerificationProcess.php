<?php

require "connection.php";

require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST["ae"])) {

    $aemail = $_POST["ae"];

    $admin_rs = Database::search("SELECT * FROM `admin` WHERE `email`='" . $aemail . "'");
    $admin_num = $admin_rs->num_rows;

    if ($admin_num == 0) {

        echo ("You are not a valid admin!");
        
    } else {
        $code = uniqid();

        Database::iud("UPDATE `admin` SET `verification_code`='" . $code . "' WHERE `email`='" . $aemail . "'");

        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'malinduwmp@gmail.com';
        $mail->Password = 'ffohrmcohtmxvjta';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('malinduwmp@gmail.com', 'Admin Verification');
        $mail->addReplyTo('malinduwmp@gmail.com', 'Admin Verification');
        $mail->addAddress($aemail);
        $mail->isHTML(true);
        $mail->Subject = 'WebSchool Admin Login Verification Code';
        $bodyContent = '<h1 style=""color:blue">Your Admin Verification Code is : ' . $code . '</h1>';
        $mail->Body    = $bodyContent;

        if (!$mail->send()) {
            echo ("Verification code sending failed");
        } else {
            echo ("success");
        }
    }

} else {
    echo ("Email field should not be empty.");
}
