<?php
$current_file = basename($_SERVER['PHP_SELF']);
if ($current_file == 's.admission.php') {
    define('ADMISSION_ACTIVE', 'active');
}
$Admission_active = defined('ADMISSION_ACTIVE') ? ADMISSION_ACTIVE : '';
$glvl = $_GET['_g'];
if (empty($glvl) && !isset($glvl)) {
    header('location:./');
}
?>


<?php
session_start();
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
                                            <li class="breadcrumb-item"><a href="#">Addmission</a></li>
                                            <!-- <li class="breadcrumb-item active">Starter</li> -->
                                        </ol>
                                    </div>

                                    <h4 class="page-title">Admission List registrar </h4>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <?php

                                        require_once './sort.php';
                                        // require_once './modal.admint.php';
                                        ?>
                                        <div class="card">

                                            <div class="card-body">

                                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="
                          border-collapse: collapse;
                          border-spacing: 0;
                          width: 100%;
                        ">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Age</th>
                                                            <th>Enrollee Type</th>
                                                            <th>Grade To Enroll</th>
                                                            <th>Date Register</th>
                                                            <th style="width: 30px;">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        // Assuming $conn is your database connection

                                                        // Write the SQL query with proper JOIN condition
                                                        $sql = 'SELECT tbl_std_docu.*, tbl_std_data.* 
        FROM tbl_std_docu 
        INNER JOIN tbl_std_data ON tbl_std_docu.userid = tbl_std_data.userid 
        WHERE tbl_std_data.genroll = ?';

                                                        // Prepare the statement
                                                        $stmt = mysqli_prepare($conn, $sql);

                                                        // Bind the parameter and execute the statement
                                                        mysqli_stmt_bind_param($stmt, "i", $glvl); // Assuming userid is an integer, adjust "i" if it's a different data type
                                                        mysqli_stmt_execute($stmt);

                                                        // Get the result
                                                        $result = mysqli_stmt_get_result($stmt);

                                                        // Check for errors
                                                        if (!$result) {
                                                            die('Query failed: ' . mysqli_error($conn));
                                                        }

                                                        // Fetch the data
                                                        while ($data = mysqli_fetch_assoc($result)) {
                                                            $user_id = $data['userid'];

                                                            // Use prepared statements to prevent SQL injection
                                                            $sql_f = "SELECT * FROM tbl_std_reg WHERE userid = ?";
                                                            $stmt = mysqli_prepare($conn, $sql_f);
                                                            mysqli_stmt_bind_param($stmt, "i", $user_id);
                                                            mysqli_stmt_execute($stmt);
                                                            $result_f = mysqli_stmt_get_result($stmt);

                                                            // Check for errors
                                                            if (!$result_f) {
                                                                die('Query failed: ' . mysqli_error($conn));
                                                            }

                                                            // Fetch data from the second query
                                                            $num_rows = mysqli_num_rows($result_f);

                                                            // If there are no matching user IDs in $sql_f, proceed to display the data
                                                            if ($num_rows == 0) {
                                                                $full_n = $data['lname'] . ', ' . $data['fname'] . ' ' . $data['mname'][0] . '.';
                                                                $birth_year = substr($data['bdate'], 0, 4);
                                                                $current_year = date('Y');
                                                                $age = $current_year - $birth_year;

                                                                echo '<tr>
                    <td class="text-capitalize">' . $full_n . '</td>
                    <td>' . $age . '</td>
                    <td>' . $data['etype'] . '</td>
                    <td>Grade ' . $data['genroll'] . '</td>
                    <td>' . $data['time'] . '</td>
                    <td>
                        <div class="btn-group btn-group-toggle">
                            <button type="button" class="btn btn-primary waves-effect waves-light" 
                            data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg" 
                            onclick="Admit_r(' . $user_id . ')">Admit</button>
                        </div>
                    </td>
                  </tr>';
                                                            }
                                                        }

                                                        // Close the statement and connection
                                                        mysqli_stmt_close($stmt);
                                                        mysqli_close($conn);
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