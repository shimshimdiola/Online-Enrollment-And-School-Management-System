<?php
session_start();
// Check if the session variable is set
if (isset($_SESSION['sys_user_dir'])) {
    header('Location:./app/'); // Redirect to "./app"
    exit; // Exit the script after redirection
}
?>

<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from mannatthemes.com/zoogler/vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Apr 2024 07:24:26 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>SJNH-OEMS</title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Mannatthemes" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="assets/images/logo.png">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <script>
        // Function to check if the device is mobile
        function isMobileDevice() {
            return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
        }

        // Check if the device is mobile
        if (isMobileDevice()) {
            // Switch content for mobile
            window.location.href = './mobile.login.php';
        }
    </script>
    <style>
        .card {
            background-image: url('./assets/images/1m1.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            /* height: 65vh; */
        }
    </style>
</head>

<body class="fixed-left">
    <div class="accountbg"></div>
    <br>

    <div class="wrapper-page">

        <div class="card">

            <div class="card-body">
                <div class="text-center m-b-15"><a href="./" class="logo logo-admin"><img src="assets/images/logo.png" height="94" alt="logo"></a></div>
                <div class="p-3">
                    <div id="result">
                    </div>
                    <?php
                    // echo $_SESSION['sys_user_dir']
                    ?>
                    <form id="loginForm" action="./" class="form-horizontal m-t-20">
                        <div class="form-group row">
                            <div class="col-12"><input id="username" class="form-control" type="text" required="" placeholder="Username / ID Number" autocomplete="current-password"></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12"><input id="password" class="form-control" type="password" required="" placeholder="Password" autocomplete="current-password"></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="customCheck1"> <label class="custom-control-label" for="customCheck1">Remember me</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center row m-t-20">
                            <div class="col-12"><button id="loginBtn" type="submit" class="btn btn-success btn-block waves-effect waves-light" onclick="">Log
                                    In</button></div>
                        </div>
                        <div class="form-group m-t-10 mb-0 row">
                            <div class="col-sm-7 m-t-20"><a href="#" class="text-muted"><i class="mdi mdi-lock"></i> <small>Forgot your password ?</small></a>
                            </div>
                            <div class="col-sm-5 m-t-20"><a href="./register.php" class="text-muted"><i class="mdi mdi-account-circle"></i> <small>Create an account
                                        ?</small></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div><!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script><!-- App js -->
    <script src="assets/js/app.js"></script>

    <script>
        $(document).ready(function() {
            $("#loginBtn").click(function() {
                var username = $("#username").val(); // Get username from input field
                var password = $("#password").val(); // Get password from input field
                $.ajax({
                    type: "POST",
                    url: "log.php", // Correct URL for handling login request
                    data: {
                        username: username,
                        password: password
                    },
                    success: function(response) {
                        $("#result").html(xhr.responseText); // Set the content of element with ID "result" to the response data

                        // location.reload(); // Reload the current page
                        // $("#password").val(''); // Clear the password input field
                        // window.location.href = "./app/"; // Redirect to the specified URL after successful login
                    },
                    error: function(xhr, status, error) {
                        $("#result").html(xhr.responseText); // Display error message in #result element
                        console.error(xhr.responseText); // Log the error to the console
                    }

                });
            });
        });


        // window.addEventListener("devtoolschange", function(e) {
        //     alert("Developer tools are not allowed!");
        // });
        // window.addEventListener("contextmenu", function(e) {
        //     e.preventDefault();
        // });
    </script>
</body>
<!-- Mirrored from mannatthemes.com/zoogler/vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Apr 2024 07:24:26 GMT -->

</html>