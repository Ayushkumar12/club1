
$(document).ready(function () {
    // Initialize the current step
    var currentStep = 0;

    // Hide all steps except the first one initially
    $(".step").not(":eq(0)").hide();

    // Hide the back button initially
    $(".back").hide();

    // Handle next button click
    $(".next").on("click", function () {
        // Check if the current step's form fields are valid
        if ($("form").valid()) {
            // Hide the current step
            $(".step").eq(currentStep).hide();

            // Increment the current step
            currentStep++;

            // Show the next step
            $(".step").eq(currentStep).fadeIn();

            // Show the back button from the second step onwards
            if (currentStep > 0) {
                $(".back").show();
            }

            // if (currentStep === $(".step").length - 1) {

            // }
        }
    });

    // Handle back button click
    $(".back").on("click", function () {
        // Hide the current step
        $(".step").eq(currentStep).hide();

        // Decrement the current step
        currentStep--;

        // Show the previous step
        $(".step").eq(currentStep).fadeIn();

        // Hide the back button on the first step
        if (currentStep === 0) {
            $(".back").hide();
        }
    });

    $.validator.addMethod("valid_name", function (value, element) {
        return /^[A-Za-z\s]+$/.test(value);
    }, "Please enter a valid name (only letters and spaces are allowed).");

    $.validator.addMethod("valid_lname", function (value, element) {
        return /^[A-Za-z\s]*$/.test(value);
    }, "Please enter a valid name (only letters and spaces are allowed).");

    $.validator.addMethod("valid_username", function (value, element) {
        return /^[a-zA-Z0-9_]+$/.test(value);
    }, "Please enter a valid username (only letters, numbers, and underscores are allowed).");

    $.validator.addMethod("valid_phone", function (value, element) {
        // Indian phone numbers after +91 should start with 9, 8, 7, or 6 and be 10 digits long
        return /^\+91[7896]\d{9}$/.test(value);
    }, "Please enter a valid Indian phone number.");

    $.validator.addMethod("valid_email", function (value, element) {
        return /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(value);
    }, "Please enter a valid email address.");

    // strongPassword rule
    $.validator.addMethod("strongPassword", function (value, element) {
        return /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]/.test(value);
    }, "Password must contain at least one letter, one number, and one special character.");

    $("form").validate({
        rules: {
            first_name: {
                required: true,
                valid_name: true
            },
            last_name: {
                valid_lname: true
            },

            username: {
                required: true,
                valid_username: true,
                remote: {
                    url: "check_availability.php",
                    type: "post",
                    data: {
                        username: function () {
                            return $("#username").val();
                        }
                    },
                },
            },

            email: {
                required: true,
                valid_email: true,
                remote: {
                    url: "check_availability.php",
                    type: "post",
                    data: {
                        email: function () {
                            return $("#email").val();
                        }
                    },
                },
            },


            otp: {
                required: true
            },

            phone: {
                required: true,
                valid_phone: true
            },

            password: {
                required: true,
                minlength: 8,
                strongPassword: true
            },
        },

        messages: {
            first_name: {
                required: "Please enter your first name",
                valid_name: "Please enter a valid name (only letters and spaces are allowed)."
            },

            last_name: {
                valid_lname: "Please enter a valid name (only letters and spaces are allowed)."
            },

            username: {
                required: "Please enter a username",
                valid_username: "Please enter a valid username (only letters, numbers, and underscores are allowed).",
                remote: "username is already taken"
            },

            phone: {
                required: "Please enter your phone number",
                valid_Phone: "Please enter a valid phone number (only numbers are allowed)."
            },

            email: {
                required: "Please enter your email address",
                valid_email: "Please enter a valid email address",
                remote: "Email is already taken"
            },

            otp: {
                required: "Please enter the OTP"
            },

            password: {
                required: "Please enter a password",
                minlength: "Password must be at least 8 characters long"
            },
        },

        errorClass: "text-red-500 text-sm",
        errorElement: "span",
        highlight: function (element, errorClass) {
            $(element).addClass("border-red-500");
        },
        unhighlight: function (element, errorClass) {
            $(element).removeClass("border-red-500");
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element);
        }
    });

    $("#showPassword").on("change", function () {
        var passwordField = $("#password");
        var passwordFieldType = passwordField.attr("type");

        // Toggle password field type between text and password
        passwordField.attr("type", passwordFieldType === "password" ? "text" : "password");
    });
    $("#send-otp-btn").on("click", function (e) {
        e.preventDefault();
        if ($("form").valid()) {
            $.ajax({
                type: "POST",
                url: "",
                data: {
                    send_otp: true,
                    email: $("#email").val(),
                    first_name: $("#first_name").val(),
                    last_name: $("#last_name").val(),
                    username: $("#username").val(),
                    password: $("#password").val()
                },
                success: function (response) {
                    // Hide the current step
                    $(".step").eq(currentStep).hide();
                    // Increment the current step
                    currentStep++;
                    // Show the next step
                    $(".step").eq(currentStep).fadeIn();
                    // Show the back button from the second step onwards
                    if (currentStep > 0) {
                        $(".back").show();
                    }
                },
                error: function (xhr, status, error) {
                    // Handle error
                    console.error(error);
                }

            });

        }
    });

    $("#verify-otp-btn").on("click", function (e) {
        e.preventDefault();
        var enteredOTP = $("#otp").val();
        $.ajax({
            type: "POST",
            url: "verify.php",
            data: {
                verify_otp: true,
                otp: enteredOTP
            },
            dataType: "html",
            success: function (response) {
                if (response.trim() === "Email verified successfully! User is now registered.") {
                      $('#fadeandscale').popup('show');
                    // window.location.href = "../index";
                } else {
                    $("#error-element").text("Invalid! OTP")
                    console.error("Error:", response);
                }
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });


});
