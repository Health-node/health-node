<!-- Bootstrap table CSS -->
<link href="<?php echo base_url() ?>assets/vendors/bower_components/bootstrap-table/dist/bootstrap-table.css" rel="stylesheet" type="text/css" />

<!-- Custom CSS -->
<link href="<?php echo base_url() ?>assets/dist/css/style.css" rel="stylesheet" type="text/css">
<div class="modal-content">
    <div class="modal-header pop_bg_colr pl-25">
        <button type="button" class="close txt-light close_custm" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h5 class="modal-title txt-light" id="exampleModalLabel1">Pending Users</h5>
    </div>
    <div class="modal-body pl-20 pr-20">
        <div class="table-wrap">
            <div class="table-responsive">
                <table class="table mb-0 mt-15 table-bordered">
                    <thead class="pendng_pop">
                        <tr>
                            <th>Name</th>
                            <td><?php if (isset($pending[0]->Name)) echo $pending[0]->Name ?></td>
                        </tr>
                        <tr>
                            <th>Email ID</th>
                            <td><?php if (isset($pending[0]->Email_ID)) echo $pending[0]->Email_ID ?></td>
                        </tr>

                        <tr>
                            <th>Mobile No</th>
                            <td><?php if (isset($pending[0]->Mobile_No)) echo $pending[0]->Mobile_No ?></td>
                        </tr>
                        <tr>
                            <th>DOB</th>
                            <td><?php if (isset($pending[0]->DOB)) echo date("Y-m-d", strtotime($pending[0]->DOB)); ?></td>
                        </tr>
                        <tr>
                            <th>Medical Record Number</th>
                            <td><?php if (isset($pending[0]->Medical_Record_Number)) echo $pending[0]->Medical_Record_Number ?></td>
                        </tr>
                        <tr>
                            <th>Health Plan Beneficiary Number</th>
                            <td><?php if (isset($pending[0]->Health_Plan_Beneficiary_Number)) echo $pending[0]->Health_Plan_Beneficiary_Number ?></td>
                        </tr>
                        <tr>
                            <th>Certificate Or License Number</th>
                            <td><?php if (isset($pending[0]->Certificate_Or_License_Number)) echo $pending[0]->Certificate_Or_License_Number ?></td>
                        </tr>
                        <tr>
                            <th>DateTime</th>
                            <td><?php if (isset($pending[0]->created_at)) echo date("Y-m-d H:i:s", strtotime($pending[0]->created_at)); ?></td>
                        </tr>
                        <tr>
                            <th>Fax No</th>
                            <td><?php if (isset($pending[0]->Fax_no)) echo $pending[0]->Fax_no ?></td>
                        </tr>
                        <tr>
                            <th>Bank Account No</th>
                            <td><?php if (isset($pending[0]->Bank_Account)) echo $pending[0]->Bank_Account ?></td>
                        </tr>
                        <tr>
                            <th>Credit Card Number</th>
                            <td><?php if (isset($pending[0]->Credit_Card_Number)) echo $pending[0]->Credit_Card_Number ?></td>
                        </tr>
                        <tr>
                            <th>PAN Number</th>
                            <td><?php if (isset($pending[0]->PAN_Number)) echo $pending[0]->PAN_Number ?></td>
                        </tr>
                        <tr>
                            <th>AADHAAR Card</th>
                            <td><?php if (isset($pending[0]->AADHAAR_Card)) echo $pending[0]->AADHAAR_Card ?></td>
                        </tr>
                        <tr>
                            <th>Passport Number</th>
                            <td><?php if (isset($pending[0]->Passport_Number)) echo $pending[0]->Passport_Number ?></td>
                        </tr>
                        <tr>
                            <th>Voter ID card</th>
                            <td><?php if (isset($pending[0]->Voter_Id_card)) echo $pending[0]->Voter_Id_card ?></td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td><?php if (isset($pending[0]->Address)) echo $pending[0]->Address ?></td>
                        </tr>
                    </thead>
                </table>
            </div>

        </div>

   
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-success txt-light" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-warning">Data</button> -->
    </div>
</div>
<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/vendors/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap-table JavaScript -->
<script src="<?php echo base_url() ?>assets/vendors/bower_components/bootstrap-table/dist/bootstrap-table.min.js"></script>
<script src="<?php echo base_url() ?>assets/dist/js/bootstrap-table-data.js"></script>
<script>
    var d = new Date("<?php if (isset($pending[0]->created_at)) echo $pending[0]->created_at ?>");
    document.getElementById("date_<?php echo $pending[0]->_id ?>").innerHTML = d.toLocaleString('en-ZA', {
        timeZone: 'Asia/Tokyo'
    });;
</script>
<script>
    var d = new Date("<?php if (isset($pending[0]->DOB)) echo $pending[0]->DOB ?>");
    document.getElementById("dob_<?php echo $pending[0]->_id ?>").innerHTML = d.toLocaleString('en-ZA', {
        timeZone: 'Asia/Tokyo'
    });;
</script>