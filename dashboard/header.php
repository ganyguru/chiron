	<aside id="left-content" data-toggle="open" data-default="open" data-size="">
				<header class="header-container">
					<div class="header-wrapper">
						<div id="header-brand">
							<div class="logo padding-left-2">
								<span class="logo-image">NPI</span>
								<span class="logo-text">NP_Incomplete</span>
							</div>
						</div>
					</div>
				</header>
				<div id="sidebar-wrapper">
					<div id="userbox">
						<div id="useravatar">
							<div class="avatar-thumbnail" style="text-align:center">
								<img src="img/108logo.png" class="img-circle" style="max-height:100px !important;max-width:100px !important" />
							</div>
						</div>

						
					</div> <!-- END: #userbox -->


					<nav id="sidebar" ng-controller="user" ng-init="getNotificationCount()">
						<ul>
							<li class="red-500-background-color">
								<a href="place.php">
									<span class="menu-item-ico"><i class="material-icons">call</i></span>
									<span class="menu-item-name">Place Emergency</span>
								</a>
							</li>
							<li>
								<a href="index.html">
									<span class="menu-item-ico"><i class="material-icons">dashboard</i></span>
									<span class="menu-item-name">Dashboard</span>
								</a>
							</li>
							<li>
								<a href="notifications.php">
									<span class="menu-item-ico"><i class="material-icons">error</i></span>
									<span class="menu-item-name">Notifications</span>
									<span class="badge badge-info">{{notificationCount[0]+notificationCount[1]+notificationCount[2]}}</span>
								</a>
							</li>
							<li>
								<a href="">
									<span class="menu-item-ico"><i class="material-icons">favorite</i></span>
									<span class="menu-item-name">Medical</span>
									<span class="badge badge-danger">{{notificationCount[0]}}</span>
								</a>
								<ul>
									<!-- <li><a href="centres.php?type=1">Other Centres</a></li> -->
									<li><a href="">Vehicle Monitor</a>
									<ul>
									<li><a href="vehicle.php?type=1">View Status</a></li>
									<li><a href="addvehicle.php?type=1">Add Vehicle</a></li>									
									
									</ul></li>
									<li><a href="notifications.php?type=1">Notifications</a></li>
								</ul>
							</li>
							<li>
								<a href="">
									<span class="menu-item-ico"><i class="material-icons">stars</i></span>
									<span class="menu-item-name">Police</span>
									<span class="badge badge-danger">{{notificationCount[1]}}</span>
								</a>
								<ul>
									<!-- <li><a href="centres.php?type=2">Other Centres</a></li> -->
									<li><a href="">Station Monitor</a>
									<ul>
									<li><a href="vehicle.php?type=2">View Status</a></li>
									<li><a href="addvehicle.php?type=2">Add Station</a></li>									
									
									</ul></li>
									<li><a href="notifications.php?type=2">Notifications</a></li>
								</ul>
							</li>
							<li>
								<a href="">
									<span class="menu-item-ico"><i class="material-icons">change_history</i></span>
									<span class="menu-item-name">Fire</span>
									<span class="badge badge-danger">{{notificationCount[2]}}</span>
								</a>
								<ul>
									<!-- <li><a href="centres.php?type=3">Other Centres</a></li> -->
									<li><a href="">Station Monitor</a>
									<ul>
									<li><a href="vehicle.php?type=3">View Status</a></li>
									<li><a href="addvehicle.php?type=3">Add Station</a></li>									
									
									</ul></li>
									<li><a href="notifications.php?type=3">Notifications</a></li>
								</ul>
							</li>
							<li class="nav-main-heading">
								<span class="sidebar-mini-hide">User Profile and Settings</span>
							</li>
							<li>
								<a href="">
									<span class="menu-item-ico"><i class="material-icons">lightbulb_outline</i></span>
									<span class="menu-item-name">Help/FAQ</span>
									
								</a>
							</li>
							
					</nav><!-- END: nav#sidebar -->	
				</div>
			</aside>
			
			<section id="right-content">
				<header class="header-container">
					<div class="header-wrapper">
						<div id="header-toolbar">
							<ul class="toolbar toolbar-left">
								<li>
									<a id="sidebar-toggle" data-state="open" href="#"><i class="material-icons">menu</i></a>
								</li>
							</ul>

							<div id="searchbox">
								<span class="search-icon"><i class="material-icons">search</i></span>
								<input id="search-input" placeholder="Search" type="text" />
							</div>

							<ul class="toolbar toolbar-right">
								<li>
									<a href="#" id="fullscreen-toggle" data-toggle="tooltip" data-placement="bottom" title="Toggle Fullscreen"><i class="material-icons">fullscreen</i></a>
								</li>
								<li id="user-profile" class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<div class="avatar">
											<img src="img/avatar.png" class="img-circle img-responsive" />
										</div>
										<div class="user" ng-controller="user">
											<span class="username">{{ firstname + " " + lastname}}</span>
										</div>
										<span class="expand-ico"><i class="material-icons">expand_more</i></span>
									</a>
									<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="material-icons">person</i>Your Profile</a></li>
										<li><a href="#"><i class="material-icons">settings</i>Settings</a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="material-icons">lock</i> Lock</a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="material-icons">exit_to_app</i> Log Out</a></li>
									</ul>
								</li><!-- /#user-profile -->
							</ul><!-- /.navbar-right -->					


						</div>
					</div><!-- /#header-toolbar -->
				</header>
				<section id="right-content-wrapper" ng-controller="user">
					<section class="page-header alternative-header">
						<ol class="breadcrumb">
							<li>108 Emergencies</li>
							<li ng-repeat="x in pages">{{x}}</li>
						</ol>
						<div class="page-header_title" >
							<h1>
								{{pages[pages.length-1]}}
								<span class="page-header_subtitle">Welcome Back {{firstname + " " + lastname}}</span>
							</h1>
						</div>
					</section>