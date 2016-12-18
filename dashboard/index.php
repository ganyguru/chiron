<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
		<title>108 Emergencies</title>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

		<!-- Bootstrap Core CSS - Include with every page -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Bemat Admin CSS - Include with every page -->
		<link href="css/themes/theme-default/bemat-admin.min.css" rel="stylesheet" id="theme-switcher">

		<!-- Documentation Prettify -->
		<link href="vendor/google-code-prettify/prettify-tomorrow.css" rel="stylesheet" />

		<!-- Dashboard Level NVD3 Charts -->
		<script src="vendor/d3/d3.v3.js" charset="utf-8"></script>
		<script src="vendor/nvd3/nv.d3.js" type="text/javascript"></script>
		<link href="vendor/nvd3/nv.d3.css" rel="stylesheet">
		<link href="css/themes/theme-default/main.css" rel="stylesheet">
		<script src='vendor/nvd3/examples/cumulativeLine.js' type='text/javascript'> </script>
		<script type="text/javascript">
			document.addEventListener('DOMContentLoaded', function () {
  if (!Notification) {
    alert('Desktop notifications not available in your browser. Try Chromium.'); 
    return;
  }

  if (Notification.permission !== "granted")
    Notification.requestPermission();
});

		</script>
	</head>

	<body class="dark-sidebar dark-header-brand container-fluid" ng-app="dashboard">
	<div class="loader fade" ng-show="showLoader">
		<div class="pulse">
		</div>
	</div>
		<div id="page-wrapper">
		
		<?php include 'header.php'; ?>

					<section class="page-content">
						
						<!-- <div class="row">
							<div class="col-lg-3 col-sm-6">
								<div class="panel panel-default">
									<div class="panel-body no-padding">
										<div class="mini-card mini-card-primary">
											<div class="mini-card-left">
												<span>Today Emergencies</span>
												<h2>1,541</h2>
											</div>
											<div class="mini-card-right">
												<div class="bemat-mini-chart bemat-mini-chart-primary">
													<span class="peity-line">5,3,9,6,5,9,7,3,5,8</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-3 col-sm-6">
								<div class="panel panel-default">
									<div class="panel-body no-padding">
										<div class="mini-card mini-card-success">
											<div class="mini-card-left">
												<span>Cases attended</span>
												<h2>25</h2>
											</div>
											<div class="mini-card-right">
												<div class="bemat-mini-chart bemat-mini-chart-success">
													<span class="peity-bar">4,3,5,2,5,3,8,3,4,9</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-3 col-sm-6">
								<div class="panel panel-default">
									<div class="panel-body no-padding">
										<div class="mini-card mini-card-info">
											<div class="mini-card-left">
												<span>Average Emergencies</span>
												<h2>2,457</h2>
											</div>
											<div class="mini-card-right">
												<div class="bemat-mini-chart bemat-mini-chart-info">
													<span class="peity-line">4,3,5,6,5,4,6,3,2,6</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-3 col-sm-6">
								<div class="panel panel-default">
									<div class="panel-body no-padding">
										<div class="mini-card mini-card-danger">
											<div class="mini-card-left">
												<span>Average response time</span>
												<h2>43 sec.</h2>
											</div>
											<div class="mini-card-right">
												<div class="bemat-mini-chart bemat-mini-chart-danger">
													<span class="peity-bar">4,3,5,6,5,4,6,3,2,6</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> -->


						<div class="row">
							<div class="col-lg-12">
								<div class="panel panel-default">
									<div class="panel-heading">
										<header>
											Emergency Statistics
											
										</header>

										
									</div>
									<div class="panel-body">
										<div class="statistics" ng-controller="emergency">
											<div class="row">
												<div class="col-lg-4">
													<div class="row">
														<div class="col-lg-12">
															<div class="stat-wrapper">
																<h4 class="no-margin-top margin-bottom-2">Total Emergencies: <span class="pull-right">{{ tcount }}</span></h4>
																<div class="linear-progress-demo " data-toggle="linear-progress" data-mode="determinate" data-type="primary" data-value="100"></div>
															</div>
														</div>
														<div class="col-lg-12">
															<div class="stat-wrapper margin-vertical-4">
																<h4 class="no-margin-top margin-bottom-2">Present Emergencies: <span class="pull-right">{{ present }}</span></h4>
																<div class="linear-progress-demo " data-toggle="linear-progress" data-mode="indeterminate" data-type="primary" data-value="57"></div>
															</div>
														</div>
														
													</div>
												</div>
												<div class="col-lg-8">
													<div class="row">
														<div class="col-lg-12">
														<div class="maplayerw" style="width:100%;height:100%">
														<p style="text-align: center;">Loading Emergencies...</p>
																	<img class="imgfade" src="img/plus-l.png">
																</div>
															<div id="map" style="width:100%;height:300px;">
																

																
															</div>
    															<script>
    															var emermap;
      																function initMap() {
        															// Create a map object and specify the DOM element for display.
        															emermap = new google.maps.Map(document.getElementById('map'), {
          															center: {lat: 13.097, lng: 80.044},
          															scrollwheel: false,
          															zoom: 9
        															});
      																}

															    </script>
    														<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBll0EHFPWX8aIXfAo3kobuZuyny3bjmSU&callback=initMap" async defer></script>
														</div>
													</div>
												</div>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>


						

					


					</section><!-- /#page-content -->

				</section><!-- /#right-content -->
			</section><!-- /#right-content-wrapper -->

		</div>


		<!-- Core Scripts - Include with every page -->
		<script src="js/jquery-1.10.2.js" type="text/javascript"></script>
		<script src="js/jquery-ui.custom.min.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script src="js/modernizr-2.6.2-respond-1.1.0.min.js" type="text/javascript"></script>

		<!-- Page-Level Plugin Scripts - Dashboard -->
		<script src="vendor/google-code-prettify/prettify.js" type="text/javascript"></script>
		<script src="vendor/perfectscrollbar/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
		<script src="vendor/iCheck/icheck.min.js" type="text/javascript"></script>
		<script src="vendor/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
		<script src="vendor/DataTables/js/jquery.dataTables.min.js" type="text/javascript"></script>
		<script src="vendor/DataTables/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
		<script src="vendor/DataTables/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
		<script src="vendor/fullscreen/jquery.fullscreen-min.js" type="text/javascript"></script>
		<script src="vendor/fullcalendar/moment.min.js" type="text/javascript"></script>
		<script src="vendor/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
		<script src="vendor/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
		<script src="vendor/peity/jquery.peity.min.js" type="text/javascript"></script>
		<script src="vendor/chartist/chartist.min.js" type="text/javascript"></script>
		<script src="vendor/summernote/summernote.min.js" type="text/javascript"></script>
		<script src="vendor/ckeditor/ckeditor.js" type="text/javascript"></script>
		<script src="vendor/wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>

		<!-- Cerocreativo Plugins -->
		<script src="vendor/materialRipple/jquery.materialRipple.js" type="text/javascript"></script>
		<script src="vendor/snackbar/jquery.snackbar.js" type="text/javascript"></script>
		<script src="vendor/toasts/jquery.toasts.js" type="text/javascript"></script>
		<script src="vendor/speedDial/jquery.speedDial.js" type="text/javascript"></script>
		<script src="vendor/circularProgress/jquery.circularProgress.js" type="text/javascript"></script>
		<script src="vendor/linearProgress/jquery.linearProgress.js" type="text/javascript"></script>
		<script src="vendor/subheader/jquery.subheader.js" type="text/javascript"></script>
		<script src="vendor/simplePieChart/jquery.simplePieChart.js" type="text/javascript"></script>

		<!-- Bemat Admin Scripts - Included with every page -->		
		<script src="js/bemat-admin-common.min.js"></script>
		<script src="js/bemat-admin-demo.min.js"></script>
<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-72024640-1', 'auto');ga('send', 'pageview');</script> 

		<script src="js/bemat-admin-demo-chartist.min.js"></script>
		<script src="js/bemat-admin-demo-dashboard.min.js"></script>
		<script type="text/javascript">
			//bematadmin.App.theme.darkHeader();
		</script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
		<script type="text/javascript" src="js/dashboard.js"></script>
		<script type="text/javascript">
			
		</script>
	</body>
</html>