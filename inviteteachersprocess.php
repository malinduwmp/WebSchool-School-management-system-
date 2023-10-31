<?php 

require "connection.php";
require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST["tse"])&& isset($_POST["tsp"])){

    $sendmail = $_POST["tse"];
    $sendpass = $_POST["tsp"];

    if(empty($sendmail)){
        echo("Please Enter Send Email !!!");
        
    }elseif(empty($sendpass)){
         echo("Please Enter Send Passowrd !!!");

    }else{
        $rs = Database::search("SELECT * FROM `teacher` WHERE `email`='".$sendmail."'");
        $n = $rs->num_rows;

        if($n > 0){
            echo("this Email  already exists.");
        }else{

            Database::iud("INSERT INTO `teacher` 
            (`email`,`password`) VALUES
            ('".$sendmail."','".$sendpass."')");

            $mail = new PHPMailer;
            $mail->IsSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'malinduwmp@gmail.com';
            $mail->Password = 'ffohrmcohtmxvjta';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->setFrom('malinduwmp@gmail.com', 'Admin Verification');
            $mail->addReplyTo('malinduwmp@gmail.com', 'Admin Verification');;
            $mail->addAddress($sendmail);
            $mail->isHTML(true);
            $mail->Subject = 'WebSchool Teacher Invitation';
            $bodyContent = '<h1 style=""color:green">Dear teacher Your login username and password is : 
                                                            <br/>username : '.$sendmail.' 
                                                            <br/>password :'.$sendpass.'</h1>';

            $mail->Body    = $bodyContent;

             echo("invite send success");

            if(!$mail->send()){
                echo("Verification code sending failed");
            }else{
                echo("success");
            }
        }    
    }
}



