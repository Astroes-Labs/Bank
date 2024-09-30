$(document).ready(function () {
    $('#loginForm').on('submit', function (event) {
        event.preventDefault(); // Prevent default form submission
        $.ajax({
            url: '/login', // Your route
            type: 'POST',
            data: $(this).serialize(), // Serialize form data
            success: function (response) {
                //$('#responseMessage').html('<p>' + response.message + '</p>');
                if (response.success === true) {
                    toastr.success(response.message);
                    window.location.href = '/user/dashboard';
                } else {
                    toastr.error(response.message);
                }
            },
            error: function (xhr) {
                var errors = xhr.responseJSON.errors;
                var errorMessage = '';
                $.each(errors, function (key, value) {
                    errorMessage += value[0] + '<br>'; // Display errors
                });
                //$('#responseMessage').html('<p style="color:red;">' + errorMessage + '</p>');
                console.log(errorMessage);
            }
        });
    });

    $('#registrationForm').on('submit', function(e) {
        e.preventDefault(); // Prevent the default form submission

        $.ajax({
            url: $(this).attr('action'),
            method: 'POST',
            data: new FormData(this), // Use FormData to send file data
            contentType: false,
            processData: false,
            success: function(response) {
                // Display success message
                toastr.success(response.message);
                // Optionally, redirect or clear the form
                window.location.href = '/login';
            },
            error: function(xhr) {
                if (xhr.status === 422) {
                    // Handle validation errors
                    const errors = xhr.responseJSON.errors;
                    $.each(errors, function(key, value) {
                        toastr.error(value[0]); // Display the first error message for each field
                    });
                } else {
                    // Handle other errors
                    toastr.error(xhr.responseJSON.error || 'An unexpected error occurred.');
                }
            }
        });
    });

});

//Next Button functionality on Register
$(document).ready(function() {
    $('.next-btn').on('click', function() {
        // Clear any previous toastr messages
        toastr.clear();

        // Validate fields
        let valid = true;
        let username = $('input[name="username"]').val();
        let email = $('input[name="email"]').val();
        let country = $('select[name="country"]').val();
        let mobile = $('input[name="mobile"]').val();
        let password = $('input[name="password"]').val();
        let passwordConfirmation = $('input[name="password_confirmation"]').val();

        if (!username) {
            toastr.error('Username is required.');
            valid = false;
        }

        if (!email) {
            toastr.error('Email is required.');
            valid = false;
        }

        if (!country) {
            toastr.error('Country selection is required.');
            valid = false;
        }

        if (!mobile) {
            toastr.error('Mobile number is required.');
            valid = false;
        }

        if (!password) {
            toastr.error('Password is required.');
            valid = false;
        }

        if (password !== passwordConfirmation) {
            toastr.error('Passwords do not match.');
            valid = false;
        }

        // If all fields are valid, proceed to the next step
        if (valid) {
            $('#step1').hide();
            $('#step2').show();
        }
    });

       // Step 2 validation
       $('.register-btn').on('click', function(event) {
        event.preventDefault(); // Prevent form submission for validation

        // Clear any previous toastr messages
        toastr.clear();

        // Validate Step 2 fields
        let valid = true;
        let firstName = $('input[name="first_name"]').val();
        let lastName = $('input[name="last_name"]').val();
        let imageInput = $('input[name="image"]')[0];
        let address = $('input[name="address"]').val();
        let state = $('input[name="state"]').val();
        let city = $('input[name="city"]').val();
        let zipcode = $('input[name="zipcode"]').val();

        if (!firstName) {
            toastr.error('First name is required.');
            valid = false;
        }

        if (!lastName) {
            toastr.error('Last name is required.');
            valid = false;
        }

        if (!imageInput.files.length) {
            toastr.error('Selfie image is required.');
            valid = false;
        } else {
            const file = imageInput.files[0];
            const allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];

            if (!allowedTypes.includes(file.type)) {
                toastr.error('Only JPG, PNG, and GIF files are allowed for the selfie.');
                valid = false;
            }
        }

        if (!address) {
            toastr.error('Address is required.');
            valid = false;
        }

        if (!state) {
            toastr.error('State is required.');
            valid = false;
        }

        if (!city) {
            toastr.error('City is required.');
            valid = false;
        }

        if (!zipcode) {
            toastr.error('Zipcode is required.');
            valid = false;
        }

        // If all fields are valid, submit the form
        if (valid) {
            $('#registrationForm').submit(); // Submit the form
        }
    });

    $('.toggle-password').on('click', function() {
        // Toggle the input type
        const input = $($(this).attr("toggle"));
        const type = input.attr("type") === "password" ? "text" : "password";
        input.attr("type", type);

        // Toggle the eye icon
        $(this).find("i").toggleClass("fa-eye fa-eye-slash");
    });

    $('.prev-btn').on('click', function() {
        $('#step1').show();
        $('#step2').hide();
    });

    $('#imageUpload').change(function(event) {
        const input = event.target;
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                $('#profileImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    });
});


