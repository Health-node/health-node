		<div class="page-wrapper">
			<div class="container-fluid pt-20">
				<h4 class="pb-15 text-uppercase">Dashboard</h4>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="add-event-wrap">
										<div class="calendar-event btn btn-success calnder_width">My Event One <a href="javascript:void(0);" class="remove-calendar-event"><i class="fa fa-times fa-fw"></i></a></div>
										<div class="calendar-event btn btn-info calnder_width">My Event Two <a href="javascript:void(0);" class="remove-calendar-event"><i class="fa fa-times fa-fw"></i></a></div>
										<div class="calendar-event btn btn-warning calnder_width">My Event Three <a href="javascript:void(0);" class="remove-calendar-event"><i class="fa fa-times fa-fw"></i></a></div>
										<div class="calendar-event btn btn-warning calnder_width">My Event Four <a href="javascript:void(0);" class="remove-calendar-event"><i class="fa fa-times fa-fw"></i></a></div>
										<!-- <input type="text" placeholder="Add Event and hit enter" class="form-control add-event  calnder_width"> -->
									</div>
									<div class="calendar-wrap mt-30">
										<div id="patient_calender"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="panel">
					<div class="panel-body">
						<h4 class="pb-15 text-capitalize">Vitals</h4>
						<!-- Row -->
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<div class="panel panel-default card-view pa-0  dsbrd_bmi_btm">
									<div class="panel-wrapper collapse in">
										<div class="panel-body pa-0">
											<div class="sm-data-box">
												<div class="container-fluid">
													<!-- <div class="col-xs-12 pl-0 pr-0 dsbrd_date">
														<p class="pull-right dsbrd_date_p">28 Feb 2020</p>
													</div> -->
													<div class="col-xs-12 text-center pl-0 pr-0 data-wrap-left petnt_dsbr_vtl">
														<span class="txt-dark block counter"><span class="counter-anim"><?php if (isset($vitals->Weight)) {
																															echo $vitals->Weight;
																														} else {
																															echo "-";
																														} ?></span></span>
														
													</div>
													<div class="col-xs-12 pl-0 pr-0 ">
														<h5 class="dsbrd_bmi_h5">Weight</h5>
														<p class="dsbrd_bmi_p pb-15">KGs</p>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<div class="panel panel-default card-view pa-0 dsbrd_bmi_btm">
									<div class="panel-wrapper collapse in">
										<div class="panel-body pa-0">
											<div class="sm-data-box">

												<div class="container-fluid">
													<!-- <div class="col-xs-12 pl-0 pr-0 dsbrd_date">
														<p class="pull-right dsbrd_date_p">02 March 2020</p>
													</div> -->
													<div class="col-xs-12 text-center pl-0 pr-0 data-wrap-left petnt_dsbr_vtl">
														<span class="txt-dark block counter"><span class="counter-anim"><?php if (isset($vitals->Length)) {
																															echo $vitals->Length;
																														} else {
																															echo "-";
																														} ?></span></span>
														
													</div>
													<div class="col-xs-12 pl-0 pr-0 ">
														<h5 class="dsbrd_bmi_h5">Length</h5>
														<p class="dsbrd_bmi_p pb-15">CM</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<div class="panel panel-default card-view pa-0 dsbrd_bmi_btm">
									<div class="panel-wrapper collapse in">
										<div class="panel-body pa-0">
											<div class="sm-data-box">

												<div class="container-fluid">
													<!-- <div class="col-xs-12 pl-0 pr-0 dsbrd_date">
														<p class="pull-right dsbrd_date_p">05 May 2020</p>
													</div> -->
													<div class="col-xs-12 text-center pl-0 pr-0 data-wrap-left petnt_dsbr_vtl">
														<span class="txt-dark block counter"><span class="counter-anim"><?php if (isset($vitals->BP_Systolic)) {
																															echo $vitals->BP_Systolic;
																														} else {
																															echo "-";
																														} ?></span></span>
														 
													</div>
													<div class="col-xs-12 pl-0 pr-0 ">
														<h5 class="dsbrd_bmi_h5">BP Systolic</h5>
														<p class="dsbrd_bmi_p pb-15">mmHg</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<div class="panel panel-default card-view pa-0 dsbrd_bmi_btm">
									<div class="panel-wrapper collapse in">
										<div class="panel-body pa-0">
											<div class="sm-data-box">

												<div class="container-fluid">
													<!-- <div class="col-xs-12 pl-0 pr-0 dsbrd_date">
														<p class="pull-right dsbrd_date_p">18 Feb 2020</p>
													</div> -->
													<div class="col-xs-12 text-center pl-0 pr-0 data-wrap-left petnt_dsbr_vtl">
														<span class="txt-dark block counter"><span class="counter-anim"><?php if (isset($vitals->BP_Diastolic)) {
																															echo $vitals->BP_Diastolic;
																														} else {
																															echo "-";
																														} ?></span></span>
														 
													</div>
													<div class="col-xs-12 pl-0 pr-0 ">
														<h5 class="dsbrd_bmi_h5">BP Diastolic</h5>
														<p class="dsbrd_bmi_p pb-15">mmHg</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<div class="panel panel-default card-view pa-0 dsbrd_bmi_btm">
									<div class="panel-wrapper collapse in">
										<div class="panel-body pa-0">
											<div class="sm-data-box">
												<div class="container-fluid">
													<!-- <div class="col-xs-12 pl-0 pr-0 dsbrd_date">
														<p class="pull-right dsbrd_date_p">06 Feb 2020</p>
													</div> -->
													<div class="col-xs-12 text-center pl-0 pr-0 data-wrap-left petnt_dsbr_vtl">
														<span class="txt-dark block counter"><span class="counter-anim"><?php if (isset($vitals->Pulse)) {
																															echo $vitals->Pulse;
																														} else {
																															echo "-";
																														} ?></span></span>
														 
													</div>
													<div class="col-xs-12 pl-0 pr-0 ">
														<h5 class="dsbrd_bmi_h5">Pulse</h5>
														<p class="dsbrd_bmi_p pb-15">Bpm</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<div class="panel panel-default card-view pa-0 dsbrd_bmi_btm">
									<div class="panel-wrapper collapse in">
										<div class="panel-body pa-0">
											<div class="sm-data-box">
												<div class="container-fluid">
													<!-- <div class="col-xs-12 pl-0 pr-0 dsbrd_date">
														<p class="pull-right dsbrd_date_p">04 Jan 2020</p>
													</div> -->
													<div class="col-xs-12 text-center pl-0 pr-0 data-wrap-left petnt_dsbr_vtl">
														<span class="txt-dark block counter"><span class="counter-anim"><?php if (isset($vitals->Respiration)) {
																															echo $vitals->Respiration;
																														} else {
																															echo "-";
																														} ?></span></span>
														 
													</div>
													<div class="col-xs-12 pl-0 pr-0 ">
														<h5 class="dsbrd_bmi_h5">Respiration</h5>
														<p class="dsbrd_bmi_p pb-15">breaths</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<div class="panel panel-default card-view pa-0 dsbrd_bmi_btm">
									<div class="panel-wrapper collapse in">
										<div class="panel-body pa-0">
											<div class="sm-data-box">
												<div class="container-fluid">
													<!-- <div class="col-xs-12 pl-0 pr-0 dsbrd_date">
														<p class="pull-right dsbrd_date_p">25 Feb 2020</p>
													</div> -->
													<div class="col-xs-12 text-center pl-0 pr-0 data-wrap-left petnt_dsbr_vtl">
														<span class="txt-dark block counter"><span class="counter-anim"><?php if (isset($vitals->Temperature)) {
																															echo $vitals->Temperature;
																														} else {
																															echo "-";
																														} ?></span></span>
														 
													</div>
													<div class="col-xs-12 pl-0 pr-0 ">
														<h5 class="dsbrd_bmi_h5">Temperature </h5>
														<p class="dsbrd_bmi_p pb-15">°C</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<div class="panel panel-default card-view pa-0 dsbrd_bmi_btm">
									<div class="panel-wrapper collapse in">
										<div class="panel-body pa-0">
											<div class="sm-data-box">
												<div class="container-fluid">
													<!-- <div class="col-xs-12 pl-0 pr-0 dsbrd_date">
														<p class="pull-right dsbrd_date_p">25 Feb 2020</p>
													</div> -->
													<div class="col-xs-12 text-center pl-0 pr-0 data-wrap-left petnt_dsbr_vtl">
														<span class="txt-dark block counter"><span class="counter-anim"><?php if (isset($vitals->Oxygen_Saturation)) {
																															echo $vitals->Oxygen_Saturation;
																														} else {
																															echo "-";
																														} ?></span></span>
														 
													</div>
													<div class="col-xs-12 pl-0 pr-0 ">
														<h5 class="dsbrd_bmi_h5">Oxygen Saturation </h5>
														<p class="dsbrd_bmi_p pb-15">%</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Row -->
						<!-- Row-->
						<div class="row">
						    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<div class="panel panel-default card-view pa-0 mb-10 dsbrd_bmi_btm">
									<div class="panel-wrapper collapse in">
										<div class="panel-body pa-0">
											<div class="sm-data-box">
												<div class="container-fluid">
													<!-- <div class="col-xs-12 pl-0 pr-0 dsbrd_date">
														<p class="pull-right dsbrd_date_p">25 Feb 2020</p>
													</div> -->
													<div class="col-xs-12 text-center pl-0 pr-0 data-wrap-left petnt_dsbr_vtl">
														<span class="txt-dark block counter"><span class="counter-anim"><?php if (isset($vitals->Head_Circumference)) {
																															echo $vitals->Head_Circumference;
																														} else {
																															echo "-";
																														} ?></span></span>
														 
													</div>
													<div class="col-xs-12 pl-0 pr-0 ">
														<h5 class="dsbrd_bmi_h5">Head Circumference </h5>
														<p class="dsbrd_bmi_p pb-15">Cm</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<div class="panel panel-default card-view pa-0 mb-10 dsbrd_bmi_btm">
									<div class="panel-wrapper collapse in">
										<div class="panel-body pa-0">
											<div class="sm-data-box">
												<div class="container-fluid">
													<!-- <div class="col-xs-12 pl-0 pr-0 dsbrd_date">
														<p class="pull-right dsbrd_date_p">25 Feb 2020</p>
													</div> -->
													<div class="col-xs-12 text-center pl-0 pr-0 data-wrap-left petnt_dsbr_vtl">
														<span class="txt-dark block counter"><span class="counter-anim"><?php if (isset($vitals->Waist_Circumference)) {
																															echo $vitals->Waist_Circumference;
																														} else {
																															echo "-";
																														} ?></span></span>
													 
													</div>
													<div class="col-xs-12 pl-0 pr-0 ">
														<h5 class="dsbrd_bmi_h5">Waist Circumference </h5>
														<p class="dsbrd_bmi_p pb-15">Cm</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<div class="panel panel-default card-view pa-0 mb-10 dsbrd_bmi_btm">
									<div class="panel-wrapper collapse in">
										<div class="panel-body pa-0">
											<div class="sm-data-box">
												<div class="container-fluid">
													<!-- <div class="col-xs-12 pl-0 pr-0 dsbrd_date">
														<p class="pull-right dsbrd_date_p">25 Feb 2020</p>
													</div> -->
													<div class="col-xs-12 text-center pl-0 pr-0 data-wrap-left petnt_dsbr_vtl">
														<span class="txt-dark block counter"><span class="counter-anim"><?php if (isset($vitals->BMI)) {
																															echo $vitals->BMI;
																														} else {
																															echo "-";
																														} ?></span></span>
														<!-- <p class="capitalize-font block dsbrd_kg_p">Cm</p> -->
													</div>
													<div class="col-xs-12 pl-0 pr-0 ">
														<h5 class="dsbrd_bmi_h5">BMI </h5>
														<p class="dsbrd_bmi_p pb-15">kg/M2</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/Row-->
			        </div>
		        </div>
				

				<!-- Row -->
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="col-xs-12 pl-0 pr-0">
												<h5 class="dsbrd_allrgs_h5 pt-15 pb-10 text-uppercase">ALLERGIES</h5>
											</div>
											<?php if (count($allergy_report) > 0) { ?>
												<?php $i = 0; ?>
												<?php foreach ($allergy_report as $ar) { ?>
													<?php if ($i > 2) break; ?>
													<!-- <div class="col-xs-12 pl-0 pr-0 ">
														<h5 class="dsbrd_bmi_h5">Allergy Name: <?php echo $ar->Allergy_Name ?></h5>
														<p class="dsbrd_bmi_p">Allergy Type: <?php echo $ar->Allergy_Type ?></p>
													</div>
													<div class="col-xs-12 pl-0 pr-0">
														<hr class="light-grey-hr dsbrd_hr row mt-10 mb-15" />
													</div> -->



												<div class="col-xs-12 pl-0 pr-0">
										            <hr class="prfl_hr_tp mt-10 mb-15" />
									            </div>
									            <div class="col-xs-6 pl-0 pr-0 ">
										            <h6 class="">Allergy Name :</h6>
									            </div>
									            <div class="col-xs-6 pl-0 pr-0 ">
										            <div class="pull-right">
											            <p class=""><?php echo $ar->Allergy_Name ?></p>
										            </div>
									            </div>
									            <div class="col-xs-12 pl-0 pr-0">
										            <hr class="prfl_hr_tp mt-10 mb-15" />
												</div>
												
												
									            <div class="col-xs-6 pl-0 pr-0 ">
										            <h6 class="">Allergy Type :</h6>
									            </div>
									            <div class="col-xs-6 pl-0 pr-0 ">
										            <div class="pull-right">
											            <p class=""><?php echo $ar->Allergy_Type ?></p>
										            </div>
									            </div>
									            <div class="col-xs-12 pl-0 pr-0">
										            <hr class="prfl_hr_tp mt-10 mb-15" />
									            </div>




													<?php $i++; ?>
												<?php } ?>
											<?php } else { ?>
												<div class="col-xs-12 pl-0 pr-0">
													<hr class="light-grey-hr dsbrd_hr row mt-10 mb-15" />
												</div>
												<h5>No Data Available</h5>
												<div class="col-xs-12 pl-0 pr-0">
													<hr class="light-grey-hr dsbrd_hr row mt-10 mb-15" />
												</div>
											<?php } ?>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="col-xs-12 pl-0 pr-0">
												<h5 class="dsbrd_allrgs_h5 pt-15 pb-10 text-uppercase">Medications</h5>
											</div>
											<?php if (count($medication_list) > 0) { ?>
												<?php $i = 0; ?>
												<?php foreach ($medication_list as $ml) { ?>
													<?php if ($i > 2) break; ?>
													<!-- <div class="col-xs-12 pl-0 pr-0 ">
														<h5 class="dsbrd_bmi_h5">Medication:<?php echo $ml->Medication ?></h5>
														<p class="dsbrd_bmi_p">Instructions: <?php echo $ml->Instructions ?></p>
													</div>
													<div class="col-xs-12 pl-0 pr-0">
														<hr class="light-grey-hr dsbrd_hr row mt-10 mb-15" />
													</div> -->
													<div class="col-xs-12 pl-0 pr-0">
										            <hr class="prfl_hr_tp mt-10 mb-15" />
									            </div>
									            <div class="col-xs-6 pl-0 pr-0 ">
										            <h6 class="">Medication :</h6>
									            </div>
									            <div class="col-xs-6 pl-0 pr-0 ">
										            <div class="pull-right">
											            <p class=""><?php echo $ml->Medication ?></p>
										            </div>
									            </div>
									            <div class="col-xs-12 pl-0 pr-0">
										            <hr class="prfl_hr_tp mt-10 mb-15" />
												</div>
												
												
									            <div class="col-xs-6 pl-0 pr-0 ">
										            <h6 class="">Instructions :</h6>
									            </div>
									            <div class="col-xs-6 pl-0 pr-0 ">
										            <div class="pull-right">
											            <p class=""><?php echo $ml->Instructions ?></p>
										            </div>
									            </div>
									            <div class="col-xs-12 pl-0 pr-0">
										            <hr class="prfl_hr_tp mt-10 mb-15" />
									            </div>
													<?php $i++ ?>
												<?php } ?>
											<?php } else { ?>
												<div class="col-xs-12 pl-0 pr-0">
													<hr class="light-grey-hr dsbrd_hr row mt-10 mb-15" />
												</div>
												<h5>No Data Available</h5>
												<div class="col-xs-12 pl-0 pr-0">
													<hr class="light-grey-hr dsbrd_hr row mt-10 mb-15" />
												</div>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="col-xs-12 pl-0 pr-0">
												<h5 class="dsbrd_allrgs_h5 pt-15 pb-10 text-uppercase">Problems</h5>
											</div>
											<?php if (count($diagnosis_report) > 0) {  ?>
												<?php $i = 0; ?>
												<?php foreach ($diagnosis_report as $dr) { ?>
													<?php if ($i > 2)
														break; ?>
													<div class="col-xs-12 pl-0 pr-0 ">
														<h5 class="dsbrd_bmi_h5">Problem: <?php echo $dr->Problem ?></h5>
														<p class="dsbrd_bmi_p">Date Recieved: <?php echo date("Y-m-d H:i:s ", strtotime($dr->Date_Recieved)); ?> </p>
													</div>
													<div class="col-xs-12 pl-0 pr-0">
														<hr class="light-grey-hr dsbrd_hr row mt-10 mb-15" />
													</div>
													<?php $i++ ?>
												<?php } ?>
											<?php } else { ?>
												<div class="col-xs-12 pl-0 pr-0">
													<hr class="light-grey-hr dsbrd_hr row mt-10 mb-15" />
												</div>
												<h5>No Data Available</h5>
												<div class="col-xs-12 pl-0 pr-0">
													<hr class="light-grey-hr dsbrd_hr row mt-10 mb-15" />
												</div>
											<?php } ?>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			
		</div>
		<!-- /Main Content -->

		</div>
		<!-- /#wrapper -->