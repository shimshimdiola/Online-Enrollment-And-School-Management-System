<?php
session_start();
require_once './path.php';
// Check if the session variable is set
if (isset($_SESSION['sys_user_dir'])) {
    header('Location:./app/'); // Redirect to "./app"
    exit; // Exit the script after redirection
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/logo.png">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <title>SJNHS-OEMS</title>
    <style>
        .form-control,
        .btn {
            height: 50px;
            border-radius: 50px;
        }

        .form-control {
            padding-left: 20px;
        }

        .side {
            border-radius: 50px;

        }

        body {
            background-image: url('./assets/images/1m1.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
        }
    </style>

</head>


<body>
    <div class="m-4">
        <div class="text-center">
            <img src="assets/images/logo.png" width="110" alt="logo" class="img-fluid p-2 mt-4 rounded-circle ">
            <h6>San Jose National High School </h6>
            <h6>Dulag, Leyte</h6>
        </div>
        <br><br>

        <form id="loginForm" class="form-horizontal m-t-20 ">
            <div class="form-group row">
                <div class="col-12"><input id="username" class="form-control b-round " type="text" required="" placeholder="ID Number"></div>
            </div>
            <div class="form-group row">
                <div class="col-12"><input id="password" class="form-control b-round " type="password" required="" placeholder="Password"></div>
            </div>
            <div class="form-group row">
                <div class="col-12">
                    <div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="customCheck1"> <label class="custom-control-label" for="customCheck1">Remember me</label></div>
                </div>
            </div>
            <div class="form-group text-center row m-t-20">
                <div class="col-12"><button id="loginBtn" class="btn  btn-success btn-block waves-effect waves-light"><strong>LOG IN</strong></button></div>
            </div>
        </form>
        <br>
        <div class="mt-3 row">
            <div class="col-6">
                <a href="#" class="  side -primary d-inline-block"><i class="mdi mdi-lock"></i> <small>Forgot your password ?</small></a>
            </div>
            <div class="col-6">
                <a href="./register.php" class="  side -primary d-inline-block float-right"><i class="mdi mdi-account-circle"></i> <small>Create an account ?</small></a>
            </div>
        </div>

        <footer class="footer">© <?php echo date('Y')  ?> By: Evsu-DC Student.</footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <!-- Parsley js -->
    <script src="assets/plugins/parsleyjs/parsley.min.js"></script>
    <script src="assets/pages/validation.init.js"></script>
    <script src="assets/pages/form-advanced.js"></script>
    <script>
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
                    $("#result").html(response); // Set the content of element with ID "result" to the response data
                    $("#password").val(''); // Clear the password input field
                    window.location.href = './app/'; // Redirect the user to the specified URL
                },

                error: function(xhr, status, error) {
                    $("#result").html("Error: " + xhr.responseText); // Display error message in #result element
                    console.error(xhr.responseText); // Log the error to the console

                }


            }); // Added closing parenthesis

        });
        window.addEventListener("devtoolschange", function(e) {
            alert("Developer tools are not allowed!");
        });
        window.addEventListener("contextmenu", function(e) {
            e.preventDefault();
        });
    </script>
</body>


</html>