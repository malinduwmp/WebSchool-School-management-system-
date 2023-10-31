<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>Invite Academic Officers| webschool</title>

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

            <!-- send invite box -->
             <div class="col-12 col-lg-6 box " id="logInbox">
                <div class="row g-2">
            
                    <div class="col-12">
                        <p style="color: white; font-size: 20px; ">Invite to Academic Officers  </p>
                    </div>


                    <div class="col-12 d-none" id="msgdiv" role="alert">
                        <div class="alert alert-danger" role="alert" id="alertdiv">
                            <i class="bi bi-x-octagon-fill fs-5" id="msg"></i>
                        </div>
                    </div>

                    <div class="margin col-12">
                        <lable class="form-label">Email</lable>
                        <input type="email" class="form-control " id="aose" placeholder="Enter The  Academic Officers Send Email here" />
                    </div>

                    <div class="col-12 " style="color: white;">
                        <lable class="form-lable">Password</lable>
                        <input type="password" placeholder="Enter Enter The  Academic Officers Send password here" class="form-control" id="aosp" />
                    </div>


                    <div class="col-12"  >
                        <button class="col-12 btn btn-primary bg-danger" onclick="aosend();">Send</button>
                    </div>
                </div>

            </div>

            <!-- send invite box -->
    

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