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
                                        <h3 class="title">Profile Settings</h3>
                                    </div>
                                    <div class="site-card-body">
                                        <form action="{{ route('user.profile-update') }}" method="post"
                                            enctype="multipart/form-data" id="profileForm">
                                            @csrf
                                            <div class="step-details-form">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                                        <div class="col-xl-4 col-lg-6 col-md-12">
                                                            <div class="inputs">
                                                                <label class="input-label">Image (optional):</label>
                                                                <div class="wrap-custom-file">
                                                                    <input type="file" name="image" id="image"
                                                                        accept=".gif, .jpg, .png" />
                                                                    <label for="image">
                                                                        <img class="upload-icon"
                                                                            src="https://digibank.tdevs.co/assets/front/images/icons/upload.svg"
                                                                            alt="" />
                                                                        <span>Update Image</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6 col-md-12">
                                                        <div class="inputs">
                                                            <label class="form-label">First Name</label>
                                                            <input type="text" class="box-input" name="first_name"
                                                                value="{{ old('first_name', $user->first_name) }}"
                                                                required />
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6 col-md-12">
                                                        <div class="inputs">
                                                            <label class="form-label">Last Name</label>
                                                            <input type="text" class="box-input" name="last_name"
                                                                value="{{ old('last_name', $user->last_name) }}" required />
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6 col-md-12">
                                                        <div class="inputs">
                                                            <label class="form-label">Country</label>
                                                            <input type="text" class="box-input" name="country"
                                                                value="{{ old('country', $user->country) }}" required />
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6 col-md-12">
                                                        <div class="inputs">
                                                            <label class="form-label">Mobile</label>
                                                            <input type="text" class="box-input" name="mobile"
                                                                value="{{ old('mobile', $user->mobile) }}" required />
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6 col-md-12">
                                                        <div class="inputs">
                                                            <label class="form-label">Address</label>
                                                            <input type="text" class="box-input" name="address"
                                                                value="{{ old('address', $user->address) }}" required />
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6 col-md-12">
                                                        <div class="inputs">
                                                            <label class="form-label">State</label>
                                                            <input type="text" class="box-input" name="state"
                                                                value="{{ old('state', $user->state) }}" required />
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6 col-md-12">
                                                        <div class="inputs">
                                                            <label class="form-label">City</label>
                                                            <input type="text" class="box-input" name="city"
                                                                value="{{ old('city', $user->city) }}" required />
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6 col-md-12">
                                                        <div class="inputs">
                                                            <label class="form-label">Zip Code</label>
                                                            <input type="text" class="box-input" name="zipcode"
                                                                value="{{ old('zipcode', $user->zipcode) }}" required />
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6 col-md-12">
                                                        <button type="submit" class="site-btn polis-btn">Save
                                                            Changes</button>
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

