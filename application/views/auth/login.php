<meta charset="UTF-8" />
<?php
$segment1 = strtolower($this->uri->segment(1));
$segment2 = strtolower($this->uri->segment(2));
$segment3 = strtolower($this->uri->segment(3));
$segment4 = strtolower($this->uri->segment(4));
?>
<input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>">
<input type="hidden" name="segment1" id="segment1" value="<?php echo $segment1; ?>">
<input type="hidden" name="segment2" id="segment2" value="<?php echo $segment2; ?>">
<input type="hidden" name="segment3" id="segment3" value="<?php echo $segment3; ?>">
<input type="hidden" name="segment4" id="segment4" value="<?php echo $segment4; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>Health Node</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="interakt" />
<!-- Favicon -->
<!-- <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/favicon.png"> -->
<link rel="icon" href="<?php echo base_url() ?>assets/img/favicon.ico" type="image/x-icon">
<link href="<?php echo base_url() ?>assets/vendors/bower_components/jquery-wizard.js/css/wizard.css" rel="stylesheet" type="text/css" />

<!-- jquery-steps css -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/bower_components/jquery.steps/demo/css/jquery.steps.css">
<!-- Data table CSS -->
<link href="<?php echo base_url() ?>assets/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<!-- Toast CSS -->
<link href="<?php echo base_url() ?>assets/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">
<!-- Morris Charts CSS -->
<link href="<?php echo base_url() ?>assets/vendors/bower_components/morris.js/morris.css" rel="stylesheet" type="text/css" />
<!-- vector map CSS -->
<link href="<?php echo base_url() ?>assets/vendors/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" type="text/css" />
<!-- Custom CSS -->
<link href="<?php echo base_url() ?>assets/dist/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>assets/dist/css/main.css" rel="stylesheet" type="text/css">
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="POST" action="" id="login-form" name="login-form">
                <?php if ($this->session->flashdata('msg')) { ?>
                    <div class="alert alert-success" id="success">
                        <?php echo $this->session->flashdata('msg'); ?>
                    </div>
                <?php  } else if ($this->session->flashdata('err')) { ?>
                    <div class="alert alert-danger" id="failure">
                        <?php echo $this->session->flashdata('err'); ?>
                    </div>
                <?php } ?>
                <div class="alert alert-success display-hide" id="success_message"></div>
                <div class="alert alert-danger display-hide" id="error_message"></div>
                <div class="text-center mb-20">
                    <img class="brand-img logo_none_dest" src="<?php echo base_url() ?>assets/img/lgn_logo.png" alt="brand" />
                </div>
                <span class="login100-form-title p-b-43">
                    Login to continue
                </span>
                <div class="wrap-input100">
                    <input type="email" name="email" class="lgn_form_inpt" placeholder="Email">
                </div>
                <div class="wrap-input100">
                    <input type="password" name="password" id="password" class="lgn_form_inpt" placeholder="Password">
                    <!-- <div class="form-group mt-20">
						<div class="input-group">
							<input type="password" name="password" class="lgn_radis_inp" placeholder="Password">
                            <div class="input-group-addon lgn_radis_icn"><i class="fa fa-eye"></i>
                            </div>
					    </div>
                    </div> -->
                </div>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn lgn_form_btn">
                        Login
                    </button>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="lgn_forgt_btm">
                            <a href="<?php echo base_url() ?>login/forgot">
                                <h6 class="lgn_heading">Forgot Password ?</h6>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="lgn_rgtr_btm">
                            <a href="<?php echo base_url() ?>login/signup">
                                <h6 class="lgn_heading"> Don't have an account? <strong> Register as a Patient.</strong></h6>
                            </a>
                        </div>
                    </div>
                </div>
            </form>
            <div class="login100-more">
                <div class="text-center lgn_img_pdng">
                    <img src="<?php echo base_url() ?>assets/img/log7.png" class="lgn_tab_img" alt="Health Node logo">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Loader start code -->
<div class="modal fade" id="myModal_login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document" style="top: 50%;">
        <!-- <div class="modal-content"> -->
        <div id="loader_div"></div>

        <!-- </div> -->
    </div>
</div>
<!-- Loader end code -->
<script src="<?php echo base_url() ?>assets/vendors/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/custom/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/custom/js/additional-methods.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/custom/js/login.js" type="text/javascript"></script>
<script>
    setTimeout(function() {
        document.getElementById("success").style.display = "none";
    }, 20000);
    setTimeout(function() {
        document.getElementById("failure").style.display = "none";
    }, 20000);
    // setTimeout(function() {
    //     document.getElementById("success_message").style.display = "none";
    // }, 20000);
    // setTimeout(function() {
    //     document.getElementById("error_message").style.display = "none";
    // }, 20000);
</script>
<script type="text/javascript">
    // $(function() {
    //     setTimeout(function() {
    //         $("#error_message").fadeOut(1000);
    //     }, 1000)
    // });
    // $(function() {
    //     setTimeout(function() {
    //         $("#success_message").fadeOut(1000);
    //     }, 1000)
    // });
    $("#password").click(function() {
        $("#error_message").fadeOut("slow");
    });
</script>
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