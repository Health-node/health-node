<div class="page-wrapper">
	<div class="container-fluid pt-20">
		<h4 class="pb-15 text-uppercase">Profile</h4>


		<!-- Row -->
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<div class="panel panel-default card-view pa-0 prfl_brder_tp">
					<div class="panel-wrapper collapse in">
						<div class="panel-body pa-0">
							<div class="sm-data-box">
								<div class="container-fluid">

									<div class="col-xs-12 pl-0 pr-0 ">
										<div class="progress-anim">
											<h5 class="text-center pt-30 pb-10">Profile Name</h5>
											<h6 class="text-center pb-30"><?php echo $profile_info[0]->Name ?></h6>
										</div>
										<div class="prfl_brder pb-10 pt-10">
											<span><strong> User Id :</strong></span>
											<span class="ml-5"><?php echo $profile_info[0]->participantKey ?></span>
										</div>
										<div class="prfl_brder_btm mb-10 pb-10 pt-10">
											<span><strong>Email Id :</strong></span>
											<span class="ml-5"><?php echo $profile_info[0]->Email_ID ?></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
				<div class="panel panel-default card-view pa-0 prfl_brder_tp">
					<div class="panel-wrapper collapse in">
						<div class="panel-body pa-0">
							<h5 class="pt-15 pb-10 pl-15 prfl_brder_btm text-uppercase">About</h5>
							<div class="sm-data-box">
								<div class="container-fluid">
									<div class="col-xs-12 pl-0 pr-0">
										<p class="pt-15 pb-15">Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content. This is required wh
											en, for example, the final text is not yet available. Dummy text is also known as 'fill text</p>
									</div>
									<div class="col-xs-12 pl-0 pr-0">
										<hr class="prfl_hr_tp mt-10 mb-15" />
									</div>
									<div class="col-xs-6 pl-0 pr-0 ">
										<h6 class="">DOB</h6>
									</div>
									<div class="col-xs-6 pl-0 pr-0 ">
										<div class="pull-right">
											<p class=""><?php echo date("Y-m-d H:i:s", strtotime($profile_info[0]->DOB)); ?></p>
										</div>
									</div>
									<div class="col-xs-12 pl-0 pr-0">
										<hr class="prfl_hr_tp mt-10 mb-15" />
									</div>
									<div class="col-xs-6 pl-0 pr-0 ">
										<h6 class="">Mobile No</h6>
									</div>
									<div class="col-xs-6 pl-0 pr-0 ">
										<div class="pull-right">
											<p class=""><?php echo $profile_info[0]->Mobile_No ?></p>
										</div>
									</div>
									<div class="col-xs-12 pl-0 pr-0">
										<hr class="prfl_hr_tp mt-10 mb-15" />
									</div>
									<div class="col-xs-6 pl-0 pr-0 ">
										<h6 class="">Medical Record Number</h6>
									</div>
									<div class="col-xs-6 pl-0 pr-0 ">
										<div class="pull-right">
											<p class=""><?php echo $profile_info[0]->Medical_Record_Number ?></p>
										</div>
									</div>
									<div class="col-xs-12 pl-0 pr-0">
										<hr class="prfl_hr_tp mt-10 mb-15" />
									</div>
									<div class="col-xs-6 pl-0 pr-0 ">
										<h6 class="">Health Plan Beneficiary Number</h6>
									</div>
									<div class="col-xs-6 pl-0 pr-0 ">
										<div class="pull-right">
											<p class=""><?php echo $profile_info[0]->Health_Plan_Beneficiary_Number ?></p>
										</div>
									</div>
									<div class="col-xs-12 pl-0 pr-0">
										<hr class="prfl_hr_tp mt-10 mb-15" />
									</div>
									<div class="col-xs-6 pl-0 pr-0 ">
										<h6 class="">Certificate Or License_Number</h6>
									</div>
									<div class="col-xs-6 pl-0 pr-0 ">
										<div class="pull-right">
											<p class=""><?php echo $profile_info[0]->Certificate_Or_License_Number ?></p>
										</div>
									</div>
									<div class="col-xs-12 pl-0 pr-0">
										<hr class="prfl_hr_tp mt-10 mb-15" />
									</div>
									<div class="col-xs-6 pl-0 pr-0 ">
										<h6 class="">Bank Account</h6>
									</div>
									<div class="col-xs-6 pl-0 pr-0 ">
										<div class="pull-right">
											<p class=""><?php echo $profile_info[0]->Bank_Account ?></p>
										</div>
									</div>
									<div class="col-xs-12 pl-0 pr-0">
										<hr class="prfl_hr_tp mt-10 mb-15" />
									</div>
									<div class="col-xs-6 pl-0 pr-0 ">
										<h6 class="">Passport Number</h6>
									</div>
									<div class="col-xs-6 pl-0 pr-0 ">
										<div class="pull-right">
											<p class=""><?php echo $profile_info[0]->Passport_Number ?></p>
										</div>
									</div>
									<div class="col-xs-12 pl-0 pr-0">
										<hr class="prfl_hr_tp mt-10 mb-15" />
									</div>
									<div class="col-xs-6 pl-0 pr-0 ">
										<h6 class="">PAN Number</h6>
									</div>
									<div class="col-xs-6 pl-0 pr-0 ">
										<div class="pull-right">
											<p class=""><?php echo $profile_info[0]->PAN_Number ?></p>
										</div>
									</div>
									<div class="col-xs-12 pl-0 pr-0">
										<hr class="prfl_hr_tp mt-10 mb-15" />
									</div>
									<div class="col-xs-6 pl-0 pr-0 ">
										<h6 class="">AADHAAR Card</h6>
									</div>
									<div class="col-xs-6 pl-0 pr-0 ">
										<div class="pull-right">
											<p class=""><?php echo $profile_info[0]->AADHAAR_Card ?></p>
										</div>
									</div>
									<div class="col-xs-12 pl-0 pr-0">
										<hr class="prfl_hr_tp mt-10 mb-15" />
									</div>
									<div class="col-xs-6 pl-0 pr-0 ">
										<h6 class="">Address</h6>
									</div>
									<div class="col-xs-6 pl-0 pr-0 ">
										<div class="pull-right">
											<p class=""><?php echo $profile_info[0]->Address ?></p>
										</div>
									</div>
									<div class="col-xs-12 pl-0 pr-0">
										<hr class="prfl_hr_tp mt-10 mb-15" />
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- /Row -->
	</div>
	<!-- Footer -->
	<?php $this->load->view('admin/footer'); ?>
	<!-- /Footer -->
</div>
<!-- /#wrapper -->