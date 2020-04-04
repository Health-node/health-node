<div class="modal-header pop_bg_colr">
    <button type="button" class="close txt-light close_custm" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h5 class="modal-title txt-light" id="exampleModalLabel1">List</h5>
</div>
<div class="modal-body">
    <?php $trans_type = explode('.', $single_transaction->transactionType);
    if ($trans_type[2] == "createAllergy") { ?>
        <div class="table-wrap">
            <div class="table-responsive">
                <table class="table mb-0 mt-15 table-bordered">
                    <thead class="pendng_pop">
                        <tr>
                            <th>reportID</th>
                            <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->reportID ?></td>
                        </tr>
                        <tr>
                            <th>Allergy Name</th>
                            <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Allergy_Name ?></td>
                        </tr>
                        <tr>
                            <th>Allergy Type</th>
                            <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Allergy_Type ?></td>
                        </tr>
                        <tr>
                            <th>Location</th>
                            <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->location ?></td>
                        </tr>
                        <tr>
                            <th>Reaction</th>
                            <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Reaction ?></td>
                        </tr>
                        <tr>
                            <th>Drug Class</th>
                            <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Drug_Class ?></td>
                        </tr>
                        <tr>
                            <th>Observed Or Historical</th>
                            <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->ObservedOrHistorical ?></td>
                        </tr>
                        <tr>
                            <th>Comments</th>
                            <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Comments ?></td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Status ?></td>
                        </tr>
                        <tr>
                            <th>Patient</th>
                            <td><?php if (isset($single_transaction->eventsEmitted[0]))
                                    $id = explode(".", $single_transaction->eventsEmitted[0]->Patient);
                                echo $id[2] ?></td>
                        </tr>
                        <tr>
                            <th>Created At</th>
                            <td><?php if (isset($single_transaction->eventsEmitted[0])) echo date("Y-m-d H:i:s", strtotime($single_transaction->eventsEmitted[0]->timestamp)) ?></td>
                        </tr>
                    </thead>
                </table>
            </div>

        </div>
    <?php } else if ($trans_type[2] == "createVisits") { ?>
        <?php if (!empty($single_transaction->eventsEmitted)) { ?>

            <div class="table-wrap">
                <div class="table-responsive">
                    <table class="table mb-0 mt-15 table-bordered">
                        <thead class="pendng_pop">
                            <tr>
                                <th>VisitID</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->VisitID ?></td>
                            </tr>
                            <tr>
                                <th>Patient</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))
                                        $id = explode(".", $single_transaction->eventsEmitted[0]->Patient);
                                    echo $id[2] ?></td>
                            </tr>
                            <tr>
                                <th>Doctor</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))
                                        $id = explode(".", $single_transaction->eventsEmitted[0]->Doctor);
                                    echo $id[2] ?></td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Description ?></td>
                            </tr>
                            <tr>
                                <th>Visit Date</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0])) echo date("Y-m-d H:i:s", strtotime($single_transaction->eventsEmitted[0]->Visit_Date)); ?></td>
                            </tr>
                            <tr>
                                <th>Appointment</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))
                                        $id = explode("#", $single_transaction->eventsEmitted[0]->Appointment);
                                    echo $id[1] ?></td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        <?php  } ?>
    <?php } else if ($trans_type[2] == "createAdmit") { ?>
        <?php if (!empty($single_transaction->eventsEmitted)) { ?>

            <div class="table-wrap">
                <div class="table-responsive">
                    <table class="table mb-0 mt-15 table-bordered">
                        <thead class="pendng_pop">
                            <tr>
                                <th>AdmitID</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->AdmitID ?></td>
                            </tr>
                            <tr>
                                <th>Patient</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))
                                        $id = explode(".", $single_transaction->eventsEmitted[0]->Patient);
                                    echo $id[2] ?></td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Description ?></td>
                            </tr>
                            <tr>
                                <th>RoomNo</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->RoomNo ?></td>
                            </tr>
                            <tr>
                                <th>BedType</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->BedType ?></td>
                            </tr>
                            <tr>
                                <th>Admit Date</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0])) echo date("Y-m-d H:i:s", strtotime($single_transaction->eventsEmitted[0]->Admit_Date)); ?></td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Status ?></td>
                            </tr>


                        </thead>
                    </table>
                </div>

            </div>
        <?php  } ?>
    <?php } else if ($trans_type[2] == "createImmunizations") { ?>
        <?php if (!empty($single_transaction->eventsEmitted)) { ?>

            <div class="table-wrap">
                <div class="table-responsive">
                    <table class="table mb-0 mt-15 table-bordered">
                        <thead class="pendng_pop">
                            <tr>
                                <th>reportID</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->reportID ?></td>
                            </tr>
                            <tr>
                                <th>Patient</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))
                                        $id = explode(".", $single_transaction->eventsEmitted[0]->Patient);
                                    echo $id[2] ?></td>
                            </tr>
                            <tr>
                                <th>Immunization_Name</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Immunization_Name ?></td>
                            </tr>
                            <tr>
                                <th>Location</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Location ?></td>
                            </tr>
                            <tr>
                                <th>Reaction</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Reaction ?></td>
                            </tr>
                            <tr>
                                <th>Date Recieved</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0])) echo date("Y-m-d H:i:s", strtotime($single_transaction->eventsEmitted[0]->Date_Recieved))  ?></td>
                            </tr>
                            <tr>
                                <th>Visit</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))
                                        $id = explode("#", $single_transaction->eventsEmitted[0]->Visit);
                                    echo $id[1] ?></td>
                            </tr>
                            <!-- <tr>
                                <th>eventId</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->eventId ?></td>
                            </tr> -->



                        </thead>
                    </table>
                </div>

            </div>

            <!-- <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">reportID:</label>
                        <label><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->reportID ?></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">Patient:</label>
                        <label><?php if (isset($single_transaction->eventsEmitted[0]))
                                    $id = explode(".", $single_transaction->eventsEmitted[0]->Patient);
                                echo $id[2] ?></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">Immunization_Name:</label>
                        <label><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Immunization_Name ?></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">Location:</label>
                        <label><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Location ?></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">Reaction:</label>
                        <label><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Reaction ?></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">Date Recieved:</label>
                        <label> <?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Date_Recieved ?></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">Visit:</label>
                        <label><?php if (isset($single_transaction->eventsEmitted[0]))
                                    $id = explode("#", $single_transaction->eventsEmitted[0]->Visit);
                                echo $id[1] ?></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">eventId:</label>
                        <label><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->eventId ?></label>
                    </div>
                </div>
            </div> -->
        <?php  } ?>
    <?php } else if ($trans_type[2] == "createProblem") { ?>
        <?php if (!empty($single_transaction->eventsEmitted)) { ?>

            <div class="table-wrap">
                <div class="table-responsive">
                    <table class="table mb-0 mt-15 table-bordered">
                        <thead class="pendng_pop">
                            <tr>
                                <th>reportID</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->reportID ?></td>
                            </tr>
                            <tr>
                                <th>Patient</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))
                                        $id = explode(".", $single_transaction->eventsEmitted[0]->Patient);
                                    echo $id[2] ?></td>
                            </tr>
                            <tr>
                                <th>Problem</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Problem ?></td>
                            </tr>
                            <tr>
                                <th>Location</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Location ?></td>
                            </tr>
                            <tr>
                                <th>Provider</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Provider ?></td>
                            </tr>
                            <tr>
                                <th>Date Recieved</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo date("Y-m-d H:i:s", strtotime($single_transaction->eventsEmitted[0]->Date_Recieved)) ?></td>
                            </tr>
                            <tr>
                                <th>Visit</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))
                                        $id = explode("#", $single_transaction->eventsEmitted[0]->Visit);
                                    echo $id[1] ?></td>
                            </tr>
                            <!-- <tr>
                                <th>eventId</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->eventId ?></td>
                            </tr> -->
                        </thead>
                    </table>
                </div>

            </div>

            <!-- <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">reportID:</label>
                        <label><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->reportID ?></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">Patient:</label>
                        <label><?php if (isset($single_transaction->eventsEmitted[0]))
                                    $id = explode(".", $single_transaction->eventsEmitted[0]->Patient);
                                echo $id[2] ?></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">Problem:</label>
                        <label><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Problem ?></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">Location:</label>
                        <label><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Location ?></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">Provider:</label>
                        <label><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Provider ?></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">Date Recieved:</label>
                        <label> <?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Date_Recieved ?></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">Visit:</label>
                        <label><?php if (isset($single_transaction->eventsEmitted[0]))
                                    $id = explode("#", $single_transaction->eventsEmitted[0]->Visit);
                                echo $id[1] ?></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">eventId:</label>
                        <label><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->eventId ?></label>
                    </div>
                </div>
            </div> -->
        <?php  } ?>
    <?php } else if ($trans_type[2] == "createVitals") { ?>
        <?php if (!empty($single_transaction->eventsEmitted)) { ?>

            <div class="table-wrap">
                <div class="table-responsive">
                    <table class="table mb-0 mt-15 table-bordered">
                        <thead class="pendng_pop">
                            <tr>
                                <th>VitalID</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->VitalID ?></td>
                            </tr>
                            <tr>
                                <th>Patient</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))
                                        $id = explode(".", $single_transaction->eventsEmitted[0]->Patient);
                                    echo $id[2] ?></td>
                            </tr>
                            <tr>
                                <th>Weight</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Weight ?></td>
                            </tr>
                            <tr>
                                <th>Length</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Length ?></td>
                            </tr>
                            <tr>
                                <th>BP Systolic</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->BP_Systolic ?></td>
                            </tr>
                            <tr>
                                <th>BP Diastolic</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->BP_Diastolic ?></td>
                            </tr>
                            <tr>
                                <th>Pulse</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Pulse ?></td>
                            </tr>
                            <tr>
                                <th>Respiration</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Respiration ?></td>
                            </tr>
                            <tr>
                                <th>Oxygen Saturation</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Oxygen_Saturation ?></td>
                            </tr>
                            <tr>
                                <th>Head Circumference</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Head_Circumference ?></td>
                            </tr>
                            <tr>
                                <th>Waist Circumference</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Waist_Circumference ?></td>
                            </tr>
                            <tr>
                                <th>BMI</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->BMI ?></td>
                            </tr>
                            <tr>
                                <th>Visit</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))
                                        $id = explode("#", $single_transaction->eventsEmitted[0]->Visit);
                                    echo $id[1] ?></td>
                            </tr>
                            <!-- <tr>
                                <th>eventId</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->eventId ?></td>
                            </tr> -->

                        </thead>
                    </table>
                </div>

            </div>

            <!-- <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">VitalID:</label>
                        <label><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->VitalID ?></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">Patient:</label>
                        <label><?php if (isset($single_transaction->eventsEmitted[0]))
                                    $id = explode(".", $single_transaction->eventsEmitted[0]->Patient);
                                echo $id[2] ?></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">Weight:</label>
                        <label><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Weight ?></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">Length:</label>
                        <label><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Length ?></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">BP Systolic:</label>
                        <label><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->BP_Systolic ?></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">BP Diastolic:</label>
                        <label><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->BP_Diastolic ?></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">Pulse:</label>
                        <label><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Pulse ?></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">Respiration:</label>
                        <label><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Respiration ?></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">Respiration:</label>
                        <label><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Respiration ?></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">Oxygen Saturation:</label>
                        <label><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Oxygen_Saturation ?></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">Head Circumference:</label>
                        <label><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Head_Circumference ?></label>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">Waist Circumference:</label>
                        <label><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Waist_Circumference ?></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">BMI:</label>
                        <label> <?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->BMI ?></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">Visit:</label>
                        <label><?php if (isset($single_transaction->eventsEmitted[0]))
                                    $id = explode("#", $single_transaction->eventsEmitted[0]->Visit);
                                echo $id[1] ?></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">eventId:</label>
                        <label><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->eventId ?></label>
                    </div>
                </div>
            </div> -->
        <?php  } ?>
    <?php } else if ($trans_type[2] == "createAppointment") { ?>
        <?php if (!empty($single_transaction->eventsEmitted)) { ?>

            <div class="table-wrap">
                <div class="table-responsive">
                    <table class="table mb-0 mt-15 table-bordered">
                        <thead class="pendng_pop">
                            <tr>
                                <th>AppointmentID</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->AppointmentID ?></td>
                            </tr>
                            <tr>
                                <th>Patient</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))
                                        $id = explode(".", $single_transaction->eventsEmitted[0]->Patient);
                                    echo $id[2] ?></td>
                            </tr>
                            <tr>
                                <th>Doctor</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))
                                        $id = explode(".", $single_transaction->eventsEmitted[0]->Doctor);
                                    echo $id[2] ?></td>
                            </tr>
                            <tr>
                                <th>AppointmentTime</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0])) echo date("Y-m-d H:i:s", strtotime($single_transaction->eventsEmitted[0]->AppointmentTime)) ?></td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Status ?></td>
                            </tr>
                        </thead>
                    </table>
                </div>

            </div>

            <!-- <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">AppointmentID:</label>
                        <label><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->AppointmentID ?></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">Patient:</label>
                        <label><?php if (isset($single_transaction->eventsEmitted[0]))
                                    $id = explode(".", $single_transaction->eventsEmitted[0]->Patient);
                                echo $id[2] ?></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">Doctor:</label>
                        <label><?php if (isset($single_transaction->eventsEmitted[0]))
                                    $id = explode(".", $single_transaction->eventsEmitted[0]->Doctor);
                                echo $id[2] ?></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">AppointmentTime:</label>
                        <label><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->AppointmentTime ?></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">eventId:</label>
                        <label><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->eventId ?></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">Status:</label>
                        <label><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Status ?></label>
                    </div>
                </div>
            </div> -->
        <?php  } ?>
    <?php } else if ($trans_type[2] == "dischargePatient") { ?>
        <?php if (!empty($single_transaction->eventsEmitted)) { ?>

            <div class="table-wrap">
                <div class="table-responsive">
                    <table class="table mb-0 mt-15 table-bordered">
                        <thead class="pendng_pop">
                            <tr>
                                <th>AdmitID</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->AdmitID ?></td>
                            </tr>
                            <tr>
                                <th>Discharge Date</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0])) echo date("Y-m-d H:i:s", strtotime($single_transaction->eventsEmitted[0]->Discharge_Date)); ?></td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Status ?></td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        <?php  } ?>
    <?php } else if ($trans_type[2] == "createPrescription") { ?>
        <?php if (!empty($single_transaction->eventsEmitted)) { ?>

            <div class="table-wrap">
                <div class="table-responsive">
                    <table class="table mb-0 mt-15 table-bordered">
                        <thead class="pendng_pop">
                            <tr>
                                <th>pid</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->pid ?></td>
                            </tr>
                            <tr>
                                <th>Patient</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))
                                        $id = explode(".", $single_transaction->eventsEmitted[0]->Patient);
                                    echo $id[2] ?></td>
                            </tr>
                            <tr>
                                <th>Doctor</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))
                                        $id = explode(".", $single_transaction->eventsEmitted[0]->Doctor);
                                    echo $id[2] ?></td>
                            </tr>
                            <tr>
                                <th>Medication</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Medication ?></td>
                            </tr>
                            <tr>
                                <th>Instructions</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Instructions ?></td>
                            </tr>
                            <tr>
                                <th>Refills Remaining</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Refills_Remaining ?></td>
                            </tr>
                            <tr>
                                <th>Last Filled On</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0])) echo date("Y-m-d H:i:s", strtotime($single_transaction->eventsEmitted[0]->Last_Filled_On));  ?></td>
                            </tr>
                            <tr>
                                <th>Initially Ordered On</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo date("Y-m-d H:i:s", strtotime($single_transaction->eventsEmitted[0]->Initially_Ordered_On));  ?></td>
                            </tr>
                            <tr>
                                <th>Visit</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))
                                        $id = explode("#", $single_transaction->eventsEmitted[0]->Visit);
                                    echo $id[1] ?></td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        <?php  } ?>
    <?php } else if ($trans_type[2] == "createOperation") { ?>
        <?php if (!empty($single_transaction->eventsEmitted)) { ?>

            <div class="table-wrap">
                <div class="table-responsive">
                    <table class="table mb-0 mt-15 table-bordered">
                        <thead class="pendng_pop">
                            <tr>
                                <th>OperationID</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->OperationID ?></td>
                            </tr>
                            <tr>
                                <th>Patient</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))
                                        $id = explode(".", $single_transaction->eventsEmitted[0]->Patient);
                                    echo $id[2] ?></td>
                            </tr>
                            <tr>
                                <th>Doctor</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))
                                        $id = explode(".", $single_transaction->eventsEmitted[0]->Doctor);
                                    echo $id[2] ?></td>
                            </tr>
                            <tr>
                                <th>Name Of Operation</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Name_Of_Operation ?></td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Description ?></td>
                            </tr>
                            <tr>
                                <th>Anesthesia</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Anesthesia ?></td>
                            </tr>
                            <tr>
                                <th>PreOperative Diagnosis</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->PreOperative_Diagnosis ?></td>
                            </tr>
                            <tr>
                                <th>PostOperative Diagnosis</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->PostOperative_Diagnosis ?></td>
                            </tr>
                            <tr>
                                <th>Operation Started</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0])) echo date("Y-m-d H:i:s", strtotime($single_transaction->eventsEmitted[0]->Operation_Started))  ?></td>
                            </tr>
                            <tr>
                                <th>Operation Ended</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0])) echo date("Y-m-d H:i:s", strtotime($single_transaction->eventsEmitted[0]->Operation_Ended))  ?></td>
                            </tr>
                            <tr>
                                <th>Visit</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))
                                        $id = explode("#", $single_transaction->eventsEmitted[0]->Visit);
                                    echo $id[1] ?></td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div> 
        <?php  } ?>
    <?php } else if ($trans_type[2] == "setAppointmentStatus") { ?>
        <?php if (!empty($single_transaction->eventsEmitted)) { ?>

            <div class="table-wrap">
                <div class="table-responsive">
                    <table class="table mb-0 mt-15 table-bordered">
                        <thead class="pendng_pop">
                            <tr>
                                <th>AppointmentID</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->AppointmentID ?></td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Status ?></td>
                            </tr>
                            <tr>
                                <th>Timestamp</th>
                                <td><?php if (isset($single_transaction->eventsEmitted[0])) echo date("Y-m-d H:i:s", strtotime($single_transaction->eventsEmitted[0]->timestamp))  ?></td>
                            </tr>


                        </thead>
                    </table>
                </div>

            </div>

            <!-- <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">AppointmentID:</label>
                        <label><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->AppointmentID ?></label>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">Status:</label>
                        <label><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->Status ?></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mr-20 popup_font">Timestamp:</label>
                        <label><?php if (isset($single_transaction->eventsEmitted[0]))  echo $single_transaction->eventsEmitted[0]->timestamp ?></label>
                    </div>
                </div>

            </div> -->
        <?php  } ?>
    <?php } ?>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-success txt-light" data-dismiss="modal">Close</button>
</div>
<script>
    var d = new Date("<?php echo $single_transaction->eventsEmitted[0]->timestamp ?>");
    document.getElementById("created_<?php echo $single_transaction->transactionId ?>").innerHTML = d.toLocaleString('en-ZA', {
        timeZone: 'Asia/Tokyo'
    });;
</script>
<script>
    var e = new Date("<?php echo $single_transaction->eventsEmitted[0]->Visit_Date ?>");
    document.getElementById("visits_<?php echo $single_transaction->transactionId ?>").innerHTML = e.toLocaleString('en-ZA', {
        timeZone: 'Asia/Tokyo'
    });;
</script>