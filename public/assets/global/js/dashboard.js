$(document).ready(function () {
    // Get the current URL
    var currentUrl = window.location.href;

    function setActiveLink(selector, isList = false) {
        // Loop through each link in the specified selector
        $(selector).each(function () {
            var linkUrl = $(this).attr('href');

            // Check if the current URL contains the link URL
            if (currentUrl.includes(linkUrl)) {
                // If it's a list, remove active from all list items
                if (isList) {
                    $(selector).parent().removeClass('active'); // Remove active from parent <li>
                } else {
                    // Remove active class from all buttons
                    $(selector).removeClass('active');
                }

                // Add active class to the matched item
                if (isList) {
                    $(this).parent().addClass('active'); // For list items, add to parent
                } else {
                    $(this).addClass('active'); // For buttons, add to the link itself
                }
            }
        });
    }

    // Set active link for navigation (as list items)
    setActiveLink('.user-nav ul li a', true);

    // Set active link for transfer buttons
    setActiveLink('.transfer-top-btns a');


    setActiveLink('.settings-menu-nav a');
});




$(document).ready(function () {


    "use strict";

    // Color Switcher
    $(".color-switcher").on('click', function () {
        $("body").toggleClass("dark-theme");

        // var url = 'https://digibank.tdevs.co/theme-mode';

        // $.get(url);
    });

    let isDisabled = "mobile"

    $(window).on('load', function () {
        AOS.init({
            duration: 1000,
            mirror: true,
            once: true,
            disable: isDisabled == 'true' ? true : 'mobile',
        });
    });
});

(function ($) {
    'use strict';

    let pusherAppKey = "82f665b55640a9884640";
    let pusherAppCluster = "ap2";
    let soundUrl = "https://digibank.tdevs.co/notification-tune";

    var notification = new Pusher(pusherAppKey, {
        encrypted: true,
        cluster: pusherAppCluster,
    });
    var channel = notification.subscribe('user-notification1');
    channel.bind('notification-event', function (result) {
        playSound();
        latestNotification();
        notifyToast(result);
    });

    function latestNotification() {
        $.get('https://digibank.tdevs.co/user/latest-notification', function (data) {
            $('.user-notifications1').html(data);
        })
    }

    function notifyToast(data) {
        new Notify({
            status: 'info',
            title: data.data.title,
            text: data.data.notice,
            effect: 'slide',
            speed: 300,
            customClass: '',
            customIcon: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-megaphone"><path d="m3 11 18-5v12L3 14v-3z"></path><path d="M11.6 16.8a3 3 0 1 1-5.8-1.6"></path></svg>',
            showIcon: true,
            showCloseButton: true,
            autoclose: true,
            autotimeout: 9000,
            gap: 20,
            distance: 20,
            type: 1,
            position: 'right bottom',
            customWrapper: '<div><a href="' + data.data.action_url +
                '" class="learn-more-link">Explore<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="external-link" class="lucide lucide-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" x2="21" y1="14" y2="3"></line></svg></a></div>',
        })

    }

    function playSound() {
        $.get(soundUrl, function (data) {
            var audio = new Audio(data);
            audio.play();
            audio.muted = false;
        });
    }

})(jQuery);

$(document).ready(function () {
    $('#account_number').on('keypress', function (event) {
        // Allow only number keys (0-9) and control keys (backspace, tab, etc.)
        if (event.which < 48 || event.which > 57) {
            event.preventDefault();
        }
    });
});

$(document).ready(function () {
    $('#transferForm').on('submit', function (event) {
        event.preventDefault(); // Prevent default form submission

        // Clear any previous toastr messages
        toastr.clear();

        // Validate fields
        let valid = true;
        let amount = $('input[name="amount"]').val();
        let nameOfAccount = $('input[name="name_of_account"]').val();
        let accountNumber = $('input[name="account_number"]').val();
        let bankName = $('input[name="bank_name"]').val();
        let sourceOfFunds = $('select[name="source_of_funds"]').val();

        // Check for amount
        if (!amount || isNaN(amount) || parseFloat(amount) < 10) {
            toastr.error('Amount must be at least 10.00 {{ $user->currency }} and a valid number.');
            valid = false;
        }

        // Check for name on account
        if (!nameOfAccount) {
            toastr.error('Name on account is required.');
            valid = false;
        }

        // Check for account number
        if (!accountNumber) {
            toastr.error('Account Number is required.');
            valid = false;
        }

        // Check for bank name
        if (!bankName) {
            toastr.error('Bank Name is required.');
            valid = false;
        }

        // Check for source of funds
        if (!sourceOfFunds) {
            toastr.error('Source of funds is required.');
            valid = false;
        }

        // If all fields are valid, submit the form via AJAX
        if (valid) {
            $.ajax({
                url: $(this).attr('action'), // Use the form's action URL
                type: 'POST',
                data: $(this).serialize(), // Serialize form data
                success: function (response) {
                    if (response.success) {
                        toastr.success(response.message);
                        // Optionally reset the form
                        $('#transferForm')[0].reset();
                        $('select[name="source_of_funds"]').val("");

                    }
                },
                error: function (xhr) {
                    // Handle validation errors
                    var errors = xhr.responseJSON.errors;
                    for (var key in errors) {
                        toastr.error(errors[key][0]); // Display the first error message
                    }
                }
            });
        }
    });
});


$(document).ready(function () {
    $('#profileForm').on('submit', function (e) {
        // Prevent the default form submission
        e.preventDefault();

        // Validate required fields
        let valid = true;
        $('.box-input').each(function () {
            if ($(this).prop('required') && !$(this).val()) {
                valid = false;
                $(this).addClass('is-invalid'); // Add a class for styling
            } else {
                $(this).removeClass('is-invalid'); // Remove class if valid
            }
        });

        if (!valid) {
            toastr.error('Please fill in all required fields.');
            return; // Stop form submission
        }

        // Submit the form via AJAX if everything is valid
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (response) {
                // Handle success response
                toastr.success('Profile updated successfully!');
                // Optionally redirect or update UI
                setTimeout(() => {

                    window.location.reload();
                }, 2000);

            },
            error: function (xhr) {
                // Handle error response
                toastr.error('An error occurred while updating the profile. Please try again.');
            }
        });
    });
});


$(document).ready(function () {
    // Toggle password visibility
    $('.toggle-password').on('click', function () {
        const targetInput = $(this).data('target');
        const input = $(targetInput);

        if (input.attr('type') === 'password') {
            input.attr('type', 'text');
            $(this).html('<i class="fas fa-eye-slash"></i>'); // Change icon to eye-slash
        } else {
            input.attr('type', 'password');
            $(this).html('<i class="fas fa-eye"></i>'); // Change icon back to eye
        }
    });

    $('#changePasswordForm').on('submit', function (e) {
        e.preventDefault(); // Prevent the default form submission

        // Submit the form via AJAX
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: $(this).serialize(), // Serialize form data
            success: function (response) {
                toastr.success('Password changed successfully!');
                $('#changePasswordForm')[0].reset();
            },
            error: function (xhr) {
                // Check for validation errors
                if (xhr.status === 422) {
                    const errors = xhr.responseJSON.errors;
                    for (const key in errors) {
                        toastr.error(errors[key][0]);
                    }
                } else {
                    toastr.error('An error occurred. Please try again.');
                }
            }
        });
    });
});

