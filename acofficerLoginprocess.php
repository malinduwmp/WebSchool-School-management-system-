<?php 

session_start();

require "connection.php";

$email = $_POST["aoe"];
$password = $_POST["aop"];
$rememberme = $_POST["aor"];

if(empty($email)){
    echo("Please enter your Email");
}else if(strlen($email) > 100){
    echo("Email must have less than 100 characters");
}else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo("Invalid Email");
}else if(empty($password)){
    echo("Please enter your password");
}else if(strlen($password) < 5 || strlen($password) > 20){
    echo("password must have between 5-20 characters");
}else{

   $rs = Database::search("SELECT * FROM `acadamic_officer` WHERE `email`='".$email."' 
   AND `password`='".$password."'");

   $n = $rs->num_rows;
   
   if($n == 1){

     
    $d = $rs->fetch_assoc();
    $_SESSION["u"] = $d;

    if($d["status"] == 0){
        echo("You can't Signin to the WebSchool because the admin was blocked you."); 
    }else{
        echo("success"); 
    }

    if($rememberme == "true"){

        setcookie("email",$email, time() + (60 * 60 * 24 * 365));
        setcookie("password",$password, time() + (60 * 60 * 24 * 365));
        
    }else{

        setcookie("email","",-1);
        setcookie("password","",-1);

    }

   }else{
    echo("Invalid Username or Password");
   }

}

?>