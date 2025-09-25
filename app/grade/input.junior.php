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
    </div>
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
                                                <button class="btn btn-primary mb-2 float-"><i class=" fas fa-print"></i></button>

                                                <div class="table-responsive">
                                                    <table id="datatable" class="table table-bordered mb-0 table-centered text-capitalize" style="border-collapse: collapse; border-spacing: 0px; width: 100%;">
                                                        <thead>
                                                            <tr>
                                                                <th>ID#</th>
                                                                <th>Subject</th>
                                                                <th>Name</th>
                                                                <th style=" width:100px">1st</th>
                                                                <th style=" width:100px">2nd</th>
                                                                <th class="bg-warning">Avg.</th>
                                                                <th style=" width:100px">3rd</th>
                                                                <th style=" width:100px">4rth</th>
                                                                <th class="bg-warning">Avg.</th>
                                                                <th class="bg-success">Gen Avg.</th>


                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            // Assuming $conn is your database connection object

                                                            // Sanitize and validate $userid before using it in the query

                                                            $query = "SELECT DISTINCT tbl_load_data.*, tbl_std_enroll.*, tbl_user.*, tbl_std_data.*
    FROM tbl_load_data
    JOIN tbl_std_enroll ON tbl_std_enroll.secuid = tbl_load_data.secuid
    JOIN tbl_user ON tbl_user.userid = tbl_std_enroll.userid
    JOIN tbl_std_data ON tbl_std_data.userid = tbl_std_enroll.userid
    WHERE tbl_load_data.facuid = '$userid' ";

                                                            $result = $conn->query($query);

                                                            if ($result === false) {
                                                                echo "Error executing query: " . $conn->error;
                                                            } else {
                                                                if ($result->num_rows > 0) {
                                                                    while ($data = $result->fetch_assoc()) {
                                                                        $uid = $data['userid'];
                                                                        $loaduid = $data['loaduid'];
                                                                        // Assuming $userid is the correct variable for fetching grade data
                                                                        $gradeQuery = "SELECT * FROM tbl_grade_data WHERE userid = '$uid' AND subuid = '$loaduid'";
                                                                        $gradeResult = $conn->query($gradeQuery);
                                                                        $gradeData = $gradeResult->fetch_assoc();
                                                                        $first = isset($gradeData['first']) ? $gradeData['first'] : '0';
                                                                        $second = isset($gradeData['second']) ? $gradeData['second'] : '0';
                                                                        $midterm = isset($gradeData['midterm']) ? $gradeData['midterm'] : '--';
                                                                        $third = isset($gradeData['third']) ? $gradeData['third'] : '0';
                                                                        $fourth = isset($gradeData['fourth']) ? $gradeData['fourth'] : '0';
                                                                        $final = isset($gradeData['final']) ? $gradeData['final'] : '--';
                                                                        $gwa = isset($gradeData['gwa']) ? $gradeData['gwa'] : '--';

                                                                        echo '<tr>
                <td>2022-2023</td>
                <td>' . $data['sub'] . '</td>
                <td>' . $data['fullname'] . '</td>
                <td><input class="form-control" type="text" value="' . $first . '" name="input1" id="input1_' . $data['userid'] . $data['loaduid'] . '" oninput="G_m(' . $data['userid'] . ',\'' . $data['loaduid'] . '\')"></td>
                <td><input class="form-control" type="text" value="' . $second . '" name="input2" id="input2_' . $data['userid'] . $data['loaduid'] . '" oninput="G_m(' . $data['userid'] . ',\'' . $data['loaduid'] . '\')"></td>
                <td  id="result_m_' . $data['userid'] . $data['loaduid'] . '">' . $midterm . '</td>
                <td><input class="form-control" type="text" value="' . $third . '" name="input3" id="input3_' . $data['userid'] . $data['loaduid'] . '" oninput="G_m(' . $data['userid'] . ',\'' . $data['loaduid'] . '\')"></td>
                <td><input class="form-control" type="text" value="' . $fourth . '" name="input4" id="input4_' . $data['userid'] . $data['loaduid'] . '" oninput="G_m(' . $data['userid'] . ',\'' . $data['loaduid'] . '\')"></td>
                <td id="result_f_' . $data['userid'] . $data['loaduid'] . '">' . $final . '</td>
                <td id="result_g_' . $data['userid'] . $data['loaduid'] . '">' . $gwa . '</td>
            </tr>';
                                                                    }
                                                                } else {
                                                                    echo '<td class="text-center" colspan="9">-Empty-</td>';
                                                                }
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
    <script>
        function G_m(userid, subuid) {
            //  alert(userid + ' ' + subuid)
            var input1_m = parseFloat(document.getElementById('input1_' + userid + subuid).value) || 0;
            var input2_m = parseFloat(document.getElementById('input2_' + userid + subuid).value) || 0;
            var avg_m = (input1_m + input2_m) / 2;

            document.getElementById('result_m_' + userid + subuid).innerText = avg_m.toFixed(2); // Display average for males

            var input1_f = parseFloat(document.getElementById('input3_' + userid + subuid).value) || 0;
            var input2_f = parseFloat(document.getElementById('input4_' + userid + subuid).value) || 0;
            var avg_f = (input1_f + input2_f) / 2;
            document.getElementById('result_f_' + userid + subuid).innerText = avg_f.toFixed(2); // Display average for females

            var avg_g = (avg_m + avg_f) / 2;
            document.getElementById('result_g_' + userid + subuid).innerText = avg_g.toFixed(2); // Display average for females

            //  ajax


            $.ajax({
                url: "up.grade.php",
                type: "POST",
                data: {
                    subuid: subuid,
                    userid: userid,
                    fi_quarter: input1_m,
                    se_quarter: input2_m,
                    mi_avg: avg_m,
                    th_quarter: input1_f,
                    fo_quarter: input2_f,
                    fi_avg: avg_f,
                    gwa: avg_g
                },
                success: function(response) {
                    console.log(response)
                    // Swal.fire("Saved!", "", "success");
                    // setTimeout(function() {
                    //   window.location.reload();
                    // }, 1000);
                },
                error: function(xhr, status, error) {
                    Swal.fire("Error", "Failed to delete section", "error");
                    console.error(xhr.responseText);
                }



            });
        }
    </script>
</body>

</html>