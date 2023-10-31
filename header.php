<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body onload="adminMsgViewReload1();">

    <div class="col-12 bg-success">
        <div class="row mt-1 mb-1">

            <div class="offset-lg-1 col-12 col-lg-4 align-self-start mt-2 ">

                <?php

                session_start();

                if (isset($_SESSION["u"])) {
                    $data = $_SESSION["u"];

                ?>

                    <span class="text-text-lg-start "><b>Welcome To WebSchool </b><?php echo $data["fname"]; ?></span> |
                    <span class="text-text-lg-start fw-bold signout" onclick="signOut();">LogOut</span> |

                <?php


                } else {

                ?>

                    <a href="index.php" class="text-decoration-none fw-bold">Sign In or Register</a> |

                <?php
                }

                ?>


                <span class="text-lg-start fw-bold">Help and Contact</span>
            
            </div>


                
        </div>
    </div>


    <script src="script.js"></script>
</body>

</html>