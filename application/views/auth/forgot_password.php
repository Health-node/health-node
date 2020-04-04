<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Health Node</title>


	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/favicon.png">
	<link rel="icon" href="<?php echo base_url() ?>assets/img/favicon.ico" type="image/x-icon">

	<!-- vector map CSS -->
	<link href="<?php echo base_url() ?>assets/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css" />

	<!-- Custom CSS -->
	<link href="<?php echo base_url() ?>assets/dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<!--Preloader-->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!--/Preloader-->

	<div class="wrapper  pa-0">
		<!-- Main Content -->
		<div class="page-wrapper pa-0 ma-0 auth-page">
			<div class="forgot-bg-img">
				<div class="container-fluid  forgot-bg-colr">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float card-view pt-30 pb-30">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="sp-logo-wrap text-center pa-0 mb-10">
											<a href="">
												<img class="brand-img mr-10" src="<?php echo base_url() ?>assets/img/log_desk.png" alt="brand" />
											</a>
										</div>
										<div class="mb-30">
											<h5 class="text-center txt-dark mb-10">Forgot Password?</h5>
											<h6 class="text-center txt-grey nonecase-font">You can reset your password here.</h6>
										</div>
										<?php if ($this->session->flashdata('msg')) { ?>
											<div class="alert alert-success" id="alert">
												<?php echo $this->session->flashdata('msg'); ?>
											</div>
										<?php  } else if ($this->session->flashdata('err')) { ?>
											<div class="alert alert-danger" id="alert">
												<?php echo $this->session->flashdata('err'); ?>
											</div>
										<?php  } ?>
										<div class="form-wrap">
											<form id="forgot_password" method="POST" action="<?php echo base_url() ?>login/forgot_password">
												<div class="form-group">
													<label class="control-label mb-10" for="exampleInputEmail_2">Email address</label>
													<input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
												</div>

												<div class="form-group text-center">
													<button type="submit" class="btn btn-success btn-rounded" onclick="validate_forgot_password('forgot_password')">Reset Password</button>
												</div>

											</form>
										</div>
										<div class="text-center">
											<a href="<?php echo base_url() ?>login">
												<h6 class="txt-dark">Login Now.</h6>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->
				</div>
			</div>
		</div>
		<!-- /Main Content -->
	</div>
	<!-- /#wrapper -->

	<!-- JavaScript -->

	<!-- jQuery -->
	<script src="<?php echo base_url() ?>assets/vendors/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/custom/js/jquery.validate.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/custom/js/additional-methods.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/custom/js/validation.js" type="text/javascript"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo base_url() ?>assets/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assets/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>

	<!-- Slimscroll JavaScript -->
	<script src="<?php echo base_url() ?>assets/dist/js/jquery.slimscroll.js"></script>

	<!-- Init JavaScript -->
	<script src="<?php echo base_url() ?>assets/dist/js/init.js"></script>

</body>

</html>