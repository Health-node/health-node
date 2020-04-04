<div class="page-wrapper">
			<div class="container-fluid pt-20">
				<!-- <div class="panel">
					<div class="panel-body"> -->
				<h4 class="pb-15 text-uppercase">Reports</h4>
				<!-- </div>
				</div> -->



				<!-- Row -->
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="panel panel-default card-view panel-refresh">
							<div class="refresh-container">
								<div class="la-anim-1"></div>
							</div>
							<div class="panel-heading sm-data-box">
								<div class="pull-left">
									<h5 class="text-capitalize">Allergy Reports</h5>
								</div>
								<div class="pull-right">
									<!-- <a href="#" class="pull-left inline-block refresh mr-15">
										<i class="zmdi zmdi-replay"></i>
									</a> -->
									<!-- <a href="#" class="pull-left inline-block full-screen mr-15">
										<i class="zmdi zmdi-fullscreen"></i>
									</a> -->
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body row pa-0">
									<div class="table-wrap">
										<div class="table-responsive">

											<table id="datable_2" class="table  display table-hover border-none">
												<thead>
													<tr>
														<th>ID</th>
														<th>Visit</th>
														<th>Allergy Name</th>
														<th>Allergy Type</th>
														<th>Drug Class</th>
														<th>Observed/Historical</th>
														<th>Reaction</th>
														<th>Location</th>
														<th>Date</th>
														<th>Comments</th>
														<th>Status</th>
														<th>Participant</th>
													</tr>
												</thead>

												<tbody>
													<?php foreach ($allergy_report as $pr) { ?>
														<tr>
															<td><?php echo $pr->reportID ?></td>
															<td><a href="<?php echo base_url() ?>patient/visits_list" style="color: red"><?php $id = explode("#", $pr->Visit);
																																			echo $id[1] ?></a></td>
															<td><?php echo $pr->Allergy_Name ?></td>
															<td><?php echo $pr->Allergy_Type ?></td>
															<td><?php echo $pr->Drug_Class ?></td>
															<td><?php echo $pr->ObservedOrHistorical ?></td>
															<td><?php echo $pr->Reaction ?></td>
															<td><?php echo $pr->location ?></td>
															<td><?php echo date("Y-m-d H:i:s", strtotime($pr->Date_Entered)); ?></td>
															<td><?php echo $pr->Comments ?></td>
															<td><?php echo $pr->Status ?></td>
															<td><?php $id = explode(".", $pr->Patient);
																echo $id[2] ?></td>

														</tr>
													<?php } ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>

			<!-- Footer -->
			<?php $this->load->view('admin/footer');?>
        <!-- /Footer -->

		</div>
		<!-- /Main Content -->

		</div>
		<!-- /#wrapper -->