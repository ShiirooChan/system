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
    <style>
        html {
            height: 100%;
        }

        body {
            background-image: url(assets/images/loginbg.jpg);
            background-repeat: no-repeat;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            background-position: center;

        }

        .card {
            position: relative;
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

        #map {
            height: 100%;
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

        .mySlides {
            display: none
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 45%;
            max-height: 100%;
            position: relative;
            margin: auto;
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            height: 13px;
            width: 13px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
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
    </style>
</head>

<body>

    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    
    <button id="toggle" type="button" onclick="document.getElementById('id01').style.display='block'" style="position:absolute;top:0%;right:0%">Login</button>


<div id="id01" class="modal">
    <form class="modal-content animate" method="post" name="login_form">
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
<!-- ============================================================== -->
<!-- end login page  -->
<!-- ============================================================== -->





    
    <!-- Optional JavaScript -->
    <!-- 
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script type="text/javascript">
      document.oncontextmenu = document.body.oncontextmenu = function() {return false;}//disable right click
    </script>
    -->
    <script type="text/javascript">



        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }







        jQuery(function() {
            $('form[name="login_form"]').on('submit', function(e) {
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
                                //status: s_status
                            },
                            beforeSend: function() {
                                $('#alert-msg').html('');
                            }
                        })
                        .done(function(t) {
                            if (t == null) {
                                $('#alert-msg').html('<div class="alert alert-danger"> Required Username and Password!</div>');
                            } else{
                                $("#btn-login").html('<img src="assets/images/loading.gif" /> &nbsp; Signing In ...');
                                setTimeout(' window.location.href = "documents/index.php"; ', 2000);
                                
                            }
                        });
                }
            });
        });
    </script>

</body>

</html>