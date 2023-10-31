<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>Student | Login</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="icon" href="resource/ico.png" />

</head>

<body style="background-color:rgba(54, 19, 19, 1);">

    <!-- header -->
    <div class="col-12">
        <div class="row">
            <div class="col-12 logo"></div>
            <div class="text-center title1">Hi,Welcome to WebSchool Education Platform! Stay Safe and Still lerning.</div>
        </div>
    </div>
    <!-- header -->


    <div class="col-12 p-3">
        <div class="row">

            <!-- logo2 -->
            <div class="col-6 d-none d-lg-block logo2">
                <p class="text-center title2">the best online platform for online education </p>
            </div>
            <!-- logo2 -->

            <!-- login box -->
            <div class="col-12 col-lg-6 box  " id="lbox">
                <div class="row g-2">


                    <div class="col-12">
                        <p style="color: white; font-size: 20px; ">Student Log in </p>
                        <span class="text-danger" id="msg2"></span>
                    </div>



                    <?php

                    $email = "";
                    $password = "";

                    if (isset($_COOKIE["email"])) {
                        $email = $_COOKIE["email"];
                    }

                    if (isset($_COOKIE["password"])) {
                        $password = $_COOKIE["password"];
                    }

                    ?>

                    <div class="margin col-12">
                        <lable class="form-label">Email</lable>
                        <input type="email" class="form-control " id="sle" placeholder="Enter your Email here" />
                    </div>

                    <div class="col-12 " style="color: white;">
                        <lable class="form-lable">Password</lable>
                        <input type="password" placeholder="Enter your password here" class="form-control" id="slp" />
                    </div>

                    <div class="col-6" style="color: white;">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="rememberme2" />
                            <label class="form-check-label ">Remember Me</label>
                        </div>
                    </div>

                  
                    <div class="col-12">
                        <button class="col-12 btn btn-primary bg-danger" onclick="studentlogin();">Log in</button>
                    </div>
                </div>

            </div>
            <!-- login box -->

        </div>






        <!-- &copy -->
        <div class="col-12 fixed-bottom ">
            <p class="text-center" style="color: white; font-size: 14px;">&copy; 2022 WebSchool.lk || All Right Reserved.</p>
        </div>
        <!-- &copy -->

    </div>
    </div>






    <script src="script.js"></script>
    <script src="bootstrap.bundle.js"></script>


</body>

</html>