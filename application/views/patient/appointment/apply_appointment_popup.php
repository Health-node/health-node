<!-- select2 CSS -->
<link href="<?php echo base_url(); ?>assets/vendors/bower_components/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
<!-- bootstrap-select CSS -->
<link href="<?php echo base_url(); ?>assets/vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
<!-- Custom CSS -->
<!-- Bootstrap Datetimepicker CSS -->
<link href="<?php echo base_url(); ?>assets/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/dist/css/style.css" rel="stylesheet" type="text/css">
<div class="modal-content" style=" min-height: 330px; ">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h5 class="modal-title" id="exampleModalLabel1">Apply for appointment</h5>
    </div>
    <!-- <div id="loader_div" style="display: none">
        <img src="<?php echo base_url(); ?>assets/img/Loader.gif" style="position: absolute; z-index: 99; margin-left: 200px; width: 163px;top: 90px;">
        <h3 style="position: absolute; z-index: 99; margin-left: 204px; top: 262px;">Please wait...!</h3>
    </div> -->

    <div class="modal-body">
        <div class="container-fluid ">
            <div class="wrapper ">
                <div id="loader_div" style="margin-top: 33px;display: none"> </div>
                <h6 style="position: absolute;  margin-left: 27px; top: 218px;display: none" id="info_message">
                    Please wait for a while, the data is being saved to blockchain.
                </h6>
                <div id="appointment_form">

                    <form method="POST" id="apply_appointment" autocomplete="off" name="apply_appointment">


                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="pull-left control-label mb-10">Select Doctor</label>
                                <select class="form-control select2" name="doctor_id" id="doctor_id">
                                    <option value="">Select doctor</option>
                                    <?php foreach ($doctors as $d) { ?>
                                        <option value="<?php echo $d->participantKey ?>"><?php echo $d->Name . " " . $d->Qualification ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <!-- <div class="form-group">
                                <label class="control-label mb-10 text-left">Appointment Date and Time</label>
                                <div class='input-group date' id=''>
                                    <input type='datetime-local' class="form-control" name="appointment_time" id="appointment_time" />
                                    <span class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                    </span>
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label class="control-label mb-10 text-left">Appointment Date and Time</label>
                                <div class='input-group date' id='datetimepicker1'>
                                    <input type='text' class="form-control" name="appointment_time" id="appointment_time" />
                                    <span class="input-group-addon">
                                        <span class="fa fa-calendar"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success" onclick="validate_appointments('apply_appointment')">Apply</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/vendors/bower_components/jquery/dist/jquery.min.js"></script>
<!-- <script src="<?php echo base_url() ?>assets/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->
<!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
<!-- Moment JavaScript -->
<script src="<?php echo base_url(); ?>assets/vendors/bower_components/moment/min/moment-with-locales.min.js"></script>
<!-- Bootstrap Colorpicker JavaScript -->
<script src="<?php echo base_url(); ?>assets/vendors/bower_components/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- Bootstrap Datetimepicker JavaScript -->
<script src="<?php echo base_url(); ?>assets/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<!-- Form Picker Init JavaScript -->
<script src="<?php echo base_url(); ?>assets/dist/js/form-picker-data.js"></script>
<!-- Select2 JavaScript -->
<script src="<?php echo base_url(); ?>assets/vendors/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- Bootstrap Select JavaScript -->
<script src="<?php echo base_url(); ?>assets/vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<!-- Form Advance Init JavaScript -->
<script src="<?php echo base_url(); ?>assets/dist/js/form-advance-data.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/init.js"></script>
<!-- Bootstrap Daterangepicker JavaScript -->
<script src="<?php echo base_url() ?>assets/vendors/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/custom/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/custom/js/validation.js" type="text/javascript"></script>
<style>
    #loader_div {
        position: absolute;
        left: 50%;
        top: 50%;
        /* z-index: 99; */
        width: 100%;
        /* width: 150px;
        height: 150px; */
        margin: -75px 0 0 -75px;
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #00ccff;
        width: 120px;
        height: 120px;
        -webkit-animation: spin 2s linear infinite;
        animation: spin 2s linear infinite;
    }

    @-webkit-keyframes spin {
        0% {
            -webkit-transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
        }
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    /* Add animation to "page content" */
    .animate-bottom {
        position: relative;
        -webkit-animation-name: animatebottom;
        -webkit-animation-duration: 1s;
        animation-name: animatebottom;
        animation-duration: 1s
    }

    @-webkit-keyframes animatebottom {
        from {
            bottom: -100px;
            opacity: 0
        }

        to {
            bottom: 0px;
            opacity: 1
        }
    }

    @keyframes animatebottom {
        from {
            bottom: -100px;
            opacity: 0
        }

        to {
            bottom: 0;
            opacity: 1
        }
    }
</style>