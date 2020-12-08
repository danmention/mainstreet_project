<?php session_start()?>
<!DOCTYPE html>
<!-- 
Template Name: Brunette - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework
Contact: https://hencework.ticksy.com/

License: You must have a valid license purchased only from templatemonster to legally use the template for your project.
-->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Mainstreet MfB Dashboard</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png">
    <link rel="icon" href="dist/imgfavicon.png" type="image/x-icon">
	
	<!-- vector map CSS -->
    <link href="vendors/vectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" type="text/css" />

    <!-- Toggles CSS -->
    <link href="vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
    <link href="vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">
	
	<!-- Toastr CSS -->
    <link href="vendors/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>
    <!-- /Preloader -->
	
	<!-- HK Wrapper -->
	<div class="hk-wrapper hk-vertical-nav">

        <!-- Top Navbar -->
        <?php include "topnav.php"; ?>
        <!-- /Top Navbar -->

        <!-- Vertical Nav -->
        <?php include "verticalnav.php"; ?>
        <!-- /Vertical Nav -->

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
			<!-- Container -->
            <div class="container mt-xl-50 mt-sm-30 mt-15">
                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hk-row">
							<div class="col-sm-12">
								<div class="card-group hk-dash-type-2">

                                    <div class="card card-sm">
										<div class="card-body">
											<div class="d-flex justify-content-between mb-5">
												<div>
													<span class="d-block font-15 text-dark font-weight-500">Borrowers</span>
												</div>
											</div>
											<div>
												<span class="d-block display-4 text-dark mb-5"><span class="counter-anim">168</span></span>
											</div>
										</div>
                                    </div>
                                    
									<div class="card card-sm">
										<div class="card-body">
											<div class="d-flex justify-content-between mb-5">
												<div>
													<span class="d-block font-15 text-dark font-weight-500">Recovery Rate</span>
												</div>
											</div>
											<div>
												<span class="d-block display-4 text-dark mb-5">16%</span>
											</div>
										</div>
									</div>
								
									<div class="card card-sm">
										<div class="card-body">
											<div class="d-flex justify-content-between mb-5">
												<div>
													<span class="d-block font-15 text-dark font-weight-500">Loans Disbursed</span>
												</div>
											</div>
											<div>
												<span class="d-block display-4 text-dark mb-5">$70000000</span>
											</div>
										</div>
									</div>
								
									<div class="card card-sm">
										<div class="card-body">
											<div class="d-flex justify-content-between mb-5">
												<div>
													<span class="d-block font-15 text-dark font-weight-500">Past Due</span>
												</div>
											</div>
											<div>
												<span class="d-block display-4 text-dark mb-5">$211000000</span>
											</div>
										</div>
									</div>
								</div>
							</div>	
						</div>
						<div class="hk-row">
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header card-header-action">
										<h6>Open Loans</h6>
									</div>
									<div class="card-body">
										<div id="e_chart_6" class="echart" style="height:250px;"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header card-header-action">
										<h6>Due Principal Balance</h6>
									</div>
									<div class="card-body">
										<div id="e_chart_7" class="echart" style="height:250px;"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
                <!-- /Row -->
            </div>
            <!-- /Container -->
			
            <!-- Footer -->
            <div class="hk-footer-wrap container">
                <footer class="footer">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <p>Developed by<a href="https://ithorizonsng.com/" class="text-dark" target="_blank">IT Horizons</a> © 2020</p>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- /Footer -->
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Slimscroll JavaScript -->
    <script src="dist/js/jquery.slimscroll.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="dist/js/dropdown-bootstrap-extended.js"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="dist/js/feather.min.js"></script>

    <!-- Toggles JavaScript -->
    <script src="vendors/jquery-toggles/toggles.min.js"></script>
    <script src="dist/js/toggle-data.js"></script>
	
	<!-- Counter Animation JavaScript -->
	<script src="vendors/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="vendors/jquery.counterup/jquery.counterup.min.js"></script>
	
	<!-- EChartJS JavaScript -->
    <script src="vendors/echarts/dist/echarts-en.min.js"></script>
    
	<!-- Sparkline JavaScript -->
    <script src="vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>
	
	<!-- Vector Maps JavaScript -->
    <script src="vendors/vectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="vendors/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="dist/js/vectormap-data.js"></script>

	<!-- Owl JavaScript -->
    <script src="vendors/owl.carousel/dist/owl.carousel.min.js"></script>
	
	<!-- Toastr JS -->
    <script src="vendors/jquery-toast-plugin/dist/jquery.toast.min.js"></script>
    
    <!-- Init JavaScript -->
    <script src="dist/js/init.js"></script>
	<script src="dist/js/dashboard-data.js"></script>
	
</body>

</html>