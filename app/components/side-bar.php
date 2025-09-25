<div class="left side-menu"><button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect"><i class="ion-close"></i></button>
    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center bg-logo">
            <!-- <a href="index.html" class="logo"><i class="mdi mdi-bowling text-success"></i>
                Zoogler</a> -->
            <a href="<?php echo Root_dir ?>" class="logo"><img class="mb-2 mx-2" src="<?php echo Base_dir ?>assets/images/logo.png" height="34" alt="logo"><?php echo SYS_TITTLE ?></a>
        </div>
    </div>
    <div class="sidebar-user"><img src="<?php echo Base_dir ?>assets/images/users/avatar-6.jpg" alt="user" class="rounded-circle img-thumbnail mb-1">
        <h6 class="text-capitalize"><?php echo Sys_user ?></h6>
        <p class="online-icon text-dark"><i class="mdi mdi-record text-success"></i>online</p>
        <ul class="list-unstyled list-inline mb-0 mt-2">
            <li class="list-inline-item"><a href="<?php echo Url_dir . 'setting'; ?>" class="" data-toggle="tooltip" data-placement="top" title="Profile"><i class="dripicons-user text-purple"></i></a></li>
            <li class="list-inline-item"><a href="<?php echo Url_dir . 'setting'; ?>" class="" data-toggle="tooltip" data-placement="top" title="Settings"><i class="dripicons-gear text-dark"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void(0);" class="sa-params" data-toggle="tooltip" data-placement="top" title="Log out" id="sa-params"><i class="dripicons-power text-danger"></i></a></li>
        </ul>
    </div>
    <div class="sidebar-inner slimscrollleft">
        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>
                <li><a href="<?php echo Url_dir . 'dashboard'; ?>" class="waves-effect  <?php echo $Active_Dashboard ?>"><i class="dripicons-device-desktop"></i>
                        <span>Dashboard </span></a>
                </li>
                <li><a href="<?php echo Url_dir . 'master list'; ?>" class="waves-effect  <?php echo $Active_Master_List ?>"><i class="dripicons-to-do"></i><span>
                            Master List</span></a></li>
                <li class="menu-title">Management </li>
                <li><a href="<?php echo Url_dir . 'S-A-L'; ?>" class="waves-effect  <?php echo $admin_active_sal ?>"><i class="fas fa-user-clock"></i><span>
                            Schedules and Loads</span></a></li>
                <li class="menu-title">Registration </li>
                <li><a href="<?php echo Url_dir . 'admission'; ?>" class="waves-effect  <?php echo $Admission_active ?>"><i class="fas fa-user-tag"></i><span>
                            Admission</span></a></li>
                <li><a href="<?php echo Url_dir . 'registration'; ?>" class="waves-effect  <?php echo $Reg_active ?>"><i class="fas fa-registered"></i><span>
                            Registration</span></a></li>

                <li class="menu-title">Administration</li>
                <li><a href="<?php echo Url_dir . 'management'; ?>" class="waves-effect  <?php echo $Active_Management ?>"><i class="fas fa-user-shield"></i><span>
                            User Management</span></a></li>
                <!-- <li><a href="<?php echo Url_dir . 'log'; ?>" class="waves-effect  <?php echo $Active_Log ?>"><i class="fas fas fa-shoe-prints"></i><span>
                            System Log</span></a></li> -->


            </ul>
        </div>
        <div class="clearfix"></div>
    </div><!-- end sidebarinner -->
</div>