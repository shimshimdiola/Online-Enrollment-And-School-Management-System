<?php

?>

<?php
session_start();
$current_file = basename($_SERVER['PHP_SELF']);
if ($current_file == 's.php') {
    define('ADMIN_ACTIVE_SAL', 'active');
}
$admin_active_sal = defined('ADMIN_ACTIVE_SAL') ? ADMIN_ACTIVE_SAL : '';
require_once '../conf/conf.php';


$sal_s = $_GET['s'];
?>
<!DOCTYPE html>
<html lang="en">

<?php
include_once Components_dir . 'header.php'
?>
<!--  -->

<body class="fixed-left">
    <!-- Loader -->
    <!-- <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div> -->
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
                                            <li class="breadcrumb-item"><a href="#">Schedule & Loads</a></li>
                                            <!-- <li class="breadcrumb-item active">Starter</li> -->
                                        </ol>
                                    </div>

                                    <h4 class="page-title">Schedule / Loads - Registrar/Admin </h4>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <?php
                                        include_once './add.section.php';
                                        ?>
                                        <div class="button-items mb-2">
                                            <?php
                                            require_once './sal.sort.php';
                                            ?>
                                            <!-- <button type="button" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-account mr-2"></i>Primary</button> -->
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <button type="button" class="btn btn-success waves-effect waves-light float-right" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg" onclick="Add_sec(<?php echo $sal_s ?>)">
                                                    Add Section
                                                </button>
                                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="
                          border-collapse: collapse;
                          border-spacing: 0;
                          width: 100%;
                        ">
                                                    <thead>
                                                        <tr>
                                                            <th>Sestion</th>
                                                            <th>Advicer</th>

                                                            <th>Male</th>
                                                            <th>Female</th>
                                                            <th>Total Students</th>
                                                            <th>Load</th>

                                                            <th style="width: 30px;">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php



                                                        $sql = "SELECT * FROM tbl_sec_data WHERE secgrade = $sal_s ";

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
                                                            // This will give you the count of male genders
                                                            $secuid = $data['secuid'];

                                                            // Count male students
                                                            $countMale = "SELECT COUNT(*) as male_count
    FROM tbl_sec_data
    JOIN tbl_std_enroll ON tbl_sec_data.secuid = tbl_std_enroll.secuid
    JOIN tbl_std_data ON tbl_std_enroll.userid = tbl_std_data.userid
    WHERE tbl_sec_data.secuid = $secuid
    AND tbl_std_data.sex = 'male'";

                                                            $dataCountMale = $conn->query($countMale);
                                                            $countMaleResult = $dataCountMale->fetch_assoc();

                                                            // Count female students
                                                            $countFemale = "SELECT COUNT(*) as female_count
    FROM tbl_sec_data
    JOIN tbl_std_enroll ON tbl_sec_data.secuid = tbl_std_enroll.secuid
    JOIN tbl_std_data ON tbl_std_enroll.userid = tbl_std_data.userid
    WHERE tbl_sec_data.secuid = $secuid
    AND tbl_std_data.sex = 'female'";

                                                            $dataCountFemale = $conn->query($countFemale);
                                                            $countFemaleResult = $dataCountFemale->fetch_assoc();





                                                            echo '<tr>
                             <td class=" text-capitalize" >' . $data['secname'] . '</td>
                              <td class=" text-capitalize" >' . $data['secadvicer'] . '</td>
                              <td id="male_id_' . $data['id'] . '">' . $countMaleResult['male_count'] . '</td>
                              <td id="female_id_' . $data['id'] . '">' . $countFemaleResult['female_count'] . '</td>
                              <td id="all_id_' . $data['id'] . '"></td>
                              <td>
                                                         <a class="btn btn-info waves-effect waves-light" href="./sal.load.php?s=' . $data['secname'] . '&g=' . $data['secgrade'] . '&uid=' . $data['secuid'] . '">Add</a>

                              </td>
                              <td>
                                <div class="btn-group btn-group-toggle">
                                 <button class="btn btn-info waves-effect waves-light"> Edit</button>
                                                                 <button class="btn btn-danger waves-effect waves-light" onclick="R_uid(' . $data['secuid'] . ')"> Delete</button>

                                </div>
                              </td>
                            </tr>
                            
                                       <script>
                                                            male = parseFloat(document.getElementById("male_id_' . $data['id'] . '").textContent);
                                                            female = parseFloat(document.getElementById("female_id_' . $data['id'] . '").textContent);
                                                            all_id_ = document.getElementById("all_id_' . $data['id'] . '").textContent = male + female;

                                                        </script>
                            ';
                                                        }


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