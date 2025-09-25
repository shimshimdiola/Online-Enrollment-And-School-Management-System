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
                                                    <table class="table table-bordered mb-0 table-centered">
                                                        <thead>
                                                            <tr>
                                                                <th>Subject</th>
                                                                <th>midterm</th>
                                                                <th>final</th>
                                                                <th class="bg-success">Gen avg.</th>


                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $sub = array('english', 'math', 'science', 'english', 'fill');
                                                            $count_sub = count($sub);
                                                            for ($i = 0; $i < $count_sub; $i++) {
                                                                echo '
                                                            <tr>
                                                                <td>' . $sub[$i] . '</td>
                                                                <td>89</td>
                                                                <td>90</td>
                                                                <td>--</td>
                                                               
                                                            </tr>
       ';
                                                            }
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