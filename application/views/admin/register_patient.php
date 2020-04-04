<div class="page-wrapper">
    <div class="container-fluid pt-20">
        <h4 class="pb-15 text-uppercase">Register Patient</h4>
        <!-- <div class="page-wrapper pa-0 ma-0 "> -->
        <div class="bg-light">
            <div class="rgster_pdng">
                <div class="col-md-12 ml-auto mr-auto no-float">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 ">
                            <!-- <div class="mb-30">
                                            <h4 class=" mb-20">Register</h4>
                                        </div> -->
                            <?php if ($this->session->flashdata('msg')) { ?>
                                <div class="alert alert-success" id="success">
                                    <?php echo $this->session->flashdata('msg'); ?>
                                </div>
                            <?php  } else if ($this->session->flashdata('err')) { ?>
                                <div class="alert alert-danger" id="failure">
                                    <?php echo $this->session->flashdata('err'); ?>
                                </div>
                            <?php } ?>
                            <!-- <div id="loader_div" style="display: none" >
                                            <img src="<?php echo base_url(); ?>assets/img/Loader.gif" style="position: absolute; z-index: 99; margin-left: 559px; width: 181px;top: 350px;">
                                            <h3 style="position: absolute; z-index: 99; margin-left: 436px; top: 543px; color: white">Please wait....</h3>
                                        </div> -->

                            <input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>">
                            <div class="form-wrap">
                                <form action="<?php echo base_url() ?>admin/register_patient" method="POST" id="patient_register" autocomplete="off" name="registration-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label mb-10 ">Full name<span class="required">*</span></label>
                                                <input type="text" class="form-control rgstr_inpt plc_holdr_colr" name="full_name" id="full_name" placeholder="Full name" maxlength="30">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="pull-left control-label mb-10 ">Email<span class="required">*</span></label>
                                                <input type="email" class="form-control rgstr_inpt plc_holdr_colr" name="email" id="email" placeholder="Enter Email" maxlength="30">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- <div class="form-group">
                                                            <label class="control-label mb-10 ">DOB<span class="required">*</span></label>
                                                            <input type="date" class="form-control rgstr_inpt plc_holdr_colr" name="dob" id="dob" placeholder="">
                                                        </div> -->
                                            <div class="form-group">
                                                <label class="control-label mb-10 text-left">DOB <span class="required">*</span></label>
                                                <div class='input-group date' id='datetimepicker-1'>
                                                    <input type='text' class="form-control rgstr_inpt plc_holdr_colr" name="dob" id="dob" />
                                                    <span class="input-group-addon rgstr_calendr">
                                                        <span class="fa fa-calendar"></span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="pull-left control-label mb-10 ">Mobile Number<span class="required">*</span></label>
                                                <input type="text" class="form-control rgstr_inpt plc_holdr_colr" name="mobile" id="mobile" placeholder="Mobile Number" maxlength="10">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label mb-10 ">Telephone Number</label>
                                                <input type="text" class="form-control rgstr_inpt plc_holdr_colr" name="telephone" id="telephone" placeholder="Telephone number" maxlength="12">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="pull-left control-label mb-10 ">Fax Number</label>
                                                <input type="text" class="form-control rgstr_inpt plc_holdr_colr" name="fax" id="fax" placeholder="Fax no" maxlength="12">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label mb-10 ">Bank Account<span class="required">*</span></label>
                                                <input type="text" class="form-control rgstr_inpt plc_holdr_colr" name="bank_account" id="bank_account" placeholder="Bank account" maxlength="16">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="pull-left control-label mb-10 ">Credit card number</label>
                                                <input type="text" class="form-control rgstr_inpt plc_holdr_colr" name="credit_card" id="credit_card" placeholder="Credit card no" maxlength="19">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label mb-10 ">Medical record number<span class="required">*</span></label>
                                                <input type="text" class="form-control rgstr_inpt plc_holdr_colr" name="medical_record_no" id="medical_record_no" placeholder="Medical record no" maxlength="20">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="pull-left control-label mb-10 ">Health plan benificiary no<span class="required">*</span></label>
                                                <input type="text" class="form-control rgstr_inpt plc_holdr_colr" name="health_plan_benificiary_no" id="health_plan_benificiary_no" placeholder="Health plan benificiary no" maxlength="20">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label mb-10 ">Driving license number<span class="required">*</span></label>
                                                <input type="text" class="form-control rgstr_inpt plc_holdr_colr" name="driving_license" id="driving_license" placeholder="Driving license no" maxlength="20">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="pull-left control-label mb-10 ">Pan number</label>
                                                <input type="text" class="form-control rgstr_inpt plc_holdr_colr" id="pan_number" name="pan_number" placeholder="Pan no" maxlength="10">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label mb-10 ">Passport number</label>
                                                <input type="text" class="form-control rgstr_inpt plc_holdr_colr" name="passport_number" id="passport_numbers" placeholder="Passport no" maxlength="30">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="pull-left control-label mb-10 ">Aadhar card Number</label>
                                                <input type="text" class="form-control rgstr_inpt plc_holdr_colr" name="aadhar_number" id="aadhar_number" placeholder="Aadhar card no" maxlength="12">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label mb-10 ">Voter id number</label>
                                                <input type="text" class="form-control rgstr_inpt plc_holdr_colr" name="voter_id" id="voter_id" placeholder="Voter id no" maxlength="10">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label mb-10 ">Address<span class="required">*</span></label>
                                                <input type="text" class="form-control rgstr_inpt plc_holdr_colr" name="address" id="address" placeholder="Address" maxlength="50">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group pull-right pr-0 pt-0">
                                                <button type="submit" id="reg_btn" class="btn btn-rounded btn-clr btn-success " onclick="register_patient('patient_register')">Register</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->
    </div>
    <!-- Footer -->
    <!-- <?php $this->load->view('admin/footer'); ?> -->
    <!-- /Footer -->
</div>
<script>
    setTimeout(function() {
        document.getElementById("success").style.display = "none";
    }, 5000);
    setTimeout(function() {
        document.getElementById("failure").style.display = "none";
    }, 5000);
    // $('#success').fadeIn('fast').delay(5000).fadeOut('fast');
    // $('#failure').fadeIn('fast').delay(5000).fadeOut('fast');
</script>