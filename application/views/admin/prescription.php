<div class="page-wrapper">

	<div class="container-fluid pt-20">
		<h4 class="pb-15 text-uppercase">Create Prescription</h4>
		<div class="panel">
			<div class="panel-body">

				<?php if ($this->session->flashdata('msg')) { ?>
					<div class="alert alert-success" id="alert">
						<?php echo $this->session->flashdata('msg'); ?>
					</div>
				<?php  } ?>
				<!-- Loader start code -->
				
				<!-- Loader end code -->
				<!-- <h5 class="pb-15 text-capitalize">Prescription</h5> -->
				<form id="prescription" action="<?php echo base_url(); ?>admin/save_prescription" method="POST">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="pull-left control-label mb-10 ">Select Patient</label>
								<select class="control-label form-control" name="patient_name" id="patient_name" onchange="get_visits('prescription')">
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
									<option value="">Select Visit</option>
									<!-- <?php foreach ($visits as $v) { ?>
										<option value="<?php echo $v->VisitID ?>"><?php echo $v->VisitID ?></option>
									<?php } ?> -->
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="pull-left control-label mb-10 ">Instructions</label>
								<input type="text" class="form-control" required="" name="instructions" id="instructions" placeholder="Instructions">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="pull-left control-label mb-10 ">Refills Remaining</label>
								<input type="text" class="form-control" required="" name="refills_remaining" id="refills_remaining" placeholder="Refills Remaining">
							</div>
						</div>
					</div>
					<!-- <div class="row">
                       <div class="col-md-6">
							<div class="form-group">
								<label class="pull-left control-label mb-10 ">Last Filled On</label>
								<input type="text" class="form-control" required="" name="allergy_name" id="allergy_name" placeholder="Last Filled On">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="pull-left control-label mb-10 ">Initially Ordered On</label>
								<input type="text" class="form-control" required="" name="allergy_name" id="allergy_name" placeholder="Initially Ordered On">
							</div>
						</div>
					</div> -->

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
								<label class="pull-left control-label mb-10 ">Medication</label>
								<input type="text" class="form-control" required="" name="medication" id="medication" placeholder="Medication">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-6">
							<!-- <div class="form-group">
								<label class="control-label mb-10 text-left mt-10">Last Filled On</label>
								<div class='input-group date' id=''>
									<input type='datetime-local' class="form-control" name="last_filled_on" id="last_filled_on" />
									<span class="input-group-addon">
										<span class="fa fa-calendar"></span>
									</span>
								</div>
							</div> -->
							<div class="form-group">
								<label class="control-label mb-10 text-left">Last Filled On</label>
								    <div class='input-group date' id='datetimepicker1' aria-readonly="true">
										<input type='text' class="form-control" name="last_filled_on" id="last_filled_on"/>
										<span class="input-group-addon">
										<span class="fa fa-calendar"></span></span>
									</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6">
							<!-- <div class="form-group">
								<label class="control-label mb-10 text-left mt-10">Initially Ordered On</label>
								<div class='input-group date' id=''>
									<input type='datetime-local' class="form-control" name="initially_ordered_on" id="initially_ordered_on" />
									<span class="input-group-addon">
										<span class="fa fa-calendar"></span>
									</span>
								</div>
							</div> -->
							<div class="form-group">
								<label class="control-label mb-10 text-left">Initially Ordered On</label>
								    <div class='input-group date' id='datetimepicker-4'>
										<input type='text' class="form-control" name="initially_ordered_on" id="initially_ordered_on"/>
										<span class="input-group-addon">
										<span class="fa fa-calendar"></span></span>
									</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-6">
							<div class="form-group">

							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group pull-right pr-0">
								<button class="btn btn-rounded btn-clr btn-success" onclick="validate_create_prescription('prescription')">Submit</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
<!-- Footer -->
<?php $this->load->view('admin/footer');?>
<!-- /Footer -->
</div>
<!-- /#wrapper -->