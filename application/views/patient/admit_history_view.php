<div class="page-wrapper">
    <div class="container-fluid pt-20">
        <h4 class="pb-15 text-uppercase">Admit History</h4>

        <!-- Title -->
        <!-- <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">Admit History</h5>
            </div>
        </div> -->
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    <!-- <div class="panel-heading">
                        <div class="clearfix"></div>
                    </div> -->
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table id="datable_2" class="table table-hover display  pb-30">
                                        <thead>
                                            <tr>
                                                <th class="pl-5">AdmitID</th>
                                                <th class="pl-5">Patient</th>
                                                <th class="pl-5">Description</th>
                                                <th class="pl-5">RoomNo</th>
                                                <th class="pl-5">BedType</th>
                                                <th class="pl-5">Admit Date</th>
                                                <th class="pl-5">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($admits as $a) { ?>
                                                <tr>
                                                    <td><?php echo $a->AdmitID ?></td>
                                                    <td><?php $id = explode(".", $a->Patient);
                                                        echo $id[2] ?></td>
                                                    <td><?php echo $a->Description ?></td>
                                                    <td><?php echo $a->RoomNo ?></td>
                                                    <td><?php echo $a->BedType ?></td>
                                                    <td><?php echo date("Y-m-d H:i:s", strtotime($a->Admit_Date)); ?></td>
                                                    <td><?php echo $a->Status ?></td>
                                                </tr>
                                            <?php  } ?>
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
<?php foreach ($admits as $a) { ?>
    <script>
        var d = new Date("<?php echo $a->Admit_Date ?>");
        document.getElementById("admit_<?php echo $a->AdmitID ?>").innerHTML = d.toLocaleString('en-ZA', {
            timeZone: 'Asia/Tokyo'
        });;
    </script>
<?php } ?>