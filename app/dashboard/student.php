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
                                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                            <!-- <li class="breadcrumb-item active">Starter</li> -->
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Dashboard student</h4>




                                </div>

                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="icon-contain">
                                                    <div class="row">
                                                        <div class="col-2 align-self-center"><i class="fas fa-book text-gradient-success"></i></div>
                                                        <div class="col-10 text-right">
                                                            <h5 class="mt-0 mb-1" id="std_sc"></h5>
                                                            <p class="mb-0 font-12 text-muted">Subjects </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="icon-contain">
                                                    <div class="row">
                                                        <div class="col-2 align-self-center"><i class="fas fa-graduation-cap text-primary"></i></div>
                                                        <div class="col-10 text-right">
                                                            <h5 class="mt-0 mb-1" id="std_g">98.998319</h5>
                                                            <p class="mb-0 font-12 text-muted">GPA </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div><!-- end page title end breadcrumb -->
                    </div><!-- container -->
                </div><!-- Page content Wrapper -->
            </div><!-- content -->
            <?php
            require_once Components_dir . 'footer.php';
            ?>
        </div><!-- End Right content here -->
    </div><!-- END wrapper -->
    <!-- jQuery  -->
    <?php
    require_once Components_dir . 'scripts.php';
    ?>
    <script>
        $(document).ready(function() {
            $.ajax({
                url: 'std_sc.php',
                type: 'GET',
                success: function(response) {
                    $('#std_sc').text(response);
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching data:', error);
                    $('#totalStudents').text('Error fetching data');
                }
            });
            $.ajax({
                url: 'std.g.php',
                type: 'GET',
                success: function(response) {
                    var floatValue = parseFloat(response);

                    // Limit the number of decimal places to 2 using toFixed(2)
                    var formattedValue = floatValue.toFixed(2);

                    // Update the text content of the element with the formatted value
                    $('#std_g').text(formattedValue);
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching data:', error);
                    $('#totalStudents').text('Error fetching data');
                }
            });
        });
    </script>
</body>

</html>