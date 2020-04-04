function ajax_call(url, method, frm, data, target) {
    var base_url = $("#base_url").val();
    url = base_url + url;
    var retval = 0;
    if (method == null)
        method = "GET";
    if (frm == null)
        data = data;
    else if (typeof frm === 'object')
        data = frm;
    else
        data = $('#' + frm).serialize();
    console.log(data);
    $.ajax({
        type: method,
        url: url,
        data: data,
        dataType: "json",
        async: false,
        beforeSend: function () {
            $('#alert').hide();

            //            $("#blockui_sample_2_4").click();
        },
        success: function (msg) {
            retval = msg;
        },
        error: function () {
            alert("Something went wrong, Try again");
        }
    });
    if (target != '' && target != null) {
        $("#" + target).html(retval.html);
        return retval;
    } else {
        return retval;
    }

}



function approve_user(_id) {

    var base_url = $("#base_url").val();
    $("#myModal").modal({
        show: 'true',
        keyboard: false,
        backdrop: 'static'
    });
    setTimeout(() => {
        var url = "admin/approve_user";
        var method = "POST";
        var data = { _id: _id };
        var frm = null;
        var target = "user_data";
        var res = ajax_call(url, method, frm, data, target);
        if (res.result == 'success') {
            var red_url = base_url + "admin";
            window.location.replace(red_url);
            // $('#myModal').modal('toggle');
            // $("#loader_div").css("display", "block");
            // $("#error_msg").addClass("display-hide");
            // $("#error_msg").html("");
            // $("#success_msg").removeClass("display-hide");
            // $("#success_msg").html("User Registered Successfully");
        } else {
            var red_url = base_url + "admin";
            window.location.replace(red_url);
            // $('#myModal').modal('toggle');
            // $("#loader_div").css("display", "block");
            // $("#success_msg").html("");
            // $("#error_msg").removeClass("display-hide");
            // $("#error_msg").html(msg.msg);
        }
    }, 0);
}

function reject_user(_id) {
    var base_url = $("#base_url").val();
    // $("#page_loader").css("display", "block");
    $("#myModal").modal({
        show: 'true',
        keyboard: false,
        backdrop: 'static'
    });
    setTimeout(() => {
        var url = "admin/reject_user";
        var method = "POST";
        var data = { _id: _id };
        var frm = null;
        var target = "user_data";
        var res = ajax_call(url, method, frm, data, target);
        if (res.result == 'success') {
            var red_url = base_url + "admin";
            window.location.replace(red_url);
        }
    }, 0);
}


function validate_patient_report(frmid) {
    var form = $('#' + frmid);
    form.validate({
        errorElement: 'lable', //default input error message container
        errorClass: 'text-danger', // default input error message class
        focusInvalid: true, // do not focus the last invalid input
        ignore: "",
        rules: {
            patient_name: {
                required: true,
            },
            visit: {
                required: true,
            },
            allergy_name: {
                required: true,
            },
            allergy_type: {
                required: true,
            },
            location: {
                required: true,
            },
            reaction: {
                required: true,
            },
            drug_class: {
                required: true,
            },
            observed: {
                required: true,
            },
            observed: {
                required: true,
            },
            comments: {
                required: true,
            }
        },
        messages: {
            patient_name: {
                required: "Patient name is required..!"
            },
            visit: {
                required: "visit is required..!"
            },
            allergy_name: {
                required: "Allergy name is required..!"
            },
            allergy_type: {
                required: "Allergy type is required..!"
            },
            location: {
                required: "location is required..!"
            },
            reaction: {
                required: "reaction is required..!"
            },
            drug_class: {
                required: "drug class is required..!"
            },
            observed: {
                required: "observed or historical is required..!"
            },
            comments: {
                required: "comments  is required..!"
            }
        },
        highlight: function (element) {
            $(element).closest('.form-label-group').removeClass('has-success').addClass('has-danger');
            $(element).closest('.form-check').removeClass('has-success').addClass('has-danger');
        },
        success: function (element) {
            $(element).closest('.form-label-group').removeClass('has-danger').addClass('has-success');
            $(element).closest('.form-check').removeClass('has-danger').addClass('has-success');
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element); // for other inputs, just perform default behavior

        },
        submitHandler: function (form) {
            // $("#patient_reports").hide();
            // $("#loader_div").show();
            $("#myModal").modal({
                show: 'true',
                keyboard: false,
                backdrop: 'static'
            });
            form.submit();
        }
    });
}

function admin_trans_view_popup(transactionId) {
    var url = "admin/transactions_view_popup";
    var method = "POST";
    var data = { transactionId: transactionId };
    var frm = null;
    var target = "content_model";
    ajax_call(url, method, frm, data, target);
}

function pending_user_popup(_id) {
    var url = "admin/pending_user_popup";
    var method = "POST";
    var data = { _id: _id };
    var frm = null;
    var target = "content_model";
    ajax_call(url, method, frm, data, target);
}


function register_patient(frmid) {
    var form = $('#' + frmid);
    // alert($('#email').val());
    form.validate({
        errorElement: 'lable', //default input error message container
        errorClass: 'text-danger', // default input error message class
        focusInvalid: true, // do not focus the last invalid input
        ignore: "",
        rules: {
            full_name: {
                required: true,
            }, mobile: {
                required: true,
            }, email: {
                required: true,
                email: true,
            }, dob: {
                required: true,
            }, bank_account: {
                required: true,
            }, medical_record_no: {
                required: true,
            }, health_plan_benificiary_no: {
                required: true,
            }, driving_license: {
                required: true,
            }, address: {
                required: true
            }
        },
        messages: {
            full_name: {
                required: "Full name is required.",
            }, mobile: {
                required: "Mobile number is required",
            }, email: {
                required: "Email is required",
            }, dob: {
                required: " DOB is required",
            }, bank_account: {
                required: "Bank Account is required",
            }, medical_record_no: {
                required: "Medical Record no required",
            }, health_plan_benificiary_no: {
                required: "Health plan benificiary no required",
            }, driving_license: {
                required: "Driving license no required",
            }, address: {
                required: "Address is required",
            }
        },
        highlight: function (element) {
            $(element).closest('.form-label-group').removeClass('has-success').addClass('has-danger');
            $(element).closest('.form-check').removeClass('has-success').addClass('has-danger');
        },
        success: function (element) {
            $(element).closest('.form-label-group').removeClass('has-danger').addClass('has-success');
            $(element).closest('.form-check').removeClass('has-danger').addClass('has-success');
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element); // for other inputs, just perform default behavior

        },
        submitHandler: function (form) {
            // $("#patient_reports").hide();
            // $("#loader_div").show();
            $("#myModal").modal({
                show: 'true',
                keyboard: false,
                backdrop: 'static'
            });
            form.submit();
        }
    });
}


function validate_apply_oppointment() {
    var url = "patient/apply_oppointment_popup";
    var method = "POST";
    var data = null;
    var frm = null;
    var target = "content_model";
    ajax_call(url, method, frm, data, target);
}


function validate_appointments(frmid) {
    var form = $('#' + frmid);
    form.validate({
        errorElement: 'lable', //default input error message container
        errorClass: 'text-danger', // default input error message class
        focusInvalid: true, // do not focus the last invalid input
        ignore: "",
        rules: {
            doctor_id: {
                required: true,
            },
            appointment_time: {
                required: true,
            }
        },
        messages: {
            doctor_id: {
                required: "Doctor is required..!"
            },
            appointment_time: {
                required: "Appointment time is required..!"
            }
        },
        highlight: function (element) {
            $(element).closest('.form-label-group').removeClass('has-success').addClass('has-danger');
            $(element).closest('.form-check').removeClass('has-success').addClass('has-danger');
        },
        success: function (element) {
            $(element).closest('.form-label-group').removeClass('has-danger').addClass('has-success');
            $(element).closest('.form-check').removeClass('has-danger').addClass('has-success');
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element); // for other inputs, just perform default behavior

        },
        submitHandler: function (form) {
            $("#loader_div").show();
            $("#info_message").show();
            $("#appointment_form").hide();

            setTimeout(() => {
                var url = "patient/apply_appointment";
                var method = "POST";
                var frm = frmid;
                var data = null;
                var target = "appointment_list";
                var res = ajax_call(url, method, frm, data, target);
                if (res.result == 'success') {
                    $(".close").trigger("click");
                    $("#error_msg").hide();
                    $("#loader_div").hide();
                    $("#info_message").hide();
                    $("#success_msg").show();
                    $("#success_msg").html(res.msg);

                } else {
                    $("#loader_div").hide();
                    $("#info_message").hide();
                    $("#success_msg").hide();
                    $("#error_msg").show();
                    $("#error_msg").html(res.msg);
                }
            }, 0);
        }
    });
}


function approve_appointment(AppointmentID) {

    $("#myModal").modal({
        show: 'true',
        keyboard: false,
        backdrop: 'static'
    });
    setTimeout(() => {
        var url = "admin/approve_appointment";
        var method = "POST";
        var data = { AppointmentID: AppointmentID };
        var frm = null;
        var target = "appoint_table";
        var res = ajax_call(url, method, frm, data, target);
        if (res.status == 'success') {
            $('#myModal').modal('toggle');
            $("#error_message").hide();
            $("#success_message").show();
            $("#success_message").html(res.msg);
        } else {
            $('#myModal').modal('toggle');
            $("#success_message").hide();
            $("#error_message").show();
            $("#error_message").html(res.msg);
        }
    }, 0);
}


function admit_patient(frmid) {
    var form = $('#' + frmid);
    form.validate({
        errorElement: 'lable', //default input error message container
        errorClass: 'text-danger', // default input error message class
        focusInvalid: true, // do not focus the last invalid input
        ignore: "",
        rules: {
            patient_name: {
                required: true,
            }, bed_type: {
                required: true,
            }, room_no: {
                required: true,
            }, date_of_admit: {
                required: true,
            }, description: {
                required: true,
            }
        },
        messages: {
            patient_name: {
                required: "Patient name is required.",
            }, bed_type: {
                required: "bed type is required",
            }, room_no: {
                required: "room no is required",
            }, date_of_admit: {
                required: " date of admit is required",
            }, description: {
                required: "description is required",
            }
        },
        highlight: function (element) {
            $(element).closest('.form-label-group').removeClass('has-success').addClass('has-danger');
            $(element).closest('.form-check').removeClass('has-success').addClass('has-danger');
        },
        success: function (element) {
            $(element).closest('.form-label-group').removeClass('has-danger').addClass('has-success');
            $(element).closest('.form-check').removeClass('has-danger').addClass('has-success');
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element); // for other inputs, just perform default behavior

        },
        submitHandler: function (form) {
            // $("#patient_reports").hide();
            // $("#loader_div").show();
            $("#myModal").modal({
                show: 'true',
                keyboard: false,
                backdrop: 'static'
            });
            form.submit();
        }
    });
}

function discharge_patient(AdmitID) {
    $("#myModal").modal({
        show: 'true',
        keyboard: false,
        backdrop: 'static'
    });
    setTimeout(() => {
        var url = "admin/discharge_patient";
        var method = "POST";
        var data = { AdmitID: AdmitID };
        var frm = null;
        var target = "in_patients";
        var res = ajax_call(url, method, frm, data, target);
        if (res.status == "success") {
            $("#myModal").modal('toggle');
            $("#success_msg").show();
            $("#success_msg").html(res.msg);
            $("#error_msg").hide();
            $("#error_msg").html("");
        } else {
            $("#myModal").modal('toggle');
            $("#success_msg").hide();
            $("#success_msg").html("");
            $("#error_msg").show();
            $("#error_msg").html(res.msg);
        }
    }, 0);
}



function validate_create_prescription(frmid) {
    var form = $('#' + frmid);
    form.validate({
        errorElement: 'lable', //default input error message container
        errorClass: 'text-danger', // default input error message class
        focusInvalid: true, // do not focus the last invalid input
        ignore: "",
        rules: {
            patient_name: {
                required: true,
            }, medication: {
                required: true,
            }, instructions: {
                required: true,
            }, refills_remaining: {
                required: true,
            }, doctor_name: {
                required: true,
            }, visit: {
                required: true,
            }, last_filled_on: {
                required: true,
            }, initially_ordered_on: {
                required: true,
            }
        },
        messages: {
            patient_name: {
                required: "Patient name is required.",
            }, medication: {
                required: "medication is required",
            }, instructions: {
                required: "instructions is required",
            }, refills_remaining: {
                required: " refills remaining is required",
            }, visit: {
                required: "visit is required",
            }, doctor_name: {
                required: "doctor name is required",
            }, last_filled_on: {
                required: "last filled on is required",
            }, initially_ordered_on: {
                required: "initially ordered on is required",
            }
        },
        highlight: function (element) {
            $(element).closest('.form-label-group').removeClass('has-success').addClass('has-danger');
            $(element).closest('.form-check').removeClass('has-success').addClass('has-danger');
        },
        success: function (element) {
            $(element).closest('.form-label-group').removeClass('has-danger').addClass('has-success');
            $(element).closest('.form-check').removeClass('has-danger').addClass('has-success');
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element); // for other inputs, just perform default behavior

        },
        submitHandler: function (form) {
            // $("#patient_reports").hide();
            // $("#loader_div").show();
            $("#myModal").modal({
                show: 'true',
                keyboard: false,
                backdrop: 'static'
            });
            form.submit();
        }
    });
}

function validate_visits(frmid) {
    var form = $('#' + frmid);
    form.validate({
        errorElement: 'lable', //default input error message container
        errorClass: 'text-danger', // default input error message class
        focusInvalid: true, // do not focus the last invalid input
        ignore: "",
        rules: {
            patient_name: {
                required: true,
            }, description: {
                required: true,
            }, doctor_name: {
                required: true,
            }, appointment: {
                required: true,
            }, appointment_time: {
                required: true,
            }
        },
        messages: {
            patient_name: {
                required: "Patient name is required.",
            }, description: {
                required: "description is required",
            }, doctor_name: {
                required: "doctor_name is required",
            }, appointment: {
                required: "appointment is required",
            }, appointment_time: {
                required: "appointment time is required",
            }
        },
        highlight: function (element) {
            $(element).closest('.form-label-group').removeClass('has-success').addClass('has-danger');
            $(element).closest('.form-check').removeClass('has-success').addClass('has-danger');
        },
        success: function (element) {
            $(element).closest('.form-label-group').removeClass('has-danger').addClass('has-success');
            $(element).closest('.form-check').removeClass('has-danger').addClass('has-success');
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element); // for other inputs, just perform default behavior

        },
        submitHandler: function (form) {
            // $("#patient_reports").hide();
            // $("#loader_div").show();
            $("#myModal").modal({
                show: 'true',
                keyboard: false,
                backdrop: 'static'
            });
            form.submit();
        }
    });
}

function validate_operation(frmid) {
    var form = $('#' + frmid);
    form.validate({
        errorElement: 'lable', //default input error message container
        errorClass: 'text-danger', // default input error message class
        focusInvalid: true, // do not focus the last invalid input
        ignore: "",
        rules: {
            patient_name: {
                required: true,
            }, name_of_operation: {
                required: true,
            }, description: {
                required: true,
            }, anesthesia: {
                required: true,
            }, preoperative_diagnosis: {
                required: true,
            }, postoperative_diagnosis: {
                required: true,
            }, doctor_name: {
                required: true,
            }, visit: {
                required: true,
            }, operation_started: {
                required: true,
            }, operation_ended: {
                required: true,
            }

        },
        messages: {
            patient_name: {
                required: "Patient name is required.",
            }, name_of_operation: {
                required: "name of operation is required",
            }, description: {
                required: "description is required",
            }, anesthesia: {
                required: "anesthesia is required",
            }, preoperative_diagnosis: {
                required: "preoperative diagnosis time is required",
            }, postoperative_diagnosis: {
                required: "postoperative diagnosis time is required",
            }, doctor_name: {
                required: "doctor name  is required",
            }, visit: {
                required: "visit is required",
            }, operation_started: {
                required: "operation started time is required",
            }, operation_ended: {
                required: "operation ended time is required",
            }

        },
        highlight: function (element) {
            $(element).closest('.form-label-group').removeClass('has-success').addClass('has-danger');
            $(element).closest('.form-check').removeClass('has-success').addClass('has-danger');
        },
        success: function (element) {
            $(element).closest('.form-label-group').removeClass('has-danger').addClass('has-success');
            $(element).closest('.form-check').removeClass('has-danger').addClass('has-success');
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element); // for other inputs, just perform default behavior

        },
        submitHandler: function (form) {
            // $("#patient_reports").hide();
            // $("#loader_div").show();
            $("#myModal").modal({
                show: 'true',
                keyboard: false,
                backdrop: 'static'
            });
            form.submit();
        }
    });
}


function get_appointments(frm) {
    var url = "common/get_appointments";
    var res = ajax_call(url, "POST", frm, null, null);
    console.log(res);
    $("#" + frm + " #appointment").html(res.html);
    // window.location.reload();
}

function get_visits(frm) {
    var e = document.getElementById("patient_name");
    var patient_id = e.options[e.selectedIndex].value;
    var url = "common/get_visits";
    var data = { patient_id: patient_id }
    var res = ajax_call(url, "POST", frm, data, null);
    $("#" + frm + " #visit").html(res.html);
    // window.location.reload();
}

function validate_vital_report(frmid) {
    var form = $('#' + frmid);
    form.validate({
        errorElement: 'lable', //default input error message container
        errorClass: 'text-danger', // default input error message class
        focusInvalid: true, // do not focus the last invalid input
        ignore: "",
        rules: {
            patient_name: {
                required: true,
            },
            visit: {
                required: true,
            },
            weight: {
                required: true,
            },
            length: {
                required: true,
            },
            bp_systolic: {
                required: true,
            },
            bp_diastolic: {
                required: true,
            },
            pulse: {
                required: true,
            },
            respiration: {
                required: true,
            },
            temperature: {
                required: true,
            },
            oxygen_saturation: {
                required: true,
            },
            head_circumference: {
                required: true,
            },
            waist_circumference: {
                required: true,
            },
            bmi: {
                required: true,
            }
        },
        messages: {
            patient_name: {
                required: "Patient name is required..!"
            },
            visit: {
                required: "visit is required..!"
            },
            weight: {
                required: "weight is required..!"
            },
            length: {
                required: "length is required..!"
            },
            bp_systolic: {
                required: "BP systolic is required..!"
            },
            bp_diastolic: {
                required: "BP diastolic is required..!"
            },
            pulse: {
                required: "pulse is required..!"
            },
            respiration: {
                required: "Respiration  is required..!"
            },
            temperature: {
                required: "temperature  is required..!"
            },
            oxygen_saturation: {
                required: "oxygen saturation  is required..!"
            },
            head_circumference: {
                required: "head circumference  is required..!"
            },
            waist_circumference: {
                required: "waist circumference  is required..!"
            },
            bmi: {
                required: "bmi  is required..!"
            }
        },
        highlight: function (element) {
            $(element).closest('.form-label-group').removeClass('has-success').addClass('has-danger');
            $(element).closest('.form-check').removeClass('has-success').addClass('has-danger');
        },
        success: function (element) {
            $(element).closest('.form-label-group').removeClass('has-danger').addClass('has-success');
            $(element).closest('.form-check').removeClass('has-danger').addClass('has-success');
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element); // for other inputs, just perform default behavior

        },
        submitHandler: function (form) {
            // $("#patient_reports").hide();
            // $("#loader_div").show();
            $("#myModal").modal({
                show: 'true',
                keyboard: false,
                backdrop: 'static'
            });
            form.submit();
        }
    });
}


function validate_immunization_report(frmid) {
    var form = $('#' + frmid);
    form.validate({
        errorElement: 'lable', //default input error message container
        errorClass: 'text-danger', // default input error message class
        focusInvalid: true, // do not focus the last invalid input
        ignore: "",
        rules: {
            patient_name: {
                required: true,
            },
            visit: {
                required: true,
            },
            immunization_name: {
                required: true,
            },
            date_recived: {
                required: true,
            },
            location: {
                required: true,
            },
            reaction: {
                required: true,
            }
        },
        messages: {
            patient_name: {
                required: "Patient name is required..!"
            },
            visit: {
                required: "visit is required..!"
            },
            immunization_name: {
                required: "Immunization name is required..!"
            },
            date_recived: {
                required: "Date recived is required..!"
            },
            location: {
                required: "Location is required..!"
            },
            reaction: {
                required: "Reaction is required..!"
            }
        },
        highlight: function (element) {
            $(element).closest('.form-label-group').removeClass('has-success').addClass('has-danger');
            $(element).closest('.form-check').removeClass('has-success').addClass('has-danger');
        },
        success: function (element) {
            $(element).closest('.form-label-group').removeClass('has-danger').addClass('has-success');
            $(element).closest('.form-check').removeClass('has-danger').addClass('has-success');
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element); // for other inputs, just perform default behavior

        },
        submitHandler: function (form) {
            // $("#patient_reports").hide();
            // $("#loader_div").show();
            $("#myModal").modal({
                show: 'true',
                keyboard: false,
                backdrop: 'static'
            });
            form.submit();
        }
    });
}


function validate_diagnose_report(frmid) {
    var form = $('#' + frmid);
    form.validate({
        errorElement: 'lable', //default input error message container
        errorClass: 'text-danger', // default input error message class
        focusInvalid: true, // do not focus the last invalid input
        ignore: "",
        rules: {
            patient_name: {
                required: true,
            },
            visit: {
                required: true,
            },
            problem: {
                required: true,
            },
            provider: {
                required: true,
            },
            location: {
                required: true,
            },
            date_received: {
                required: true
            }
        },
        messages: {
            patient_name: {
                required: "Patient name is required..!"
            },
            visit: {
                required: "visit is required..!"
            },
            problem: {
                required: "Problem is required..!"
            },
            provider: {
                required: "Provider is required..!"
            },
            location: {
                required: "Location is required..!"
            },
            date_received: {
                required: "date received is required..!"
            },
        },
        highlight: function (element) {
            $(element).closest('.form-label-group').removeClass('has-success').addClass('has-danger');
            $(element).closest('.form-check').removeClass('has-success').addClass('has-danger');
        },
        success: function (element) {
            $(element).closest('.form-label-group').removeClass('has-danger').addClass('has-success');
            $(element).closest('.form-check').removeClass('has-danger').addClass('has-success');
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element); // for other inputs, just perform default behavior

        },
        submitHandler: function (form) {
            // $("#patient_reports").hide();
            // $("#loader_div").show();
            $("#myModal").modal({
                show: 'true',
                keyboard: false,
                backdrop: 'static'
            });
            form.submit();
        }
    });
}

function reject_appointment(AppointmentID) {
    var base_url = $("#base_url").val();
    setTimeout(() => {
        var url = "admin/reject_appointment";
        var method = "POST";
        var data = { AppointmentID: AppointmentID };
        var frm = null;
        var target = "appoint_table";
        var res = ajax_call(url, method, frm, data, target);
        if (res.status == 'success') {
            // $("#loader_div").css("display", "none");
            $("#error_msg").addClass("display-hide");
            $("#error_msg").html("");
            $("#success_msg").removeClass("display-hide");
            $("#success_msg").html(res.msg);
        } else {
            // $("#loader_div").css("display", "none");
            $("#success_msg").html("");
            $("#error_msg").removeClass("display-hide");
            $("#error_msg").html(res.msg);
        }
    }, 0);
}



function validate_forgot_password(frmid) {
    var form = $('#' + frmid);
    form.validate({
        errorElement: 'lable', //default input error message container
        errorClass: 'text-danger', // default input error message class
        focusInvalid: true, // do not focus the last invalid input
        ignore: "",
        rules: {
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            email: {
                required: "Email is required.",
            }
        },
        highlight: function (element) {
            $(element).closest('.form-label-group').removeClass('has-success').addClass('has-danger');
            $(element).closest('.form-check').removeClass('has-success').addClass('has-danger');
        },
        success: function (element) {
            $(element).closest('.form-label-group').removeClass('has-danger').addClass('has-success');
            $(element).closest('.form-check').removeClass('has-danger').addClass('has-success');
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element); // for other inputs, just perform default behavior
        },
        submitHandler: function (form) {
            form.submit();
        }
    });
}

function validate_change_password(frmid) {
    var form = $('#' + frmid);
    $.validator.addMethod("checkRetypePwd", function (value, element) {
        if (value == $('#password').val())
            return true;
        else
            return false;
    }, "Password and Confirm Password should be same..");
    form.validate({
        errorElement: 'lable', //default input error message container
        errorClass: 'text-danger', // default input error message class
        focusInvalid: true, // do not focus the last invalid input
        ignore: "",
        rules: {
            password: {
                required: true,
            },
            c_password: {
                required: true,
                checkRetypePwd: true,
            }
        },
        messages: {
            password: {
                required: "Password is required.",
            },
            c_password: {
                required: "Confirm password is required.",
            }
        },
        highlight: function (element) {
            $(element).closest('.form-label-group').removeClass('has-success').addClass('has-danger');
            $(element).closest('.form-check').removeClass('has-success').addClass('has-danger');
        },
        success: function (element) {
            $(element).closest('.form-label-group').removeClass('has-danger').addClass('has-success');
            $(element).closest('.form-check').removeClass('has-danger').addClass('has-success');
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element); // for other inputs, just perform default behavior
        },
        submitHandler: function (form) {
            form.submit();
        }
    });
}