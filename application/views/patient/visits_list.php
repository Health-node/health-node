<div class="page-wrapper">
    <div class="container-fluid pt-20">
        <h4 class="pb-15 text-uppercase">Visits list</h4>

        <!-- Title -->
        <!-- <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">Visits list</h5>
            </div>
        </div> -->
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    <!-- <div class="panel-heading"> -->
                    <!-- <div class="pull-left">
                            <h6 class="panel-title txt-dark">Visits List</h6>
                        </div> -->
                    <div class="clearfix"></div>
                    <!-- </div> -->
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table id="datable_2" class="table table-hover display  pb-30">
                                        <thead>
                                            <tr>
                                                <th class="pl-5">VisitID</th>
                                                <th class="pl-5">Appointment</th>
                                                <th class="pl-5">Patient</th>
                                                <th class="pl-5">Doctor</th>
                                                <th class="pl-5">Description</th>
                                                <th class="pl-5">Visit_Date</th>
                                                <!-- <th>Action</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
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
                                                    <td><?php echo date("Y-m-d H:i:s", strtotime($vl->Visit_Date)); ?></td>
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
<!-- <?php foreach ($visits_list as $vl) { ?>
    <script>
        var d = new Date("<?php echo $vl->Visit_Date ?>");
        document.getElementById("appoint_<?php echo $vl->Appointment ?>").innerHTML = d.toLocaleString('en-ZA', {
            timeZone: 'Asia/Kolkata'
        });;
    </script>
<?php } ?> -->