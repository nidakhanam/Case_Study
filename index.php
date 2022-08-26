<html lang="en"><head>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="https://demos.creative-tim.com/light-bootstrap-dashboard/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="https://demos.creative-tim.com/light-bootstrap-dashboard/assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Rest API</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport">
    <!-- Canonical SEO  -->
    <link rel="canonical" href="https://www.creative-tim.com/product/light-bootstrap-dashboard">
    <!--  Social tags      -->
    <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, freebie, free bootstrap dashboard, bootstrap, css3 dashboard, bootstrap admin, light bootstrap dashboard, frontend, responsive bootstrap dashboard, bootstrap 4 admin, bootstrap 4 template, bootstrap 4 dashboard, bootstrap 4, free bootstrap 4">
    <meta name="description" content="A bootstrap 4 admin dashboard template designed to be simple and beautiful.">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Light Bootstrap Dashboard - Free Bootstrap 4 Admin Template by Creative Tim">
    <meta itemprop="description" content="A bootstrap 4 admin dashboard template designed to be simple and beautiful.">
    <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/32/original/opt_lbd_thumbnail.jpg">
    <!-- Twitter Card data -->
    <!-- Open Graph data -->
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="https://demos.creative-tim.com/light-bootstrap-dashboard/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://demos.creative-tim.com/light-bootstrap-dashboard/assets/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="https://demos.creative-tim.com/light-bootstrap-dashboard/assets/css/demo.css" rel="stylesheet">
</head>

    <body>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="https://technicalhub.io" class="simple-text">
                        ResT API
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="dashboard.html">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class=" container-fluid  ">
                    <a class="navbar-brand" href="#pablo"> Subjects List </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Subject Details</h4>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>S.No</th>
                                            <th>Subject ID</th>
                                            <th>Subject Code</th>
                                            <th>Subject Name</th>
                                            <th>Professor</th>
                                            <th>Regulation</th>
                                        </thead>
                                        <tbody>
                                        	<?php
                                        	$Data = file_get_contents('http://localhost/rest/config/api.php');
                                        	$Data = json_decode($Data, true);
                                        	foreach ($Data as $key => $SubjectDetails) { ?>
                                        		<tr>
                                        			<td><?php echo @++$x ?></td>
                                        			<td><?php echo $SubjectDetails['subjectId'] ?></td>
                                        			<td><?php echo $SubjectDetails['subjectCode'] ?></td>
                                        			<td><?php echo $SubjectDetails['subjectName'] ?></td>
                                        			<td><?php echo $SubjectDetails['professor'] ?></td>
                                        			<td><?php echo $SubjectDetails['regulation'] ?></td>
                                        		</tr>
                                        	<?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <nav>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="https://technicalhub.io">Technical Hub</a>
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
</body>

<!--   Core JS Files   -->
<script src=".https://demos.creative-tim.com/light-bootstrap-dashboard/assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="https://demos.creative-tim.com/light-bootstrap-dashboard/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="https://demos.creative-tim.com/light-bootstrap-dashboard/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: https://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="https://demos.creative-tim.com/light-bootstrap-dashboard/assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
<!--  Chartist Plugin  -->
<script src="https://demos.creative-tim.com/light-bootstrap-dashboard/assets/js/plugins/chartist.min.js"></script>
<!--  Share Plugin -->
<script src="https://demos.creative-tim.com/light-bootstrap-dashboard/assets/js/plugins/jquery.sharrre.js"></script>
<!--  Notifications Plugin    -->
<script src="https://demos.creative-tim.com/light-bootstrap-dashboard/assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="https://demos.creative-tim.com/light-bootstrap-dashboard/assets/js/light-bootstrap-dashboard.js?v=2.0.1" type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="https://demos.creative-tim.com/light-bootstrap-dashboard/assets/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    });
</script>


</body></html>