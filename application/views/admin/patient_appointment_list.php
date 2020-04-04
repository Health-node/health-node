<?php if ($is_ajax == 0) { ?>
    <div class="page-wrapper">
        <div class="container-fluid pt-20">
            <h4 class="pb-15 text-uppercase">Patients Appointment List</h4>
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default card-view">
                        <!-- <div class="panel-heading">
                        <div class="pull-left">
                            <h6 class="panel-title txt-dark">Prescription</h6>
                        </div>
                        <div class="clearfix"></div>
                    </div> -->
                        <div class="alert alert-success display-hide text-center" id="error_message"></div>
                        <div class="alert alert-danger display-hide text-center" id="success_message"></div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <!-- <img src="<?php echo base_url(); ?>assets/img/health.gif" style="position: absolute; z-index: 99;"> -->

                                <div class="table-wrap">
                                    <div class="table-responsive">
                                        <div id="appoint_table">
                                        <?php } ?>
                                        <table id="datable_2" class="table table-hover display  pb-30">
                                            <thead>
                                                <tr>
                                                    <th>Appointment Id</th>
                                                    <th>Patient</th>
                                                    <th>Doctor</th>
                                                    <th>Appointment Time</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody class="adm_td_pdng">
                                                <?php foreach ($appointment_list as $al) { ?>
                                                    <tr>
                                                        <td><?php echo $al->AppointmentID ?></td>
                                                        <td><?php $id = explode(".", $al->Patient);
                                                            echo $id[2] ?></td>
                                                        <td><?php $id = explode(".", $al->Doctor);
                                                            echo $id[2] ?></td>
                                                        <td><?php echo date("Y-m-d H:i:s", strtotime($al->AppointmentTime)); ?></td>
                                                        <?php if ($al->Status == 'PENDING') { ?>
                                                            <td><button type="submit" class="btn btn-rounded btn-success mb-5 mt-5 btn-sm" onclick="approve_appointment('<?php echo $al->AppointmentID ?>')">Approve</button>
                                                                <button class="btn btn-rounded btn-danger mb-5 mt-5 btn-sm" onclick="reject_appointment('<?php echo $al->AppointmentID ?>')">Reject</button>
                                                            </td>
                                                        <?php } else { ?>
                                                            <td>
                                                                <?php echo $al->Status ?>
                                                            </td>
                                                        <?php } ?>
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

        <!-- Footer -->
        <?php $this->load->view('admin/footer'); ?>
        <!-- /Footer -->
    </div>
<?php } ?>
<!-- Loader start code -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style=" min-height: 330px; ">
            <div id="loader_div"></div>
            <h6 class="loader_dwn_txt">Please wait for a while, the data is being saved to blockchain.</h6>
        </div>
    </div>
</div>
<script>
    <?php //foreach ($appointment_list as $al) { 
    ?>
    // var d = new Date("<?php echo $al->AppointmentTime ?>");
    // document.getElementById("appoint_<?php echo $al->AppointmentID ?>").innerHTML = d.toLocaleString('en-ZA', {
    //     timeZone: 'Asia/Kolkata'
    // });;
    <?php //} 
    ?>
</script>
<!-- </div>
</div>
</div>
</div>
</div> -->
<script>
    $('#success_message').fadeIn('fast').delay(5000).fadeOut('fast');
    $('#error_message').fadeIn('fast').delay(5000).fadeOut('fast');
</script>