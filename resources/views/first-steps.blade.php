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
				<h1>Don't Miss Out on Any of <br>the  Exciting  Digital <span>Opportunities</span><br> Available to You!</h1>
				<ul class="page-breadcrumb">
					<li><a href="/">Home</a></li>
					<li>First Steps</li>
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
                                <li class="active"><a href="/first-steps">First Steps</a></li>
                                <li><a href="/personal">Personal</a></li>
                                <li><a href="/wealth-management">Wealth Management</a></li>
                                <li><a href="/commercial">Commercial</a></li>
                            </ul>
                        </div>


						<!-- Banner Widget-->
                        <div class="sidebar-widget banner-widget">
							<div class="widget-content" style="background-image:url(images/resource/service-15.jpg)">
								<div class="logo">
									<img src="images/icons/widget-logo.png" alt="" />
								</div>
								<div class="title">Secured Business with</div>
								<h2>{{ config('app.name') }}</h2>
								<a href="/contact" class="theme-btn btn-style-seventen">Let’s start now <span class="icon flaticon-link"></span></a>
							</div>
						</div>

					</aside>
				</div>

				<!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                	<div class="services-single">
                        <h4>Basic Steps for Starting Your Digital Experience</h4>
                        <div class="text">
                            <p>To open an account with our banking platform, we need to gather some essential information from you. Simply fill out the online form and choose your passcode, making sure to have your DNI or NIE ready.</p>
                            <p>Once you've submitted your details, verify your identity from the comfort of your home using verified means of identification, such as a bank transfer. Finally, you’ll receive an SMS with a security code to access your contract, allowing you to sign it electronically.</p>
                        </div>
                        <ul class="list-style-four">
                            <li>Fill out your details in the online form</li>
                            <li>Verify your identity using verified means of identification</li>
                            <li>Receive an SMS/Email with a security code</li>
                            <li>Sign your contract electronically</li>
                        </ul>



					</div>
				</div>

			</div>
		</div>
	</div>
	<!--End Sidebar Page Container-->
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
