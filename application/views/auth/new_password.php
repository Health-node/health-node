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

  <!-- Custom CSS -->
  <link href="<?php echo base_url() ?>assets/dist/css/style.css" rel="stylesheet" type="text/css">

  <style>
    * {
      box-sizing: border-box;
    }

    /* ************ FINAL *********** */
    custom-wrapper {
      position: relative;
      display: block;
      /* width: 272px; */
      width: 100%;
      height: 50px;
      margin-bottom: 18px;
    }

    custom-wrapper .new_pswd {
      width: 100%;
      height: 100%;
      padding: 10px;
      font-size: 16px;
      outline: 0;
      background: offwhite;
      border: 1px solid #cccccc;
    }

    custom-wrapper .new_pswd_btn {
      position: absolute;
      height: 100%;
      width: 50px;
      top: 0;
      right: 0;
      background: gray;
      /* #424242; */
      cursor: pointer;
      border: 0;
      padding: 0;
      margin: 0;
      outline: 0;
    }


    custom-wrapper .new_pswd_btn::before,
    custom-wrapper .new_pswd_btn::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      margin: auto;
    }


    /* Eye open */
    .new_pswd[type='password']+.new_pswd_btn::before {
      width: 20px;
      height: 20px;
      background: #e0e0e0;
      border-radius: 15px 0 15px 0;
      transform: rotate(45deg);
      transition: height .2s;
      /* .168s; animation effect of eye moving slightly */
    }

    /* Pupil open */
    .new_pswd[type='password']+.new_pswd_btn::after {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background: #424242;
    }

    /* Eye closed  */
    .new_pswd[type='text']+.new_pswd_btn::before {
      width: 15px;
      height: 15px;
      background: transparent;
      border: 3px solid #e0e0e0;
      border-radius: 15px 0 15px 0;
      transform: rotate(45deg);
    }

    /* Pupil closed */
    .new_pswd[type='text']+.new_pswd_btn::after {
      width: 3px;
      height: 30px;
      border-radius: 0;
      transform: rotate(30deg);
      background: #e0e0e0;
      transition: height .135s;
      /* .132s; animation speed OF Slashbar increasing in height */
    }

    /* confirm password code here  */

    custom-wrapper .cnfrm_pswd {
      width: 100%;
      height: 100%;
      padding: 10px;
      font-size: 16px;
      outline: 0;
      background: offwhite;
      border: 1px solid #cccccc;
    }

    custom-wrapper button {
      position: absolute;
      height: 100%;
      width: 50px;
      top: 0;
      right: 0;
      background: gray;
      /* #424242; */
      cursor: pointer;
      border: 0;
      padding: 0;
      margin: 0;
      outline: 0;
    }


    custom-wrapper button::before,
    custom-wrapper button::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      margin: auto;
    }


    /* Eye open */
    .cnfrm_pswd[type='password']+button::before {
      width: 20px;
      height: 20px;
      background: #e0e0e0;
      border-radius: 15px 0 15px 0;
      transform: rotate(45deg);
      transition: height .2s;
      /* .168s; animation effect of eye moving slightly */
    }

    /* Pupil open */
    .cnfrm_pswd[type='password']+button::after {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background: #424242;
    }

    /* Eye closed  */
    .cnfrm_pswd[type='text']+button::before {
      width: 15px;
      height: 15px;
      background: transparent;
      border: 3px solid #e0e0e0;
      border-radius: 15px 0 15px 0;
      transform: rotate(45deg);
    }

    /* Pupil closed */
    .cnfrm_pswd[type='text']+button::after {
      width: 3px;
      height: 30px;
      border-radius: 0;
      transform: rotate(30deg);
      background: #e0e0e0;
      transition: height .135s;
      /* .132s; animation speed OF Slashbar increasing in height */
    }
  </style>

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
      <div class="forgot-bg-img">
        <div class="container-fluid  forgot-bg-colr">
          <!-- Row -->
          <div class="table-struct full-width full-height">
            <div class="table-cell vertical-align-middle auth-form-wrap">
              <div class="auth-form  ml-auto mr-auto no-float card-view pt-30 pb-30">
                <div class="row">
                  <div class="col-sm-12 col-xs-12">
                    <div class="sp-logo-wrap text-center pa-0 mb-10">
                      <a href="">
                        <img class="brand-img mr-10" src="<?php echo base_url() ?>assets/img/log_desk.png" alt="brand" />
                      </a>
                    </div>
                    <div class="mb-20">
                      <h5 class="text-center txt-dark mb-10">New Password</h5>
                      <h6 class="text-center txt-grey nonecase-font">You can create your password here.</h6>
                    </div>
                    <div class="form-wrap">
                      <form action="<?php echo base_url(); ?>login/change_password/<?php echo $key ?>" id="f_password" method="POST">
                        <!-- <div class="form-group">
													<label class="control-label mb-10">New Password</label>
													<input type="password" class="form-control" required=""  placeholder="Enter New Password">
                                                </div> -->
                        <!-- <div class="form-group">
													<label class="control-label mb-10">Confirm Password</label>
													<input type="password" class="form-control" required=""  placeholder="Enter Confirm Password">
												</div> -->
                        <label class="control-label mb-10">New Password</label>
                        <custom-wrapper>
                          <input type="password" class="new_pswd" name="password" id="password" placeholder="password" value="">
                          <!-- <button class="new_pswd_btn"></button> -->
                        </custom-wrapper>
                        <label class="control-label mb-10">Confirm Password</label>
                        <custom-wrapper>
                          <input type="password" class="cnfrm_pswd" name="c_password" id="c_password" placeholder="Confirm password" value="">
                          <!-- <button class="cnfm_pswd_btn"></button> -->
                        </custom-wrapper>

                        <div class="form-group text-center">
                          <button type="submit" class="btn btn-success btn-rounded" onclick="validate_change_password('f_password')">Submit</button>
                        </div>

                      </form>
                    </div>
                    <div class="text-center">
                      <a href="<?php echo base_url() ?>login">
                        <h6 class="txt-dark">Login Now.</h6>
                      </a>
                    </div>
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
  <!-- /#wrapper -->

  <!-- JavaScript -->

  <!-- jQuery -->
  <!-- <script src="<?php echo base_url() ?>assets/vendors/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/custom/js/jquery.validate.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/custom/js/additional-methods.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/custom/js/validation.js" type="text/javascript"></script> -->
  <!-- Bootstrap Core JavaScript -->
  <!-- <script src="<?php echo base_url() ?>assets/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script> -->

  <!-- Slimscroll JavaScript -->
  <!-- <script src="<?php echo base_url() ?>assets/dist/js/jquery.slimscroll.js"></script> -->

  <!-- Init JavaScript -->
  <!-- <script src="<?php echo base_url() ?>assets/dist/js/init.js"></script> -->

  <script>
    $('custom-wrapper .new_pswd_btn').on('click', function() {
      var $inp = $('custom-wrapper .new_pswd');
      $inp.attr('type') === 'password' ?
        $inp.attr('type', 'text') :
        $inp.attr('type', 'password')
    });
    $('custom-wrapper .cnfm_pswd_btn').on('click', function() {
      var $inp = $('custom-wrapper .cnfrm_pswd');
      $inp.attr('type') === 'password' ?
        $inp.attr('type', 'text') :
        $inp.attr('type', 'password')
    });
  </script>

</body>

</html>