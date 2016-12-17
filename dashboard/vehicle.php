
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

	<body class="container-fluid dark-sidebar dark-header-brand" ng-app="ambulances" ng-init="count=1">
	<div class="loader fade" ng-show="showLoader">
		<div class="pulse">
		</div>
	</div>
		<div id="page-wrapper">
			<?php include 'header.php'; ?>

					<section class="page-content" ng-controller="records">

							<div class="row">
								<div class="col-lg-12">
								<div class="panel panel-default">
									<div class="panel-body">
									<div class="maplayerw" >
									<p style="text-align: center;">Loading Ambulances...</p>
									<img class="imgfade" src="img/plus-l.png">
									</div>
									<div id="map" style="width:100%;height:300px;"></div>

    															<script>
    															
    															var ambmap;
      																function initMap() {
        															// Create a map object and specify the DOM element for display.
        															ambmap = new google.maps.Map(document.getElementById('map'), {
          															center: {lat: 13.097, lng: 80.244},
          															scrollwheel: false,
          															zoom: 11
        															});
      																}

															    </script>
    														<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBll0EHFPWX8aIXfAo3kobuZuyny3bjmSU&callback=initMap" async defer></script>
														</div>
													</div>
									</div></div>


							<div class="row">
							<div class="col-sm-12">
							<div class="panel panel-default">
									<div class="panel-body">
									<label>Search:<input  class="form-control input-sm" ng-model="query" id="query" placeholder=""></label>
									
									</div>
									</div>
							
							</div>
							</div>

							

						  <div class="row">
							<div class="col-lg-12">
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="panel-table-inner-offset">
											<table id="table1" class="table table-condensed" data-row-select="false">
												<thead>
													<tr>
														<th style="cursor:pointer" class="text-right">#</th>
														<th style="cursor:pointer" class="text-right" ng-click="orderByField='vehicle_no'; reverseSort = !reverseSort">{{h1}}</th>
														<th style="cursor:pointer" class="text-right" ng-click="orderByField='driver'; reverseSort = !reverseSort">{{h2}}</th>
														<th style="cursor:pointer" class="text-right" ng-click="orderByField='phone'; reverseSort = !reverseSort">Phone</th>
														<th style="cursor:pointer" class="text-right" >Location</th>
														<th style="cursor:pointer" class="text-right" ng-click="orderByField='status'; reverseSort = !reverseSort">Status</th>									
														<th style="cursor:pointer" class="text-right" ng-click="orderByField='handle'; reverseSort = !reverseSort">Emergency Handled</th>
														<th></th>
														<th></th>
													</tr>
												</thead>
												<tbody>
													<tr class="text-right" ng-repeat="(key,value) in list | filter:query | orderBy:orderByField:reverseSort" >
														<td data-id="{{value.id}}" >{{ $index + 1 }}</td>
														<td data-id="{{value.vehicle_no}}">{{ value.vehicle_no }}</td>
														<td data-id="{{value.driver}}">{{ value.driver }}</td>
														<td data-id="{{value.phone}}">{{ value.phone }}</td>
														<td><a href="https://google.co.in/maps/@{{value.lat}},{{value.long}},17.33z" target="_blank">
															Location
														</a></td>
														<td>{{value.status}}</td>														
														<td>{{value.handle}}</td>
														<td><a href="#EditModal" data-toggle="modal" onclick="editclick(this)" class="editlink">Edit</a></td>
														<td><a href="#NotifyModal" data-toggle="modal" onclick="notifyclick(this)">Notify</a></td>

													</tr>
													
												</tbody>
											</table>
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

		<!-- Modal -->
		<div id="EditModal" class="modal fade" style="display: none;" ng-app="ambulances">
	<div class="modal-dialog" style="transform: scale(0.173333); opacity: 0; top: 340px; left: 439.562px;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title">Edit Vehicle</h4>
			</div>
			<div class="modal-body">
				<div class="row">
							<div class="col-lg-12">
								
										
											<form class="form" role="form" ng-controller="editamb">
												<input type="hidden" class="form-control" id="id" value="{{id}}">
												<div class="form-group floating-label">
												<input type="text" class="form-control" id="vno" value="{{vehicle}}">
												<label for="regular2">Vehicle Number</label>
												</div>

												<div class="form-group floating-label">
												<input type="text" class="form-control" id="driver" value="{{driver}}">
												<label for="regular2">Driver Name</label>
												</div>

												<div class="form-group floating-label">
												<input type="text" class="form-control" id="phone" value="{{phone}}">
												<label for="regular2">Phone Number</label>
												</div><br>
												
												<center><p><button type="button" class="btn btn-flat btn-primary">Edit Vehicle</button> </p></center>


											</form>
										
									

								
								</div>
							</div>
			</div>
			
		</div>
	</div>
</div>



<div id="NotifyModal" class="modal fade" style="display: none;" ng-app="ambulances">
	<div class="modal-dialog" style="transform: scale(0.173333); opacity: 0; top: 340px; left: 439.562px;" ng-controller="notifyamb">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title">Send a notification to the Vehicle #{{id}}</h4>
			</div>
			<div class="modal-body">
				<div class="row">
							<div class="col-lg-12">
								
										
											<form class="form" role="form" >

												<div class="form-group floating-label">
												<textarea name="textarea2" id="textarea2" class="form-control" rows="3" placeholder=""></textarea>
												<label for="textarea2">Message</label>
												</div>

												
												</div><br>
												
												<center><p><button type="button" class="btn btn-flat btn-primary">Send Message</button></p></center>
											</form>												
								</div>
							</div>
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
		<script type="text/javascript" src="js/ambulance.js"></script>
		<script type="text/javascript">
			
			
		</script>
	</body>
</html>