<div class="fixed-sidebar-left">
	<?php if ($this->luser->data->userType == 'composer') { ?>
		<ul class="nav navbar-nav side-nav nicescroll-bar">
			</li>
			<li>
				<a href="<?php echo base_url(); ?>admin">
					<div class="pull-left"><i class="ti-dashboard  mr-20"></i><span class="right-nav-text">Dashboard</span></div>
					<div class="clearfix"></div>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>admin/register_patient_view">
					<div class="pull-left"><i class="ti-pencil-alt  mr-20"></i><span class="right-nav-text">Register patient</span></div>
					<div class="clearfix"></div>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>admin/patient_appointment_list">
					<div class="pull-left"><i class="ti-bookmark-alt  mr-20"></i><span class="right-nav-text">Appointment list</span></div>
					<div class="clearfix"></div>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>admin/patient_admission">
					<div class="pull-left"><i class="icon-user-following  mr-20"></i><span class="right-nav-text">Patient Admission</span></div>
					<div class="clearfix"></div>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>admin/in_patient_list">
					<div class="pull-left"><i class="ti-share mr-20"></i><span class="right-nav-text">In Patients</span></div>
					<div class="clearfix"></div>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>admin/out_patient_list">
					<div class="pull-left"><i class="ti-share-alt  mr-20"></i><span class="right-nav-text">Out Patients</span></div>
					<div class="clearfix"></div>
				</a>
			</li>
			<!-- <li>
				<a href="<?php echo base_url(); ?>admin/doctors_list">
					<div class="pull-left"><i class="ti-user  mr-20"></i><span class="right-nav-text">Doctors List</span></div>
					<div class="clearfix"></div>
				</a>
			</li> -->
			<!-- <li>
				<a href="#">
					<div class="pull-left"><i class="ti-user  mr-20"></i><span class="right-nav-text">Procedures</span></div>
					<div class="clearfix"></div>
				</a>
			</li> -->
			<!-- <li>
				<a href="<?php echo base_url(); ?>admin/report">
					<div class="pull-left"><i class="ti-files  mr-20"></i><span class="right-nav-text">Reports</span></div>
					<div class="clearfix"></div>
				</a>
			</li> -->
			<li>
				<a href="javascript:void(0);" data-toggle="collapse" data-target="#app_dr">
					<div class="pull-left"><i class="ti-files mr-20"></i><span class="right-nav-text">Reports </span></div>
					<div class="pull-right"><i class="ti-angle-down"></i></div>
					<div class="clearfix"></div>
				</a>
				<ul id="app_dr" class="collapse collapse-level-1">
				    <li>
				        <a href="<?php echo base_url(); ?>admin/report">
					    <div class="pull-left"><span class="right-nav-text">Vitals Reports</span></div>
					    <div class="clearfix"></div>
				        </a>
					</li>
					<li>
				        <a href="<?php echo base_url(); ?>admin/allergy_report">
					    <div class="pull-left"><span class="right-nav-text">Allergy Reports</span></div>
					    <div class="clearfix"></div>
				        </a>
					</li>
					<li>
				        <a href="<?php echo base_url(); ?>admin/immunizations_report">
					    <div class="pull-left"><span class="right-nav-text">Immunizations Reports</span></div>
					    <div class="clearfix"></div>
				        </a>
					</li>
					<li>
				        <a href="<?php echo base_url(); ?>admin/diagnosis_report">
					    <div class="pull-left"><span class="right-nav-text">Diagnosis Reports</span></div>
					    <div class="clearfix"></div>
				        </a>
			        </li>
				</ul>
			</li>
			
			<li>
				<a href="<?php echo base_url(); ?>admin/create_visit">
					<div class="pull-left"><i class="icon-eye  mr-20"></i><span class="right-nav-text">Create Visit</span></div>
					<div class="clearfix"></div>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>admin/prescription">
					<div class="pull-left"><i class="ti-write  mr-20"></i><span class="right-nav-text">Create Prescription</span></div>
					<div class="clearfix"></div>
				</a>
			</li>

			<li>
				<a href="<?php echo base_url(); ?>admin/operation">
					<div class="pull-left"><i class="ti-time  mr-20"></i><span class="right-nav-text">Create Operation</span></div>
					<div class="clearfix"></div>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>admin/transactions">
					<div class="pull-left"><i class="ti-control-shuffle  mr-20"></i><span class="right-nav-text">Transactions</span></div>
					<div class="clearfix"></div>
				</a>
			</li>
		</ul>
	<?php } else if ($this->luser->data->userType == 'Patient') { ?>
		<ul class="nav navbar-nav side-nav nicescroll-bar">
			</li>
			<li>
				<a href="<?php echo base_url(); ?>patient/patient_dashboard">
					<div class="pull-left"><i class="ti-dashboard  mr-20"></i><span class="right-nav-text">Dashboard</span></div>
					<div class="clearfix"></div>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>patient/visits_list">
					<div class="pull-left"><i class="icon-eye  mr-20"></i><span class="right-nav-text">Visits</span></div>
					<div class="clearfix"></div>
				</a>
			</li>
			<li>
				<a href="javascript:void(0);" data-toggle="collapse" data-target="#app_dr">
					<div class="pull-left"><i class="ti-bookmark-alt mr-20"></i><span class="right-nav-text">Appointments </span></div>
					<div class="pull-right"><i class="ti-angle-down"></i></div>
					<div class="clearfix"></div>
				</a>
				<ul id="app_dr" class="collapse collapse-level-1">
					<li>
						<a href="<?php echo base_url() ?>patient/patient_apponintment_list">Appointment List</a>
					</li>
					<!-- <li>
							<a href="<?php echo base_url() ?>patient/patient_pending_apponintments">Pending Appointments</a>
						</li> -->
				</ul>
			</li>
			<li>
				<a href="javascript:void(0);" data-toggle="collapse" data-target="#app_dr_1">
					<div class="pull-left"><i class="ti-files mr-20"></i><span class="right-nav-text">Reports </span></div>
					<div class="pull-right"><i class="ti-angle-down"></i></div>
					<div class="clearfix"></div>
				</a>
				<ul id="app_dr_1" class="collapse collapse-level-1">
				    <li>
				        <a href="<?php echo base_url(); ?>patient/patient_report">
					    <div class="pull-left"><span class="right-nav-text">Vitals Reports</span></div>
					    <div class="clearfix"></div>
				        </a>
					</li>
					<li>
				        <a href="<?php echo base_url(); ?>patient/allergy_report">
					    <div class="pull-left"><span class="right-nav-text">Allergy Reports</span></div>
					    <div class="clearfix"></div>
				        </a>
					</li>
					<li>
				        <a href="<?php echo base_url(); ?>patient/immunizations_Reports">
					    <div class="pull-left"><span class="right-nav-text">Immunizations Reports</span></div>
					    <div class="clearfix"></div>
				        </a>
					</li>
					<li>
				        <a href="<?php echo base_url(); ?>patient/diagnosis_Reports">
					    <div class="pull-left"><span class="right-nav-text">Diagnosis Reports</span></div>
					    <div class="clearfix"></div>
				        </a>
			        </li>
				</ul>
			</li>

			<li>
				<a href="<?php echo base_url(); ?>patient/prescription_view">
					<div class="pull-left"><i class="ti-clipboard  mr-20"></i><span class="right-nav-text">Prescription</span></div>
					<div class="clearfix"></div>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>patient/doctors_view">
					<div class="pull-left"><i class="fa fa-user-md  mr-20"></i><span class="right-nav-text">Doctor</span></div>
					<div class="clearfix"></div>
				</a>
			</li>
			<!-- <li>
				<a href="<?php echo base_url(); ?>patient/blood_bank_view">
					<div class="pull-left"><i class="ti-spray  mr-20"></i><span class="right-nav-text">Blood Bank</span></div>
					<div class="clearfix"></div>
				</a>
			</li> -->
			<li>
				<a href="<?php echo base_url(); ?>patient/admit_history">
					<div class="pull-left"><i class="icon-list  mr-20"></i><span class="right-nav-text">Admit History</span></div>
					<div class="clearfix"></div>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>patient/operation_history">
					<div class="pull-left"><i class="ti-book  mr-20"></i><span class="right-nav-text">Operation History</span></div>
					<div class="clearfix"></div>
				</a>
			</li>
			<!-- <li>
				<a href="<?php echo base_url(); ?>patient/patient_report">
					<div class="pull-left"><i class="ti-files  mr-20"></i><span class="right-nav-text">Reports</span></div>
					<div class="clearfix"></div>
				</a>
			</li> -->
			

		</ul>
	<?php } ?>
</div>