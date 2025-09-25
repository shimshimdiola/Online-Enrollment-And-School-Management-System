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
                                            <li class="breadcrumb-item"><a href="#">Profile / Setting</a></li>
                                            <!-- <li class="breadcrumb-item active">Starter</li> -->
                                        </ol>
                                    </div>

                                    <h4 class="page-title">Class Schedule </h4>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="mt-0 header-title">My Class Advisory</h4>
                                                    <p class="text-muted mb-4 font-13">Bellow is the class your class advisory.</p>
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered mb-0 table-centered text-capitalize">
                                                            <thead class="">
                                                                <tr>
                                                                    <th>Subject</th>
                                                                    <th>Time</th>
                                                                    <th>Days</th>
                                                                    <th>Teacher</th>
                                                                    <th>Section</th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <?php
                                                                // echo $userid;
                                                                // SQL query to select data
                                                                // $sql = "SELECT * FROM tbl_load_data WHERE facuid = '$userid'";

                                                                $sql = "SELECT tbl_sec_data.*, tbl_load_data.*
        FROM tbl_sec_data
        INNER JOIN tbl_load_data ON tbl_sec_data.secuid = tbl_load_data.secuid WHERE tbl_sec_data.adviceruid = '$userid' ";

                                                                $result = $conn->query($sql);

                                                                if ($result === false) {
                                                                    echo "MySQL Error: " . $conn->error . "<br>";
                                                                } else {
                                                                    if ($result->num_rows > 0) {
                                                                        while ($data = $result->fetch_assoc()) {
                                                                            echo '<tr>
                <td><strong>' . $data['sub'] . '</strong>
</td>
                <td><strong>' . $data['cstart'] . ' - ' . $data['cend'] . '</strong>
</td>
                <td><strong>' . $data['days'] . '</strong>
</td>
                <td><strong>' . $data['fac'] . '</strong>
</td>
                <td> <strong>' . $data['secname'] . '</strong></td>
            </tr>';
                                                                        }
                                                                    } else {
                                                                        echo "<tr><td colspan='5' class='text-center'>NO CLASS ADVISORY.</td></tr>";
                                                                    }
                                                                }


                                                                // Close the connection
                                                                ?>


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <hr>
                                                    <h4 class="mt-3 header-title">Class Schedule</h4>
                                                    <p class="text-muted mb-4 font-13">Bellow is the class your class schedule.</p>
                                                    <div class="table-responsive">
                                                        <table id="datatable" class="table table-bordered mb-0 table-centered text-capitalize" style="border-collapse: collapse; border-spacing: 0px; width: 100%;">
                                                            <thead>
                                                                <tr>
                                                                    <th>Subject</th>
                                                                    <th>Time</th>
                                                                    <th>Days</th>
                                                                    <th>Section</th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <?php
                                                                // SQL query to select data
                                                                // $sql = "SELECT * FROM tbl_load_data WHERE facuid = '$userid'";


                                                                $sql = "SELECT tbl_load_data.*,tbl_sec_data.* 
        FROM tbl_load_data
        INNER JOIN tbl_sec_data ON tbl_load_data.secuid = tbl_sec_data.secuid
        WHERE tbl_load_data.facuid = '$userid'";

                                                                // Execute the query
                                                                $result = $conn->query($sql);

                                                                // Check if any rows were returned
                                                                if ($result->num_rows > 0) {
                                                                    // Output data of each row
                                                                    while ($data = $result->fetch_assoc()) {
                                                                        echo  '       <tr>
                                                                    <td>' . $data['sub'] . '</td>
                                                                    <td>' . $data['cstart'] . ' - ' . $data['cend'] . '</td>
                                                                    <td>' . $data['days'] . '</td>
                                                                    <td>' . $data['secname'] . '</td>

                                                                </tr>';
                                                                    }
                                                                } else {
                                                                    echo '<tr><td colspan="4">0 results</td></tr>';
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