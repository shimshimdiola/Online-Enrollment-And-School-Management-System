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
                                            <li class="breadcrumb-item"><a href="#">Notification</a></li>
                                            <!-- <li class="breadcrumb-item active">Starter</li> -->
                                        </ol>
                                    </div>

                                    <h4 class="page-title">Notification </h4>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive">

                                                    <table id="datatable" class="table table-bordered  nowrap" style="
                          border-collapse: collapse;
                          border-spacing: 0;
                          width: 100%;
                        ">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>From</th>
                                                                <th>Message</th>
                                                                <th>Date & Time</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            // Assuming the connection is already established

                                                            // SQL query to select all data from the students table
                                                            $query = "SELECT * FROM tbl_notif_std WHERE userid = $userid ORDER BY time DESC";

                                                            // Execute the query and get the result
                                                            $result = $conn->query($query);

                                                            // Check if the query executed successfully
                                                            if ($result === false) {
                                                                echo "Error executing query: " . $conn->error;
                                                            } else {
                                                                // Process the result
                                                                if ($result->num_rows > 0) {
                                                                    // Loop through each row of the result
                                                                    while ($data = $result->fetch_assoc()) {
                                                                        // Access data from each row
                                                                        echo '<tr>
                                                            <td>#' . $data['id'] . '</td>
                                                            <td class=" text-capitalize" >' . $data['msg_f'] . '</td>
                                                            <td>
                                                                            ' . $data['msg'] . '
                                                                   
                                                            </td>

                                                            <td>' . $data['time'] . '</td>

                                                        </tr>';
                                                                        // You can access other columns similarly
                                                                    }
                                                                } else {
                                                                    echo "/";
                                                                }
                                                            }

                                                            // Close the database connection
                                                            $conn->close();
                                                            ?>


                                                            <script>
                                                                function M_L(val) {
                                                                    // alert(val)
                                                                    document.getElementById('less').textContent = 'show less';
                                                                }
                                                            </script>

                                                        </tbody>
                                                    </table>
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
            </div>
        </div><!-- END wrapper -->
        <!-- jQuery  -->
        <?php
        require_once Components_dir . 'scripts.php';
        ?>
</body>

</html>