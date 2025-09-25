<?php
session_start();
$current_file = basename($_SERVER['PHP_SELF']);
if ($current_file == 'sal.load.php') {
    define('ADMIN_ACTIVE_SAL', 'active');
}
$admin_active_sal = defined('ADMIN_ACTIVE_SAL') ? ADMIN_ACTIVE_SAL : '';
require_once '../conf/conf.php';

$sec = $_GET['s'];
$grade = $_GET['g'];
$secuid = $_GET['uid'];

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
                                            <li class="breadcrumb-item"><a href="#">Schedule & Loads </a></li>
                                            <li class="breadcrumb-item"><a href="#">Loads </a></li>
                                            <!-- <li class="breadcrumb-item active">Starter</li> -->
                                        </ol>
                                    </div>
                                    <h4 class="page-title">
                                        <a href="javascript:history.go(-1)" class="  btn  btn-round waves-effect waves-light"><i class="fas fa-chevron-left "></i></a>

                                        <strong class=" text-uppercase"> <?php
                                                                            echo $grade . ' ' . $sec
                                                                            ?></strong>
                                    </h4>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <?php
                                        include_once './add.section.php';
                                        ?>

                                        <div class=" card">
                                            <div class="card-body">

                                                <div class="row">

                                                    <div class="col-md-5">
                                                        <form id="loadForm" action="#" novalidate="">
                                                            <input value="<?php echo $secuid ?>" name="" id="secuid" style=" display:none">

                                                            <div class="form-group">
                                                                <label>Subject</label>
                                                                <select class="form-control" required id="selectOptions1">
                                                                    <option value="">Select an option</option>
                                                                    <?php
                                                                    // Assume $conn is your database connection

                                                                    $sql = "SELECT * FROM tbl_sub_data WHERE  subg = '$grade'";

                                                                    // Prepare the statement
                                                                    $stmt = mysqli_prepare($conn, $sql);

                                                                    // Check for errors in preparing the statement
                                                                    if (!$stmt) {
                                                                        throw new Exception('Query preparation failed: ' . mysqli_error($conn));
                                                                    }

                                                                    // Execute the statement
                                                                    mysqli_stmt_execute($stmt);

                                                                    // Get the result
                                                                    $result = mysqli_stmt_get_result($stmt);

                                                                    // Check for errors in getting the result
                                                                    if (!$result) {
                                                                        throw new Exception('Query failed: ' . mysqli_error($conn));
                                                                    }

                                                                    // Fetch the data
                                                                    while ($data = mysqli_fetch_assoc($result)) {
                                                                        echo '<option value="' . htmlspecialchars($data['sub'] . '/' . $data['subuid']) . '">' . htmlspecialchars($data['sub']) . '</option>';
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Teacher</label>
                                                                <select class="form-control" required id="selectOptions">
                                                                    <option value="">Select an option</option>
                                                                    <?php
                                                                    // Assume $conn is your database connection

                                                                    $sql = "SELECT * FROM tbl_user WHERE utype = 'faculty' AND grade = '$grade'";

                                                                    // Prepare the statement
                                                                    $stmt = mysqli_prepare($conn, $sql);

                                                                    // Check for errors in preparing the statement
                                                                    if (!$stmt) {
                                                                        throw new Exception('Query preparation failed: ' . mysqli_error($conn));
                                                                    }

                                                                    // Execute the statement
                                                                    mysqli_stmt_execute($stmt);

                                                                    // Get the result
                                                                    $result = mysqli_stmt_get_result($stmt);

                                                                    // Check for errors in getting the result
                                                                    if (!$result) {
                                                                        throw new Exception('Query failed: ' . mysqli_error($conn));
                                                                    }

                                                                    // Fetch the data
                                                                    while ($data = mysqli_fetch_assoc($result)) {
                                                                        echo '<option value="' . htmlspecialchars($data['fullname'] . '/' . $data['userid']) . '">' . htmlspecialchars($data['fullname']) . '</option>';
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="form-group col-6">
                                                                    <label>Class start</label>

                                                                    <input class=" form-control " required type="time" name="" id="cstart">
                                                                </div>
                                                                <div class="form-group col-6">
                                                                    <label>Class end</label>

                                                                    <input class=" form-control " required type="time" name="" id="cend">
                                                                </div>

                                                            </div>


                                                            <table class="table table-bordered  table-centered ">
                                                                <thead>
                                                                    <tr>
                                                                        <th>MON</th>
                                                                        <th>TUE</th>
                                                                        <th>WED</th>
                                                                        <th>THU</th>
                                                                        <th>FRI</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <input type="checkbox" name="select1" id="select1" style="width: 20px; height: 20px; border: 1px solid #ccc; border-radius: 3px; outline: none;">
                                                                        </td>
                                                                        <td>
                                                                            <input type="checkbox" name="select2" id="select2" style="width: 20px; height: 20px; border: 1px solid #ccc; border-radius: 3px; outline: none;">
                                                                        </td>
                                                                        <td>
                                                                            <input type="checkbox" name="select3" id="select3" style="width: 20px; height: 20px; border: 1px solid #ccc; border-radius: 3px; outline: none;">
                                                                        </td>
                                                                        <td>
                                                                            <input type="checkbox" name="select4" id="select4" style="width: 20px; height: 20px; border: 1px solid #ccc; border-radius: 3px; outline: none;">
                                                                        </td>
                                                                        <td>
                                                                            <input type="checkbox" name="select5" id="select5" style="width: 20px; height: 20px; border: 1px solid #ccc; border-radius: 3px; outline: none;">
                                                                        </td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>

                                                            <div class="form-group mb-0">
                                                                <div>
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                                        Submit
                                                                    </button>
                                                                    <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                                        Cancel
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="col-md-7 border-left ">
                                                        <div class="table-responsive ">
                                                            <table class="table table-bordered nowrap ">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Subject</th>
                                                                        <th>Time</th>
                                                                        <th>Day</th>
                                                                        <th>Teacher</th>
                                                                        <th style="width: 20px;">Remove</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>




                                                                    <?php


                                                                    // SQL query to select data
                                                                    $sql = "SELECT * FROM tbl_load_data WHERE secuid = $secuid";
                                                                    $result = $conn->query($sql);

                                                                    if ($result->num_rows > 0) {
                                                                        // Output data of each row
                                                                        while ($data = $result->fetch_assoc()) {
                                                                            echo ' <tr>
                                                                        <td class=" text-capitalize">' . $data['sub'] . '</td>
                                                                        <td>' . $data['cstart'] . ' - ' . $data['cend'] . '</td>
                                                                        <td class=" text-capitalize">' . $data['days'] . '</td>
                                                                        <td class=" text-capitalize"> ' . $data['fac'] . ' </td>

                                                                        <td>
                                                                        <button class="btn btn-danger" onclick="Load_r(' . $data['loaduid'] . ')">Delete</button>
                                                                        </td>
                                                                    </tr>';
                                                                        }
                                                                    } else {
                                                                        // echo "0 results";
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