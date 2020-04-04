<div class="page-wrapper">
    <div class="container-fluid pt-20">
        <h4 class="pb-15 text-uppercase">Patient Admission</h4>
        <!-- <div class="wrapper  pa-0">
            <div class="page-wrapper pa-0 ma-0 "> -->
        <!-- <div class="rgster-bg-img"> -->
        <div class="container-fluid bg-light">
            <!-- <div class="table-struct full-width "> -->
            <!-- <div class="table-cell vertical-align-middle"> -->
            <div class="ml-auto mr-auto no-float  pt-30 pb-30 ">
                <div class="row">
                    <div class="col-sm-12 col-xs-12 ">
                        <!-- <div class="mb-30">
                                            <h4 class=" mb-20">Patient Admission</h4>
                                        </div> -->
                        <?php if ($this->session->flashdata('msg')) { ?>
                            <div class="alert alert-success" id="alert">
                                <?php echo $this->session->flashdata('msg'); ?>
                            </div>
                        <?php  } else if ($this->session->flashdata('err')) { ?>
                            <div class="alert alert-danger" id="alert">
                                <?php echo $this->session->flashdata('err'); ?>
                            </div>
                        <?php } ?>
                        <!-- <div id="loader_div" style="display: none">
                                            <img src="<?php echo base_url(); ?>assets/img/Loader.gif" style="position: absolute; z-index: 99; margin-left: 559px; width: 181px;top: 138px;">
                                            <h3 style="position: absolute; z-index: 99; margin-left: 560px; top: 335px;">Please wait....!</h3>
                                        </div> -->

                        <input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>">
                        <div class="form-wrap">
                            <form action="<?php echo base_url() ?>admin/admit_patient" method="POST" id="patient_admit" autocomplete="off" name="registration-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="pull-left control-label mb-10 ">Select Patient</label>
                                            <select class="control-label form-control" name="patient_name" id="patient_name">
                                                <option value="">Select Patient</option>
                                                <?php foreach ($patients as $p) { ?>
                                                    <option value="<?php echo $p->participantKey ?>"><?php echo $p->participantKey ?> <?php echo $p->Name ?> </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="pull-left control-label mb-10 ">Bed Type<span class="required">*</span></label>
                                            <input type="text" class="form-control  plc_holdr_colr" name="bed_type" id="bed_type" placeholder="Enter bed type">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="pull-left control-label mb-10 ">Room No<span class="required">*</span></label>
                                            <input type="text" class="form-control  plc_holdr_colr" name="room_no" id="room_no" placeholder="Room Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- <div class="form-group">
                                                            <label class="control-label mb-10 ">Date Of Admit<span class="required">*</span></label>
                                                            <input type="date" class="form-control  plc_holdr_colr" name="date_of_admit" id="dob" placeholder="">
                                                        </div> -->
                                        <div class="form-group">
                                            <label class="control-label mb-10 text-left">Date Of Admit <span class="required">*</span></label>
                                            <div class='input-group date' id='datetimepicker1'>
                                                <input type='text' class="form-control plc_holdr_colr" name="date_of_admit" id="dob" />
                                                <span class="input-group-addon">
                                                    <span class="fa fa-calendar"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="pull-left control-label mb-10 ">Description<span class="required">*</span></label>
                                            <textarea type="text" class="form-control  plc_holdr_colr" rows="4" name="description" id="description" placeholder="Description"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group pull-right pr-0">
                                            <button type="submit" id="reg_btn" class="btn btn-rounded btn-clr btn-success" onclick="admit_patient('patient_admit')">Register</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </div> -->
            <!-- </div> -->
        </div>
        <!-- </div> -->
        <!-- </div>
        </div> -->
    </div>
    <!-- Footer -->
    <?php $this->load->view('admin/footer'); ?>
    <!-- /Footer -->
</div>
<script>
    setTimeout(function() {
        document.getElementById("alert").style.display = "none";
    }, 5000);
    // setTimeout(function() {
    //     document.getElementById("failure").style.display = "none";
    // }, 5000);
</script>