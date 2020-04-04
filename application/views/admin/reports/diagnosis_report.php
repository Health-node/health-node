<div class="page-wrapper">

	<div class="container-fluid pt-20">
		<h4 class="pb-15 text-uppercase">Report</h4>
		<div class="panel">
			<div class="panel-body">

				<?php if ($this->session->flashdata('msg')) { ?>
					<div class="alert alert-success" id="alert">
						<?php echo $this->session->flashdata('msg'); ?>
					</div>
				<?php  } else if ($this->session->flashdata('err')) { ?>
					<div class="alert alert-danger" id="alert">
						<?php echo $this->session->flashdata('err'); ?>
					</div>
				<?php } ?>

				<h5 class="text-capitalize">Diagnosis Reports</h5>
				<br>
				<form id="diagnose_reports" action="<?php echo base_url(); ?>admin/save_diagnosis_report" method="POST">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="pull-left control-label mb-10 ">Select Patient</label>
								<select class="control-label form-control" name="patient_name" id="patient_name" onchange="get_visits('diagnose_reports')">
									<option value="">Select Patient</option>
									<?php foreach ($patients as $p) { ?>
										<option value="<?php echo $p->participantKey ?>"><?php echo $p->participantKey ?> <?php echo $p->Name ?> </option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label mb-10 ">Select Visit</label>
								<select class="control-label form-control" name="visit" id="visit">
									<option value=""> Select Visit</option>
									<!-- <?php foreach ($visits as $v) { ?>
										<option value="<?php echo $v->VisitID ?>"><?php echo $v->VisitID . ' ON ' . date("Y-m-d H:i:s", strtotime($v->Visit_Date)) ?> </option>
									<?php } ?> -->
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="pull-left control-label mb-10 ">Problem</label>
								<input type="text" class="form-control" name="problem" id="problem" placeholder="Problem">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label mb-10 ">Provider</label>
								<input type="text" class="form-control" name="provider" id="provider" placeholder="Provider">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="pull-left control-label mb-10 ">Location</label>
								<input type="text" class="form-control" name="location" id="location" placeholder="Location">
							</div>
						</div>
						<div class="col-md-6">
							<!-- <div class="form-group">
								<label class="pull-left control-label mb-10 ">Date Received</label>
								<input type="date" class="form-control" name="date_received" id="date_received"  placeholder="DateReceived">
							</div> -->
							<div class="form-group">
								<label class="control-label mb-10 text-left label_colr">Date Received</label>
								<div class='input-group date' id='datetimepicker1'>
									<input type='text' class="form-control" name="date_received" id="date_received" />
									<span class="input-group-addon">
										<span class="fa fa-calendar"></span></span>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<!-- <div class="form-group">
								<label class="pull-left control-label mb-10 ">Location</label>
								<input type="text" class="form-control" name="location" id="location"  placeholder="Location">
							</div> -->
						</div>
						<div class="col-md-6">
							<div class="form-group pull-right pr-0">
								<button class="btn btn-rounded btn-clr btn-success" onclick="validate_diagnose_report('diagnose_reports')">Submit</button>
							</div>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<?php $this->load->view('admin/footer'); ?>
	<!-- /Footer -->

</div>
<script>
	setTimeout(function() {
		document.getElementById("alert").style.display = "none";
	}, 5000);
</script>
<!-- /Main Content -->

<!-- /#wrapper -->