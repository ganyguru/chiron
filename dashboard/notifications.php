
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
		<title>Bemat Admin v1 - Blank Page</title>
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

	<body class="container-fluid dark-sidebar dark-header-brand" ng-app="notification">
	<div class="loader fade" ng-show="showLoader">
		<div class="pulse">
		</div>
	</div>
		<div id="page-wrapper">
			<?php include 'header.php'; ?>

					<section class="page-content">
						<div class="row" ng-controller="alerts">
							<div class="col-lg-12">
								 
<div class="panel panel-default" ng-repeat="(key,value) in list">
	<div class="panel-heading">
		<header style="color: {{ value.color }};font-size: 25px;">{{ value.type + " Emergency"}}</header>
		{{ value.time }}
		<div class="panel-heading-tools">
			<div class="btn-group">
				<a class="btn btn-icon-toggle panel-tools-loading"><i class="fa fa-refresh fa-spin"></i></a>
				<a class="btn btn-icon-toggle panel-tools-collapse"><i class="material-icons">keyboard_arrow_up</i></a>

			</div>
		</div>
	</div>
	<div class="panel-body">
		<a href="https://www.google.co.in/maps/@{{ value.lat }},{{ value.long }},17.33z" target="_blank">Location of Emergency</a><br>
		<b>Emergency Type : </b>{{value.etype}}<br>		
		<b>Victim : </b>{{ value.name }}  | <b>Victim's Phone : </b><a href="tel:{{value.phone}}">{{value.phone}}</a><br>
		<b>Vehicle Number : </b>{{ value.vehicle }} | <b>Vehicle Driver : </b>{{value.driver}}<br><br>
		
		<input type="text" class="form-control" id="description" placeholder="Description of Emergency">
		
		
		<div class="panel-footer inner-offset">
		<a href="#dismissModal" data-toggle="modal" href="#" class="btn btn-default btn-flat">Dismiss</a>
		<a href="#acceptModal" data-toggle="modal" class="btn btn-primary btn-flat">Accept</a>
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
		<div id="acceptModal" class="modal fade" style="display: none;">
	<div class="modal-dialog" style="transform: scale(0.173333); opacity: 0; top: 340px; left: 439.562px;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title">Do you want to dispatch the emergency vehicle?</h4>
			</div>
			<div class="modal-body">
				<p>Select dispatch if you are sure about the emergency. You are going to be one of the reason for a person being alive.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary btn-flat btn-ripple materialRipple-light materialRipple-btn" data-dismiss="modal">Disagree<div class="materialRipple-md-ripple-container"><div id="materialRipple-1481876427880" class="md-ripple md-ripple-placed md-ripple-scaled" style="top: 17.3047px; left: 57.0625px; width: 120.094px; height: 120.094px; opacity: 0;"></div></div></button>
				<button type="button" class="btn btn-primary btn-flat btn-ripple materialRipple-light materialRipple-btn">Agree<div class="materialRipple-md-ripple-container"></div></button>
			</div>
		</div>
	</div>
</div>



<div id="dismissModal" class="modal fade" style="display: none;">
	<div class="modal-dialog" style="transform: scale(0.173333); opacity: 0; top: 340px; left: 439.562px;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title">Do you want to dismiss the emergency?</h4>
			</div>
			<div class="modal-body">
				<p>Dismiss dispatch if you are sure about it. You are going to be one of the reason for a person being alive.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary btn-flat btn-ripple materialRipple-light materialRipple-btn" data-dismiss="modal">Disagree<div class="materialRipple-md-ripple-container"><div id="materialRipple-1481876427880" class="md-ripple md-ripple-placed md-ripple-scaled" style="top: 17.3047px; left: 57.0625px; width: 120.094px; height: 120.094px; opacity: 0;"></div></div></button>
				<button type="button" class="btn btn-primary btn-flat btn-ripple materialRipple-light materialRipple-btn">Agree<div class="materialRipple-md-ripple-container"></div></button>
			</div>
		</div>
	</div>
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
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
		<script type="text/javascript" src="js/notif.js"></script>
	</body>
</html>