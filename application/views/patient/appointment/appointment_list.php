<?php if ($is_ajax == 0) { ?>
    <div class="page-wrapper">
        <div class="container-fluid pt-20">
            <h4 class="pb-15 text-uppercase">Appointments</h4>

            <!-- Title -->
            <!-- <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-dark">Appointments</h5>
                </div>
            </div> -->
            <!-- /Title -->

            <!-- Row -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default card-view">
                        <!-- <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">Appointments list</h6>
                            </div>
                            <div class="pull-right pontmnt_flat">
                                <button class="btn-rounded btn btn-primary ti-email" data-toggle="modal" data-target="#applyappointment" onclick="validate_apply_oppointment()"> Apply for Appointment</button>
                            </div>
                            <div class="clearfix"></div>
                        </div> -->
                        <div class="alert alert-success display-hide text-center" id="success_msg"></div>
                        <div class="alert alert-danger display-hide text-center" id="error_msg"></div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="pull-left pontmnt_center">
                                    <h6 class="panel-title txt-dark">Appointments list</h6>
                                </div>
                                <div class="pull-right pontmnt_flat">
                                    <button class="btn-rounded btn btn-primary ti-email" data-toggle="modal" data-target="#applyappointment" onclick="validate_apply_oppointment()"> Apply for Appointment</button>
                                </div>

                                <div class="clearfix"></div>
                                <div class="table-wrap">
                                    <div class="table-responsive">
                                        <div id="appointment_list">
                                        <?php  } ?>
                                        <table id="datable_2" class="table table-hover display  pb-30">
                                            <thead>
                                                <tr>
                                                    <th class="pl-5">Appointment Id</th>
                                                    <th class="pl-5">Patient</th>
                                                    <th class="pl-5">Doctor</th>
                                                    <th class="pl-5">Appointment time</th>
                                                    <th class="pl-5">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($appointments as $p) { ?>
                                                    <tr>

                                                        <td><?php echo $p->AppointmentID ?></td>
                                                        <td><?php $id = explode(".", $p->Patient);
                                                            echo $id[2] ?></td>
                                                        <td><?php $id = explode(".", $p->Doctor);
                                                            echo $id[2] ?></td>
                                                        <td><?php echo date("Y-m-d H:i:s", strtotime($p->AppointmentTime)); ?></td>
                                                        <td><?php echo $p->Status ?></td>

                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                        <?php if ($is_ajax == 0) { ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php } ?>
<div class="modal fade" id="applyappointment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" id="content_model" role="document">
    </div>
</div>
<script>
    $('#success_msg').fadeIn('fast').delay(5000).fadeOut('fast');
    $('#error_msg').fadeIn('fast').delay(5000).fadeOut('fast');
</script>