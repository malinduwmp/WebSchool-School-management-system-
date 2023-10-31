<?php

session_start();

require "connection.php";

if (isset($_SESSION["au"])) {

?>

    <!DOCTYPE html>

    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">

        <title>Admin Panel | WebSchool</title>

        <link rel="stylesheet" href="bootstrap.css" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

        <link rel="icon" href="resource/ico.png" />
    </head>

    <body style="background-color:rgba(54, 19, 19, 1);">

        <div class="container-fluid">
            <div class="row">

                <div class="col-12 col-lg-2">
                    <div class=" row">
                        <div class="col-12 align-items-start bg-dark">
                            <div class="row g-1 text-center">

                                <div class="col-12 mt-5">
                                    <h4 class="text-white"><?php echo $_SESSION["au"]["fname"] . " " . $_SESSION["au"]["lname"]; ?></h4>
                                    <hr class="border border-1 border-white" />
                                </div>

                                <div class="nav flex-column nav-pills me-3 mt-3" role="tablist" aria-orientation="vertical">
                                    <nav class="nav row g-3 flex-column" >
                                    
                                        <button class=" btn btn-primary"  onclick="window.location.href='manageadmin.php'">Manage Administration</button>
                                        <br/>
                                        <button class=" btn btn-success"  onclick="window.location.href='updateAdminProfile.php'">Update profile</button>
                                        <br/><br/><br/>
                                        <button class=" btn btn-danger" onclick="window.location.href='adminlogin.php'">Log out</button>
                                        <br>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-10">
                    <div class="row">
                       
                        <div class="col-12">
                            <hr />
                        </div>
                        <div class="col-12">
                            <div class="row g-3">

                                <div class="col-12 col-lg-4 px-1">
                                    <div class="row g-1">
                                        <div class="col-12 bg-primary text-white text-center rounded" style="height: 200px;">
                                            <br/>
                                            <span style="cursor: pointer;" class="fs-4 fw-bold" onclick="window.location.href='inviteteacher.php'">Send invitations to teachers</span>
                                            <br/>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12 col-lg-4 px-1">
                                    <div class="row g-1">
                                        <div class="col-12 bg-white text-center rounded" style="height: 200px;">
                                            <br />
                                            <span style="cursor: pointer;" class="fs-4 fw-bold" onclick="window.location.href='inviteacademicofficers.php'">Send invitations to o academic officers </span>
                                            <br />
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12 col-lg-4 px-1">
                                    <div class="row g-1">
                                        <div class="col-12 bg-dark text-white text-center rounded" style="height: 200px;">
                                            <br />
                                            <span style="cursor: pointer;" class="fs-4 fw-bold"  onclick="window.location.href='manageteachers.php'">Manage Teachers</span>
                                            <br />
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12 col-lg-4 px-1">
                                    <div class="row g-1">
                                        <div class="col-12 bg-secondary text-white text-center rounded" style="height: 200px;">
                                            <br />
                                            <span style="cursor: pointer;" class="fs-4 fw-bold"  onclick="window.location.href='managestudent.php'">Manage Student</span>
                                            <br />
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12 col-lg-4 px-1">
                                    <div class="row g-1">
                                        <div class="col-12 bg-success text-white text-center rounded" style="height: 200px;">
                                            <br />
                                            <span style="cursor: pointer;" class="fs-4 fw-bold"  onclick="window.location.href='manageacofficer.php'">Manage Academic Officers</span>
                                            <br />
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12 col-lg-4 px-1">
                                    <div class="row g-1">
                                        <div class="col-12 bg-danger text-white text-center rounded" style="height: 200px;">
                                            <br />
                                            <span style="cursor: pointer;" class="fs-4 fw-bold"  onclick="window.location.href='Checkresults.php'">Check results</span>
                                            <br />
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
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

<?php

} else {
    echo ("You are not a valid user");
}

?>