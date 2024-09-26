@extends('layout.landing-layout')
@section('content')
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>
        @include('shared.l-header')

        <!--Page Title-->
        <section class="page-title" style="background-image:url(images/background/8.jpg)">
            <div class="auto-container">
                <div class="content">
                    <h1> Personal
                    </h1>
                    <ul class="page-breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>Personal</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->

        <!--Sidebar Page Container-->
        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Sidebar Side-->
                    <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                        <aside class="sidebar default-sidebar">

                            <!--Blog Category Widget-->
                            <div class="sidebar-widget sidebar-blog-category">
                                <ul class="blog-cat">
                                    <li><a href="/first-steps">First Steps</a></li>
                                    <li class="active"><a href="/personal">Personal</a></li>
                                    <li><a href="/wealth-management">Wealth Management</a></li>
                                    <li><a href="/commercial">Commercial</a></li>
                                </ul>
                            </div>

                            {{-- <!-- Contact Widget-->
                        <div class="sidebar-widget contact-widget">
                        	<div class="sidebar-title">
                                <h4>Contact</h4>
                            </div>
							<ul>
								<li><span class="icon flaticon-map-1"></span> 3111 West Allegheny Avenue <br> Pennsylvania 19132</li>
								<li><span class="icon flaticon-phone-receiver"></span> 1-982-782-5297 <br> 1-982-125-6378</li>
								<li><span class="icon flaticon-comment"></span> support@financ.com</li>
							</ul>
						</div>

						<!-- Brochures Widget-->
                        <div class="sidebar-widget brochures-widget">
                        	<div class="sidebar-title">
                                <h4>Brochures</h4>
                            </div>
							<div class="text">View our 2019 financial prospectus brochure for an easy to read guide on all of the services offer.</div>
							<ul class="files">
								<li><a href="#"><span class="fa fa-file-pdf-o"></span> Download Brochure</a></li>
								<li><a href="#"><span class="fa fa-file-word-o"></span> Characteristics</a></li>
							</ul>
						</div> --}}

                            <!-- Banner Widget-->
                            <div class="sidebar-widget banner-widget">
                                <div class="widget-content" style="background-image:url(images/resource/service-15.jpg)">
                                    <div class="logo">
                                        <img src="images/icons/widget-logo.png" alt="" />
                                    </div>
                                    <div class="title">Secured Business with</div>
                                    <h2>{{ config('app.name') }}</h2>
                                    <a href="/register" class="theme-btn btn-style-seventen">Let’s start now <span
                                            class="icon flaticon-link"></span></a>
                                </div>
                            </div>

                        </aside>
                    </div>

                    <!--Content Side-->
                    <div class="content-side col-lg-8 col-md-12 col-sm-12">
                        <div class="services-single">
                            <h4>Steps to Begin Your Personal Banking Journey</h4>
                            <div class="text">
                                <p>Welcome to your gateway for a seamless banking experience! As you embark on this journey
                                    toward establishing your personal banking account, it's essential to understand the
                                    initial steps that will set the foundation for your financial endeavors. Opening a
                                    personal account with us is designed to be straightforward and convenient, ensuring that
                                    you can manage your finances with ease and confidence.</p>
                                <p>To begin, we will require some fundamental information from you. This includes filling
                                    out a straightforward online form, where you will enter your personal details and select
                                    a secure passcode. It’s important to have your identification documents, such as your
                                    DNI or NIE, at hand during this process, as they will assist in verifying your identity.
                                    Our aim is to create a safe and efficient environment for you to manage your banking
                                    needs.</p>
                                <p>After you submit your application, we will guide you through a quick identity
                                    verification process. You can complete this from the comfort of your home, utilizing
                                    reliable methods of identification. This might include confirming your identity via a
                                    secure bank transfer, ensuring that every step is as simple as possible. Once this
                                    verification is complete, you will receive an SMS containing a unique security code,
                                    granting you access to your new account and facilitating the signing of your electronic
                                    contract.</p>
                                <p>By following these simple steps, you’ll be well on your way to accessing a world of
                                    financial opportunities. We’re committed to making your banking experience as
                                    user-friendly as possible, allowing you to focus on what truly matters—achieving your
                                    financial goals.</p>
                            </div>
                            <ul class="list-style-four">
                                <li>Begin your journey with an easy online form submission</li>
                                <li>Prepare your identification for a smooth verification process</li>
                                <li>Receive prompt notifications via SMS for security and access</li>
                                <li>Enjoy the convenience of electronic signing for your contract</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--End Sidebar Page Container-->
        <section class="services-section-ten style-two pt-1">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title centered">
                    <h2>Become a customer in less than <span>10 minutes</span></h2>
                </div>
                <div class="row clearfix">

                    <!-- Fill Out Your Details -->
                    <div class="services-block-fourteen style-two col-lg-4 col-md-12 col-sm-12">
                        <div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <span class="icon flaticon-document-1"></span>
                            </div>
                            <h6><a href="#">Fill Out Your Details</a></h6>
                            <div class="text">
                                Start your banking journey by completing a simple online form. We ask for essential information to ensure a smooth onboarding process. This step is designed to be quick and user-friendly, setting you on the path to managing your finances effortlessly.
                            </div>
                        </div>
                    </div>

                    <!-- Verify Your Identity -->
                    <div class="services-block-fourteen style-two col-lg-4 col-md-12 col-sm-12">
                        <div class="inner-box wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <span class="icon flaticon-document"></span>
                            </div>
                            <h6><a href="#">Verify Your Identity</a></h6>
                            <div class="text">
                                After submitting your details, you’ll need to verify your identity. This can be done easily through various secure methods, such as online identification or bank transfers. We prioritize your security to ensure a seamless experience.
                            </div>
                        </div>
                    </div>

                    <!-- Sign Your Contract Electronically -->
                    <div class="services-block-fourteen style-two col-lg-4 col-md-12 col-sm-12">
                        <div class="inner-box wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <span class="icon flaticon-hand-shake"></span>
                            </div>
                            <h6><a href="#">Sign Your Contract Electronically</a></h6>
                            <div class="text">
                                Once your identity is verified, you’ll receive an SMS/Email with a secure code to access and sign your contract electronically. This convenient process allows you to finalize your account setup from anywhere, anytime.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>



        @include('shared.l-footer')

    </div>
    <!--End pagewrapper-->
@endsection
