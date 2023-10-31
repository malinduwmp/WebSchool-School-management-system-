<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>Teachers Profile | WebSchool</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="icon" href="resource/ico.png" />

</head>

<body ">

    <div class="container-fluid">
        <div class="row">

            <?php include "header.php"; ?>

            <?php

            require "connection.php";

            if (isset($_SESSION["u"])) {

                $email = $_SESSION["u"]["email"];

                $details_rs = Database::search("SELECT * FROM `teacher` WHERE `email`='" . $email . "'");

                $image_rs = Database::search("SELECT * FROM `profile_image` WHERE `user_email`='" . $email . "'");

              
                $data = $details_rs->fetch_assoc();
                $image_data = $image_rs->fetch_assoc();
               

             ?>

                <div class="col-12 bg-dark >
                    <div class="row">

                        <div class="col-12 bg-body rounded mt-4 mb-4">
                            <div class="row g-2">

                                <div class="col-md-3 border-end">
                                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">

                                        <?php

                                        if (empty($image_data["path"])) {

                                        ?>
                                            <img src="resource/profile_img/new_user.svg" class="mt-5 rounded-circle" style="width: 150px;" id="viewImg"/>
                                        <?php

                                        } else {

                                        ?>
                                            <img src="<?php echo $image_data["path"]; ?>" class="mt-5 rounded-circle" style="width: 150px;" id="viewImg"/>
                                        <?php

                                        }

                                        ?>


                                        <span class="fw-bold"><?php echo $data["fname"] . " " . $data["lname"]; ?></span>
                                        <span class="fw-bold text-black-50"><?php echo $data["email"]; ?></span>

                                        <input type="file" class="d-none" id="profileimg" accept="image/*" />
                                        <label for="profileimg" class="btn btn-danger mt-5" onclick="tchangeImage();">Update Profile image</label>

                                    </div>
                                </div>

                                <div class="col-md-5 border-end">
                                    <div class="p-3 py-3">

                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="fw-bold">Teachers Profile Settings</h4>
                                        </div>

                                        <div class="row mt-4">

                                            <!-- first name -->
                                            <div class="col-12 col-lg-6">
                                                <lable class="form-label">First Name</lable>
                                                <input type="text" class=" form-control" value="<?php echo $data["fname"]; ?>" id="fname" />
                                            </div>
                                            <!-- first name -->


                                            <!-- last name -->
                                            <div class="col-12 col-lg-6">
                                                <lable class="form-label">Last Name</lable>
                                                <input type="text" class=" form-control" value="<?php echo $data["lname"]; ?>" id="lname" />
                                            </div>
                                            <!-- last name -->

                                            <!-- mobile -->
                                            <div class="col-12 pt-2">
                                                <lable class="form-label">Mobile</lable>
                                                <input type="text" class=" form-control" value="<?php echo $data["mobile"]; ?>" id="mobile" />
                                            </div>
                                            <!-- mobile -->

                                            <!-- password -->
                                            <div class="col-12 pt-2">
                                                <lable class="form-label">Password</lable>
                                                <div class="input-group">
                                                    <input type="password" class="form-control" readonly aria-label="Recipient's username" aria-describedby="basic-addon2" value="<?php echo $data["password"]; ?>" >
                                                    <span class="input-group-text bg-secondary" id="basic-addon2">
                                                        <i class="bi bi-eye-slash-fill text-white"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <!-- password -->


                                            <!-- email -->
                                            <div class="col-12 pt-2">
                                                <lable class="form-label">Email</lable>
                                                <input type="text" class=" form-control" readonly value="<?php echo $data["email"]; ?>" />
                                            </div>
                                            <!-- email -->


                                            <!-- register date -->
                                            <div class="col-12 pt-2">
                                                <lable class="form-label">Registered Date</lable>
                                                <input type="text" class=" form-control" readonly value="<?php echo $data["joined_date"]; ?>" />
                                            </div>
                                            <!-- register date -->


                                            <!-- update my profile -->
                                            <div class="col-12 d-grid mt-3 pt-2">
                                                <button class="btn btn-danger" onclick="updateProfile();">Update My Profile</button>
                                            </div>
                                            <!-- update my profile -->

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>


            <?php

            } else {
                header("Location:http://localhost/teachereshop/home.php");
            }

            ?>


            <?php include "footer.php"; ?>

        </div>
    </div>



    <script src="bootstrap.js"></script>
    <script src="bootstrap.bundle.js"></script>
</body>

</html>