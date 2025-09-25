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
                                            <li class="breadcrumb-item"><a href="#">Grade</a></li>
                                            <!-- <li class="breadcrumb-item active">Starter</li> -->
                                        </ol>
                                    </div>

                                    <h4 class="page-title">Grade student </h4>
                                </div>
                                <div class="row">
                                    <div class="col-12">

                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered mb-0 table-centered text-capitalize">
                                                        <thead>
                                                            <tr>
                                                                <th>Subject</th>
                                                                <th>1st</th>
                                                                <th>2nd</th>
                                                                <th class="bg-warning">Gen avg.</th>
                                                                <th>3rd</th>
                                                                <th>4rth</th>
                                                                <th class="bg-warning">Gen avg.</th>
                                                                <th class="bg-success">GWA</th>


                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php


                                                            $sql = "SELECT DISTINCT tbl_grade_data.*, tbl_load_data.*
        FROM tbl_grade_data 
        JOIN tbl_load_data  ON tbl_load_data.loaduid = tbl_grade_data.subuid
        WHERE tbl_grade_data.userid = '$userid'";

                                                            // Execute query
                                                            $result = $conn->query($sql);

                                                            // Check if any rows were returned
                                                            if ($result->num_rows > 0) {
                                                                // Output data of each row
                                                                while ($data = $result->fetch_assoc()) {
                                                                    echo '        <tr>
                                                                <td>' . $data['sub'] . '</td>
                                                                <td>' . $data['first'] . '</td>
                                                                <td>' . $data['second'] . '</td>
                                                                <td class="' . (isset($data['midterm']) && $data['midterm'] >= 75 && $data['midterm'] <= 1000 ? 'text-success font-weight-bold' : 'text-danger font-weight-bold') . '" >' . $data['midterm'] . '</td>
                                                                <td>' . $data['third'] . '</td>
                                                                <td>' . $data['fourth'] . '</td>
                                                                <td class="' . (isset($data['final']) && $data['final'] >= 75 && $data['final'] <= 1000 ? 'text-success font-weight-bold' : 'text-danger font-weight-bold') . '" >' . $data['final'] . '</td>
                                                                <td class="' . (isset($data['gwa']) && $data['gwa'] >= 75 && $data['gwa'] <= 1000 ? 'text-success font-weight-bold' : 'text-danger font-weight-bold') . '" >' . $data['gwa'] . '</td>
                                                            </tr>';
                                                                    // You can output other columns as needed
                                                                }
                                                            } else {
                                                                echo '<tr>
    <td colspan="8" class=" text-center">Not graded yet !</td>
</tr>';
                                                            }

                                                            // Close connection
                                                            $conn->close();




                                                            ?>


                                                        </tbody>
                                                    </table>
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