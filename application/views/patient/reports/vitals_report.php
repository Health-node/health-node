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
									<h5 class="text-capitalize">Vitals Reports</h5>
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

											<table id="datable_2" class="table table-hover display  pb-30">
												<thead>
													<tr>
														<th>ID</th>
														<th>Visit</th>
														<th>Patient</th>
														<th>Weight</th>
														<th>Length</th>
														<th>BP Systolic</th>
														<th>BP Diastolic</th>
														<th>Pulse</th>
														<th>Respiration</th>
														<th>Temperature</th>
														<th>Oxygen Saturation</th>
														<th>Head Circumference</th>
														<th>Waist Circumference</th>
														<th>BMI</th>
													</tr>
												</thead>

												<tbody>
													<?php foreach ($vital_report as $vr) { ?>
														<tr>
															<td><?php echo $vr->VitalID ?></td>
															<td><a href="<?php echo base_url() ?>patient/visits_list" style="color: red"><?php $id = explode("#", $vr->Visit);
																																			echo $id[1] ?></a></td>
															<td><?php echo $vr->Patient ?></td>
															<td><?php echo $vr->Weight ?></td>
															<td><?php echo $vr->Length ?></td>
															<td><?php echo $vr->BP_Systolic ?></td>
															<td><?php echo $vr->BP_Diastolic ?></td>
															<td><?php echo $vr->Pulse ?></td>
															<td><?php echo $vr->Respiration ?></td>
															<td><?php echo $vr->Temperature ?></td>
															<td><?php echo $vr->Oxygen_Saturation ?></td>
															<td><?php echo $vr->Head_Circumference ?></td>
															<td><?php echo $vr->Waist_Circumference ?></td>
															<td><?php echo $vr->BMI ?></td>
															<!-- <td><?php $id = explode(".", $vr->Patient);
																		echo $id[2] ?></td> -->
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
			<!-- <?php $this->load->view('admin/footer'); ?> -->
			<!-- /Footer -->

		</div>
		<!-- /Main Content -->

		</div>
		<!-- /#wrapper -->