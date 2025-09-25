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
                      <li class="breadcrumb-item"><a href="#">Management </a></li>
                      <!-- <li class="breadcrumb-item active">Starter</li> -->
                    </ol>
                  </div>

                  <h4 class="page-title">Account Management admin </h4>
                </div>
                <div class="row">
                  <div class="col-12">

                    <?php
                    include_once './user.add.php';
                    ?>
                    <div class="button-items mb-2">
                      <?php
                      require_once './sort.manage.php';
                      ?>
                      <i class="fas fa-user-plus mr-2"></i>Add
                      </button>
                    </div>
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
                              <th>Position</th>
                              <th style="width: 20px;">Username / ID Number</th>
                              <th style="width: 20px;">Password</th>
                              <th>Date registered</th>
                              <th style="width: 20px;">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php

                            $sql = 'SELECT * FROM tbl_user';

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
                              // echo $data['fullname'];
                              echo ' <tr>
                              <td class=" text-capitalize" >' . $data['fullname'] . '</td>
                              <td class=" text-capitalize">' . $data['utype'] . '</td>
                              <td class=" text-capitalize"><strong>' . $data['username'] . '</strong></td>
                              <td class=" text-capitalize"><strong>' . $data['password'] . '</strong></td>
                              <td>' . $data['time'] . '</td>
                              <td>
                                <div class="btn-group btn-group-toggle">
                                  <button class="btn btn-info waves-effect waves-light"> Edit</button>
                                  <button class="btn btn-danger waves-effect waves-light"> Delete</button>
                                </div>
                              </td>
                            </tr>';
                            }






                            for ($i = 0; $i < 2; $i++) {
                              echo '';
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