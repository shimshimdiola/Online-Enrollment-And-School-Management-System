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
    <style>
        .card {
            background-image: url('./assets/images/1m1.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            /* height: 65vh; */
        }
    </style>
</head>

<body class="fixed-left"><!-- Begin page -->
    <div class="accountbg"></div>
    <div class="col-sm-12" style="
       margin: 7.5% auto;
    max-width: 500px;
    position: relative">
        <div class="card">
            <div class="card-body">
                <div class="text-center m-b-15"><a href="./" class="logo logo-admin"><img src="assets/images/logo.png" height="94" alt="logo"></a></div>
                <!-- <h6 class=" text-capitalize">Sign Up</h6> -->
                <hr>
                <div class="p-3">
                    <form class="form-horizontal" id="Form_reg" novalidate>
                        <div class="form-group row">
                            <div class="col-12">
                                <label>ID Number</label>
                                <input class="form-control" id="idnumber" type="text" required="" placeholder="ID Number" oninput="formatIDNumber(this)">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <label>First Name</label>
                                <input class="form-control" id="fname" type="text" required="" placeholder="First Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <label>Last Name</label>
                                <input class="form-control" id="lname" type="text" required="" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <label>Middle Name</label>
                                <input class="form-control" id="mname" type="text" required="" placeholder="Middle Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label>Birth Date</label>
                                <input class="form-control" id="bdate" type="date" required="" placeholder="Birth Date">
                            </div>
                            <div class="col-12">
                                <label>Enrolle Type</label>
                                <select id="etype" required class="form-control">
                                    <option></option>
                                    <option>New Enrollee</option>
                                    <option>Contenuing</option>
                                    <option>returnee</option>

                                </select>
                            </div>
                            <div class="col-12">
                                <label>Grade to Enroll</label>
                                <select id="genroll" required class="form-control">
                                    <option></option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                </select>
                            </div>
                            <!-- <div class="col-12">
                                <div class="custom-control custom-checkbox mt-2"><input type="checkbox" required class="custom-control-input" id="customCheck1"> <label class="custom-control-label" for="customCheck1">Remember me</label>
                                </div>
                            </div> -->
                        </div>
                        <!-- <hr>
                        <div class="form-group">
                            <label>Password</label>
                            <div>
                                <input type="password" id="pass2" class="form-control" required="" placeholder="Password">
                            </div>
                            <div class="m-t-10">
                                <input type="password" class="form-control" required="" data-parsley-equalto="#pass2" placeholder="Re-Type Password">
                            </div>
                        </div> -->


                        <!-- <div class="form-group row">
                            <div class="col-12"><input class="form-control" type="password" required="" placeholder="Password"></div>
                        </div>
                        <div class="form-group row">lname
                            <div class="col-12">
                                <div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="customCheck1"> <label class="custom-control-label font-weight-normal" for="customCheck1">I accept <a href="#" class="text-muted">Terms and Conditions</a></label></div>
                            </div>
                        </div> -->
                        <div class="form-group text-center row mt-4">
                            <div class="col-12">
                                <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Register</button>
                            </div>
                        </div>
                        <div class="form-group m-t-10 mb-0 row">
                            <div class="col-12 m-t-20 text-center  text-white"><a href="./" class="text-muted">Already have account?</a></div>
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
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script><!-- App js -->
    <script src="assets/js/app.js"></script>
    <script src="assets/plugins/parsleyjs/parsley.min.js"></script>
    <script src="assets/pages/validation.init.js"></script>
    <!-- <script src="assets/js/form.queries.js"></script> -->

    <script>
        function formatIDNumber(input) {
            // Remove any non-numeric characters from the input value
            let cleanedValue = input.value.replace(/\D/g, '');

            // Format the cleaned value as "####-####"
            let formattedValue = '';
            for (let i = 0; i < cleanedValue.length; i++) {
                if (i === 4) {
                    formattedValue += '-';
                }
                formattedValue += cleanedValue[i];
            }

            // Update the input value with the formatted value
            input.value = formattedValue;
        }
        // console.log("connected");
        $(document).ready(function() {
            var formSubmitted = false; // Variable to track if form is already submitted

            $('#Form_reg').submit(function(event) {
                event.preventDefault(); // Prevent the default form submission

                if (formSubmitted) {
                    // If form is already submitted, do nothing
                    return;
                }

                var formData = {
                    idnumber: $('#idnumber').val(),
                    fname: $('#fname').val(),
                    lname: $('#lname').val(),
                    mname: $('#mname').val(),
                    bdate: $('#bdate').val(),
                    etype: $('#etype').val(),
                    genroll: $('#genroll').val(),

                };



                const charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                let password = "";

                for (let i = 0; i < 8; i++) {
                    const randomIndex = Math.floor(Math.random() * charset.length);
                    password += charset[randomIndex];
                }



                // formData.username = username;
                formData.password = password;

                // console.log(formData);


                $.ajax({
                    type: 'POST',
                    url: 'reg_u.php', // Replace with your server-side script URL
                    data: formData,
                    success: function(response) {
                        console.log(response); // Log the response to the console
                        alert(response); // Show an alert
                        formSubmitted = true; // Mark form as submitted
                        $('#Form_reg')[0].reset(); // Reset the form
                        // Redirect to another page with data passed as URL parameters
                        var redirectUrl = 'gen_reg.php?password=' + encodeURIComponent(formData.password) + '&username=' + encodeURIComponent(formData.idnumber);
                        window.location.href = redirectUrl;
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText); // Log any errors
                        alert('Error saving data. Please try again.');
                    }
                });
            });
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