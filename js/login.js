 $(document).ready(function () {

            $("#showPassword").on("change", function () {
                var passwordField = $("#password");
                var passwordFieldType = passwordField.attr("type");

                // Toggle password field type between text and password
                passwordField.attr("type", passwordFieldType === "password" ? "text" : "password");
            });

            $("form").validate({
                rules: {
                    email: {
                        required: true,
                        valid_email: true,
                    },
                    password: {
                        required: true,
                    },
                },
                messages: {
                    email: {
                        required: "Please enter your email address",
                        valid_email: "Please enter a valid email address",
                    },
                    password: {
                        required: "Please enter your password.",
                    },
                },
                errorClass: "text-red-500 text-xs",
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
        });
 