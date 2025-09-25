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
        <h6 class=" text-capitalize "><?php echo Sys_user ?></h6>
        <p class="online-icon text-dark"><i class="mdi mdi-record text-success"></i>online</p>
        <ul class="list-unstyled list-inline mb-0 mt-2">
            <li class="list-inline-item"><a href="<?php echo Url_dir . 'e.form'; ?>" class="" data-toggle="tooltip" data-placement="top" title="Enrollment form"><i class="dripicons-document text-primary"></i></a></li>
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
                <li><a href="<?php echo Url_dir . 'schedule'; ?>" class="waves-effect  <?php echo $std_schedule_active ?>"><i class="dripicons-to-do"></i><span>
                            Class shedule</span></a></li>

                <li><a href="<?php echo Url_dir . 'grade'; ?>" class="waves-effect  <?php echo $Active_grade ?>"><i class="dripicons-blog"></i>
                        <span>Grade reports </span></a>
                </li>
                <li class="menu-title">Files and Requirments</li>
                <li><a href="<?php echo Url_dir . 'documents'; ?>" class="waves-effect  <?php echo $Active_documents ?>"><i class="fas fa-file-alt"></i><span>
                            Documents</span></a>
                </li>
                <li class="menu-title">Notifications</li>
                <li><a href="<?php echo Url_dir . 'notif'; ?>" class="waves-effect  <?php echo $active_std_notif ?>"><i class="fab fa-facebook-messenger"></i><span>
                            Notification</span></a>


            </ul>
        </div>
        <div class="clearfix"></div>
    </div><!-- end sidebarinner -->
</div>