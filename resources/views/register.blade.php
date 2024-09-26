@extends('layout.landing-layout')
@section('content')
    <div class="page-wrapper">

        <style>
            .position-relative {
                position: relative;
            }

            .toggle-password {
                position: absolute;
                right: 10px;
                /* Adjust as needed for padding */
                top: 50%;
                transform: translateY(-50%);
                cursor: pointer;
                color: #999;
                /* Adjust color as needed */
                padding: 0 10px;
                /* Space around the icon */
            }
        </style>
        <!-- Preloader -->
        <div class="preloader"></div>
        @include('shared.l-header')
        <!-- Contact Page Section -->
        <section class="contact-page-section" style="margin-bottom: 200px;">
            <div class="auto-container">
                <div class="inner-container">
                    <h2>Create Your <span>Online Banking</span> Account</h2>
                    <p>Join us today and enjoy secure banking at your fingertips!</p>
                    <div class="row clearfix">

                        <!-- Form Column -->
                        <div class="form-column col-lg-12 col-md-12 col-sm-12">
                            <div class="inner-column">

                                <!-- Registration Form -->
                                <div class="contact-form">
                                    <form method="post" action="{{ route('register') }}" id="registrationForm"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <!-- Step 1: Personal Information -->
                                        <div id="step1">
                                            <div class="form-group">
                                                <input type="text" name="username" placeholder="Username" required>
                                                @error('username')
                                                    <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <input type="email" name="email" placeholder="Email" required>
                                                @error('email')
                                                    <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <select name="country" required>
                                                    <option value="">Select Country</option>
                                                    @foreach ($countries as $country)
                                                        <option value="{{ $country['iso_3166_1_alpha3'] }}">
                                                            +{{ $country['calling_code'] }} ({{ $country['name'] }})
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('country')
                                                    <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" name="mobile" class="form-control"
                                                        placeholder="Mobile Number" required>
                                                </div>
                                                @error('mobile')
                                                    <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group position-relative">
                                                <input type="password" name="password" placeholder="Password" required
                                                    id="password" class="form-control">
                                                <span class="toggle-password" toggle="#password">
                                                    <i class="fa fa-eye"></i>
                                                </span>
                                                @error('password')
                                                    <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group position-relative">
                                                <input type="password" name="password_confirmation"
                                                    placeholder="Confirm Password" required id="password_confirmation"
                                                    class="form-control">
                                                <span class="toggle-password" toggle="#password_confirmation">
                                                    <i class="fa fa-eye"></i>
                                                </span>
                                                @error('password_confirmation')
                                                    <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                                                @enderror
                                            </div>




                                            <div class="form-group">
                                                <button type="button" class="next-btn theme-btn">Next</button>
                                            </div>
                                        </div>

                                        <!-- Step 2: Account Information -->
                                        <div id="step2" style="display: none;">
                                            <div class="form-group">
                                                <i class="fa fa-arrow-left prev-btn text-primary"> Back</i>
                                            </div>

                                            <div class="form-group">
                                                <input type="text" name="first_name" placeholder="First Name" required>
                                                @error('first_name')
                                                    <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <input type="text" name="last_name" placeholder="Last Name" required>
                                                @error('last_name')
                                                    <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <input type="file" name="image" placeholder="Selfie" required>
                                                @error('image')
                                                    <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <input type="text" name="address" placeholder="Address" required>
                                                @error('address')
                                                    <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <input type="text" name="state" placeholder="State" required>
                                                @error('state')
                                                    <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <input type="text" name="city" placeholder="City" required>
                                                @error('city')
                                                    <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <input type="text" name="zipcode" placeholder="Zipcode" required>
                                                @error('zipcode')
                                                    <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                                                @enderror
                                            </div>


                                            <div class="form-group">
                                                <button type="submit" class="theme-btn register-btn">Register</button>
                                            </div>
                                        </div>
                                    </form>


                                    <div class="mt-3">
                                        <p>Already have an account? <a href="{{ route('login') }}"
                                                class="text-primary">Login here</a></p>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!-- End Team Page Section -->







        @include('shared.l-footer')

    </div>
    <!--End pagewrapper-->
@endsection
