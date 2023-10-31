<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>WebSchool</title>

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

        <!-- logo -->
            <div class="col-6 d-none d-lg-block logo2">
                <p class="text-center title2">the best online platform for online education </p>
            </div>
        <!-- logo -->


            <!-- button -->
            <div class="col-12 col-lg-6 box" id="logInbox">
                <div class="row g-3">
                    <div class="col-12 col-lg-12 d-grid">
                        <button id="1" class="btn1" onclick="window.location.href='studentlogin.php'">Log in as a Students</button>
                        <br><br><hr>
                        <button id="2" class="btn2" onclick="window.location.href='loginT&AO.php'">Log in as Teacher or Acadamic Officer</button>
                    </div>
                </div>
            </div>
            <!-- button -->
            

            <!-- &copy -->
            <div class="col-12 fixed-bottom ">
                <p class="text-center" style="color: white;  font-size: 14px;">&copy; 2022 WebSchool.lk || All Right Reserved.</p>
            </div>
            <!-- &copy -->
        </div>
    </div>








    <script src="script.js"></script>
    <script src="bootstrap.bundle.js"></script>
</body>

</html>