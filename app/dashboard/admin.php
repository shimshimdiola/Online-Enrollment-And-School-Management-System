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
                                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                            <!-- <li class="breadcrumb-item active">Starter</li> -->
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Dashboard admin </h4>
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
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="mt-0 header-title">No. of students in every grade</h4>
                                                <p class="text-muted mb-4 font-13 d-inline-block text-truncate w-100">A bar
                                                    chart is a way of showing data as bars. It is sometimes used to show
                                                    trend data, and the comparison of multiple data sets side by side.</p>
                                                <canvas id="bar-data" height="90"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="mt-0 header-title">No. of users</h4>
                                                <p class="text-muted mb-4 font-13 d-inline-block text-truncate w-100">Pie
                                                    and doughnut charts are probably the most commonly used chart there are.
                                                    They are divided into segments, the arc of each segment shows the
                                                    proportional value of each piece of data.</p><canvas id="dash-pie" height="190"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="mt-0 header-title">Number of section</h4>
                                                <p class="text-muted mb-4 font-13 d-inline-block text-truncate w-100">Number of section: A bar chart is a way of showing data as bars.</p>

                                                <canvas id="bar-data_r" height="90"></canvas>
                                            </div>
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
            // AJAX request to get data count
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




        $(document).ready(function() {


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

        });
        // Function to fetch data using AJAX


        $(document).ready(function() {
            function fetchData1() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        var data = JSON.parse(this.responseText);
                        updateChart(data);
                    }
                };
                xhttp.open("GET", "s.data.php", true);
                xhttp.send();
            }

            // Function to update chart with fetched data
            function updateChart(data) {
                // Update chart data
                myChart.data.datasets[0].data = data;
                myChart.update();
            }
            var gradientStroke123 = (ctx = document
                .getElementById("bar-data")
                .getContext("2d")).createLinearGradient(0, 0, 0, 300);
            gradientStroke123.addColorStop(0, "#5ecbf6"),
                gradientStroke123.addColorStop(1, "#8d44ad");
            var cornerRadius = 20;
            myChart = new Chart(ctx, {
                type: "bar",
                data: {
                    labels: ['Grade7', 'Grade8', 'Grade9', 'Grade10', 'Grade11', 'Grade12'],
                    datasets: [{
                        label: "No. of students",
                        data: [],
                        borderColor: gradientStroke123,
                        backgroundColor: gradientStroke123,
                        hoverBackgroundColor: gradientStroke123,
                        pointRadius: 0,
                        fill: !0,
                        borderWidth: 0,
                    }, ],
                },
                options: {
                    legend: {
                        position: "bottom",
                        display: !0,
                        labels: {
                            boxWidth: 12
                        }
                    },
                    tooltips: {
                        displayColors: !0,
                        intersect: !0
                    },
                    scales: {
                        xAxes: [{
                            ticks: {
                                max: 100,
                                min: 20,
                                stepSize: 10
                            },
                            gridLines: {
                                display: !0,
                                color: "#FFFFFF"
                            },
                            ticks: {
                                display: !0,
                                fontFamily: "'Rubik', sans-serif"
                            },
                        }, ],
                        yAxes: [{
                            gridLines: {
                                color: "#fff",
                                display: !0
                            },
                            ticks: {
                                display: !0,
                                fontFamily: "'Rubik', sans-serif"
                            },
                        }, ],
                    },
                },
            });

            // Fetch data initially
            fetchData1();
        });


        $(document).ready(function() {
            function fetchData2() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        var data = JSON.parse(this.responseText);
                        updateChart(data);
                    }
                };
                xhttp.open("GET", "sa.data.php", true);
                xhttp.send();
            }

            function updateChart(data) {

                myChart.data.datasets[0].data = data;
                myChart.update();
            }

            var ctx = document.getElementById("dash-pie").getContext("2d");
            var gradientStroke6 = ctx.createLinearGradient(0, 0, 0, 300);
            gradientStroke6.addColorStop(0, "#00e795");
            gradientStroke6.addColorStop(1, "#0095e2");

            var gradientStroke7 = ctx.createLinearGradient(0, 0, 0, 300);
            gradientStroke7.addColorStop(0, "#f6d365");
            gradientStroke7.addColorStop(1, "#ff7850");

            var gradientStroke8 = ctx.createLinearGradient(0, 0, 0, 300);
            gradientStroke8.addColorStop(0, "#f56348");
            gradientStroke8.addColorStop(1, "#f81f8b");

            var myChart = new Chart(ctx, {
                type: "pie",
                data: {
                    labels: ["Student", "Faculty", "Staff / Registrar"],
                    datasets: [{
                        data: [, , , ],
                        backgroundColor: [gradientStroke6, gradientStroke7, gradientStroke8],
                        hoverBackgroundColor: [gradientStroke6, gradientStroke7, gradientStroke8],
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
                        displayColors: true
                    },
                },
            });

            fetchData2();
        });


        //  END PIE CHART
    </script>
</body>

</html>