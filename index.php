<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    <!-- <!doctype html>-->
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        html {
            height: 100%;
        }

        body {

            background-image: url(assets/images/login-bg.jpg);
            background-repeat: no-repeat;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            background-position: center;
            height: 100%;
        }


        .toggle {
            position: absolute;
            top: 0;
            right: 0;
            padding: 10px 15px;
            cursor: pointer;
            background: #d6a92b;
            color: #fff;
            font-size: 14px;
            border-radius: 0 0 0 5px;
        }

        button {
            border-radius: 12px;
            background-color: black;
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            -webkit-transition-duration: 0.4s;
            /* Safari */
            transition-duration: 0.4s;
            cursor: pointer;
        }

        button:hover {
            color: green;
            opacity: 0.8;
        }

        /* Full-width input fields */
        input[type=text],
        input[type=password],
        input[type=email],
        input[type=date],
        input[type=number] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type=submit] {
            border-radius: 12px;
            background-color: black;
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
            padding-top: 60px;
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 35%;
            /* Could be more or less, depending on screen size */
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes animatezoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 350px) {
            span.dont {
                display: block;
                float: right;
            }

            .cancelbtn {
                width: 100%;
            }
        }

        .active {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .text {
                font-size: 11px
            }
        }


        .footer-dark {
            padding: 50px 0;
            padding-bottom: 0;
            color: #f0f9ff;
            background-color: rgb(10, 59, 21);
            position: fixed;
            width: 100%;
            height: 30vh;
            bottom: 0;
            left: 0;
        }

        .footer-dark h3 {
            margin-top: 0;
            margin-bottom: 12px;
            font-weight: bold;
            font-size: 16px;
        }

        .footer-dark ul {
            padding: 0;
            list-style: none;
            line-height: 1.6;
            font-size: 14px;
            margin-bottom: 0;
        }

        .footer-dark ul a {
            color: inherit;
            text-decoration: none;
            opacity: 0.6;
        }

        .footer-dark ul a:hover {
            opacity: 0.8;
        }

        @media (max-width:767px) {
            .footer-dark .item:not(.social) {
                text-align: center;
                padding-bottom: 20px;
            }
        }

        .footer-dark .item.text {
            margin-bottom: 36px;
        }

        @media (max-width:767px) {
            .footer-dark .item.text {
                margin-bottom: 0;
            }
        }

        .footer-dark .item.text p {
            opacity: 0.6;
            margin-bottom: 0;
        }

        .footer-dark .item.social {
            text-align: right;
        }

        @media (max-width:991px) {
            .footer-dark .item.social {
                text-align: center;
            }
        }

        .footer-dark .item.social>a {
            font-size: 20px;
            width: 36px;
            height: 36px;
            line-height: 36px;
            display: inline-block;
            text-align: center;
            border-radius: 50%;
            box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.4);
            margin: 0 8px;
            color: #fff;
            opacity: 0.75;
        }

        .footer-dark .item.social>a:hover {
            background-color: blue;
        }

        .footer-dark .copyright {
            text-align: center;
            padding-top: 24px;
            opacity: 0.3;
            font-size: 13px;
            margin-bottom: 0;
        }
    </style>

    </head>

    <body>





        <button id="toggle" value="Sign in" id="btn-student" name="btn-student" type="button" onclick="document.getElementById('id01').style.display='block'" style="position:absolute;top:0%;right:0%">Login</button>




        <div id="id01" class="modal">
            <form class="modal-content animate" method="post" name="login_sform">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>



                <div class="container">

                    <label><b>Username</b></label>
                    <input class="form-control form-control-lg" id="username" alt="username" type="text" placeholder="Username" autocomplete="off">

                    <label><b>Password</b></label>
                    <input class="form-control form-control-lg" id="password" type="password" alt="password" placeholder="Password" autocomplete="off">
                    <button value="Sign in" id="btn-login" name="btn-login">Login</button>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="remember" onclick="myFunction()"><span class="custom-control-label">Show Password</span>
                        </label>
                    </div>

                </div>
                <div class="form-group" id="alert-msg">
            </form>
        </div>
        </div>
        <br><br><br><br>



        <div class="footer-dark">
            <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 item text" height=30px width=50px>
                        <h3>PATEROS TECHNOLOGICAL COLLEGE</h3>
                        <p>Pateros Technological College envisions itself as an institution of higher learning which is strongly committed to the holistic development of the students to improve their lives in particular and the society in general</p>
                    </div>

                    <div class="col item social">
                        <br><br>
                        <a href="https://www.facebook.com/ptc1993"><i class="icon ion-social-facebook"></i></a>
                        <a href="https://www.youtube.com/channel/UCIMMUtZ2F8X0fSK9pqddicw"><i class="icon ion-social-youtube"></i></a>
                        <a href="http://www.paterostechnologicalcollege.edu.ph/"><i class="icon ion-social-google"></i></a>
                    </div>
                </div>
            </div>
            </footer>
        </div>

        <!-- ============================================================== -->
        <!-- end login page  -->
        <!-- ============================================================== -->
        <!-- Optional JavaScript -->
        <!--
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script type="text/javascript">
        document.oncontextmenu = document.body.oncontextmenu = function() {
            return false;
        } //disable right click
    </script>
    -->
        <script type="text/javascript">
            jQuery(function() {
                $('form[name="login_sform"]').on('submit', function(e) {
                    e.preventDefault();

                    var u_username = $(this).find('input[alt="username"]').val();
                    var p_password = $(this).find('input[alt="password"]').val();
                    // var s_status = 1;

                    if (u_username === '' && p_password === '') {
                        $('#alert-msg').html('<div class="alert alert-danger"> Required Username and Password!</div>');
                    } else {
                        $.ajax({
                                type: 'POST',
                                url: 'init/controllers/login_process.php',
                                data: {
                                    username: u_username,
                                    password: p_password
                                    // status: s_status
                                },
                                beforeSend: function() {
                                    $('#alert-msg').html('');
                                }
                            })
                            .done(function(t) {
                                if (t == 0) {
                                    $('#alert-msg').html('<div class="alert alert-danger">Incorrect username or password!</div>');
                                } else {
                                    $("#btn-login").html('<img src="assets/images/loading.gif"/> &nbsp; Signing In ...');
                                    setTimeout(' window.location.href = "student/index.php"; ', 2000);
                                }
                            });
                    }
                });
            });
        </script>
        <script>
            function myFunction() {
                var x = document.getElementById("password");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }
        </script>
    </body>

</html>