<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>Teacher & accadamic Officer | Login</title>

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

            <!--teacher login box -->

            <div class="col-12 col-lg-6 box " id="teachersLogInbox">
                <div class="row g-4">

                    <div class="col-12 col-lg-6 d-grid">
                        <button class=" btn btn-danger btn-outline-dark"  onclick="changeView();">Teacher Log in</button>      
                    </div>

                    <div class="col-12 col-lg-6 d-grid">
                        <button class="btn btn-danger btn-outline-dark"  onclick="changeView();">Acadamic Officer Log in</button>
                    </div>
                    
                    

                    <div class="col-12 d-none" id="msgdiv" role="alert">
                        <div class="alert alert-danger" role="alert" id="alertdiv">
                            <i class="bi bi-x-octagon-fill fs-5" id="msg"></i>
                        </div>
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
                        <input type="email" class="form-control " id="te" placeholder="Enter your Email here" />
                    </div>

                    <div class="col-12 " style="color: white;">
                        <lable class="form-lable">Password</lable>
                        <input type="password" placeholder="Enter your password here" class="form-control" id="tp" />
                    </div>

                    <div class="col-6" style="color: white;">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="rememberme" />
                            <label class="form-check-label">Remember Me</label>
                        </div>
                    </div>

                  

                    <div class="col-12"  >
                        <button class="col-12 btn btn-primary bg-danger" onclick="teacherlogIn();">Log in as a Teacher</button>
                    </div>

                
               
                </div>  
            
            </div>
            <!--teacher login box -->

            

            <!-- Acadamic Officer login -->

            <div class="col-12 col-lg-6 box d-none " id="AcadamicOfficersLogInbox">
                <div class="row g-2">

                    <div class="col-12 col-lg-6 d-grid">
                        <button class=" btn btn-danger btn-outline-dark" onclick="changeView();" >Teacher Log in</button>      
                    </div>

                    <div class="col-12 col-lg-6 d-grid">
                        <button class="btn btn-danger btn-outline-dark" onclick="changeView();" >Acadamic Officer Log in</button>
                    </div>

                    <div class="col-12 d-none" id="msgdiv" role="alert">
                        <div class="alert alert-danger" role="alert" id="alertdiv">
                            <i class="bi bi-x-octagon-fill fs-5" id="msg"></i>
                        </div>
                    </div>

                    <div class="margin col-12">
                        <lable class="form-label">Email</lable>
                        <input type="email" class="form-control " id="aoe" placeholder="Enter your Email here" />
                    </div>

                    <div class="col-12 " style="color: white;">
                        <lable class="form-lable">Password</lable>
                        <input type="password" placeholder="Enter your password here" class="form-control" id="aop" />
                    </div>

                    <div class="col-6" style="color: white;">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="rememberme1" />
                            <label class="form-check-label">Remember Me</label>
                        </div>
                    </div>

                    <div class="col-12"  >
                        <button class="col-12 btn btn-danger bg-success"  onclick="aologIn();">Log in as a Academic Officer</button>
                    </div>

                
                    
               
                </div>  
            
            </div>
            <!-- Acadamic Officer login -->

              <!--  -->
              <div class="modal" tabindex="-1" id="verificationModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Admin Verification</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <label class="form-label">Enter Your Verification Code</label>
                            <input type="text" class="form-control" id="vcode"/>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" onclick="verify();">Verify</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->



            


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