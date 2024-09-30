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
                    <h2>Get Access to your <span>Account</span></h2>
                    <div class="row clearfix">


                        <!-- Form Column -->
                        <div class="form-column col-lg-12 col-md-12 col-sm-12">
                            <div class="inner-column">

                                <!--Contact Form-->
                                <div class="contact-form">
                                    <form method="post" action="{{ route('login') }}" id="loginForm">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" name="email" value="test@gmail.com" placeholder="Email"
                                                required>

                                            @error('email')
                                                <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group  position-relative">
                                            <input type="password" name="password" placeholder="Password"
                                                value="12341234" required id="password" class="form-control">
                                            <span class="toggle-password" toggle="#password">
                                                <i class="fa fa-eye"></i>
                                            </span>
                                        </div>




                                        <div class="form-group">
                                            <button type="submit" name="submit" class="theme-btn">Sign In</button>
                                        </div>

                                    </form>
                                    <div class="mt-3">
                                        <p>Don't have an account? <a href="{{ route('register') }}"
                                                class="text-primary">Register now</a></p>
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
