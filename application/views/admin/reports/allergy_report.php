<div class="page-wrapper">

	<div class="container-fluid pt-20">
		<h4 class="pb-15 text-uppercase">Report</h4>
		<div class="panel">
			<div class="panel-body">

				<?php if ($this->session->flashdata('msg')) { ?>
					<div class="alert alert-success" id="alert">
						<?php echo $this->session->flashdata('msg'); ?>
					</div>
				<?php  } ?>

				<h5 class="text-capitalize">Allergy Reports</h5><br>
				<form id="allergy_reports" action="<?php echo base_url(); ?>admin/save_patient_report" method="POST">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="pull-left control-label mb-10 ">Select Patient</label>
								<select class="control-label form-control" name="patient_name" id="patient_name" onchange="get_visits('allergy_reports')">
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

								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="pull-left control-label mb-10 ">Allergy Name</label>
								<input type="text" class="form-control" name="allergy_name" id="allergy_name" placeholder="Allergy Name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label mb-10 ">Allergy Type</label>
								<input type="text" class="form-control" name="allergy_type" id="allergy_type" placeholder="Allergy Type">
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
							<div class="form-group">
								<label class="control-label mb-10 ">Reaction</label>
								<input type="text" class="form-control" name="reaction" id="reaction" placeholder="Reaction">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="pull-left control-label mb-10 ">Drug Class</label>
								<input type="text" class="form-control" name="drug_class" id="drug_class" id="" placeholder="Drug Class">
							</div>
							<div class="form-group">
								<label class="control-label mb-10 ">Observed Or Historical</label>
								<select class="control-label form-control" name="observed" id="observed">
									<option value=""> Select Observed Or Historical</option>
									<option value="observed">Observed</option>
									<option value="historical">Historical</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="pull-left control-label mb-10 ">Comments</label>
								<textarea type="text" class="form-control" name="comments" id="comments" rows="5" placeholder="Comments"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">

						</div>
						<div class="col-md-6">
							<div class="form-group pull-right pr-0">
								<button class="btn btn-rounded btn-clr btn-success load_cr" onclick="validate_patient_report('allergy_reports')">Submit</button>
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