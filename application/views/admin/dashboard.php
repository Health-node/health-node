<?php if ($is_ajax == 0) { ?>
	<div class="page-wrapper">
		<div class="container-fluid pt-20">
			<h4 class="pb-15 text-uppercase">Dashboard</h4>
			<div id="loader_div" style="display: none"></div>
			<div class="alert alert-success display-hide" id="success_msg"></div>
			<div class="alert alert-danger display-hide" id="error_msg"></div>
			<?php if ($this->session->flashdata('msg')) { ?>
				<div class="alert alert-success" id="alert">
					<?php echo $this->session->flashdata('msg'); ?>
				</div>
			<?php  } else if ($this->session->flashdata('err')) { ?>
				<div class="alert alert-danger" id="alert">
					<?php echo $this->session->flashdata('err'); ?>
				</div>
			<?php  } ?>
			<!-- <div id="loader_div" ></div> -->
			<!-- <div id="loader_div" style="display: none">
				<img src="<?php echo base_url(); ?>assets/img/Loader.gif" style="position: absolute; z-index: 99; margin-left: 600px; width: 181px;top: 350px;">
				<h3 style="position: absolute; z-index: 99; margin-left: 238px; top: 543px;">Please wait while we are inserting patient details into blockchain...</h3>
			</div> -->

			<div id="dashboard">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="panel panel-default card-view panel-refresh">
							<div class="refresh-container">
								<div class="la-anim-1"></div>
							</div>
							<div class="panel-heading sm-data-box">
								<div class="pull-left">
									<h5 class="dsbrd_allrgs_h5 text-capitalize">Pending Users</h5>
								</div>
								<div class="pull-right">
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body row pa-0">
									<div class="table-wrap">
										<div class="table-responsive">
											<div id="user_data">
											<?php } ?>
											<!-- <table id="datable_1" class="table  display table-hover border-none"> -->
											<table id="datable_2" class="table  display table-hover border-none">
												<thead>
													<tr>
														<th>Participant ID</th>
														<th>Participant Name</th>
														<th>Participant Email</th>
														<th>Participant Type</th>
														<th>Created At</th>
														<th></th>
														<th>Action</th>
													</tr>
												</thead>

												<tbody id="user_infos">
													<?php if (count($users) > 0) { ?>
														<?php foreach ($users as $u) { ?>
															<tr>
																<td><?php echo $u->_id ?></td>
																<td><?php echo $u->Name ?></td>
																<td><?php echo $u->Email_ID ?></td>
																<td><?php echo $u->role ?></td>
																<td><?php echo date("Y-m-d H:i:s", strtotime($u->created_at)); ?></td>
																<td><button class="btn btn-primary btn-rounded btn-clr btn-sm mb-5 mt-5" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" onclick="pending_user_popup('<?php echo $u->_id; ?>')">Show Data</button></td>
																<td>
																	<button type="submit" class="btn btn-success btn-rounded btn-clr btn-sm mb-5 mt-5" onclick="approve_user('<?php echo $u->_id ?>') ">Approve</button>
																	<button type="submit" class="btn btn-danger btn-rounded btn-clr btn-sm mb-5 mt-5" onclick="reject_user('<?php echo $u->_id ?>') ">Reject</button>
																</td>
															</tr>
														<?php } ?>
													<?php } else { ?>
														<td></td>
														<td></td>
														<td>No records Found</td>
														<td> </td>
														<td></td>
														<td></td>
													<?php  } ?>
												</tbody>
											</table>
											<?php if ($is_ajax == 0) { ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer -->
		<?php $this->load->view('admin/footer'); ?>
		<!-- /Footer -->

		<!-- jQuery -->
		<script src="<?php echo base_url() ?>assets/vendors/bower_components/jquery/dist/jquery.min.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<!-- <script src="<?php echo base_url() ?>assets/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->

		<!-- Slimscroll JavaScript -->
		<!-- <script src="<?php echo base_url() ?>assets/dist/js/jquery.slimscroll.js"></script> -->

		<!-- Fancy Dropdown JS -->
		<!-- <script src="<?php echo base_url() ?>assets/dist/js/dropdown-bootstrap-extended.js"></script>		 -->

		<!-- Owl JavaScript -->
		<!-- <script src="<?php echo base_url() ?>assets/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script> -->

		<!-- Switchery JavaScript -->
		<!-- <script src="<?php echo base_url() ?>assets/vendors/bower_components/switchery/dist/switchery.min.js"></script> -->

		<!-- Init JavaScript -->
		<script src="<?php echo base_url() ?>assets/dist/js/init.js"></script>


	</div>
<?php } ?>

<!-- show button popup code here -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
	<div class="modal-dialog" id="content_model" role="document">

	</div>
</div>
<!-- <?php foreach ($users as $u) { ?>
	<script>
		var d = new Date("<?php echo $u->created_at ?>");
		document.getElementById("created_at_<?php echo $u->_id ?>").innerHTML = d.toLocaleString('en-ZA', {
			timeZone: 'Asia/Tokyo'
		});;
	</script>
<?php } ?> -->
<script>
	setTimeout(function() {
		document.getElementById("success_msg").style.display = "none";
	}, 5000);
	setTimeout(function() {
		document.getElementById("error_msg").style.display = "none";
	}, 5000);
	setTimeout(function() {
		document.getElementById("alert").style.display = "none";
	}, 12000);
</script>