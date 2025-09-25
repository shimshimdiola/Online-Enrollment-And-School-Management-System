<?php
require_once '../conf/conf.php';
?>
<!DOCTYPE html>
<html lang="en">

<?php
include_once Components_dir . 'header.php';

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
                include_once MODAl_ENROLL;
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
                                            <li class="breadcrumb-item"><a href="#">Registration</a></li>
                                            <!-- <li class="breadcrumb-item active">Starter</li> -->
                                        </ol>
                                    </div>

                                    <h4 class="page-title">Registration / Enroll registrar </h4>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="button-items mb-2">

                                            <?php
                                            require_once './reg.std.sort.php';
                                            ?>
                                            <!-- <button type="button" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-account mr-2"></i>Primary</button> -->
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class=" table-responsive">
                                                    <table id="datatable" class="table table-bordered  table-responsive  nowrap" style="
                          border-collapse: collapse;
                          border-spacing: 0;
                          width: 100%;
                        ">
                                                        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Enrollee Type</th>
                                                                <th>Grade to Enroll</th>
                                                                <th>Enrollment Form</th>
                                                                <th>Form 137</th>
                                                                <th>Form 138</th>
                                                                <th>PSA</th>
                                                                <th>Goodmoral</th>

                                                                <th>Status</th>
                                                                <th style="width: 30px;">Action</th>
                                                            </tr>
                                                        </thead>





                                                        <tbody>
                                                            <?php
                                                            // Assuming $conn is your database connection

                                                            // Initialize $glvl if it's coming from somewhere

                                                            // Validate and sanitize $glvl to prevent SQL injection

                                                            // Write the SQL query with proper JOIN condition and using parameterized query
                                                            $sql = 'SELECT tbl_std_docu.*, tbl_std_reg.*, tbl_std_data.* 
            FROM tbl_std_reg 
            INNER JOIN tbl_std_docu ON tbl_std_reg.userid = tbl_std_docu.userid 
            INNER JOIN tbl_std_data ON tbl_std_reg.userid = tbl_std_data.userid';

                                                            // Prepare the statement
                                                            $stmt = mysqli_prepare($conn, $sql);

                                                            // Check for errors in preparing the statement
                                                            if (!$stmt) {
                                                                die('Query preparation failed: ' . mysqli_error($conn));
                                                            }

                                                            // Execute the statement
                                                            mysqli_stmt_execute($stmt);

                                                            // Get the result
                                                            $result = mysqli_stmt_get_result($stmt);

                                                            // Check for errors in getting the result
                                                            if (!$result) {
                                                                die('Query failed: ' . mysqli_error($conn));
                                                            }

                                                            // Fetch the data
                                                            while ($data = mysqli_fetch_assoc($result)) {
                                                                // Process your data here
                                                                $full_n = $data['lname'] . ', ' . $data['fname'] . ' ' . $data['mname'][0] . '.';
                                                                $birth_year = substr($data['bdate'], 0, 4);
                                                                $current_year = date('Y');
                                                                $age = $current_year - $birth_year;
                                                                $userid = $data['userid'];



                                                                $sql_f = "SELECT * FROM tbl_std_enroll WHERE userid = ?";
                                                                $stmt = mysqli_prepare($conn, $sql_f);
                                                                mysqli_stmt_bind_param($stmt, "i", $userid);
                                                                mysqli_stmt_execute($stmt);
                                                                $result_f = mysqli_stmt_get_result($stmt);

                                                                // Check for errors
                                                                if (!$result_f) {
                                                                    die('Query failed: ' . mysqli_error($conn));
                                                                }

                                                                // Fetch data from the second query
                                                                $num_rows = mysqli_num_rows($result_f);


                                                                if ($num_rows == 0) {
                                                                    echo '<tr>
    <td class="text-capitalize">' . $full_n . '</td>
    <td class="text-capitalize">' . $data['etype'] . '</td>
    <td>' . $data['genroll'] . '</td>
    <td><a href="' . DOCU_PICK . $data['eform'] . '" target="_blank" > ' . (empty($data['eform']) ? '<i class="fas fa-times-circle fa-times text-danger"></i> Pending...' : '<i class="fas fa-check-circle text-success"></i> ' . $data['eform']) . ' </a></td>
    <td><a href="' . DOCU_PICK . $data['f137'] . '" target="_blank" >' . (empty($data['f137']) ? '<i class="fas fa-times-circle fa-times text-danger"></i> Pending...' : '<i class="fas fa-check-circle text-success"></i> ' . $data['f137']) . ' </a></td>
    <td><a href="' . DOCU_PICK . $data['f138'] . '" target="_blank" >' . (empty($data['f138']) ? '<i class="fas fa-times-circle fa-times text-danger"></i> Pending...' : '<i class="fas fa-check-circle text-success"></i> ' . $data['f138']) . ' </a></td>
    <td><a href="' . DOCU_PICK . $data['psa'] . '" target="_blank" >' . (empty($data['psa']) ? '<i class="fas fa-times-circle fa-times text-danger"></i> Pending...' : '<i class="fas fa-check-circle text-success"></i> ' . $data['psa']) . ' </a></td>
    <td><a href="' . DOCU_PICK . $data['gmoral'] . '" target="_blank" >' . (empty($data['gmoral']) ? '<i class="fas fa-times-circle fa-times text-danger"></i> Pending...' : '<i class="fas fa-check-circle text-success"></i> ' . $data['gmoral']) . ' </a></td>
   
    <td>' . (empty($data['eform']) || empty($data['f137']) || empty($data['f138']) || empty($data['psa']) || empty($data['gmoral']) ? '<span class="badge badge-boxed badge-danger">Waiting...</span>' : '<span class="badge badge-boxed badge-success">Ready for submission</span>') . '</td>
    <td>' . (empty($data['eform']) || empty($data['f137']) || empty($data['f138']) || empty($data['psa']) || empty($data['gmoral']) ? '<button type="button" class="btn btn-danger waves-effect waves-light" disabled data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">Enroll</button>' : '<button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg" onclick="Reg_id(' . $data['userid'] . ', \'' . $full_n . '\', \'' . $data['genroll'] . '\')">Enroll</button>') . '</td>
</tr>';
                                                                }





                                                                // Display the data or perform further processing

                                                            }

                                                            // Close the statement
                                                            mysqli_stmt_close($stmt);

                                                            // Close the connection
                                                            mysqli_close($conn);
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