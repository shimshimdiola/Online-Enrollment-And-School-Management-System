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

                                    <h4 class="page-title">Profile / Setting admin </h4>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card">
                                                <div class="card-body">
                                                    <form class="" action="#">
                                                        <h4 class="mt-0 header-title">Update profile <i class="fas fa-user-tie"></i> </h4>
                                                        <p class="text-muted mb-4 font-13">
                                                            Use this form to update your profile information. You can add a default value to make the process quicker.
                                                        </p>

                                                        <div class="form-group">
                                                            <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="<?php echo Base_dir ?>assets/images/users/avatar-6.jpg" />

                                                        </div>
                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="Name" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>E-Mail</label>
                                                            <div>
                                                                <input type="email" class="form-control" placeholder="Enter a valid e-mail" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Position</label>
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="Position" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Administrative role</label>
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="Administrative role" value="Administrator / Staff " />
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-0">
                                                            <div>
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                                    Update profile
                                                                </button>
                                                                <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                                    Cancel
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="mt-0 header-title">Change password <i class="fas fa-lock"></i></h4>
                                                    <p class="text-muted mb-4 font-13">
                                                        Use this form to change your password securely. Make sure to choose a strong password to protect your account.
                                                    </p>

                                                    <form class="" action="#">
                                                        <!-- <div class="form-group">
                                                            <label>Required</label>
                                                            <input type="text" class="form-control" required placeholder="Type something" />
                                                        </div> -->
                                                        <div class="form-group">
                                                            <label>Current password</label>
                                                            <div>
                                                                <input type="password" id="pass2" class="form-control" required placeholder="Current password" />
                                                            </div>

                                                        </div>
                                                        <div class="form-group">
                                                            <label>New password</label>
                                                            <div>
                                                                <input type="password" id="pass2" class="form-control" required placeholder="Password" />
                                                            </div>
                                                            <div class="m-t-10">
                                                                <input type="password" class="form-control" required data-parsley-equalto="#pass2" placeholder="Re-Type Password" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-0">
                                                            <div>
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                                    Change password
                                                                </button>
                                                                <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                                    Cancel
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
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