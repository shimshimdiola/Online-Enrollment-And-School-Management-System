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

                  <h4 class="page-title">System Log admin</h4>
                </div>
                <div class="row">
                  <div class="col-12">
                    <!-- <div class="button-items mb-2">
                      <button type="button" class="btn btn-primary waves-effect waves-light"><i class="fas fa-user-graduate mr-2"></i>Student</button>
                      <button type="button" class="btn btn-primary waves-effect waves-light"><i class="fas fa-user-tie mr-2"></i>Teacher</button>
                      <button type="button" class="btn btn-primary waves-effect waves-light float-right"><i class="fas fa-user-plus mr-2"></i>Add</button>
                    </div> -->
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
                              <th>Office</th>
                              <th>Age</th>
                              <th>Start date</th>
                              <th>Salary</th>
                            </tr>
                          </thead>
                          <tbody>

                            <?php
                            for ($i = 0; $i < 10; $i++) {
                              echo '   <tr>
                              <td>Tiger Nixon</td>
                              <td>System Architect</td>
                              <td>Edinburgh</td>
                              <td>61</td>
                              <td>2011/04/25</td>
                              <td>$320,800</td>
                            </tr>';
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