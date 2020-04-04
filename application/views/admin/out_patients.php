<div class="page-wrapper">
    <div class="container-fluid pt-20">
        <h4 class="pb-15 text-uppercase">Out Patients List</h4>

        <!-- Title -->
        <!-- <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark" style="font-weight: bold">Out Patients List</h5>
            </div>
        </div> -->
        <!-- /Title -->

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
                                    <table id="datable_2" class="table table-hover display  pb-30">
                                        <thead>
                                            <tr>
                                            <tr>
                                                <th>VisitID</th>
                                                <th>Appointment</th>
                                                <th>Patient</th>
                                                <th>Doctor</th>
                                                <th>Description</th>
                                                <th>Visit_Date</th>
                                                <!-- <th>Action</th> -->
                                            </tr>
                                            </tr>
                                        </thead>
                                        <tbody class="adm_td_pdng">
                                            <?php foreach ($visits_list as $vl) { ?>
                                                <tr>
                                                    <td><?php echo $vl->VisitID ?></td>
                                                    <td><a href="<?php echo base_url() ?>patient/patient_apponintment_list" style="color: red"><?php $id = explode("#", $vl->Appointment);
                                                                                                                                                echo $id[1] ?></a></td>
                                                    <td><?php $id = explode(".", $vl->Patient);
                                                        echo $id[2] ?></td>
                                                    <td><?php $id = explode(".", $vl->Doctor);
                                                        echo $id[2] ?></td>
                                                    <td><?php echo $vl->Description ?></td>
                                                    <td>
                                                        <?php echo date("Y-m-d H:i:s", strtotime($vl->Visit_Date)); ?>
                                                    </td>
                                                    <!-- <td><button class="btn btn-warning">Show Prescription</button></td> -->
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
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