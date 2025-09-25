<?php
require_once '../conf/conf.php'
?>
<!DOCTYPE html>
<html lang="en">

<?php
include_once Components_dir . 'header.php'
?>
<!--  -->

<body class="fixed-left">
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div><!-- Begin page -->
    <div id="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <?php
        require_once Components_dir . Side_bar;
        ?>
        <!-- Left Sidebar End -->
        <!-- Start right Content here -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <!-- Top Bar Start -->
                <?php
                require_once Components_dir . Top_bar;
                ?>
                <!-- Top Bar End -->
                <div class="page-content-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <div class="btn-group float-right">
                                        <ol class="breadcrumb hide-phone p-0 m-0">
                                            <li class="breadcrumb-item"><a href="<?php echo Root_dir ?>">SJNHS-OEMS</a></li>
                                            <li class="breadcrumb-item"><a href="#">Documents</a></li>
                                            <!-- <li class="breadcrumb-item active">Starter</li> -->
                                        </ol>
                                    </div>

                                    <h4 class="page-title">Documents student </h4>
                                </div>
                                <div class="row">

                                    <?php

                                    // Prepare and execute the SELECT query
                                    $select_stmt = $conn->prepare("SELECT * FROM tbl_std_docu WHERE userid = ?");
                                    $select_stmt->bind_param("i", $userid);
                                    // $userid = $user;
                                    $select_stmt->execute();
                                    $select_result = $select_stmt->get_result();

                                    // Fetch the data from the result set
                                    $select_result->num_rows;
                                    $data = $select_result->fetch_assoc();
                                    // Do something with the data, such as display it on the page





                                    // echo $data['userid'];
                                    include_once STD_LOCK_FORM;
                                    include_once STD_E_FORM;
                                    include_once STD_137_FORM;
                                    include_once STD_138_FORM;
                                    include_once STD_moral_FORM;
                                    include_once STD_PSA_FORM;



                                    // Close the SELECT statement and the database connection
                                    $select_stmt->close();
                                    $conn->close();





                                    ?>



                                    <!-- end col -->
                                </div>
                            </div>
                        </div><!-- end page title end breadcrumb -->
                    </div><!-- container -->
                </div><!-- Page content Wrapper -->
            </div><!-- content -->
            <?php
            require_once Components_dir . 'footer.php';
            ?>
        </div>
    </div><!-- END wrapper -->
    <!-- jQuery  -->
    <?php
    require_once Components_dir . 'scripts.php';
    ?>
    <script>
        function E_form_d(e,i) {
            $.ajax({
                url: "remove.php",
                type: "POST",
                data: {
                    e: e,
                    i: i
                },
                success: function(response) {
                    //  alert(response)
                    Swal.fire("Deleted!", '', "success");
                    setTimeout(function() {
                        window.location.reload();
                    }, 1000);
                },
                error: function(xhr, status, error) {
                    Swal.fire("Error", "Failed to delete section", "error");
                    console.error(xhr.responseText);
                }
            });
        }


        // Swal.fire("Deleted!", "", "success");
    </script>
</body>

</html>