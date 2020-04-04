<div class="page-wrapper">

	<div class="container-fluid pt-20">
		<h4 class="pb-15 text-uppercase">Reports</h4>
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

				<h5 class="text-capitalize">Vitals Reports</h5><br>
				<form id="vital_reports" action="<?php echo base_url(); ?>admin/save_vital_report" method="POST">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="pull-left control-label mb-10 ">Select Patient</label>
								<select class="control-label form-control" name="patient_name" id="patient_name" onchange="get_visits('vital_reports')">
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
						<div class="col-md-4">
							<div class="form-group">
								<label class="pull-left control-label mb-10">Weight</label>
								<input type="text" class="form-control" onkeypress="return isNumber(event)" name="weight" id="weight" placeholder="kg">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="pull-left control-label mb-10">Length</label>
								<input type="text" class="form-control" onkeypress="return isNumber(event)" name="length" id="length" placeholder="cm">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="pull-left control-label mb-10">BP Systolic</label>
								<input type="text" class="form-control" onkeypress="return isNumber(event)" name="bp_systolic" id="bp_systolic" placeholder="mmHg">
							</div>
						</div>

					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label class="pull-left control-label mb-10">BP Diastolic</label>
								<input type="text" class="form-control" onkeypress="return isNumber(event)" name="bp_diastolic" id="bp_diastolic" placeholder="mmHg">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="pull-left control-label mb-10">Pulse</label>
								<input type="text" class="form-control" onkeypress="return isNumber(event)" name="pulse" id="pulse" placeholder="bpm">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="pull-left control-label mb-10">Respiration</label>
								<input type="text" class="form-control" name="respiration" id="respiration" onkeypress="return isNumber(event)" placeholder="Respiration">
							</div>
						</div>

					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label class="pull-left control-label mb-10">Temperature</label>
								<input type="text" class="form-control" name="temperature" id="temperature" onkeypress="return isNumber(event)" placeholder="°C">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="pull-left control-label mb-10">Oxygen Saturation</label>
								<input type="text" class="form-control" name="oxygen_saturation" id="oxygen_saturation" onkeypress="return isNumber(event)" placeholder="%">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="pull-left control-label mb-10">Head Circumference</label>
								<input type="text" class="form-control" name="head_circumference" id="head_circumference" onkeypress="return isNumber(event)" placeholder="cm">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label class="pull-left control-label mb-10">Waist Circumference</label>
								<input type="text" class="form-control" name="waist_circumference" id="waist_circumference" onkeypress="return isNumber(event)" placeholder="cm">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="pull-left control-label mb-10 ">BMI</label>
								<input type="text" class="form-control" name="bmi" id="bmi" onkeypress="return isNumber(event)" placeholder="kg/m2">
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">

							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">

							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group pull-right pr-0">
								<button class="btn btn-rounded btn-clr btn-success load_cr" onclick="validate_vital_report('vital_reports')">Submit</button>
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
<!-- /Main Content -->
<script>
	function isNumber(evt) {
		evt = (evt) ? evt : window.event;
		var charCode = (evt.which) ? evt.which : evt.keyCode;
		if (charCode > 31 && (charCode < 48 || charCode > 57)) {
			return false;
		}
		return true;
	}
	setTimeout(function() {
		document.getElementById("alert").style.display = "none";
	}, 5000);
</script>

<!-- /#wrapper -->