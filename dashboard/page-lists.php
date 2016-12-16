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
		<title>Bemat Admin v1 - Lists</title>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

		<!-- Bootstrap Core CSS - Include with every page -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Bemat Admin CSS - Include with every page -->
		<link href="css/themes/theme-default/bemat-admin.min.css" rel="stylesheet" id="theme-switcher">
		
		<!-- Documentation Prettify -->
		<link href="vendor/google-code-prettify/prettify-tomorrow.css" rel="stylesheet" />
	</head>

	<body class="container-fluid dark-sidebar dark-header-brand">
		<div id="page-wrapper">
			<aside id="left-content" data-toggle="open" data-default="open" data-size="">
				<header class="header-container">
					<div class="header-wrapper">
						<div id="header-brand">
							<div class="logo padding-left-2">
								<span class="logo-image">B</span>
								<span class="logo-text">Bemat</span>
							</div>
						</div>
					</div>
				</header>
				<div id="sidebar-wrapper">
					<div id="userbox">
						<div id="useravatar">
							<div class="avatar-thumbnail">
								<img src="img/avatar.png" class="img-circle"/>
							</div>
						</div>

						<div id="userinfo">
							<div class="btn-group">
								<button type="button" class="btn btn-default-bright btn-flat dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe <i class="material-icons">arrow_drop_down</i>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#"><i class="material-icons">person</i>Your Profile</a></li>
									<li><a href="#"><i class="material-icons">settings</i>Settings</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="material-icons">lock</i> Lock</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="material-icons">exit_to_app</i> Log Out</a></li>
								</ul>
							</div>
						</div>
					</div> <!-- END: #userbox -->


					<nav id="sidebar">
						<ul>
							<li>
								<a href="index.html">
									<span class="menu-item-ico"><i class="material-icons">dashboard</i></span>
									<span class="menu-item-name">Dashboard</span>
								</a>
							</li>
							<li>
								<a href="">
									<span class="menu-item-ico"><i class="material-icons">extension</i></span>
									<span class="menu-item-name">Components</span>
								</a>
								<ul>
									<li><a href="page-accordions.html">Accordions</a></li>
									<li><a href="page-alerts.html">Alerts</a></li>
									<li><a href="page-badges.html">Badges & Labels</a></li>
									<li><a href="page-boxshadow.html">Box Shadow</a></li>
									<li>
										<a href="">Buttons <span class="badge badge-success">3</span></a>
										<ul>
											<li><a href="page-buttons-types.html">Button Types</a></li>
											<li><a href="page-buttons-FAB-speed-dial.html">FAB Speed Dial <span class="badge badge-default-dark"><i class="material-icons md-18">star</i></span></a></li>
											<li><a href="page-buttons-ink-ripple.html">Material Ink Ripple <span class="badge badge-default-dark"><i class="material-icons md-18">star</i></span></a></li>
										</ul>
									</li>
									<li><a href="page-breadcrumbs.html">Breadcrumbs</a></li>
									<li>
										<a href="">Colors <span class="badge badge-primary">2</span></a>
										<ul>
											<li><a href="page-colors-bemat-admin.html">Bemat Colors</a></li>
											<li><a href="page-colors-material-design.html">Material Design Colors</a></li>
										</ul>
									</li>
									<li><a href="page-dropdowns.html">Dropdowns</a></li>
									<li><a href="page-grid.html">Grid</a></li>
									<li>
										<a href="">Icons <span class="badge badge-info">2</span></a>
										<ul>
											<li><a href="page-icons-materialdesign.html">Material Design Icons</a></li>
											<li><a href="page-icons-fontawesome.html">Font Awesome</a></li>
										</ul>
									</li>
									<li>
										<a href="">Lists <span class="badge badge-warning">2</span></a>
										<ul>
											<li><a href="page-lists.html">Normal Lists</a></li>
											<li><a href="page-lists-subheader.html">Subheader Sticky <span class="badge badge-default-dark"><i class="material-icons md-18">star</i></span></a></li>
										</ul>
									</li>
									<li><a href="page-modals.html">Modals</a></li>
									<li><a href="page-multilevelsmenu.html">Multi Levels Side Menu</a></li>
									<li>
										<a href="">Notifications <span class="badge badge-warning">2</span></a>
										<ul>
											<li><a href="page-notifications-snackbar.html">Snackbars <span class="badge badge-default-dark"><i class="material-icons md-18">star</i></span></a></li>
											<li><a href="page-notifications-toasts.html">Toasts <span class="badge badge-default-dark"><i class="material-icons md-18">star</i></span></a></li>
										</ul>
									</li>
									<li>
										<a href="">Pagination <span class="badge badge-danger">2</span></a>
										<ul>
											<li><a href="page-pagination.html">Pagination</a></li>
											<li><a href="page-pager.html">Pager</a></li>
										</ul>
									</li>
									<li><a href="page-panels.html">Panels</a></li>
									<li>
										<a href="">Progress Indicators <span class="badge badge-success">3</span></a>
										<ul>
											<li><a href="page-progress-circular.html">Circular <span class="badge badge-default-dark"><i class="material-icons md-18">star</i></span></a></li>
											<li><a href="page-progress-linear.html">Linear <span class="badge badge-default-dark"><i class="material-icons md-18">star</i></span></a></li>
											<li><a href="page-progress-progressbar.html">Bootstrap Progressbar</a></li>
										</ul>
									</li>
									<li>
										<a href="">Tables <span class="badge badge-info">3</span></a>
										<ul>
											<li><a href="page-tables-static.html">Static Tables</a></li>
											<li><a href="page-tables-dynamic.html">Dynamic Tables</a></li>
											<li><a href="page-tables-responsive.html">Responsive Tables</a></li>
										</ul>
									</li>
									<li><a href="page-tabs.html">Tabs</a></li>
									<li><a href="page-tooltips.html">Tooltips</a></li>
									<li><a href="page-typography.html">Typography</a></li>
								</ul>
							</li>
							<li>
								<a href="">
									<span class="menu-item-ico"><i class="material-icons">format_align_left</i></span>
									<span class="menu-item-name">Forms</span>
								</a>
								<ul>
									<li><a href="page-forms-basic.html">Form Elements Basic</a></li>
									<li>
										<a href="">Editors <span class="badge badge-primary">3</span></a>
										<ul>
											<li><a href="page-editors-summernote.html">Summernote Editor</a></li>
											<li><a href="page-editors-ckeditor.html">CKEditor</a></li>
											<li><a href="page-editors-wysihtml5.html">wysihtml5</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li>
								<a href="">
									<span class="menu-item-ico"><i class="material-icons">view_compact</i></span>
									<span class="menu-item-name">Layouts</span>
								</a>
								<ul>
									<li><a href="layouts-dark-header-brand.html">Dark Header Brand</a></li>
									<li><a href="layouts-dark-header-toolbar.html">Dark Header Toolbar</a></li>
									<li><a href="layouts-dark-header-full.html">Dark Header Full</a></li>
									<li><a href="layouts-dark-sidebar.html">Dark Sidebar</a></li>
									<li><a href="layouts-collapsed-sidebar.html">Collapsed Sidebar</a></li>
									<li><a href="layouts-alternative-page-header.html">Alternative Page Header</a></li>
								</ul>
							</li>
							<li class="nav-main-heading">
								<span class="sidebar-mini-hide">Premade Pages & Apps</span>
							</li>
							<li>
								<a href="">
									<span class="menu-item-ico"><i class="material-icons">insert_drive_file</i></span>
									<span class="menu-item-name">Pages</span>
								</a>
								<ul>
									<li>
										<a href="#">Authentication <span class="badge badge-default">4</span></a>
										<ul>
											<li><a href="page-authentication-forgot-password.html">Forgot Password</a></li>
											<li><a href="page-authentication-login.html">Login Page</a></li>
											<li><a href="page-authentication-lock.html">Lock Page</a></li>
											<li><a href="page-authentication-register.html">Register</a></li>
										</ul>
									</li>
									<li><a href="page-blank.html">Blank Page</a></li>
									<li><a href="page-helpfaq.html">Help & FAQ</a></li>
									<li><a href="page-invoice.html">Invoice</a></li>
									<li><a href="page-maintenance.html">Maintenance</a></li>
									<li><a href="page-pricing.html">Pricing Tables</a></li>
									<li><a href="page-settings.html">Settings</a></li>
									<li>
										<a href="">Errors</a>
										<ul>
											<li><a href="page-error-404.html">Error 404</a></li>
											<li><a href="page-error-500.html">Error 500</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li>
								<a href="page-calendar.html" class="btn-ripple">
									<span class="menu-item-ico"><i class="material-icons">event</i></span>
									<span class="menu-item-name">Calendar</span>
								</a>
							</li>
							<li>
								<a href="page-charts.html" class="btn-ripple">
									<span class="menu-item-ico"><i class="material-icons">insert_chart</i></span>
									<span class="menu-item-name">Charts</span>
								</a>
								<ul>
									<li><a href="page-charts-sparklines.html">Sparklines</a></li>
									<li><a href="page-charts-peity.html">Peity</a></li>
									<li><a href="page-charts-simplePieCharts.html">Simple Pie Charts</a></li>
									<li><a href="page-charts-chartist.html">Chartist.js</a></li>
									<li><a href="page-charts-nvd3.html">NVD3</a></li>
								</ul>
							</li>
							<li class="nav-main-heading">
								<span class="sidebar-mini-hide">Multi Level Menu</span>
							</li>
							<li>
								<a href="#" class="btn-ripple">
									<span class="menu-item-ico"><i class="fa fa-file-pdf-o"></i></span>
									<span class="menu-item-parent">Parent Item</span>
									<span class="label label-primary">8</span>
								</a>
								<ul>
									<li>
										<a href="#">Subitem 1</a>
										<ul>
											<li><a href="#">Level 2-1</a></li>
											<li><a href="#">Level 2-2</a></li>
											<li>
												<a href="#">Level 2-3</a>
												<ul>
													<li><a href="#">Level 3-1</a></li>
													<li>
														<a href="#">Level 3-2</a>
														<ul>
															<li><a href="#">Level 4-1</a></li>
															<li><a href="#">Level 4-2</a></li>
															<li>
																<a href="#">Level 4-3</a>
																<ul>
																	<li><a href="#">Level 5-1</a></li>
																	<li>
																		<a href="#">Level 5-2</a>
																		<ul>
																			<li><a href="#">Level 6-1</a></li>
																			<li><a href="#">Level 6-2</a></li>
																			<li><a href="#">Level 6-3</a></li>
																			<li><a href="#">Level 6-4</a></li>
																			<li><a href="#">Level 6-5</a></li>
																			<li><a href="#">Level 6-6</a></li>
																			<li>
																				<a href="#">Level 6-7</a>
																				<ul>
																					<li><a href="#">Level 7-1</a></li>
																					<li>
																						<a href="#">Level 7-2</a>
																						<ul>
																							<li><a href="#">Level 8-1</a></li>
																							<li><a href="#">Level 8-2</a></li>
																						</ul>
																					</li>
																				</ul>
																			</li>
																		</ul>
																	</li>
																	<li><a href="#">Level 5-3</a></li>
																	<li><a href="#">Level 5-4</a></li>
																	<li><a href="#">Level 5-5</a></li>
																</ul>
															</li>
														</ul>
													</li>
													<li><a href="#">Level 3-3</a></li>
												</ul>
											</li>
											<li><a href="#">Level 2-4</a></li>
										</ul>
									</li>
									<li><a href="#">Subitem 2</a></li>
									<li><a href="#">Subitem 3</a></li>
								</ul>
							</li>

						</ul>
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
										<div class="user">
											<span class="username">John Doe</span>
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
				<section id="right-content-wrapper">
					<section class="page-header alternative-header">
						<ol class="breadcrumb">
							<li>Admin</li>
							<li>Dashboard</li>
							<li>Components</li>
							<li>Lists</li>
						</ol>
						<div class="page-header_title">
							<h1>
								Lists
								<span class="page-header_subtitle"></span>
							</h1>
						</div>
					</section>

					<section class="page-content">
						<div class="row">
							<div class="col-lg-12">
								<p class="lead">
									Lists present multiple line items in a vertical arrangement as a single continuous element.
								</p>								
							</div>
						</div>

						<div class="row">
							<div class="col-lg-12">
								<h2 class="text-primary">Single Line Item</h2>
							</div>
							<div class="col-lg-6">
								<h4>Examples:</h4>
								<div class="row">
									<div class="col-lg-6">
										<div class="panel panel-default">
											<div class="panel-body no-padding">
												<ul class="list">
													<li class="list-item list-1-line">
														<div class="list-item-text layout-column">
															<h3>Inbox</h3>
														</div>
													</li>
													<li class="list-item list-1-line">
														<div class="list-item-text layout-column">
															<h3>Starred</h3>
														</div>
													</li>
													<li class="list-item list-1-line">
														<div class="list-item-text layout-column">
															<h3>Sent Mail</h3>
														</div>
													</li>
													<li class="list-item list-1-line">
														<div class="list-item-text layout-column">
															<h3>Drafts</h3>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<em class="text-caption">Basic single line item list</em>
									</div>
									<div class="col-lg-6">
										<div class="panel panel-default">
											<div class="panel-body no-padding">
												<ul class="list">
													<li class="list-item list-1-line">
														<div class="list-icon">
															<i class="material-icons">inbox</i>
														</div>
														<div class="list-item-text layout-column">
															<h3>Inbox</h3>
														</div>
													</li>
													<li class="list-item list-1-line">
														<div class="list-icon">
															<i class="material-icons">star</i>
														</div>
														<div class="list-item-text layout-column">
															<h3>Starred</h3>
														</div>
													</li>
													<li class="list-item list-1-line">
														<div class="list-icon">
															<i class="material-icons">send</i>
														</div>
														<div class="list-item-text layout-column">
															<h3>Sent</h3>
														</div>
													</li>
													<li class="list-item list-1-line">
														<div class="list-icon">
															<i class="material-icons">drafts</i>
														</div>
														<div class="list-item-text layout-column">
															<h3>Drafts</h3>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<em class="text-caption">Basic single line item list with icon</em>
									</div>
									<div class="col-lg-6">
										<div class="panel panel-default">
											<div class="panel-body no-padding">
												<ul class="list">
													<li class="list-item list-1-line">
														<div class="list-icon">
															<i class="material-icons">inbox</i>
														</div>
														<div class="list-item-text layout-column">
															<h3>Inbox</h3>
														</div>
													</li>
													<li class="list-item list-1-line">
														<div class="list-icon">
															<i class="material-icons">star</i>
														</div>
														<div class="list-item-text layout-column">
															<h3>Starred</h3>
														</div>
													</li>
													<li class="list-item list-1-line">
														<div class="list-icon">
															<i class="material-icons">send</i>
														</div>
														<div class="list-item-text layout-column">
															<h3>Sent</h3>
														</div>
													</li>
													<li class="list-item list-1-line">
														<div class="list-icon">
															<i class="material-icons">drafts</i>
														</div>
														<div class="list-item-text layout-column">
															<h3>Drafts</h3>
														</div>
													</li>
													<li class="list-divider"></li>
													<li class="list-item list-1-line">
														<div class="list-item-text layout-column">
															<h3>All Mail</h3>
														</div>
														<button type="button" class="secondary-container btn btn-default btn-icon-toggle"><i class="material-icons">info</i></button>
													</li>
													<li class="list-item list-1-line">
														<div class="list-item-text layout-column">
															<h3>Trash</h3>
														</div>
														<button type="button" class="secondary-container btn btn-default btn-icon-toggle"><i class="material-icons">info</i></button>
													</li>
													<li class="list-item list-1-line">
														<div class="list-item-text layout-column">
															<h3>Spam</h3>
														</div>
														<button type="button" class="secondary-container btn btn-default btn-icon-toggle"><i class="material-icons">info</i></button>
													</li>
													<li class="list-item list-1-line">
														<div class="list-item-text layout-column">
															<h3>Follow Up</h3>
														</div>
														<button type="button" class="secondary-container btn btn-default btn-icon-toggle"><i class="material-icons">info</i></button>
													</li>
												</ul>
											</div>
										</div>
										<em class="text-caption">Basic single line item list with icon and divider</em>
									</div>
									<div class="col-lg-6">
										<div class="panel panel-default">
											<div class="panel-body no-padding">
												<ul class="list">
													<li class="list-subheader">
														<div class="subheader-inner">
															<span class="subheader-content">Recent chat</span>
														</div>
													</li>
													<li class="list-item list-1-line">
														<img src="img/avatar.png" class="list-avatar" alt="Avatar">
														<div class="list-item-text layout-column">
															<h3>Abbey Christensen</h3>
														</div>
														<button type="button" class="secondary-container btn btn-default btn-icon-toggle"><i class="material-icons">chat_bubble</i></button>
													</li>
													<li class="list-item list-1-line">
														<img src="img/avatar.png" class="list-avatar" alt="Avatar">
														<div class="list-item-text layout-column">
															<h3>Alex Nelson</h3>
														</div>
														<button type="button" class="secondary-container btn btn-default btn-icon-toggle"><i class="material-icons">chat_bubble</i></button>
													</li>
													<li class="list-item list-1-line">
														<img src="img/avatar.png" class="list-avatar" alt="Avatar">
														<div class="list-item-text layout-column">
															<h3>Mary Johnson</h3>
														</div>
														<button type="button" class="secondary-container btn btn-default btn-icon-toggle"><i class="material-icons">chat_bubble</i></button>
													</li>
													<li class="list-subheader">
														<div class="subheader-inner">
															<span class="subheader-content">Previous chats</span>
														</div>
													</li>
													<li class="list-item list-1-line">
														<img src="img/avatar.png" class="list-avatar" alt="Avatar">
														<div class="list-item-text layout-column">
															<h3>Peter Carlsson</h3>
														</div>
														<button type="button" class="secondary-container btn btn-default btn-icon-toggle"><i class="material-icons">chat_bubble</i></button>
													</li>
													<li class="list-item list-1-line">
														<img src="img/avatar.png" class="list-avatar" alt="Avatar">
														<div class="list-item-text layout-column">
															<h3>Trevor Hansen</h3>
														</div>
														<button type="button" class="secondary-container btn btn-default btn-icon-toggle"><i class="material-icons">chat_bubble</i></button>
													</li>
												</ul>
											</div>
										</div>
										<em class="text-caption">Basic single line item list with icon, divider and subheader</em>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<h4>HTML Code:</h4>
								<div class="panel panel-default">
									<div class="panel-body height-12">
										<pre><xmp><div class="row">
	<div class="col-lg-6">
		<div class="panel panel-default">
			<div class="panel-body no-padding">
				<ul class="list">
					<li class="list-item list-1-line">
						<div class="list-item-text layout-column">
							<h3>Inbox</h3>
						</div>
					</li>
					<li class="list-item list-1-line">
						<div class="list-item-text layout-column">
							<h3>Starred</h3>
						</div>
					</li>
					<li class="list-item list-1-line">
						<div class="list-item-text layout-column">
							<h3>Sent Mail</h3>
						</div>
					</li>
					<li class="list-item list-1-line">
						<div class="list-item-text layout-column">
							<h3>Drafts</h3>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<em class="text-caption">Basic single line item list</em>
	</div>
	<div class="col-lg-6">
		<div class="panel panel-default">
			<div class="panel-body no-padding">
				<ul class="list">
					<li class="list-item list-1-line">
						<div class="list-icon">
							<i class="material-icons">inbox</i>
						</div>
						<div class="list-item-text layout-column">
							<h3>Inbox</h3>
						</div>
					</li>
					<li class="list-item list-1-line">
						<div class="list-icon">
							<i class="material-icons">star</i>
						</div>
						<div class="list-item-text layout-column">
							<h3>Starred</h3>
						</div>
					</li>
					<li class="list-item list-1-line">
						<div class="list-icon">
							<i class="material-icons">send</i>
						</div>
						<div class="list-item-text layout-column">
							<h3>Sent</h3>
						</div>
					</li>
					<li class="list-item list-1-line">
						<div class="list-icon">
							<i class="material-icons">drafts</i>
						</div>
						<div class="list-item-text layout-column">
							<h3>Drafts</h3>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<em class="text-caption">Basic single line item list with icon</em>
	</div>
	<div class="col-lg-6">
		<div class="panel panel-default">
			<div class="panel-body no-padding">
				<ul class="list">
					<li class="list-item list-1-line">
						<div class="list-icon">
							<i class="material-icons">inbox</i>
						</div>
						<div class="list-item-text layout-column">
							<h3>Inbox</h3>
						</div>
					</li>
					<li class="list-item list-1-line">
						<div class="list-icon">
							<i class="material-icons">star</i>
						</div>
						<div class="list-item-text layout-column">
							<h3>Starred</h3>
						</div>
					</li>
					<li class="list-item list-1-line">
						<div class="list-icon">
							<i class="material-icons">send</i>
						</div>
						<div class="list-item-text layout-column">
							<h3>Sent</h3>
						</div>
					</li>
					<li class="list-item list-1-line">
						<div class="list-icon">
							<i class="material-icons">drafts</i>
						</div>
						<div class="list-item-text layout-column">
							<h3>Drafts</h3>
						</div>
					</li>
					<li class="list-divider"></li>
					<li class="list-item list-1-line">
						<div class="list-item-text layout-column">
							<h3>All Mail</h3>
						</div>
						<button type="button" class="secondary-container btn btn-default btn-icon-toggle"><i class="material-icons">info</i></button>
					</li>
					<li class="list-item list-1-line">
						<div class="list-item-text layout-column">
							<h3>Trash</h3>
						</div>
						<button type="button" class="secondary-container btn btn-default btn-icon-toggle"><i class="material-icons">info</i></button>
					</li>
					<li class="list-item list-1-line">
						<div class="list-item-text layout-column">
							<h3>Spam</h3>
						</div>
						<button type="button" class="secondary-container btn btn-default btn-icon-toggle"><i class="material-icons">info</i></button>
					</li>
					<li class="list-item list-1-line">
						<div class="list-item-text layout-column">
							<h3>Follow Up</h3>
						</div>
						<button type="button" class="secondary-container btn btn-default btn-icon-toggle"><i class="material-icons">info</i></button>
					</li>
				</ul>
			</div>
		</div>
		<em class="text-caption">Basic single line item list with icon and divider</em>
	</div>
	<div class="col-lg-6">
		<div class="panel panel-default">
			<div class="panel-body no-padding">
				<ul class="list">
					<li class="list-subheader">
						<div class="subheader-inner">
							<span class="subheader-content">Recent chat</span>
						</div>
					</li>
					<li class="list-item list-1-line">
						<img src="img/avatar.png" class="list-avatar" alt="Avatar">
						<div class="list-item-text layout-column">
							<h3>Abbey Christensen</h3>
						</div>
						<button type="button" class="secondary-container btn btn-default btn-icon-toggle"><i class="material-icons">chat_bubble</i></button>
					</li>
					<li class="list-item list-1-line">
						<img src="img/avatar.png" class="list-avatar" alt="Avatar">
						<div class="list-item-text layout-column">
							<h3>Alex Nelson</h3>
						</div>
						<button type="button" class="secondary-container btn btn-default btn-icon-toggle"><i class="material-icons">chat_bubble</i></button>
					</li>
					<li class="list-item list-1-line">
						<img src="img/avatar.png" class="list-avatar" alt="Avatar">
						<div class="list-item-text layout-column">
							<h3>Mary Johnson</h3>
						</div>
						<button type="button" class="secondary-container btn btn-default btn-icon-toggle"><i class="material-icons">chat_bubble</i></button>
					</li>
					<li class="list-subheader">
						<div class="subheader-inner">
							<span class="subheader-content">Previous chats</span>
						</div>
					</li>
					<li class="list-item list-1-line">
						<img src="img/avatar.png" class="list-avatar" alt="Avatar">
						<div class="list-item-text layout-column">
							<h3>Peter Carlsson</h3>
						</div>
						<button type="button" class="secondary-container btn btn-default btn-icon-toggle"><i class="material-icons">chat_bubble</i></button>
					</li>
					<li class="list-item list-1-line">
						<img src="img/avatar.png" class="list-avatar" alt="Avatar">
						<div class="list-item-text layout-column">
							<h3>Trevor Hansen</h3>
						</div>
						<button type="button" class="secondary-container btn btn-default btn-icon-toggle"><i class="material-icons">chat_bubble</i></button>
					</li>
				</ul>
			</div>
		</div>
		<em class="text-caption">Basic single line item list with icon, divider and subheader</em>
	</div>
</div></xmp></pre>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<h2 class="text-primary">2 Line Item</h2>
							</div>
							<div class="col-lg-6">
								<h4>Examples:</h4>
								<div class="row">
									<div class="col-lg-6">
										<div class="panel panel-default">
											<div class="panel-body no-padding">
												<ul class="list">
													<li class="list-item list-2-line">
														<div class="list-item-text layout-column">
															<h3>Profile Photo</h3>
															<p>Change your profile photo</p>
														</div>
													</li>
													<li class="list-item list-2-line">
														<div class="list-item-text layout-column">
															<h3>Show your status</h3>
															<p>Your status is visible to everyone you use with</p>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<em class="text-caption">Example of a two-line list</em>
									</div>
									<div class="col-lg-6">
										<div class="panel panel-default">
											<div class="panel-body no-padding">
												<ul class="list">
													<li class="list-item list-2-line">
														<div class="list-icon">
															<i class="material-icons">phone</i>
														</div>
														<div class="list-item-text layout-column">
															<h3>(650) 555-1234</h3>
															<p>Mobile</p>
														</div>
													</li>
													<li class="list-item list-2-line">
														<div class="list-item-text list-offset">
															<h3>(323) 555-6789</h3>
															<p>Work</p>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<em class="text-caption">Example of a two-line list with icon</em>
									</div>
									<div class="col-lg-6">
										<div class="panel panel-default">
											<div class="panel-body no-padding">
												<ul class="list">
													<li class="list-item list-2-line">
														<div class="list-icon">
															<i class="material-icons">phone</i>
														</div>
														<div class="list-item-text layout-column">
															<h3>(650) 555-1234</h3>
															<p>Mobile</p>
														</div>
													</li>
													<li class="list-item list-2-line">
														<div class="list-item-text list-offset">
															<h3>(323) 555-6789</h3>
															<p>Work</p>
														</div>
													</li>
													<li class="list-divider inset-divider"></li>
													<li class="list-item list-2-line">
														<div class="list-icon">
															<i class="material-icons">mail</i>
														</div>
														<div class="list-item-text layout-column">
															<h3>aliconnors@example.com</h3>
															<p>Personal</p>
														</div>
													</li>
													<li class="list-item list-2-line">
														<div class="list-item-text list-offset">
															<h3>ali_connors@example.com</h3>
															<p>Work</p>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<em class="text-caption">Example of a two-line list with icon and divider</em>
									</div>
									<div class="col-lg-6">
										<div class="panel panel-default">
											<div class="panel-body no-padding">
												<ul class="list">
													<li class="list-subheader">
														<div class="subheader-inner">
															<span class="subheader-content">Folders</span>
														</div>
													</li>
													<li class="list-item list-2-line">
														<div class="list-icon list-avatar-icon">
															<i class="material-icons">folder</i>
														</div>
														<div class="list-item-text layout-column">
															<h3>Photos</h3>
															<p>Jan 9, 2014</p>
														</div>
														<button type="button" class="secondary-container btn btn-default btn-icon-toggle"><i class="material-icons">info</i></button>
													</li>
													<li class="list-item list-2-line">
														<div class="list-icon list-avatar-icon">
															<i class="material-icons">folder</i>
														</div>
														<div class="list-item-text layout-column">
															<h3>Recipes</h3>
															<p>Jan 17, 2014</p>
														</div>
														<button type="button" class="secondary-container btn btn-default btn-icon-toggle"><i class="material-icons">info</i></button>
													</li>
													<li class="list-item list-2-line">
														<div class="list-icon list-avatar-icon">
															<i class="material-icons">folder</i>
														</div>
														<div class="list-item-text layout-column">
															<h3>Work</h3>
															<p>Jan 28, 2014</p>
														</div>
														<button type="button" class="secondary-container btn btn-default btn-icon-toggle"><i class="material-icons">info</i></button>
													</li>
													<li class="list-subheader subheader-offset">
														<div class="subheader-inner">
															<span class="subheader-content">Files</span>
														</div>
													</li>
													<li class="list-item list-2-line">
														<div class="list-icon list-avatar-icon">
															<i class="material-icons">description</i>
														</div>
														<div class="list-item-text layout-column">
															<h3>Vacation itinerary</h3>
															<p>Jan 20,2014</p>
														</div>
														<button type="button" class="secondary-container btn btn-default btn-icon-toggle"><i class="material-icons">info</i></button>
													</li>
												</ul>
											</div>
										</div>
										<em class="text-caption">Example of a two-line list with icon, divider and subheader</em>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<h4>HTML Code:</h4>
								<div class="panel panel-default">
	<div class="panel-body height-12">
		<pre><xmp><div class="row">
	<div class="col-lg-6">
		<div class="panel panel-default">
			<div class="panel-body no-padding">
				<ul class="list">
					<li class="list-item list-2-line">
						<div class="list-item-text layout-column">
							<h3>Profile Photo</h3>
							<p>Change your profile photo</p>
						</div>
					</li>
					<li class="list-item list-2-line">
						<div class="list-item-text layout-column">
							<h3>Show your status</h3>
							<p>Your status is visible to everyone you use with</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<em class="text-caption">Example of a two-line list</em>
	</div>
	<div class="col-lg-6">
		<div class="panel panel-default">
			<div class="panel-body no-padding">
				<ul class="list">
					<li class="list-item list-2-line">
						<div class="list-icon">
							<i class="material-icons">phone</i>
						</div>
						<div class="list-item-text layout-column">
							<h3>(650) 555-1234</h3>
							<p>Mobile</p>
						</div>
					</li>
					<li class="list-item list-2-line">
						<div class="list-item-text list-offset">
							<h3>(323) 555-6789</h3>
							<p>Work</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<em class="text-caption">Example of a two-line list with icon</em>
	</div>
	<div class="col-lg-6">
		<div class="panel panel-default">
			<div class="panel-body no-padding">
				<ul class="list">
					<li class="list-item list-2-line">
						<div class="list-icon">
							<i class="material-icons">phone</i>
						</div>
						<div class="list-item-text layout-column">
							<h3>(650) 555-1234</h3>
							<p>Mobile</p>
						</div>
					</li>
					<li class="list-item list-2-line">
						<div class="list-item-text list-offset">
							<h3>(323) 555-6789</h3>
							<p>Work</p>
						</div>
					</li>
					<li class="list-divider inset-divider"></li>
					<li class="list-item list-2-line">
						<div class="list-icon">
							<i class="material-icons">mail</i>
						</div>
						<div class="list-item-text layout-column">
							<h3>aliconnors@example.com</h3>
							<p>Personal</p>
						</div>
					</li>
					<li class="list-item list-2-line">
						<div class="list-item-text list-offset">
							<h3>ali_connors@example.com</h3>
							<p>Work</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<em class="text-caption">Example of a two-line list with icon and divider</em>
	</div>
	<div class="col-lg-6">
		<div class="panel panel-default">
			<div class="panel-body no-padding">
				<ul class="list">
					<li class="list-subheader">
						<div class="subheader-inner">
							<span class="subheader-content">Folders</span>
						</div>
					</li>
					<li class="list-item list-2-line">
						<div class="list-icon list-avatar-icon">
							<i class="material-icons">folder</i>
						</div>
						<div class="list-item-text layout-column">
							<h3>Photos</h3>
							<p>Jan 9, 2014</p>
						</div>
						<button type="button" class="secondary-container btn btn-default btn-icon-toggle"><i class="material-icons">info</i></button>
					</li>
					<li class="list-item list-2-line">
						<div class="list-icon list-avatar-icon">
							<i class="material-icons">folder</i>
						</div>
						<div class="list-item-text layout-column">
							<h3>Recipes</h3>
							<p>Jan 17, 2014</p>
						</div>
						<button type="button" class="secondary-container btn btn-default btn-icon-toggle"><i class="material-icons">info</i></button>
					</li>
					<li class="list-item list-2-line">
						<div class="list-icon list-avatar-icon">
							<i class="material-icons">folder</i>
						</div>
						<div class="list-item-text layout-column">
							<h3>Work</h3>
							<p>Jan 28, 2014</p>
						</div>
						<button type="button" class="secondary-container btn btn-default btn-icon-toggle"><i class="material-icons">info</i></button>
					</li>
					<li class="list-subheader subheader-offset">
						<div class="subheader-inner">
							<span class="subheader-content">Files</span>
						</div>
					</li>
					<li class="list-item list-2-line">
						<div class="list-icon list-avatar-icon">
							<i class="material-icons">description</i>
						</div>
						<div class="list-item-text layout-column">
							<h3>Vacation itinerary</h3>
							<p>Jan 20,2014</p>
						</div>
						<button type="button" class="secondary-container btn btn-default btn-icon-toggle"><i class="material-icons">info</i></button>
					</li>
				</ul>
			</div>
		</div>
		<em class="text-caption">Example of a two-line list with icon, divider and subheader</em>
	</div>
</div></xmp></pre>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<h2 class="text-primary">3 Line Item</h2>
							</div>
							<div class="col-lg-6">
								<h4>Examples:</h4>
								<div class="row">
									<div class="col-lg-6">
										<div class="panel panel-default">
											<div class="panel-body no-padding">
												<ul class="list">
													<li class="list-item list-3-line">
														<div class="list-item-text layout-column">
															<h3>Ali Connors</h3>
															<h4>Brunch this weekend?</h4>
															<p>I'll be in your neighborhood doing errands...</p>
														</div>
													</li>
													<li class="list-item list-3-line">
														<div class="list-item-text layout-column">
															<h3>Me, Scott, Jennifer</h3>
															<h4>Summer BBQ</h4>
															<p>Wish I could come, but I'm out of town this...</p>
														</div>
													</li>
													<li class="list-item list-3-line">
														<div class="list-item-text layout-column">
															<h3>Sandra Adams</h3>
															<h4>Oui oui</h4>
															<p>Do you have anu recommendations? Have...</p>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<em class="text-caption">Example of a three-line list</em>
									</div>
									<div class="col-lg-6">
										<div class="panel panel-default">
											<div class="panel-body no-padding">
												<ul class="list">
													<li class="list-item list-3-line">
														<img src="img/avatar.png" class="list-avatar" alt="Avatar">
														<div class="list-item-text layout-column">
															<h3>Ali Connors</h3>
															<h4>Brunch this weekend?</h4>
															<p>I'll be in your neighborhood doing errands...</p>
														</div>
													</li>
													<li class="list-item list-3-line">
														<img src="img/avatar.png" class="list-avatar" alt="Avatar">
														<div class="list-item-text layout-column">
															<h3>Me, Scott, Jennifer</h3>
															<h4>Summer BBQ</h4>
															<p>Wish I could come, but I'm out of town this...</p>
														</div>
													</li>
													<li class="list-item list-3-line">
														<img src="img/avatar.png" class="list-avatar" alt="Avatar">
														<div class="list-item-text layout-column">
															<h3>Sandra Adams</h3>
															<h4>Oui oui</h4>
															<p>Do you have anu recommendations? Have...</p>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<em class="text-caption">Example of a three-line list with avatar</em>
									</div>
									<div class="col-lg-6">
										<div class="panel panel-default">
											<div class="panel-body no-padding">
												<ul class="list">
													<li class="list-item list-3-line">
														<img src="img/avatar.png" class="list-avatar" alt="Avatar">
														<div class="list-item-text layout-column">
															<h3>Ali Connors</h3>
															<h4>Brunch this weekend?</h4>
															<p>I'll be in your neighborhood doing errands...</p>
														</div>
													</li>
													<li class="list-divider inset-divider"></li>
													<li class="list-item list-3-line">
														<img src="img/avatar.png" class="list-avatar" alt="Avatar">
														<div class="list-item-text layout-column">
															<h3>Me, Scott, Jennifer</h3>
															<h4>Summer BBQ</h4>
															<p>Wish I could come, but I'm out of town this...</p>
														</div>
													</li>
													<li class="list-divider inset-divider"></li>
													<li class="list-item list-3-line">
														<img src="img/avatar.png" class="list-avatar" alt="Avatar">
														<div class="list-item-text layout-column">
															<h3>Sandra Adams</h3>
															<h4>Oui oui</h4>
															<p>Do you have anu recommendations? Have...</p>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<em class="text-caption">Example of a three-line list with avatar and divider</em>
									</div>
									<div class="col-lg-6">
										<div class="panel panel-default">
											<div class="panel-body no-padding">
												<ul class="list">
													<li class="list-subheader subheader-offset">
														<div class="subheader-inner">
															<span class="subheader-content">Today</span>
														</div>
													</li>
													<li class="list-item list-3-line">
														<img src="img/avatar.png" class="list-avatar" alt="Avatar">
														<div class="list-item-text layout-column">
															<h3>Ali Connors</h3>
															<h4>Brunch this weekend?</h4>
															<p>I'll be in your neighborhood doing errands...</p>
														</div>
													</li>
													<li class="list-divider inset-divider"></li>
													<li class="list-item list-3-line">
														<img src="img/avatar.png" class="list-avatar" alt="Avatar">
														<div class="list-item-text layout-column">
															<h3>Me, Scott, Jennifer</h3>
															<h4>Summer BBQ</h4>
															<p>Wish I could come, but I'm out of town this...</p>
														</div>
													</li>
													<li class="list-subheader subheader-offset">
														<div class="subheader-inner">
															<span class="subheader-content">Yesterday</span>
														</div>
													</li>
													<li class="list-item list-3-line">
														<img src="img/avatar.png" class="list-avatar" alt="Avatar">
														<div class="list-item-text layout-column">
															<h3>Sandra Adams</h3>
															<h4>Oui oui</h4>
															<p>Do you have anu recommendations? Have...</p>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<em class="text-caption">Example of a three-line list with avatar, divider and subheader</em>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<h4>HTML Code:</h4>
								<div class="panel panel-default">
									<div class="panel-body height-12">
										<pre><xmp><div class="row">
	<div class="col-lg-6">
		<div class="panel panel-default">
			<div class="panel-body no-padding">
				<ul class="list">
					<li class="list-item list-3-line">
						<div class="list-item-text layout-column">
							<h3>Ali Connors</h3>
							<h4>Brunch this weekend?</h4>
							<p>I'll be in your neighborhood doing errands...</p>
						</div>
					</li>
					<li class="list-item list-3-line">
						<div class="list-item-text layout-column">
							<h3>Me, Scott, Jennifer</h3>
							<h4>Summer BBQ</h4>
							<p>Wish I could come, but I'm out of town this...</p>
						</div>
					</li>
					<li class="list-item list-3-line">
						<div class="list-item-text layout-column">
							<h3>Sandra Adams</h3>
							<h4>Oui oui</h4>
							<p>Do you have anu recommendations? Have...</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<em class="text-caption">Example of a three-line list</em>
	</div>
	<div class="col-lg-6">
		<div class="panel panel-default">
			<div class="panel-body no-padding">
				<ul class="list">
					<li class="list-item list-3-line">
						<img src="img/avatar.png" class="list-avatar" alt="Avatar">
						<div class="list-item-text layout-column">
							<h3>Ali Connors</h3>
							<h4>Brunch this weekend?</h4>
							<p>I'll be in your neighborhood doing errands...</p>
						</div>
					</li>
					<li class="list-item list-3-line">
						<img src="img/avatar.png" class="list-avatar" alt="Avatar">
						<div class="list-item-text layout-column">
							<h3>Me, Scott, Jennifer</h3>
							<h4>Summer BBQ</h4>
							<p>Wish I could come, but I'm out of town this...</p>
						</div>
					</li>
					<li class="list-item list-3-line">
						<img src="img/avatar.png" class="list-avatar" alt="Avatar">
						<div class="list-item-text layout-column">
							<h3>Sandra Adams</h3>
							<h4>Oui oui</h4>
							<p>Do you have anu recommendations? Have...</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<em class="text-caption">Example of a three-line list with avatar</em>
	</div>
	<div class="col-lg-6">
		<div class="panel panel-default">
			<div class="panel-body no-padding">
				<ul class="list">
					<li class="list-item list-3-line">
						<img src="img/avatar.png" class="list-avatar" alt="Avatar">
						<div class="list-item-text layout-column">
							<h3>Ali Connors</h3>
							<h4>Brunch this weekend?</h4>
							<p>I'll be in your neighborhood doing errands...</p>
						</div>
					</li>
					<li class="list-divider inset-divider"></li>
					<li class="list-item list-3-line">
						<img src="img/avatar.png" class="list-avatar" alt="Avatar">
						<div class="list-item-text layout-column">
							<h3>Me, Scott, Jennifer</h3>
							<h4>Summer BBQ</h4>
							<p>Wish I could come, but I'm out of town this...</p>
						</div>
					</li>
					<li class="list-divider inset-divider"></li>
					<li class="list-item list-3-line">
						<img src="img/avatar.png" class="list-avatar" alt="Avatar">
						<div class="list-item-text layout-column">
							<h3>Sandra Adams</h3>
							<h4>Oui oui</h4>
							<p>Do you have anu recommendations? Have...</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<em class="text-caption">Example of a three-line list with avatar and divider</em>
	</div>
	<div class="col-lg-6">
		<div class="panel panel-default">
			<div class="panel-body no-padding">
				<ul class="list">
					<li class="list-subheader subheader-offset">
						<div class="subheader-inner">
							<span class="subheader-content">Today</span>
						</div>
					</li>
					<li class="list-item list-3-line">
						<img src="img/avatar.png" class="list-avatar" alt="Avatar">
						<div class="list-item-text layout-column">
							<h3>Ali Connors</h3>
							<h4>Brunch this weekend?</h4>
							<p>I'll be in your neighborhood doing errands...</p>
						</div>
					</li>
					<li class="list-divider inset-divider"></li>
					<li class="list-item list-3-line">
						<img src="img/avatar.png" class="list-avatar" alt="Avatar">
						<div class="list-item-text layout-column">
							<h3>Me, Scott, Jennifer</h3>
							<h4>Summer BBQ</h4>
							<p>Wish I could come, but I'm out of town this...</p>
						</div>
					</li>
					<li class="list-subheader subheader-offset">
						<div class="subheader-inner">
							<span class="subheader-content">Yesterday</span>
						</div>
					</li>
					<li class="list-item list-3-line">
						<img src="img/avatar.png" class="list-avatar" alt="Avatar">
						<div class="list-item-text layout-column">
							<h3>Sandra Adams</h3>
							<h4>Oui oui</h4>
							<p>Do you have anu recommendations? Have...</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<em class="text-caption">Example of a three-line list with avatar, divider and subheader</em>
	</div>
</div></xmp></pre>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<h2 class="text-primary">3 Line Item, long paragraph</h2>
							</div>
							<div class="col-lg-6">
								<h4>Examples:</h4>
								<div class="panel panel-default">
									<div class="panel-body no-padding">
										<ul class="list">
											<li class="list-item list-3-line long-text">
												<img src="img/avatar.png" class="list-avatar" alt="Avatar">
												<div class="list-item-text">
													<h3>Min Li Chan</h3>
													<p>
														Secondary line text Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam massa quam.
														Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum
														velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
													</p>
												</div>
											</li>
											<li class="list-item list-3-line long-text">
												<img src="img/avatar.png" class="list-avatar" alt="Avatar">
												<div class="list-item-text">
													<h3>Min Li Chan</h3>
													<p>
														Secondary line text Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam massa quam.
														Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum
														velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
													</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<em class="text-caption">Example of a three-line list item, long paragraph</em>
							</div>
							<div class="col-lg-6">
								<h4>HTML Code:</h4>
								<div class="panel panel-default">
									<div class="panel-body height-4">
										<pre><xmp><div class="panel-body no-padding">
	<ul class="list">
		<li class="list-item list-3-line long-text">
			<img src="img/avatar.png" class="list-avatar" alt="Avatar">
			<div class="list-item-text">
				<h3>Min Li Chan</h3>
				<p>
					Secondary line text Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam massa quam.
					Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum
					velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
				</p>
			</div>
		</li>
		<li class="list-item list-3-line long-text">
			<img src="img/avatar.png" class="list-avatar" alt="Avatar">
			<div class="list-item-text">
				<h3>Min Li Chan</h3>
				<p>
					Secondary line text Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam massa quam.
					Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum
					velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
				</p>
			</div>
		</li>
	</ul>
</div></xmp></pre>
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

	</body>
</html>