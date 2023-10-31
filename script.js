function changeView() {
    var teachersLogInbox = document.getElementById("teachersLogInbox");
    var AcadamicOfficersLogInbox = document.getElementById("AcadamicOfficersLogInbox");

    teachersLogInbox.classList.toggle("d-none");
    AcadamicOfficersLogInbox.classList.toggle("d-none");

}



var av;

function adminLogIn() {
    var adminemail = document.getElementById("ae");



    var f = new FormData();
    f.append("ae", adminemail.value);


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                var adminVerificationModal = document.getElementById("verificationModal");
                av = new bootstrap.Modal(adminVerificationModal);
                av.show();
            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "adminVerificationProcess.php", true);
    r.send(f);
}

function verify() {
    var verification = document.getElementById("vcode");

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                av.hide();
                window.location = "adminPanel.php";
            } else {
                alert(t);
            }
        }
    }

    r.open("GET", "verificationProcess.php?av=" + verification.value, true);
    r.send();
}


var et;

function teachersend() {
    var  teachersendemail = document.getElementById("tse");
    var  teachersendpassword = document.getElementById("tsp");



    var f = new FormData();
    f.append("tse", teachersendemail.value);
    f.append("tsp", teachersendpassword.value);


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                window.location.reload;
            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "inviteteachersprocess.php", true);
    r.send(f);
}

function aosend() {
    var  aosendemail = document.getElementById("aose");
    var  aosendpassword = document.getElementById("aosp");



    var f = new FormData();
    f.append("aose", aosendemail.value);
    f.append("aosp", aosendpassword.value);


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                window.location.reload;
            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "inviteacademicofficersprocess.php", true);
    r.send(f);
}

function studentsend() {
    var  aosendemail = document.getElementById("sre");
    var  aosendpassword = document.getElementById("srp");
    var  aosendpassword = document.getElementById("g");




    var f = new FormData();
    f.append("sre", aosendemail.value);
    f.append("srp", aosendpassword.value);
    f.append("g", aosendpassword.value);
    


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                window.location.reload;
            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "registerstudentprocess.php", true);
    r.send(f);
}





function blockteacher(email) {

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var txt = r.responseText;
            if (txt == "blocked") {
                document.getElementById("tb" + email).innerHTML = "Unblocked";
                document.getElementById("tb" + email).classList = "btn btn-success";
            } else if (txt == "unblocked") {
                document.getElementById("tb" + email).innerHTML = "Blocked";
                document.getElementById("tb" + email).classList = "btn btn-danger";
            } else {
                alert(txt);
            }
        }
    }

    r.open("GET", "teacherBlockProcess.php?email=" + email, true);
    r.send();

}


function blockstudent(email) {

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var txt = r.responseText;
            if (txt == "blocked") {
                document.getElementById("sb" + email).innerHTML = "Unblocked";
                document.getElementById("sb" + email).classList = "btn btn-success";
            } else if (txt == "unblocked") {
                document.getElementById("sb" + email).innerHTML = "Blocked";
                document.getElementById("sb" + email).classList = "btn btn-danger";
            } else {
                alert(txt);
            }
        }
    }

    r.open("GET", "studentBlockProcess.php?email=" + email, true);
    r.send();

}



function blockacofficer(email) {

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var txt = r.responseText;
            if (txt == "blocked") {
                document.getElementById("aob" + email).innerHTML = "Unblocked";
                document.getElementById("aob" + email).classList = "btn btn-success";
            } else if (txt == "unblocked") {
                document.getElementById("aob" + email).innerHTML = "Blocked";
                document.getElementById("aob" + email).classList = "btn btn-danger";
            } else {
                alert(txt);
            }
        }
    }

    r.open("GET", "studentBlockProcess.php?email=" + email, true);
    r.send();

}

function blockadmin(email) {

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var txt = r.responseText;
            if (txt == "blocked") {
                document.getElementById("ab" + email).innerHTML = "Add Admin";
                document.getElementById("ab" + email).classList = "btn btn-success";
            } else if (txt == "unblocked") {
                document.getElementById("ab" + email).innerHTML = "Remove Admin";
                document.getElementById("ab" + email).classList = "btn btn-danger";
            } else {
                alert(txt);
            }
        }
    }

    r.open("GET", "blockadminprocess.php?email=" + email, true);
    r.send();

}




function teacherlogIn() {
    var email = document.getElementById("te");
    var password = document.getElementById("tp");
    var rememberme = document.getElementById("rememberme");

    var f = new FormData();
    f.append("te", email.value);
    f.append("tp", password.value);
    f.append("tr", rememberme.checked);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                window.location = "teachershome.php";

                document.getElementById("msg2").innerHTML = "";
            } else {
                document.getElementById("msg2").innerHTML = t;

            }
        }
    };

    r.open("POST", "teacherLoginprocess.php", true);
    r.send(f);
}


function aologIn() {
    var email = document.getElementById("aoe");
    var password = document.getElementById("aop");
    var rememberme = document.getElementById("rememberme1");

    var f = new FormData();
    f.append("aoe", email.value);
    f.append("aop", password.value);
    f.append("aor", rememberme.checked);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                window.location = "acofficerhome.php";

                document.getElementById("msg2").innerHTML = "";
            } else {
                document.getElementById("msg2").innerHTML = t;

            }
        }
    };

    r.open("POST", "acofficerLoginprocess.php", true);
    r.send(f);
}



function aologIn() {
    var email = document.getElementById("aoe");
    var password = document.getElementById("aop");
    var rememberme = document.getElementById("rememberme1");

    var f = new FormData();
    f.append("aoe", email.value);
    f.append("aop", password.value);
    f.append("aor", rememberme.checked);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                window.location = "acofficerhome.php";

                document.getElementById("msg2").innerHTML = "";
            } else {
                document.getElementById("msg2").innerHTML = t;

            }
        }
    };

    r.open("POST", "acofficerLoginprocess.php", true);
    r.send(f);
}


function aologIn() {
    var email = document.getElementById("aoe");
    var password = document.getElementById("aop");
    var rememberme = document.getElementById("rememberme1");

    var f = new FormData();
    f.append("aoe", email.value);
    f.append("aop", password.value);
    f.append("aor", rememberme.checked);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                window.location = "acofficerhome.php";

                document.getElementById("msg2").innerHTML = "";
            } else {
                document.getElementById("msg2").innerHTML = t;

            }
        }
    };

    r.open("POST", "acofficerLoginprocess.php", true);
    r.send(f);
}


function changeview2() {

    var loginbox = document.getElementById("lbox");
    var createnewbox = document.getElementById("cnbox");

    loginbox.classList.toggle("d-none");
    createnewbox.classList.toggle("d-none");

}




function studentlogin() {
    var email = document.getElementById("sle");
    var password = document.getElementById("slp");
    var rememberme = document.getElementById("rememberme2");

    var f = new FormData();
    f.append("sle", email.value);
    f.append("slp", password.value);
    f.append("rememberme2", rememberme.checked);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                window.location = "studentHome.php";

                document.getElementById("msg2").innerHTML = "";
            } else {
                document.getElementById("msg2").innerHTML = t;

            }
        }
    };

    r.open("POST", "studentLoginprocess.php", true);
    r.send(f);
}


function signOut() {
    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (this.readyState == 4) {
            var t = this.responseText;
            if (t == "success") {
                window.location.reload();
            } else {
                alert(t);
            }
        }

    };

    r.open("GET", "signOutProcess.php", true);
    r.send();
}


function changeImage() {
    var view = document.getElementById("viewImg");
    var file = document.getElementById("profileimg");

    file.onchange = function() {
        var file1 = this.files[0];
        var url = window.URL.createObjectURL(file1);
        view.src = url;
    }

}


function updateProfile() {
    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var mobile = document.getElementById("mobile");
    var image = document.getElementById("profileimg");

    var form = new FormData();
    form.append("tf", fname.value);
    form.append("tl", lname.value);
    form.append("tm", mobile.value);
    form.append("pc", pcode.value);

    if (image.files.length == 0) {

        var confirmation = confirm("Are you sure, You don't want to update your Profile Image?");

        if (confirmation) {
            alert("you have not selected any image.");
        }

    } else {
        form.append("image", image.files[0]);
    }

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                window.location.reload();
            } else {
                alert(t);
            }
        }
    };


    r.open("POST", "updatteachersprofileprocess.php", true);
    r.send(form);
}

var countDownDate = new Date("Feb 07,2023 00:00:00").getTime();
var x = setInterval(function(){
    var now = new Date().getTime();
    var distance=countDownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;

},1000);

