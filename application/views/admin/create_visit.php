<div class="page-wrapper">

	<div class="container-fluid pt-20">
		<h4 class="pb-15 text-uppercase">Create Visit</h4>
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
				<!-- <h5 class="pb-15 text-capitalize">Create Visit</h5> -->
				<form id="visits" action="<?php echo base_url(); ?>admin/save_visits" method="POST">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="pull-left control-label mb-10 ">Select Patient</label>
								<select class="control-label form-control" name="patient_name" id="patient_name" onchange="get_appointments('visits')">
									<option value="">Select Patient</option>
									<?php foreach ($patients as $p) { ?>
										<option value="<?php echo $p->participantKey ?>"><?php echo $p->participantKey ?> <?php echo $p->Name ?> </option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="pull-left control-label mb-10 ">Description</label>
								<input type="text" class="form-control" required="" name="description" id="description" placeholder="Description">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label mb-10 ">Select Doctor</label>
								<select class="control-label form-control" name="doctor_name" id="doctor_name">
									<option value="">Select Doctor</option>
									<?php foreach ($doctors as $d) { ?>
										<option value="<?php echo $d->participantKey ?>"><?php echo $d->participantKey ?> <?php echo $d->Name ?> </option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label mb-10 ">Select Appointment</label>
								<select class="control-label form-control" name="appointment" id="appointment">
									<option value="">Select Appointment</option>
									<!-- <?php foreach ($appointments as $a) { ?>
										<option value="<?php echo $a->AppointmentID ?>"><?php echo $a->AppointmentID ?></option>
									<?php } ?> -->
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-6">
							<!-- <div class="form-group">
								<label class="control-label mb-10 text-left mt-10">Visit Date</label>
								<div class='input-group date' id=''>
									<input type='datetime-local' class="form-control" name="appointment_time" id="appointment_time" />
									<span class="input-group-addon">
										<span class="fa fa-calendar"></span>
									</span>
								</div>
							</div> -->
							<div class="form-group">
								<label class="control-label mb-10 text-left">Visit Date</label>
								<div class='input-group date' id='datetimepicker1'>
									<input type='text' class="form-control" name="appointment_time" id="appointment_time" />
									<span class="input-group-addon">
										<span class="fa fa-calendar"></span></span>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group pull-right pr-0">
								<button class="btn btn-rounded btn-clr btn-success mt-5 loading" onclick="validate_visits('visits')">Submit</button>
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
<!-- /#wrapper -->
<script>
	setTimeout(function() {
		document.getElementById("alert").style.display = "none";
	}, 8000);
</script>