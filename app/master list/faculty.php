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
                                            <li class="breadcrumb-item"><a href="#">Master List</a></li>
                                            <!-- <li class="breadcrumb-item active">Starter</li> -->
                                        </ol>
                                    </div>

                                    <h4 class="page-title">Master List registrar </h4>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="button-items mb-2">

                                        </div>
                                        <div class="card">
                                            <div class="card-body">

                                                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap" style="
                          border-collapse: collapse;
                          border-spacing: 0;
                          width: 100%;
                        ">
                                                    <thead>
                                                        <tr>
                                                            <th>ID No.</th>
                                                            <th>Name</th>
                                                            <th>Subject</th>
                                                            <th>Grade</th>
                                                            <th>Date Enrolled</th>
                                                            <!-- <th style="width: 30px;">Action</th> -->
                                                        </tr>
                                                    </thead>
                                                    <tbody class=" text-capitalize">
                                                        <?php






                                                        // echo $userid;
                                                        // SQL query to retrieve data from the database
                                                        $query = "SELECT DISTINCT tbl_load_data.*,tbl_std_enroll.*,tbl_user.*,tbl_std_data.*
        FROM tbl_load_data
        JOIN tbl_std_enroll ON tbl_std_enroll.secuid = tbl_load_data.secuid
        JOIN tbl_user ON tbl_user.userid = tbl_std_enroll.userid
        JOIN tbl_std_data ON tbl_std_data.userid = tbl_user.userid
        WHERE tbl_load_data.facuid = '$userid'";
                                                        // Execute the query
                                                        $result = $conn->query($query);

                                                        // Check if the query executed successfully
                                                        if ($result === false) {
                                                            echo "Error executing query: " . $conn->error;
                                                        } else {
                                                            // Check if there are rows returned from the query
                                                            if ($result->num_rows > 0) {
                                                                // Loop through each row of the result set
                                                                while ($data = $result->fetch_assoc()) {
                                                                    // Access data from each row using column names
                                                                    echo '<tr>
                                                                    <td>' . $data['fac'] . '</td>
                                                                    <td>' . $data['fullname'] . '</td>
                                                          <td>' . $data['sub'] . '</td>
                                                          <td>' . $data['genroll'] . '</td>
                                                            <td>' . $data['timestamp'] . '</td></tr>';
                                                                    // You can access other columns similarly
                                                                }
                                                            } else {
                                                                echo "No data found.";
                                                            }
                                                        }

                                                        // Close the result set and the database connection
                                                        // $result->close();
                                                        // $conn->close();














                                                        //                             for ($i = 0; $i < 3; $i++) {
                                                        //                                 echo '<tr>


                                                        // </tr>';
                                                        //                             }
                                                        ?>


                                                    </tbody>
                                                </table>
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