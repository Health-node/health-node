$("#login-form").click(function (event) {
    $('#login-form').validate({
        errorElement: 'lable', //default input error message container
        errorClass: 'text-danger', // default input error message class
        focusInvalid: true, // do not focus the last invalid input
        ignore: "",
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true
            }
        },
        messages: {
            email: {
                required: "Email is required.",
            },
            password: {
                required: "Password is required."
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
            // $("#loader_div").css("display", "block");
            $("#myModal_login").modal({
                show: 'true',
                keyboard: false,
                backdrop: 'static'
            });
            setTimeout(() => {
                $.ajax({
                    type: "POST",
                    data: $('#login-form').serialize(),
                    url: $("#base_url").val() + 'login/user_auth/',
                    dataType: "json",
                    beforeSend: function () {

                    },
                    success: function (message) {
                        if (message.status == 'success') {
                            $('#myModal_login').modal('toggle');
                            $("#error_message").addClass("display-hide");
                            $("#error_message").html("");
                            $("#success_message").show();
                            $("#success_message").html("Login Success!");
                            window.location = message.url;
                        } else {
                            $('#myModal_login').modal('toggle');
                            $("#success_message").html("");
                            $("#error_message").show();
                            $("#error_message").html(message.msg);
                        }
                    },
                    error: function () {
                        alert("Something went wrong, Try again");
                    }
                });
            }, 0);
        }
    });
});


$("#registration-form").click(function (event) {
    $.validator.addMethod("checkRetypePwd", function (value, element) {
        if (value == $('#password').val())
            return true;
        else
            return false;
    }, "Password and Confirm Password should be same..");
    $('#registration-form').validate({
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
            }, password: {
                required: true,
            }, c_password: {
                required: true,
                checkRetypePwd: true,
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
            }, password: {
                required: "Password is required.",
            }, c_password: {
                required: "Confirm password is required",
            }, dob: {
                required: " DOB is required",
            }, bank_account: {
                required: "Bank Account is required",
            }, medical_record_no: {
                required: "Bank accont no required",
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
            // $("#loader_div").css("display", "block");
            $("#myModal_signup").modal({
                show: 'true',
                keyboard: false,
                backdrop: 'static'
            });
            setTimeout(() => {
                $.ajax({
                    type: "POST",
                    data: $('#registration-form').serialize(),
                    url: $("#base_url").val() + 'login/user_reg/',
                    dataType: "json",
                    beforeSend: function () {
                    },
                    success: function (message) {
                        if (message.status == 'success') {
                            $('#myModal_signup').modal('toggle');
                            $("#error_msg").addClass("display-hide");
                            $("#error_msg").html("");
                            $("#success_msg").removeClass("display-hide");
                            $("#success_msg").html(message.msg + "Admin will approve Your Registartion");
                            // $('body, html').animate({ scrollTop: $('form').offset().top }, 'slow');
                            window.location = message.url;
                        } else {
                            $('#myModal_signup').modal('toggle');
                            $("#success_msg").html("");
                            $("#error_msg").removeClass("display-hide");
                            $("#error_msg").html(message.msg);
                        }
                    },
                    error: function () {
                        alert("Something went wrong, Try again");
                    }
                });
            });
        }
    });

});

