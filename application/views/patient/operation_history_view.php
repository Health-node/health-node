<div class="page-wrapper">
		<div class="container-fluid pt-20">
			<h4 class="pb-15 text-uppercase">Operation History</h4>

        <!-- Title -->
        <!-- <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark" style="font-weight: bold">Operation History</h5>
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
                        
                    </div> -->
                <div class="clearfix"></div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <!-- <div class="tab-struct custom-tab-2 mt-40"> -->
                        <!-- <ul role="tablist" class="nav nav-tabs" id="myTabs_15">
                                <li class="active" role="presentation"><a aria-expanded="true" data-toggle="tab" role="tab" id="home_tab_15" href="#home_15">Operation</a></li>
                                <li role="presentation" class=""><a data-toggle="tab" id="profile_tab_15" role="tab" href="#profile_15" aria-expanded="false">Birth</a></li>
                                <li role="presentation" class=""><a data-toggle="tab" id="death_tab" role="tab" href="#death" aria-expanded="false">Death</a></li>
                            </ul> -->
                        <!-- <div class="tab-content" id="myTabContent_15"> -->
                        <div id="home_15" class="tab-pane fade active in" role="tabpanel">
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- <div class="panel panel-default card-view"> -->
                                        <!-- <div class="panel-heading">
                                            <div class="pull-left">
                                                <h6 class="panel-title txt-dark">Operations List</h6>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div> -->
                                        <div class="panel-wrapper collapse in">
                                            <div class="panel-body pt-0">
                                                <div class="table-wrap">
                                                    <div class="table-responsive">
                                                        <table id="datable_2" class="table table-hover display  pb-30">
                                                            <thead>
                                                                <tr>
                                                                    <th class="pl-5">OperationID</th>
                                                                    <th class="pl-5">Patient</th>
                                                                    <th class="pl-5">Doctor</th>
                                                                    <th class="pl-5">Operation Name</th>
                                                                    <th class="pl-5">Description</th>
                                                                    <th class="pl-5">Anesthesia</th>
                                                                    <th class="pl-5">PreOperative Diagnosis date</th>
                                                                    <th class="pl-5">PostOperative Diagnosis</th>
                                                                    <th class="pl-5">Operation Started</th>
                                                                    <th class="pl-5">Operation Ended</th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach ($operations as $o) { ?>
                                                                    <tr>
                                                                        <td><?php echo $o->OperationID ?></td>
                                                                        <td><?php $id = explode(".", $o->Patient);
                                                                            echo $id[2] ?></td>
                                                                        <td><?php $id = explode(".", $o->Doctor);
                                                                            echo $id[2] ?></td>
                                                                        <td><?php echo $o->Name_Of_Operation ?></td>
                                                                        <td><?php echo $o->Description ?></td>
                                                                        <td><?php echo $o->Anesthesia ?></td>
                                                                        <td><?php echo $o->PreOperative_Diagnosis ?></td>
                                                                        <td><?php echo $o->PostOperative_Diagnosis ?></td>
                                                                        <td id="start_<?php echo $o->OperationID ?>"></td>
                                                                        <td id="end_<?php echo $o->OperationID ?>"></td>
                                                                    </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- <div id="profile_15" class="tab-pane fade" role="tabpanel">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="panel panel-default card-view">
                                                <div class="panel-wrapper collapse in">
                                                    <div class="panel-body">
                                                        <div class="table-wrap">
                                                            <div class="table-responsive">
                                                                <table id="example" class="table table-hover display  pb-30">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Name</th>
                                                                            <th>Position</th>
                                                                            <th>Office</th>
                                                                            <th>Age</th>
                                                                            <th>Start date</th>
                                                                            <th>Salary</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Tiger Nixon</td>
                                                                            <td>System Architect</td>
                                                                            <td>Edinburgh</td>
                                                                            <td>61</td>
                                                                            <td>2011/04/25</td>
                                                                            <td>$320,800</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Garrett Winters</td>
                                                                            <td>Accountant</td>
                                                                            <td>Tokyo</td>
                                                                            <td>63</td>
                                                                            <td>2011/07/25</td>
                                                                            <td>$170,750</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div> -->
                        <!-- <div id="death" class="tab-pane fade" role="tabpanel">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="panel panel-default card-view">
                                                <div class="panel-wrapper collapse in">
                                                    <div class="panel-body">
                                                        <div class="table-wrap">
                                                            <div class="table-responsive">
                                                                <table id="example" class="table table-hover display  pb-30">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Name</th>
                                                                            <th>Position</th>
                                                                            <th>Office</th>
                                                                            <th>Age</th>
                                                                            <th>Start date</th>
                                                                            <th>Salary</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Tiger Nixon</td>
                                                                            <td>System Architect</td>
                                                                            <td>Edinburgh</td>
                                                                            <td>61</td>
                                                                            <td>2011/04/25</td>
                                                                            <td>$320,800</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div> -->
                        <!-- </div> -->
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
<?php $this->load->view('admin/footer');?>
        <!-- /Footer -->
</div>
<?php foreach ($operations as $o) { ?>
    <script>
        var d = new Date("<?php echo $o->Operation_Started ?>");
        document.getElementById("start_<?php echo $o->OperationID ?>").innerHTML = d.toLocaleString('en-ZA', {
            timeZone: 'Asia/Tokyo'
        });;
    </script>
    <script>
        var d = new Date("<?php echo $o->Operation_Ended ?>");
        document.getElementById("end_<?php echo $o->OperationID ?>").innerHTML = d.toLocaleString('en-ZA', {
            timeZone: 'Asia/Tokyo'
        });;
    </script>
<?php } ?>