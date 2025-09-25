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
        include_once Components_dir . Side_bar;
        ?>
        <!-- Left Sidebar End -->
        <!-- Start right Content here -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <!-- Top Bar Start -->
                <?php
                include_once Components_dir . Top_bar;
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
                                    <h4 class="page-title">Dashboard registrar</h4>

                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="icon-contain">
                                                    <div class="row">
                                                        <div class="col-2 align-self-center"><i class="fas fa-folder-plus text-gradient-success"></i></div>
                                                        <div class="col-10 text-right">
                                                            <h5 class="mt-0 mb-1" id="admission">0</h5>
                                                            <p class="mb-0 font-12 text-muted">Addmission</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card">
                                            <div class="card-body justify-content-center">
                                                <div class="icon-contain">
                                                    <div class="row">
                                                        <div class="col-2 align-self-center"><i class="fas fa-folder text-gradient-danger"></i></div>
                                                        <div class="col-10 text-right">
                                                            <h5 class="mt-0 mb-1" id="ad_e">0</h5>
                                                            <p class="mb-0 font-12 text-muted">Registration</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="icon-contain">
                                                    <div class="row">
                                                        <div class="col-2 align-self-center"><i class="fas fa-users text-gradient-primary"></i></div>
                                                        <div class="col-10 text-right">
                                                            <h5 class="mt-0 mb-1" id="m_ale">0</h5>
                                                            <p class="mb-0 font-12 text-muted">No. male students</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="icon-contain">
                                                    <div class="row">
                                                        <div class="col-2 align-self-center"><i class="fas fa-users text-pink"></i></div>
                                                        <div class="col-10 text-right">
                                                            <h5 class="mt-0 mb-1" id="f_ale">0</h5>
                                                            <p class="mb-0 font-12 text-muted">No. female Students</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="icon-contain">
                                                    <div class="row">
                                                        <div class="col-2 align-self-center"><i class="fas fa-user-graduate text-pink"></i></div>
                                                        <div class="col-10 text-right">
                                                            <h5 class="mt-0 mb-1" id="totalStudents">0</h5>
                                                            <p class="mb-0 font-12 text-muted">Enrolled students</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-12 ">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Number of section</h4>
                                            <p class="text-muted mb-4 font-13 d-inline-block text-truncate w-100">Number of section: A bar chart is a way of showing data as bars.</p>

                                            <canvas id="bar-data_r" height="90"></canvas>
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
    include_once Components_dir . 'scripts.php';
    ?>
    <script>
        $(document).ready(function() {
            // AJAX request to get data count
            $.ajax({
                url: 'std_enr.php',
                type: 'GET',
                success: function(response) {
                    $('#totalStudents').text(response);
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching data:', error);
                    $('#totalStudents').text('Error fetching data');
                }
            });
            $.ajax({
                url: 'reg.php', // Replace with your server-side script URL
                type: 'GET', // Change to GET method
                success: function(response) {
                    // Handle success response
                    $('#admission').text(response);
                    // const text = node.textContent;
                },
                error: function(xhr, status, error) {
                    // Handle error
                    console.error(xhr.responseText);
                    // Optionally, display an error message or perform other actions
                }
            });
            $.ajax({
                url: 'ad.php', // Replace with your server-side script URL
                type: 'GET', // Change to GET method
                success: function(response) {
                    // Handle success response
                    $('#ad_e').text(response);
                    // const text = node.textContent;
                },
                error: function(xhr, status, error) {
                    // Handle error
                    console.error(xhr.responseText);
                    // Optionally, display an error message or perform other actions
                }
            });
            $.ajax({
                url: 'male.php', // Replace with your server-side script URL
                type: 'GET', // Change to GET method
                success: function(response) {
                    // Handle success response
                    $('#m_ale').text(response);
                    // const text = node.textContent;
                },
                error: function(xhr, status, error) {
                    // Handle error
                    console.error(xhr.responseText);
                    // Optionally, display an error message or perform other actions
                }
            });
            $.ajax({
                url: 'female.php', // Replace with your server-side script URL
                type: 'GET', // Change to GET method
                success: function(response) {
                    // Handle success response
                    $('#f_ale').text(response);
                    // const text = node.textContent;
                },
                error: function(xhr, status, error) {
                    // Handle error
                    console.error(xhr.responseText);
                    // Optionally, display an error message or perform other actions
                }
            });
        });


        // Function to fetch data using AJAX
        function fetchData() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var data = JSON.parse(this.responseText);
                    updateChart(data);
                }
            };
            xhttp.open("GET", "r.data.php", true);
            xhttp.send();
        }

        // Function to update chart with fetched data
        function updateChart(data) {
            // Update chart data
            myChart.data.datasets[0].data = data;
            myChart.update();
        }

        // Chart initialization
        var gradientStroke12 = document.getElementById("bar-data_r").getContext("2d").createLinearGradient(0, 0, 0, 300);
        gradientStroke12.addColorStop(0, "#5ecbf6");
        gradientStroke12.addColorStop(1, "#8d44ad");

        var myChart = new Chart(document.getElementById("bar-data_r"), {
            type: "bar",
            data: {
                labels: ['Grade7', 'Grade8', 'Grade9', 'Grade10', 'Grade11', 'Grade12'],
                datasets: [{
                    label: "No. of section",
                    data: [], // Data will be populated dynamically
                    borderColor: gradientStroke12,
                    backgroundColor: gradientStroke12,
                    hoverBackgroundColor: gradientStroke12,
                    pointRadius: 0,
                    fill: true,
                    borderWidth: 0,
                }],
            },
            options: {
                legend: {
                    position: "bottom",
                    display: true,
                    labels: {
                        boxWidth: 12
                    }
                },
                tooltips: {
                    displayColors: true,
                    intersect: true
                },
                scales: {
                    xAxes: [{
                        ticks: {
                            max: 100,
                            min: 20,
                            stepSize: 10
                        },
                        gridLines: {
                            display: true,
                            color: "#FFFFFF"
                        },
                        ticks: {
                            display: true,
                            fontFamily: "'Rubik', sans-serif"
                        },
                    }],
                    yAxes: [{
                        gridLines: {
                            color: "#fff",
                            display: true
                        },
                        ticks: {
                            display: true,
                            fontFamily: "'Rubik', sans-serif"
                        },
                    }],
                },
            },
        });

        // Fetch data initially
        fetchData();
    </script>
</body>

</html>