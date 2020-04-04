<div class="page-wrapper">
		<div class="container-fluid pt-20">
			<h4 class="pb-15 text-uppercase">Prescription List</h4>

		<!-- Title -->
		<!-- <div class="row heading-bg">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h5 class="txt-dark" style="font-weight: bold">Prescription List</h5>
			</div>
		</div> -->
	<!-- /Title -->

	<!-- Row -->
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default card-view">
				<!-- <div class="panel-heading">
                        <div class="pull-left">
                            <h6 class="panel-title txt-dark">Prescription</h6>
                        </div>
                        <div class="clearfix"></div>
                    </div> -->
				<div class="panel-wrapper collapse in">
					<div class="panel-body">
						<div class="table-wrap">
							<div class="table-responsive">
								<table id="datable_2" class="table table-hover display  pb-30">
									<thead>
										<tr>
											<th class="pl-5">Prescription Id</th>
											<th class="pl-5">Visit</th>
											<th class="pl-5">Patient</th>
											<th class="pl-5">Doctor</th>
											<th class="pl-5">Medication</th>
											<th class="pl-5">Instructions</th>
											<th class="pl-5">Refills_Remaining</th>
											<th class="pl-5">Last_Filled_On</th>
											<th class="pl-5">Initially_Ordered_On</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($prescription_list as $pl) { ?>
											<tr>
												<td><?php echo $pl->pid ?></td>
												<td><a href="<?php echo base_url() ?>patient/visits_list" style="color: red"><?php $id = explode("#", $pl->Visit);
																																echo $id[1] ?></a></td>
												<td><?php $id = explode(".", $pl->Patient);
													echo $id[2] ?></td>
												<td><?php $id = explode(".", $pl->Doctor);
													echo $id[2] ?></td>
												<td><?php echo $pl->Medication ?></td>
												<td><?php echo $pl->Instructions ?></td>
												<td><?php echo $pl->Refills_Remaining ?></td>
												<td id="last_date_<?php echo $pl->pid ?>"></td>
												<td id="initial_date_<?php echo $pl->pid ?>"></td>
											</tr>
										<?php  } ?>
										<!-- <th><button class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#prescriptionModal" data-whatever="@mdo">View prescription</button>
												<button class="btn btn-rounded btn-success" data-toggle="modal" data-target="#diagnosticModal" data-whatever="@mdo">View diagnostic report</button>
											</th> -->
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
<?php foreach ($prescription_list as $pl) { ?>
	<script>
		var d = new Date("<?php echo $pl->Last_Filled_On ?>");
		document.getElementById("last_date_<?php echo $pl->pid ?>").innerHTML = d.toLocaleString('en-ZA', {
			timeZone: 'Asia/Tokyo'
		});;
	</script>
	<script>
		var d = new Date("<?php echo $pl->Initially_Ordered_On ?>");
		document.getElementById("initial_date_<?php echo $pl->pid ?>").innerHTML = d.toLocaleString('en-ZA', {
			timeZone: 'Asia/Tokyo'
		});;
	</script>
<?php } ?>

<!-- prescription popup code here -->
<div class="modal fade" id="prescriptionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h5 class="modal-title" id="exampleModalLabel1">Health Node</h5>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-6">
						<div class="pull-left">
							<h6>Patient Name: Tanvir Hasan</h6>
							<p>Age: 27</p>
							<p>Sex: male</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="pull-right">
							<h6>Doctor Name: Tanvir Hasan</h6>
							<p>Date: 10/03/2020</p>
							<p>Time: 10:50</p>
						</div>
					</div>
				</div>
				<div class="panel">
				</div>

				<div class="dctr_profil_pop">
					<p style="font-weight: bold">Medication:</p>
					<p>Some history </p>
					<div class="panel">
					</div>
					<p style="font-weight: bold"> Instructions:</p>
					<p>Some Medication</p>
					<div class="panel">
					</div>
					<p style="font-weight: bold">Refills Remaining:</p>
					<p>10</p>
					<div class="panel">
					</div>
					<p style="font-weight: bold">Last Filled On:</p>
					<p>10-03-2020</p>
					<div class="panel">
					</div>
					<p style="font-weight: bold">Initially Ordered On:</p>
					<p>10-03-2020</p>
				</div>

				<div class="pt-20">
					<button class="btn btn-success">Print</button>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<!-- <button type="button" class="btn btn-warning">Data</button> -->
			</div>
		</div>
	</div>
</div>
</div>

<!-- diagnostic popup code here -->
<div class="modal fade" id="diagnosticModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h5 class="modal-title" id="exampleModalLabel1">Diagnostic List</h5>
			</div>
			<div class="modal-body">
				<form>
					<div class="table-responsive">
						<table id="datable_2" class="table table-hover display table-bordered  pb-30">
							<thead>
								<tr>
									<th>Date</th>
									<th>Report Type</th>
									<th>Document Type</th>
									<th>Description</th>
									<th>Download</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>16 Nov, 2017 - 07:05</td>
									<td>blood_test</td>
									<td>pdf</td>
									<td>Some description</td>
									<th><button class="btn btn-rounded btn-success btn-sm">Download</button>
									</th>
								</tr>
							</tbody>
						</table>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<!-- <button type="button" class="btn btn-warning">Data</button> -->
			</div>
		</div>
	</div>
</div>
</div>