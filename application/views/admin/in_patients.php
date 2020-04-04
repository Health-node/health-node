<?php if ($is_ajax == 0) { ?>
    <div class="page-wrapper">
        <div class="container-fluid pt-20">
            <h4 class="pb-15 text-uppercase">In Patients List</h4>
            <!-- <div id="loader_div" style="display: none">
                <img src="<?php echo base_url(); ?>assets/img/Loader.gif" style="position: absolute; z-index: 99; margin-left: 600px; width: 181px;top: 350px;">
                <h3 style="position: absolute; z-index: 99; margin-left: 238px; top: 543px;">Please wait while we are inserting patient details into blockchain...</h3>
            </div> -->
            <!-- Title -->
            <!-- <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-dark" style="font-weight: bold">In Patients List</h5>
                </div>
            </div> -->
            <!-- /Breadcrumb -->

            <!-- /Title -->
            <div class="alert alert-success" id="error_msg" style="display: none"></div>
            <div class="alert alert-danger" id="success_msg" style="display: none"></div>
            <!-- Row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default card-view">
                        <!-- <div class="panel-heading">
                        <div class="pull-left">
                            <h6 class="panel-title txt-dark">Prescription</h6>
                        </div>
                        <div class="clearfix"></div>
                    </div> -->
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="table-wrap">
                                    <div class="table-responsive">
                                        <div id="in_patients">
                                        <?php } ?>
                                        <table id="datable_2" class="table table-hover display  pb-30">
                                            <thead>
                                                <tr>
                                                    <th>Admit Id</th>
                                                    <th>Patient</th>
                                                    <th>Room No</th>
                                                    <th>Bed Type</th>
                                                    <th>Date of admit</th>
                                                    <th>Descrption</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="adm_td_pdng">
                                                <?php foreach ($in_patients as $ip) { ?>
                                                    <?php if ($ip->Status == 'ACTIVE') { ?>
                                                        <tr>
                                                            <td><?php echo $ip->AdmitID ?></td>
                                                            <td><?php $id = explode(".", $ip->Patient);
                                                                echo $id[2] ?></td>
                                                            <td><?php echo $ip->RoomNo ?></td>
                                                            <td><?php echo $ip->BedType ?></td>
                                                            <td><?php echo date("Y-m-d H:i:s ", strtotime($ip->Admit_Date)); ?></td>
                                                            <td><?php echo $ip->Description ?></td>
                                                            <td><button class="btn btn-rounded btn-warning btn-sm load_cr" onclick="discharge_patient('<?php echo $ip->AdmitID ?>')">Discharge</button></td>
                                                        </tr>
                                                    <?php } ?>
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
<div class="modal fade" id="myModal_in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document" style="top: 50%;">
        <div id="loader_div"></div>
        <h6 class="loader_dwn_txt">Please wait for a while, the data is being saved to blockchain.</h6>
    </div>
</div>
<script>
    $('#error_msg').fadeIn('fast').delay(5000).fadeOut('fast');
    $('#success_msg').fadeIn('fast').delay(5000).fadeOut('fast');
</script>