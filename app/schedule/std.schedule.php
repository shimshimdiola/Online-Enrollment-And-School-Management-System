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
    </div>
    <!-- Begin page -->
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
                                            <li class="breadcrumb-item"><a href="#">Schedule</a></li>
                                            <!-- <li class="breadcrumb-item active">Starter</li> -->
                                        </ol>
                                    </div>

                                    <h4 class="page-title">Schedule student </h4>
                                </div>
                                <div class="row">
                                    <div class="col-12">



                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <!-- <h4 class="mt-0 header-title">Class information</h4> -->
                                                        <div class=" text-center">
                                                            <img class="rounded-circle mt-2  p-1 border " alt="200x200" width="100" src="<?php echo Base_dir ?>assets/images/users/avatar-6.jpg" data-holder-rendered="true">

                                                        </div>
                                                        <?php
                                                        require_once './section.php';
                                                        ?>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered mb-0 table-responsive-sm nowrap table-centered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Subject</th>
                                                                        <th>Time</th>
                                                                        <th>Days</th>
                                                                        <th>Teacher</th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                    <?php



                                                                    // echo $userid;
                                                                    $sql = "SELECT DISTINCT tbl_sec_data.*, tbl_load_data.*, tbl_std_enroll.*
        FROM tbl_std_enroll
        JOIN tbl_load_data ON tbl_std_enroll.secuid = tbl_load_data.secuid
        JOIN tbl_sec_data ON tbl_std_enroll.secuid = tbl_sec_data.secuid
        WHERE tbl_std_enroll.userid = '$userid'";

                                                                    // Define the SQL query
                                                                    // Execute the SQL query
                                                                    $result = $conn->query($sql);

                                                                    // Check if the query was successful
                                                                    if (!$result) {
                                                                        // Query failed, handle the error
                                                                        echo "Error: " . $conn->error;
                                                                    } else {
                                                                        // Check if any rows were returned
                                                                        if ($result->num_rows > 0) {
                                                                            // Output data of each row
                                                                            while ($data = $result->fetch_assoc()) {
                                                                                // var_dump($data); // Debugging output
                                                                                echo '<tr>
                      <td class=" text-capitalize" >' . $data['sub'] . '</td>
                      <td class=" text-capitalize" >' . $data['cstart'] . ' - ' . $data['cend'] .  '</td>
                      <td class=" text-capitalize" >' . $data['days'] . '</td>
                      <td class=" text-capitalize" >' . $data['fac'] . '</td>
                  </tr>';

                                                                                $section_name = $data['secname'];
                                                                            }
                                                                        } else {
                                                                            echo '<td colspan="4" class=" text-center " >Empty</td>';
                                                                        }
                                                                    }


                                                                    // Close the connection
                                                                    $conn->close();

                                                                    ?>



                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
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
</body>

</html>