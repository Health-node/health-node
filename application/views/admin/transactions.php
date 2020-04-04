		<div class="page-wrapper">
			<div class="container-fluid pt-20">
				<!-- <div class="panel">
					<div class="panel-body"> -->
				<h4 class="pb-15 text-uppercase">Transactions</h4>
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
									<h5 class="dsbrd_allrgs_h5 text-uppercase">Recents Transactions</h5>
								</div>
								<div class="pull-right">
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body row pa-0">
									<div class="table-wrap">
										<div class="table-responsive">
											<!-- <table id="datable_1" class="table  display table-hover border-none"> -->
											<table class="table  display table-hover border-none">
												<thead>
													<tr>
														<th>Transaction ID</th>
														<th>Transaction Type</th>
														<th>Participant </th>
														<th>Created At</th>
														<th></th>
														<!-- <th>View</th> -->
													</tr>
												</thead>

												<tbody class="adm_td_pdng">
													<?php foreach ($transactions as $t) { ?>
														<?php if (!empty($t->eventsEmitted)) { ?>
															<tr>
																<td><?php echo $t->transactionId ?></td>
																<td><?php $id = explode(".", $t->transactionType);
																	echo $id[2];
																	?></td>
																<td><?php $id = explode("#", $t->participantInvoking);
																	echo $id[1]; ?></td>
																<td><?php echo date("Y-m-d H:i:s", strtotime($t->transactionTimestamp)); ?></td>
																<td><button class="btn btn-primary btn-rounded btn-clr btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" onclick="admin_trans_view_popup('<?php echo $t->transactionId; ?>')">Show Data</button></td>
															</tr>
														<?php } ?>
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
			<?php $this->load->view('admin/footer'); ?>
			<!-- /Footer -->

		</div>
		<!-- /Main Content -->


		<!-- /#wrapper -->

		<!-- show button popup code here -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
			<div class="modal-dialog" role="document">
				<div class="modal-content" id="content_model">
				</div>
			</div>
		</div>