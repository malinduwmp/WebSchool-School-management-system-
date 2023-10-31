<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>Admin Profile | WebSchool </title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="icon" href="resource/ico.png" />

</head>

<body>

    <div class="container-fluid">
        <div class="row">

            <?php include "adminPanel.php";?>
            <?php

                require"connection.php";

                if (isset($_SESSION["au"])) {
                    
                    $email = $_SESSION["au"]["email"];

                    $deltails_rs = Database::search("SELECT * FROM `admin` WHERE `email`='".$email."'");

                    $image_rs = Database::search("SELECT * FROM `profile_image` WHERE `user_email`='" . $email . "'");
                    

                    $data = $details_rs->fetch_assoc();
                    $image_data = $image_rs->fetch_assoc();


                

            ?>

                <div class="col-12 bg-primary"> 

                    <div class="row">

                        <div class="col-12 body-rounded mt-4 mb-4">

                            <div class="row g-2">

                                <div class="col-md-3 border-end">
                                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">

                                        

                                    </div>
                                </div>
                                
                            </div>

                        </div>
                        
                    </div>

                </div>


            <?php

            } else {
                header("Location:http://localhost/webschool/adminPanel.php");
            }

            ?>

        </div>

    </div>



    
    <script src="bootstrap.js"></script>
    <script src="bootstrap.bundle.js"></script>
</body>
</html>