<div class="page-wrapper">
		<div class="container-fluid pt-20">
			<h4 class="pb-15 text-uppercase">Doctors List</h4>

        <!-- Title -->
        <!-- <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark" style="font-weight: bold">Doctors List</h5>
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
                                                <th class="pl-5">Image</th>
                                                <th class="pl-5">Name</th>
                                                <th class="pl-5">Email_ID</th>
                                                <th class="pl-5">Mobile_No</th>
                                                <th class="pl-5">Department</th>
                                                <th class="pl-5">Experience</th>
                                                <th class="pl-5">Qualification</th>
                                                <th class="pl-5">Clinic</th>
                                                <th class="pl-5">Medical_Registration_ID</th>
                                                <th class="pl-5">Speciality</th>
                                                <th class="pl-5">Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($doctors as $d) { ?>
                                                <tr>
                                                    <td>
                                                        <?php
                                                        $image_src = base_url() . "assets/img/doctors.png";
                                                        // $filename = base_url() . $d->image;
                                                        if (@getimagesize($filename)) {
                                                            $image_src = $filename;
                                                        }
                                                        ?>
                                                        <img src="<?php echo $image_src; ?>" style="height: 80px;width: 80px;" /></td>
                                                    <td><?php echo $d->Name?></td>
                                                    <td><?php echo $d->Email_ID?></td>
                                                    <td><?php echo $d->Mobile_No?></td>
                                                    <td><?php echo $d->Department?></td>
                                                    <td><?php echo $d->Experience?></td>
                                                    <td><?php echo $d->Qualification?></td>
                                                    <td><?php echo $d->Clinic?></td>
                                                    <td><?php echo $d->Medical_Registration_ID?></td>
                                                    <td><?php echo $d->Speciality?></td>
                                                    <td><?php echo $d->Address?></td>

                                                    <!-- <th><button class="btn btn-rounded btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">View profile</button>
                                                    </th> -->
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
	<?php $this->load->view('admin/footer');?>
        <!-- /Footer -->
</div>

<!-- profile popup code here -->
<!-- <div  class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog bs-example-modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h5 class="modal-title" id="exampleModalLabel1">Profile List</h5>
            </div>
            <div class="modal-body">
                <div class="dctr_profil_pop">
                    <div class="dctr_profil_pop_data">
                        <h6>Name :</h6>
                        <p>Micheal Pewd</p>
                    </div>
                    <div class="dctr_profil_pop_data">
                        <h6>Email Id :</h6>
                        <p>doctor@gmail.com</p>
                    </div>
                    <div class="dctr_profil_pop_data">
                        <h6>Address :</h6>
                        <p>Tempor distinctio At non iusto nulla nostrud</p>
                    </div>
                    <div class="dctr_profil_pop_data">
                        <h6>Phone :</h6>
                        <p>+984-46-9388638</p>
                    </div>
                    <div class="dctr_profil_pop_data">
                        <h6>Department :</h6>
                        <p>Cardiology</p>
                    </div>
                    <div class="dctr_profil_pop_data">
                        <h6>Experience :</h6>
                        <p>Cardiology</p>
                    </div>
                    <div class="dctr_profil_pop_data">
                        <h6>Qualification :</h6>
                        <p>Cardiology</p>
                    </div>
                    <div class="dctr_profil_pop_data">
                        <h6>Clinic :</h6>
                        <p>Cardiology</p>
                    </div>
                    <div class="dctr_profil_pop_data">
                        <h6>Medical Registration ID :</h6>
                        <p>Cardiology</p>
                    </div>
                    <div class="dctr_profil_pop_data">
                        <h6>Speciality :</h6>
                        <p>Cardiology</p>
                    </div>

                    <div class="dctr_profil_pop_data">
                        <h6>Certificates :</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                    </div>
                </div>
                <div class="pt-20">
                    <button class="btn btn-success">Print</button>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div> -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h5 class="modal-title" id="myLargeModalLabel">Doctor Profile</h5>
            </div>
            <div class="modal-body">
                <div class="dctr_profil_pop">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="dctr_profil_pop_data">
                                <h6>Name :</h6>
                                <p>Micheal Pewd</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="dctr_profil_pop_data">
                                <h6>Email Id :</h6>
                                <p>doctor@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="dctr_profil_pop_data">
                                <h6>Address :</h6>
                                <p>Tempor distinctio At non iusto nulla nostrud</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="dctr_profil_pop_data">
                                <h6>Phone :</h6>
                                <p>+984-46-9388638</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="dctr_profil_pop_data">
                                <h6>Department :</h6>
                                <p>Cardiology</p>
                            </div>
                        </div>
                        div class="col-md-6">
                        <div class="dctr_profil_pop_data">
                            <h6>Experience :</h6>
                            <p>Cardiology</p>
                        </div>
                    </div>
                </div>
                <div class="dctr_profil_pop_data">
                    <h6>Qualification :</h6>
                    <p>Cardiology</p>
                </div>
                <div class="dctr_profil_pop_data">
                    <h6>Clinic :</h6>
                    <p>Cardiology</p>
                </div>
                <div class="dctr_profil_pop_data">
                    <h6>Medical Registration ID :</h6>
                    <p>Cardiology</p>
                </div>
                <div class="dctr_profil_pop_data">
                    <h6>Speciality :</h6>
                    <p>Cardiology</p>
                </div>

                <div class="dctr_profil_pop_data">
                    <h6>Certificates :</h6>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                </div>
                <div class="pt-20">
                    <button class="btn btn-success">Print</button>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger text-left" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
</div>
</div>