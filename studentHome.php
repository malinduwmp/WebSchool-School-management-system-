<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>Student Home | WebSchool </title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="icon" href="resource/ico.png" />

</head>

<body style="background-color:rgba(54, 19, 19, 1);">


    <?php include "header.php"; ?>



    <div class="col-12 bg-danger">
        <div class="row">
            <div class="col-12 col-lg-4 text-center my-1">
                <label class="form-label fs-4 fw-bold text-white">To expire your traial period</label>
            </div>
            <div class="col-12 col-lg-8 text-center">
                <div class="d-flex justify-content-center mt-3">

                    <div class="px-2 text-white d-flex justify-content-center  ">
                        <p class="px-2" id="days">00</p>
                        <span>Days</span>
                    </div>

                    <div class="px-2 text-white d-flex justify-content-center  ">
                        <p class="px-2" id="hours">00</p>
                        <span>Hours</span>
                    </div>

                    <div class="px-2 text-white d-flex justify-content-center  ">
                        <p class="px-2" id="minutes">00</p>
                        <span>Minutes</span>
                    </div>

                    <div class="px-2 text-white d-flex justify-content-center  ">
                        <p class="px-2" id="seconds">00</p>
                        <span>Seconds</span>
                    </div>






                </div>

            </div>



        </div>

    </div>
    <div class="logo"></div>

    -->


    <div class="col-12 ">
        <div class="row g-3">

            <div class="col-12  px-1">
                <div class="row g-1">
                    <div class="col-12 bg-dark text-center rounded text-white" style="height: 100px;">
                        <br />
                        <span style="cursor: pointer;" class=" fw-bold" onclick="window.location.href='#'">Download Your assignments</span>
                        <br />
                    </div>
                </div>
            </div>

            
            <div class="col-12  px-1">
                <div class="row g-1">
                    <div class="col-12 bg-success text-center rounded text-white" style="height: 100px;">
                        <br />
                        <span style="cursor: pointer;" class=" fw-bold" onclick="window.location.href='#'">View Your lesson notes</span>
                        <br />
                    </div>
                </div>
            </div>

            
            <div class="col-12  px-1">
                <div class="row g-1">
                    <div class="col-12 bg-info text-center rounded text-white" style="height: 100px;">
                        <br />
                        <span style="cursor: pointer;" class=" fw-bold" onclick="window.location.href='#'">Upload Your answers</span>
                        <br />
                    </div>
                </div>
            </div>


            
            <div class="col-12  px-1">
                <div class="row g-1">
                    <div class="col-12 bg-danger text-center rounded text-white" style="height: 100px;">
                        <br />
                        <span style="cursor: pointer;" class=" fw-bold" onclick="window.location.href='updatestudentprofile.php'">Update Your profile</span>
                        <br />
                    </div>
                </div>
            </div>


        </div>
    </div>





    
    <div class="col-12 logo3">
    </div>
    








    <?php include "footer.php"; ?>


    <script src="script.js"></script>
    <script src="bootstrap.bundle.js"></script>
</body>

</html>