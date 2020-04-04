<div class="page-wrapper">

	<div class="container-fluid pt-20">
		<h4 class="pb-15 text-uppercase">Create Operations</h4>
		<div class="panel">
			<div class="panel-body">

				<?php if ($this->session->flashdata('msg')) { ?>
					<div class="alert alert-success" id="alert">
						<?php echo $this->session->flashdata('msg'); ?>
					</div>
				<?php  } ?>
				<!-- <div id="loader_div" style="display: none">
					<img src="<?php echo base_url(); ?>assets/img/Loader.gif" style="position: absolute; z-index: 99; margin-left: 600px; width: 181px;top: 350px;">
					<h3 style="position: absolute; z-index: 99; margin-left: 238px; top: 543px;">Please wait while we are inserting patient details into blockchain...</h3>
				</div> -->
				<!-- <h5 class="pb-15 text-capitalize">Prescription</h5> -->
				<form id="operation" action="<?php echo base_url(); ?>admin/save_operation" method="POST">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="pull-left control-label mb-10 ">Select Patient</label>
								<select class="control-label form-control" name="patient_name" id="patient_name" onchange="get_visits('operation')">
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
								<label class="pull-left control-label mb-10 ">Description</label>
								<input type="text" class="form-control" required="" name="description" id="description" placeholder="Description">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="pull-left control-label mb-10 ">Anesthesia</label>
								<input type="text" class="form-control" required="" name="anesthesia" id="anesthesia" placeholder="Anesthesia">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="pull-left control-label mb-10 ">PreOperative Diagnosis</label>
								<input type="text" class="form-control" required="" name="preoperative_diagnosis" id="preoperative_diagnosis" placeholder="PreOperative Diagnosis">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="pull-left control-label mb-10 ">PostOperative Diagnosis</label>
								<input type="text" class="form-control" required="" name="postoperative_diagnosis" id="postoperative_diagnosis" placeholder="PostOperative Diagnosis">
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
								<label class="pull-left control-label mb-10 ">Name Of Operation</label>
								<input type="text" class="form-control" required="" name="name_of_operation" id="v" placeholder="Name Of Operation">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-6">
							<!-- <div class="form-group">
								<label class="control-label mb-10 text-left mt-10">Operation Started</label>
								<div class='input-group date' id=''>
									<input type='datetime-local' class="form-control" name="operation_started" id="operation_started" />
									<span class="input-group-addon">
										<span class="fa fa-calendar"></span>
									</span>
								</div>
							</div> -->
							<div class="form-group">
								<label class="control-label mb-10 text-left">Operation Started</label>
								    <div class='input-group date' id='datetimepicker-4'>
										<input type='text' class="form-control" name="operation_started" id="operation_started"/>
										<span class="input-group-addon">
										<span class="fa fa-calendar"></span></span>
									</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6">
							<!-- <div class="form-group">
								<label class="control-label mb-10 text-left mt-10">Operation Ended</label>
								<div class='input-group date' id=''>
									<input type='datetime-local' class="form-control" name="operation_ended" id="operation_ended" />
									<span class="input-group-addon">
										<span class="fa fa-calendar"></span>
									</span>
								</div>
							</div> -->
							<div class="form-group">
								<label class="control-label mb-10 text-left">Operation Ended</label>
								    <div class='input-group date' id='datetimepicker-2'>
										<input type='text' class="form-control" name="operation_ended" id="operation_ended"/>
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
								<button class="btn btn-rounded btn-clr btn-success" onclick="validate_operation('operation')">Submit</button>
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