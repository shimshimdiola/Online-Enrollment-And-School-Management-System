<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from mannatthemes.com/zoogler/vertical/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Apr 2024 07:24:26 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>SJNHS-OEMS</title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Mannatthemes" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="assets/images/logo.png">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

</head>


<body class="fixed-left"><!-- Begin page -->
    <div class="accountbg"></div>
    <div class="" style="
       margin: 7.5% auto;
    max-width: 500px;
    position: relative">
        <div class="card">
            <div class="card-body">
                <div class="text-center m-b-15"><a href="./" class="logo logo-admin"><img src="assets/images/logo.png" height="94" alt="logo"></a></div>
                <div class="p-3">
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        Below is your username and password to access your account.
                    </div>

                    <div>
                        <button class="btn btn-success btn-sm float-right top-0 " onclick="copyText()"><i class=" fas fa-copy"></i></button>

                        <p id="user"><strong>Username:</strong> <?php
                                                                echo $_GET['username'];
                                                                ?></p>
                        <p id="pass"><strong>Password:</strong> <?php
                                                                echo $_GET['password'];
                                                                ?></p>
                    </div>

                    <!-- Script to copy text to clipboard -->
                    <script>
                        function copyText() {
                            var username = document.getElementById("user").textContent.trim();
                            var password = document.getElementById("pass").textContent.trim();

                            var textToCopy = username + '\n' + password;

                            navigator.clipboard.writeText(textToCopy)
                                .then(function() {
                                    alert("Text copied to clipboard!");
                                })
                                .catch(function(error) {
                                    console.error("Error copying text: ", error);
                                    alert("Failed to copy text. Please try again.");
                                });
                        }
                    </script>

                    <div class="form-group text-center row m-t-20">
                        <div class="col-12"><a href="./" target="_blank" class="btn btn-success btn-block waves-effect waves-light" type="submit">Go to Login</a></div>
                    </div>
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
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script><!-- App js -->
    <script src="assets/js/app.js"></script>
    <script src="assets/plugins/parsleyjs/parsley.min.js"></script>
    <script src="assets/pages/validation.init.js"></script>
    <!-- <script src="assets/js/form.queries.js"></script> -->

</body>
<!-- Mirrored from mannatthemes.com/zoogler/vertical/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Apr 2024 07:24:26 GMT -->

</html>