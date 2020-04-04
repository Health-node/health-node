<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Health Node</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="interakt" />
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/favicon.png">
	<link rel="icon" href="<?php echo base_url() ?>assets/img/favicon.png" type="image/x-icon">
	
    <!-- Bootstrap Colorpicker CSS -->
	<link href="<?php echo base_url() ?>assets/vendors/bower_components/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet" type="text/css"/>
	<!-- select2 CSS -->
	<link href="<?php echo base_url() ?>assets/vendors/bower_components/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css"/>
	<!-- bootstrap-select CSS -->
	<link href="<?php echo base_url() ?>assets/vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>
	<!-- multi-select CSS -->
	<link href="<?php echo base_url() ?>assets/vendors/bower_components/multiselect/css/multi-select.css" rel="stylesheet" type="text/css"/>
	<!-- Bootstrap Switches CSS -->
	<link href="<?php echo base_url() ?>assets/vendors/bower_components/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
	<!-- Bootstrap Datetimepicker CSS -->
	<link href="<?php echo base_url() ?>assets/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url() ?>assets/vendors/bower_components/jquery-wizard.js/css/wizard.css" rel="stylesheet" type="text/css" />
	<!-- jquery-steps css -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/bower_components/jquery.steps/demo/css/jquery.steps.css">
	<!-- Data table CSS -->
	<link href="<?php echo base_url() ?>assets/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
	<!-- Toast CSS -->
	<link href="<?php echo base_url() ?>assets/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">
	<!-- Morris Charts CSS -->
	<link href="<?php echo base_url() ?>assets/vendors/bower_components/morris.js/morris.css" rel="stylesheet" type="text/css" />
	<!-- vector map CSS -->
	<link href="<?php echo base_url() ?>assets/vendors/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" type="text/css" />
		
	<!-- Calendar CSS -->
	<link href="<?php echo base_url() ?>assets/vendors/bower_components/fullcalendar/dist/fullcalendar.css" rel="stylesheet" type="text/css" />
	<!-- Custom CSS -->
	<link href="<?php echo base_url() ?>assets/dist/css/style.css" rel="stylesheet" type="text/css">

	<!-- Bootstrap Daterangepicker CSS -->
	<link href="<?php echo base_url() ?>assets/vendors/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css"/>
	<!-- Bootstrap table CSS -->
<link href="<?php echo base_url() ?>assets/vendors/bower_components/bootstrap-table/dist/bootstrap-table.css" rel="stylesheet" type="text/css"/>
	<!-- <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script> -->
	<style>
    /* Center the loader */
    #loader_div {
        position: absolute;
        left: 50%;
        top: 50%;
        z-index: 99999999999999999;
		width:100%;
        /* width: 150px;
        height: 150px; */
        margin: -75px 0 0 -75px;
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #00b45a;
        width: 120px;
        height: 120px;
        -webkit-animation: spin 2s linear infinite;
        animation: spin 2s linear infinite;
    }
	@-webkit-keyframes spin {
        0% {
            -webkit-transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
        }
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    /* Add animation to "page content" */
    .animate-bottom {
        position: relative;
        -webkit-animation-name: animatebottom;
        -webkit-animation-duration: 1s;
        animation-name: animatebottom;
        animation-duration: 1s
    }

    @-webkit-keyframes animatebottom {
        from {
            bottom: -100px;
            opacity: 0
        }

        to {
            bottom: 0px;
            opacity: 1
        }
    }

    @keyframes animatebottom {
        from {
            bottom: -100px;
            opacity: 0
        }

        to {
            bottom: 0;
            opacity: 1
        }
    }
	/* new1 */
	

</style>
	
</head>

<?php
	$segment1 = strtolower($this->uri->segment(1));
	$segment2 = strtolower($this->uri->segment(2));
	$segment3 = strtolower($this->uri->segment(3));
	$segment4 = strtolower($this->uri->segment(4));
?>
<input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>">
<input type="hidden" name="segment1" id="segment1" value="<?php echo $segment1; ?>">
<input type="hidden" name="segment2" id="segment2" value="<?php echo $segment2; ?>">
<input type="hidden" name="segment3" id="segment3" value="<?php echo $segment3; ?>">
<input type="hidden" name="segment4" id="segment4" value="<?php echo $segment4; ?>">

<body>
	<!-- Preloader -->
	<div class="preloader-it">
			<div class="la-anim-1"></div>
	</div>
	<!-- /Preloader -->
	<div class="wrapper theme-5-active navbar-top-green">

		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="mobile-only-brand pull-left">
				<div class="nav-header pull-left small_logo_lft">
					<div class="logo-wrap">
						<a href="#">
							<!-- <img class="brand-img logo_none_mbl" src="<?php echo base_url() ?>assets/img/log_desk.png" alt="brand" />
							<img class="brand-img logo_none_dest" src="<?php echo base_url() ?>assets/img/log_small.png" alt="brand" /> -->
							<!-- <img class="brand-img d-none d-md-block d-lg-nonelogo_none_dest" src="<?php echo base_url() ?>assets/img/sm_logo.png" alt="brand"/> -->
							<!-- <img class="brand-img dsply_none_dsk" src="<?php echo base_url() ?>assets/img/sm_logo.png" alt="brand"/> -->
							<span class="brand-text hidden-xs dsply_none_mbl"><img class="img-fluid" src="<?php echo base_url() ?>assets/img/log_desk.png" alt="brand"/></span>
							<img class="brand-img dsply_blc_mbl hidden-sm hidden-md hidden-lg" src="<?php echo base_url() ?>assets/img/log_small.png" alt="brand" />
						</a>
					</div>
				</div>
				<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="ti-align-left"></i></a>
				<!-- <a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="ti-search"></i></a> -->
				<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="ti-more"></i></a>

			</div>
			<div id="mobile_only_nav" class="mobile-only-nav pull-right">
				<ul class="nav navbar-right top-nav pull-right">
					<li class="dropdown alert-drp">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-bell top-nav-icon"></i><span class="top-nav-icon-badge">5</span></a>
						<ul class="dropdown-menu alert-dropdown" data-dropdown-in="bounceIn" data-dropdown-out="bounceOut">
							<li>
								<div class="notification-box-head-wrap">
									<span class="notification-box-head pull-left inline-block">notifications</span>
									<a class="txt-danger pull-right clear-notifications inline-block" href="javascript:void(0)"> clear all </a>
									<div class="clearfix"></div>
									<hr class="light-grey-hr ma-0" />
								</div>
							</li>
							<li>
								<div class="streamline message-nicescroll-bar">
									<div class="sl-item">
										<a href="javascript:void(0)">
											<div class="icon bg-green">
												<i class="ti-briefcase "></i>
											</div>
											<div class="sl-content">
												<span class="inline-block capitalize-font  pull-left truncate head-notifications">
													New subscription created</span>
												<span class="inline-block font-11  pull-right notifications-time">2pm</span>
												<div class="clearfix"></div>
												<p class="truncate">Your customer subscribed for the basic plan. The customer will pay $25 per month.</p>
											</div>
										</a>
									</div>
									<hr class="light-grey-hr ma-0" />
									<div class="sl-item">
										<a href="javascript:void(0)">
											<div class="icon bg-yellow">
												<i class="zmdi zmdi-trending-down"></i>
											</div>
											<div class="sl-content">
												<span class="inline-block capitalize-font  pull-left truncate head-notifications txt-warning">Server #2 not responding</span>
												<span class="inline-block font-11 pull-right notifications-time">1pm</span>
												<div class="clearfix"></div>
												<p class="truncate">Some technical error occurred needs to be resolved.</p>
											</div>
										</a>
									</div>
									<hr class="light-grey-hr ma-0" />
									<div class="sl-item">
										<a href="javascript:void(0)">
											<div class="icon bg-blue">
												<i class="zmdi zmdi-email"></i>
											</div>
											<div class="sl-content">
												<span class="inline-block capitalize-font  pull-left truncate head-notifications">2 new messages</span>
												<span class="inline-block font-11  pull-right notifications-time">4pm</span>
												<div class="clearfix"></div>
												<p class="truncate"> The last payment for your G Suite Basic subscription failed.</p>
											</div>
										</a>
									</div>
									<hr class="light-grey-hr ma-0" />
									<div class="sl-item">
										<a href="javascript:void(0)">
											<div class="sl-avatar">
												<img class="img-responsive" src="<?php echo base_url() ?>assets/img/avatar.jpg" alt="avatar" />
											</div>
											<div class="sl-content">
												<span class="inline-block capitalize-font  pull-left truncate head-notifications">Sandy Doe</span>
												<span class="inline-block font-11  pull-right notifications-time">1pm</span>
												<div class="clearfix"></div>
												<p class="truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
											</div>
										</a>
									</div>
								</div>
							</li>
							<li>
								<div class="notification-box-bottom-wrap">
									<hr class="light-grey-hr ma-0" />
									<a class="block text-center read-all" href="javascript:void(0)"> read all </a>
									<div class="clearfix"></div>
								</div>
							</li>
						</ul>
					</li>
					<li class="dropdown auth-drp">
						<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="<?php echo base_url() ?>assets/img/user1.png" alt="user_auth" class="user-auth-img img-circle" /><span class="user-online-status"></span></a>
						<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
						<?php if ($this->luser->data->userType != 'composer') { ?>
							<li>
								<a href="<?php echo base_url() ?>profile/profile_view"><i class="zmdi zmdi-account"></i><span>Profile</span></a>
							</li>
						<?php } ?>
							<li>
								<a href="#"><i class="zmdi zmdi-card"></i><span>my balance</span></a>
							</li>
							<li>
								<a href="inbox.html"><i class="zmdi zmdi-email"></i><span>Inbox</span></a>
							</li>
							<li>
								<a href="#"><i class="zmdi zmdi-settings"></i><span>Settings</span></a>
							</li>
							<li class="divider"></li>
							<li class="sub-menu show-on-hover">
								<a href="#" class="dropdown-toggle pr-0 level-2-drp"><i class="zmdi zmdi-check text-success"></i> available</a>
								<ul class="dropdown-menu open-left-side">
									<li>
										<a href="#"><i class="zmdi zmdi-check text-success"></i><span>available</span></a>
									</li>
									<li>
										<a href="#"><i class="zmdi zmdi-circle-o text-warning"></i><span>busy</span></a>
									</li>
									<li>
										<a href="#"><i class="zmdi zmdi-minus-circle-outline text-danger"></i><span>offline</span></a>
									</li>
								</ul>
							</li>
							<li class="divider"></li>
							<li>
								<a href="<?php echo base_url(); ?>base/logout"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	

