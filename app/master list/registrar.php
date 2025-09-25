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
                                            <?php
                                            require_once './reg.sort.php';
                                            ?>
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
                                                            <th>Name</th>
                                                            <th>Grade</th>
                                                            <th>Section</th>
                                                            <th>Date register</th>
                                                            <!-- <th style="width: 30px;">Action</th> -->
                                                        </tr>
                                                    </thead>
                                                    <tbody class=" text-capitalize">
                                                        <?php







                                                        // SQL query to retrieve data from the database
                                                        $query = "SELECT tbl_std_enroll.*,tbl_std_data.*,tbl_user.*,tbl_sec_data.*
          FROM tbl_std_enroll
          INNER JOIN tbl_std_data ON tbl_std_enroll.userid = tbl_std_data.userid
          INNER JOIN tbl_user ON tbl_std_enroll.userid = tbl_user.userid
          INNER JOIN tbl_sec_data ON tbl_std_enroll.secuid = tbl_sec_data.secuid";
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
                                                                    echo '<tr> <td>' . $data['fullname'] . '</td>
                                                          <td>' . $data['genroll'] . '</td>
                                                          <td>' . $data['secname'] . '</td>
                                                            <td>' . $data['time'] . '</td></tr>';
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