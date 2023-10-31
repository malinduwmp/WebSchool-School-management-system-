<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>Acadamic officer Home| WebSchool </title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="icon" href="resource/ico.png" />

</head>

<body style="background-color:rgba(54, 19, 19, 1);">


    <?php include "header.php"; ?>


    <div class="col-12 ">
        <div class="row">

            <div class="col-12">
                <hr />
            </div>
            <div class="col-12">
                <div class="row g-3">

          


                    <div class="col-12  px-1">
                        <div class="row g-1">
                            <div class="col-12 bg-white text-center rounded" style="height: 150px;">
                                <br />
                                <span style="cursor: pointer;" class="fs-4 fw-bold" onclick="window.location.href='registerStudent.php'">Register students and send verification code to them</span>
                                <br />
                            </div>
                        </div>
                    </div>


                    <div class="col-12  px-1">
                        <div class="row g-1">
                            <div class="col-12 bg-dark text-white text-center rounded" style="height: 150px;">
                                <br />
                                <span style="cursor: pointer;" class="fs-4 fw-bold" onclick="window.location.href='#'">View assignment marks released by the teacher</span>
                                <br />
                            </div>
                        </div>
                    </div>


                    <div class="col-12  px-1">
                        <div class="row g-1">
                            <div class="col-12 bg-secondary text-white text-center rounded" style="height: 150px;">
                                <br />
                                <span style="cursor: pointer;" class="fs-4 fw-bold" onclick="window.location.href='#'">Release marks to the students</span>
                                <br />
                            </div>
                        </div>
                    </div>


                   

                    <div class="col-6 px-1">
                        <div class="row g-1">
                            <div class="col-12 bg-danger text-white text-center rounded" style="height: 200px;">
                                <br />
                                <span style="cursor: pointer;" class="fs-4 fw-bold" onclick="window.location.href='#'">Update profile</span>
                                <br />
                            </div>
                        </div>
                    </div>

                    

                    <div class="col-6 px-1">
                        <div class="row g-1">
                            <div class="col-12 bg-warning text-white text-center rounded" style="height: 200px;">
                                <br />
                                <span style="cursor: pointer;" class="fs-4 fw-bold" onclick="window.location.href='adminlogin.php'">Admin Login</span>
                                <br />
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            
            <?php include "footer.php"; ?>

        </div>
    </div>






    <script src="script.js"></script>
    <script src="bootstrap.bundle.js"></script>
</body>

</html>