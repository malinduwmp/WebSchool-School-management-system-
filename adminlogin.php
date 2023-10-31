<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>Admin | Login</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="icon" href="resource/ico.png" />

</head>

<body class="home">

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
            <div class="col-12 col-lg-6 box " id="logInbox">
                <div class="row g-3">
            
                    <div class="col-12">
                        <p style="color: white; font-size: 20px; ">Admin Log in </p>
                    </div>


                    <div class="col-12 d-none" id="msgdiv" role="alert">
                        <div class="alert alert-danger" role="alert" id="alertdiv">
                            <i class="bi bi-x-octagon-fill fs-5" id="msg"></i>
                        </div>
                    </div>

                    <div class="margin col-12">
                        <lable class="form-label">Email</lable>
                        <input type="email" class="form-control " id="ae" placeholder="Enter your Email here" />
                    </div>

                    


                    <div class="col-12"  >
                        <button class="col-12 btn btn-primary bg-danger"  onclick="adminLogIn();">Log in as a Admin</button>
                    </div>
                </div>

            </div>
            <!-- login box -->

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