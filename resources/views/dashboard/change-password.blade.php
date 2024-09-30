@extends('layout.dashboard-layout')
@section('content')
    <!--Notification-->

    <!-- Dashboard Section -->
    <main class="main-user-dahboard">
        @include('dashboard.navbar')
        <div class="page-content">
            <div class="main-content">
                @include('dashboard.user-part-header')
                <div class="page-gap">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="site-card">
                                    <div class="site-card-body transfer-top-btns settings-menu-nav">
                                        <a href="{{ route('user.settings') }}" class="site-btn-sm "><i
                                                data-lucide="user"></i>Profile Settings</a>
                                        <a href="{{ route('user.change-password') }}" class="site-btn-sm "><i
                                                data-lucide="key"></i>Change Password</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="site-card">
                                    <div class="site-card-header">
                                        <h3 class="title">Change Password</h3>
                                    </div>
                                    <div class="site-card-body">
                                        <form action="{{ route('user.update-password') }}" method="post"
                                            id="changePasswordForm"  autocomplete="off">
                                            @csrf
                                            <div class="step-details-form">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                                        <div class="col-xl-12 col-md-12">
                                                            <div class="inputs">
                                                                <label class="form-label">Current Password</label>
                                                                <div class="password-wrapper">
                                                                    <input type="password" class="box-input"
                                                                        name="current_password" required
                                                                        id="currentPassword" />
                                                                    <span class="toggle-password"
                                                                        data-target="#currentPassword">
                                                                        <i class="fas fa-eye"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-12 col-md-12">
                                                            <div class="inputs">
                                                                <label class="form-label">New Password</label>
                                                                <div class="password-wrapper">
                                                                    <input type="password" class="box-input"
                                                                        name="new_password" required id="newPassword" />
                                                                    <span class="toggle-password"
                                                                        data-target="#newPassword">
                                                                        <i class="fas fa-eye"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-12 col-md-12">
                                                            <div class="inputs">
                                                                <label class="form-label">Confirm New Password</label>
                                                                <div class="password-wrapper">
                                                                    <input type="password" class="box-input"
                                                                        name="new_password_confirmation" required
                                                                        id="confirmNewPassword" />
                                                                    <span class="toggle-password"
                                                                        data-target="#confirmNewPassword">
                                                                        <i class="fas fa-eye"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-6 col-md-12">
                                                            <button type="submit" class="site-btn polis-btn">Change
                                                                Password</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Dashboard Section End -->
@endsection

@section('extraJs')
    <script>
        $('#copy').on('click', function() {
            copyRef();
        });

        function copyRef() {
            /* Get the text field */
            var textToCopy = $('#refLink').val();
            // Create a temporary input element
            var tempInput = $('<input>');
            $('body').append(tempInput);
            tempInput.val(textToCopy).select();
            // Copy the text from the temporary input
            document.execCommand('copy');
            // Remove the temporary input element
            tempInput.remove();

            // Set tooltip as copied
            var tooltip = bootstrap.Tooltip.getInstance('#copy');
            tooltip.setContent({
                '.tooltip-inner': 'Copied'
            });

            setTimeout(() => {
                tooltip.setContent({
                    '.tooltip-inner': 'Copy'
                });
            }, 4000);
        }
    </script>
@endsection
@section('extraCss')
<style>
    .password-wrapper {
        position: relative;
    }

    .password-wrapper input {
        padding-right: 40px; /* Add space for the eye icon */
    }

    .toggle-password {
        position: absolute;
        right: 10px; /* Adjust to position the icon */
        top: 50%;
        transform: translateY(-50%); /* Center vertically */
        cursor: pointer; /* Change cursor to pointer */
        color: #888; /* Optional: change color */
    }
    </style>

@endsection
