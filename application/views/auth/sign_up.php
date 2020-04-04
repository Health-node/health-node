<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Health Node</title>


    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/favicon.png">
    <link rel="icon" href="<?php echo base_url() ?>assets/img/favicon.ico" type="image/x-icon">

    <!-- vector map CSS -->
    <link href="<?php echo base_url() ?>assets/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Datetimepicker CSS -->
    <link href="<?php echo base_url() ?>assets/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>assets/dist/css/style.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap Colorpicker CSS -->
	<link href="<?php echo base_url() ?>assets/vendors/bower_components/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet" type="text/css"/>
	<!-- Bootstrap Daterangepicker CSS -->
	<link href="<?php echo base_url() ?>assets/vendors/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css"/>
		 

</head>

<body>
    <!--Preloader-->
    <div class="preloader-it">
        <div class="la-anim-1"></div>
    </div>
    <!--/Preloader-->

    <div class="wrapper  pa-0">
        <!-- Main Content -->
        <div class="page-wrapper pa-0 ma-0 auth-page">
            <div class="rgster-bg-img">
                <div class="container-fluid lgn-bg-colr">
                    <!-- Row -->
                    <div class="table-struct full-width full-height">
                        <div class="table-cell vertical-align-middle auth-form-wrap rgster_pdng">
                            <div class="col-md-8 ml-auto mr-auto no-float card-view pt-30 pb-30 bg-light">
                                <div class="row">
                                    <div class="col-sm-12 col-xs-12 ">
                                        <div class="mb-30">
                                            <h5 class="rgster_colr mb-20">Register To Health Node</h5>
                                        </div>
                                        <div class="alert alert-success display-hide" id="success_msg"></div>
                                        <div class="alert alert-danger display-hide" id="error_msg"></div>
                                        <!-- <div id="loader_div" style="display: none">
                                        <img src="<?php echo base_url(); ?>assets/img/Loader.gif" style="position: absolute; z-index: 99; margin-left: 436px; width: 181px;top: 350px;">
                                        <h3 style="position: absolute; z-index: 99; margin-left: 436px; top: 543px; color: white">Please wait....</h3>
                                    </div> -->
                                        <input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>">
                                        <div class="form-wrap">
                                            <form method="POST" id="registration-form" autocomplete="off" name="registration-form">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10 rgster_colr">Full name<span class="required">*</span></label>
                                                            <input type="text" class="form-control rgstr_inpt plc_holdr_colr" name="full_name" id="full_name" placeholder="Full name" minlength="3" maxlength="30">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="pull-left control-label mb-10 rgster_colr">Email<span class="required">*</span></label>
                                                            <input type="email" class="form-control rgstr_inpt plc_holdr_colr" name="email" id="email" placeholder="Enter Email" maxlength="40">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10 rgster_colr">Password<span class="required">*</span></label>
                                                            <input type="password" class="form-control rgstr_inpt plc_holdr_colr" name="password" id="password" placeholder="Password">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="pull-left control-label mb-10 rgster_colr">Confirm Password<span class="required">*</span></label>
                                                            <input type="password" class="form-control rgstr_inpt plc_holdr_colr" name="c_password" id="c_password" placeholder="Confirm Password">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <!-- <div class="form-group">
                                                        <label class="control-label mb-10 rgster_colr">DOB<span class="required">*</span></label>
                                                        <input type="date" class="form-control rgstr_inpt plc_holdr_colr" name="dob" id="dob" placeholder="">
                                                        </div> -->
                                                        <div class="form-group">
								                            <label class="control-label mb-10 text-left rgster_colr">DOB<span class="required">*</span></label>
									                        <div class='input-group date' id='datetimepicker-1'>
										                        <input type='text' class="form-control rgstr_inpt plc_holdr_colr" name="dob" id="dob"/>
										                        <span class="input-group-addon">
										                        <span class="fa fa-calendar"></span></span>
									                        </div>
							                            </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="pull-left control-label mb-10 rgster_colr">Mobile Number<span class="required">*</span></label>
                                                            <input type="text" class="form-control rgstr_inpt plc_holdr_colr" name="mobile" id="mobile" placeholder="Mobile Number" maxlength="10">
                                                        </div>
                                                    <!-- <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="pull-left control-label mb-10 rgster_colr">Mobile Number<span class="required">*</span></label>
                                                            <input type="text" class="form-control rgstr_inpt plc_holdr_colr" name="mobile" id="mobile" placeholder="Mobile Number">
                                                        </div>
                                                    </div> -->
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10 rgster_colr">Telephone Number</label>
                                                            <input type="text" class="form-control rgstr_inpt plc_holdr_colr" name="telephone" id="telephone" placeholder="Telephone number" maxlength="12">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="pull-left control-label mb-10 rgster_colr">Fax Number</label>
                                                            <input type="text" class="form-control rgstr_inpt plc_holdr_colr" name="fax" id="fax" placeholder="Fax no" maxlength="12">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10 rgster_colr">Bank Account<span class="required">*</span></label>
                                                            <input type="text" class="form-control rgstr_inpt plc_holdr_colr" name="bank_account" id="bank_account" placeholder="Bank account" maxlength="16">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="pull-left control-label mb-10 rgster_colr">Credit card number</label>
                                                            <input type="text" class="form-control rgstr_inpt plc_holdr_colr" name="credit_card" id="credit_card" placeholder="Credit card no" maxlength="19">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10 rgster_colr">Medical record number<span class="required">*</span></label>
                                                            <input type="text" class="form-control rgstr_inpt plc_holdr_colr" name="medical_record_no" id="medical_record_no" placeholder="Medical record no" maxlength="20">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="pull-left control-label mb-10 rgster_colr">Health plan benificiary no<span class="required">*</span></label>
                                                            <input type="text" class="form-control rgstr_inpt plc_holdr_colr" name="health_plan_benificiary_no" id="health_plan_benificiary_no" placeholder="Health plan benificiary no" maxlength="20">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10 rgster_colr">Driving license number<span class="required">*</span></label>
                                                            <input type="text" class="form-control rgstr_inpt plc_holdr_colr" name="driving_license" id="driving_license" placeholder="Driving license no" maxlength="20">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="pull-left control-label mb-10 rgster_colr">Pan number</label>
                                                            <input type="text" class="form-control rgstr_inpt plc_holdr_colr" id="pan_number" name="pan_number" placeholder="Pan no" maxlength="10">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10 rgster_colr">Passport number</label>
                                                            <input type="text" class="form-control rgstr_inpt plc_holdr_colr" name="passport_number" id="passport_numbers" placeholder="Passport no" maxlength="30">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="pull-left control-label mb-10 rgster_colr">Aadhar card Number</label>
                                                            <input type="text" class="form-control rgstr_inpt plc_holdr_colr" name="aadhar_number" id="aadhar_number" placeholder="Aadhar card no" maxlength="12">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10 rgster_colr">Voter id number</label>
                                                            <input type="text" class="form-control rgstr_inpt plc_holdr_colr" name="voter_id" id="voter_id" placeholder="Voter id no" maxlength="10">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10 rgster_colr">Address<span class="required">*</span></label>
                                                            <input type="text" class="form-control rgstr_inpt plc_holdr_colr mb-0" name="address" id="address" placeholder="Address" maxlength="50">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group pull-right pr-0 pt-10">
                                                            <button type="submit" id="reg_btn" class="btn btn-rounded btn-clr btn-success sinup_btn">sign Up</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="lgn_page_btm text-center">
                                        <hr class="rgster_hr">
                                        <a class="rgster_heading pt-10" href="<?php echo base_url() ?>login"> I have an account <strong> Login Now.</strong></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /Row -->
                </div>

            </div>
        </div>
        <!-- /Main Content -->

    </div>
    <!-- loader start code -->
    <div class="modal fade" id="myModal_signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document" style="top: 50%;">
            <div id="loader_div"></div>
        </div>
    </div>
    <!-- loader end -->

    <style>
        #loader_div {
            position: absolute;
            left: 50%;
            top: 50%;
            z-index: 99999999999999999;
            width: 100%;
            /* width: 150px;
        height: 150px; */
            margin: -75px 0 0 -75px;
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #00b45a;
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
    <!-- /#wrapper -->

    <!-- JavaScript -->

    <!-- jQuery -->
    <!-- <script src="<?php echo base_url() ?>assets/vendors/bower_components/jquery/dist/jquery.min.js"></script> -->

    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="<?php echo base_url() ?>assets/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script> -->

    <!-- Slimscroll JavaScript -->
    <!-- <script src="<?php echo base_url() ?>assets/dist/js/jquery.slimscroll.js"></script> -->

    <!-- Init JavaScript -->
    <!-- <script src="<?php echo base_url() ?>assets/dist/js/init.js"></script> -->
    
    <!-- jQuery -->
		<script src="<?php echo base_url() ?>assets/vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="<?php echo base_url() ?>assets/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		
		<!-- Moment JavaScript -->
		<script type="text/javascript" src="<?php echo base_url() ?>assets/vendors/bower_components/moment/min/moment-with-locales.min.js"></script>
		
		<!-- Bootstrap Colorpicker JavaScript -->
		<script src="<?php echo base_url() ?>assets/vendors/bower_components/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
				
		<!-- Bootstrap Datetimepicker JavaScript -->
		<script type="text/javascript" src="<?php echo base_url() ?>assets/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
		
		<!-- Bootstrap Daterangepicker JavaScript -->
		<script src="<?php echo base_url() ?>assets/vendors/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
		
		<!-- Form Picker Init JavaScript -->
		<script src="<?php echo base_url() ?>assets/dist/js/form-picker-data.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="<?php echo base_url() ?>assets/dist/js/jquery.slimscroll.js"></script>
	
		<!-- Fancy Dropdown JS -->
		<script src="<?php echo base_url() ?>assets/dist/js/dropdown-bootstrap-extended.js"></script>
		
		<!-- Owl JavaScript -->
		<script src="<?php echo base_url() ?>assets/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
	
		<!-- Switchery JavaScript -->
		<script src="<?php echo base_url() ?>assets/vendors/bower_components/switchery/dist/switchery.min.js"></script>
	
		<!-- Init JavaScript -->
		<script src="<?php echo base_url() ?>assets/dist/js/init.js"></script>

        <script src="<?php echo base_url() ?>assets/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script> -->

   
    <script src="<?php echo base_url(); ?>assets/custom/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/custom/js/additional-methods.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/custom/js/login.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            //Initialize tooltips
            $('.nav-tabs > li a[title]').tooltip();

            //Wizard
            $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {

                var $target = $(e.target);

                if ($target.parent().hasClass('disabled')) {
                    return false;
                }
            });

            $(".next-step").click(function(e) {

                var $active = $('.wizard .nav-tabs li.active');
                $active.next().removeClass('disabled');
                nextTab($active);

            });
            $(".prev-step").click(function(e) {

                var $active = $('.wizard .nav-tabs li.active');
                prevTab($active);

            });

            $(".next-step").click(function(e) {
                $('#form').validator().on('submit', function(e) {
                    if (e.isDefaultPrevented()) {
                        // handle the invalid form...
                        alert("Failed");
                    } else {
                        // everything looks good!
                        alert("Successful!");
                    }
                });
            });



            //End of Doc Ready
        });

        function nextTab(elem) {
            $(elem).next().find('a[data-toggle="tab"]').click();
        }

        function prevTab(elem) {
            $(elem).prev().find('a[data-toggle="tab"]').click();
        }
    </script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->

</body>

</html>