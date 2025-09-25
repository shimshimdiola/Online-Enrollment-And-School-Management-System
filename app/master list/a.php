<?php
session_start();
$current_file = basename($_SERVER['PHP_SELF']);
if ($current_file == 'a.php') {
    define('ACTIVE_MASTER_LIST', 'active');
}
$Active_Master_List = defined('ACTIVE_MASTER_LIST') ? ACTIVE_MASTER_LIST : '';
require_once '../conf/conf.php';
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

                                    <h4 class="page-title">Master List admin </h4>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <?php
                                        $a = $_GET['a'];
                                        include_once './s.a.php';
                                        ?>
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
                                                            <th>Date register</th>
                                                            <!-- <th style="width: 30px;">Action</th> -->
                                                        </tr>
                                                    </thead>
                                                    <tbody class=" text-capitalize">
                                                        <?php







                                                        // SQL query to retrieve data from the database
                                                        $query = "SELECT * FROM tbl_user WHERE utype = 'faculty'";
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
                                                          <td>' . $data['grade'] . '</td>
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