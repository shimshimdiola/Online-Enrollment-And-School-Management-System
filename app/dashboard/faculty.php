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
                                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                            <!-- <li class="breadcrumb-item active">Starter</li> -->
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Dashboard faculty</h4>
                                </div>





                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="icon-contain">
                                                    <div class="row">
                                                        <div class="col-2 align-self-center"><i class="fas fa-book text-primary"></i></div>
                                                        <div class="col-10 text-right">
                                                            <h5 class="mt-0 mb-1" id="sub_id">0</h5>
                                                            <p class="mb-0 font-12 text-muted">Subjects</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="card">
                                    <div class="card-body">
                                        <span class=" float-right text-secondary"> <strong><?php
                                                                                            echo date('W, l, Y'); // 'W' for week number, 'l' for full weekday name, 'Y' for the year in 4 digits
                                                                                            ?></strong></span>
                                        <h4 class="header-title">Class Schedule</h4>
                                        <p class="text-muted mb-4 font-13">Bellow is the class your class schedule.</p>

                                        <div class="table-responsive">
                                            <table id="datatable" class="table table-bordered mb-0 table-centered text-capitalize" style="border-collapse: collapse; border-spacing: 0px; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Subject</th>
                                                        <th>Time</th>
                                                        <th>Days</th>
                                                        <th>Section</th>

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php
                                                    // SQL query to select data
                                                    // $sql = "SELECT * FROM tbl_load_data WHERE facuid = '$userid'";


                                                    $sql = "SELECT tbl_load_data.*,tbl_sec_data.* 
        FROM tbl_load_data
        INNER JOIN tbl_sec_data ON tbl_load_data.secuid = tbl_sec_data.secuid
        WHERE tbl_load_data.facuid = '$userid'";

                                                    // Execute the query
                                                    $result = $conn->query($sql);

                                                    // Check if any rows were returned
                                                    if ($result->num_rows > 0) {
                                                        // Output data of each row
                                                        while ($data = $result->fetch_assoc()) {
                                                            echo  '       <tr>
                                                                    <td>' . $data['sub'] . '</td>
                                                                    <td>' . $data['cstart'] . ' - ' . $data['cend'] . '</td>
                                                                    <td>' . $data['days'] . '</td>
                                                                    <td>' . $data['secname'] . '</td>

                                                                </tr>';
                                                        }
                                                    } else {
                                                        echo '<tr><td colspan="4">0 results</td></tr>';
                                                    }

                                                    // Close the connection
                                                    $conn->close();
                                                    ?>



                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- end page title end breadcrumb -->
                    </div><!-- container -->
                </div><!-- Page content Wrapper -->
            </div><!-- content -->
            <?php
            require_once Components_dir . 'footer.php';
            ?>
        </div><!-- End Right content here -->
    </div><!-- END wrapper -->
    <!-- jQuery  -->
    <?php
    require_once Components_dir . 'scripts.php';
    ?>
    <script>
        $(document).ready(function() {
            $.ajax({
                url: 'sub.c.php',
                type: 'GET',
                success: function(response) {
                    $('#sub_id').text(0); // Start with 0
                    var endpoint = parseInt(response); // Parse the response to an integer
                    var count = 0; // Initialize the count variable with 0

                    var interval = setInterval(function() {
                        if (count <= endpoint) { // Use '<=' to include the endpoint value
                            console.log(count); // Print the count to the console
                            $('#sub_id').text(count); // Update the text with the current count value
                            count++; // Increment the count for the next iteration
                        } else {
                            clearInterval(interval); // Stop the interval when count reaches the endpoint
                        }
                    }, 120 / endpoint); // Adjust the interval dynamically based on the endpoint value
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching data:', error);
                    $('#totalStudents').text('Error fetching data');
                }
            });
        });
    </script>
</body>

</html>