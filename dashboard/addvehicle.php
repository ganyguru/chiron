
<?php

if(isset($_GET['type']) && $_GET['type']!='')
{

}
else
$_GET['type']=0;

?>
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
		<link href="css/themes/theme-default/main.css" rel="stylesheet" >
		<script type="text/javascript">
			var getParameter="<?php echo $_GET['type']; ?>";
		</script>
	</head>

	<body class="container-fluid dark-sidebar dark-header-brand" ng-app="addamb" ng-init="count=1">
	<div class="loader fade" ng-show="showLoader">
		<div class="pulse">
		</div>
	</div>
		<div id="page-wrapper">
			<?php include 'header.php'; ?>

					<section class="page-content" ng-controller="aamb">

							


						  <div class="row">
							<div class="col-lg-12">
								<div class="panel panel-default">
									<div class="panel-body">
										
											<form class="form" role="form">
												<input type="hidden" class="form-control" id="type" value="{{type}}">
												<div class="form-group floating-label">
												<input type="text" class="form-control" id="vno">
												<label for="regular2">Vehicle Number</label>
												</div>

												<div class="form-group floating-label">
												<input type="text" class="form-control" id="driver">
												<label for="regular2">Driver Name</label>
												</div>

												<div class="form-group floating-label">
												<input type="text" class="form-control" id="phone">
												<label for="regular2">Phone Number</label>
												</div><br>
												
												<center><p><button type="button" class="btn btn-flat btn-primary" onclick="addvehicle()">Add Vehicle</button></p></center>


											</form>
										
									</div>
								</div>

								
								</div>
							</div>
							
						</div>
					</section><!-- /#page-content -->

				</section><!-- /#right-content -->
			</section><!-- /#right-content-wrapper -->

		</div>

		<!-- Modal -->
		
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
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
		<script type="text/javascript" src="js/addamb.js"></script>
		<script type="text/javascript">
			function addvehicle()
{
  var data={"Vehicle_no":$("#vno").val(),"Driver":$("#driver").val(),"Phone":$("#phone").val()}
  $.post('http://4e16c88d.ngrok.io/admin/addvehicle',JSON.stringify(data),function(result)
  {
    alert('Vehicle Added! Id:'+result);
  });
}
		</script>
	</body>
</html>