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
                    <h1>Wealth <span> Management</span>
                    </h1>
                    <ul class="page-breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>Wealth Management</li>
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
                                    <li><a href="/personal">Personal</a></li>
                                    <li class="active"><a href="/wealth-management">Wealth Management</a></li>
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
                                    <a href="/register" class="theme-btn btn-style-seventen">Let’s start now <span
                                            class="icon flaticon-link"></span></a>
                                </div>
                            </div>

                        </aside>
                    </div>
                    <!--Content Side-->
                    <div class="content-side col-lg-8 col-md-12 col-sm-12">
                        <div class="services-single">
                            <h4>Embarking on Your Wealth Management Journey</h4>
                            <div class="text">
                                <p>Welcome to a transformative experience in wealth management! As you take the first steps
                                    towards optimizing your financial future, it’s essential to understand the foundational
                                    elements that will support your investment goals. Engaging with our wealth management
                                    services is designed to be straightforward and empowering, ensuring that you can
                                    navigate your financial landscape with confidence.</p>
                                <p>The journey begins with a commitment to understanding your unique financial situation. We
                                    invite you to provide some basic information that will help us tailor our services to
                                    your needs. This includes filling out a simple online form where you can share your
                                    financial objectives, risk tolerance, and investment preferences. Having your financial
                                    documentation at hand will facilitate a smooth onboarding process, creating a secure
                                    environment for your wealth management journey.</p>
                                <p>Once you submit your information, our dedicated team will reach out to you for a
                                    personalized consultation. During this phase, we’ll work closely with you to define your
                                    financial aspirations and establish a roadmap to achieve them. Our experts will guide
                                    you through a comprehensive analysis of your current assets and future goals, ensuring
                                    that every step is aligned with your vision. This can be done conveniently from your own
                                    space, allowing for a seamless experience that respects your time and objectives.</p>
                                <p>As we delve deeper into your financial landscape, we’ll present tailored strategies that
                                    align with your aspirations. Our approach is holistic, taking into account various
                                    factors such as market trends, economic forecasts, and your personal values. This
                                    thorough examination enables us to craft a customized wealth management plan that
                                    evolves with your changing circumstances.</p>
                                <p>After establishing a clear understanding of your needs, you will receive tailored
                                    insights and actionable steps to move forward. Regular communication will be a
                                    cornerstone of our partnership, as we believe in keeping you informed and engaged
                                    throughout the process. You’ll receive prompt updates and valuable resources that will
                                    empower you to make informed decisions.</p>
                                <p>By following these essential steps, you’ll be poised to explore a wealth of opportunities
                                    designed to enhance your financial well-being. We are dedicated to making your wealth
                                    management experience as rewarding as possible, enabling you to focus on what truly
                                    matters—realizing your financial dreams and securing your legacy.</p>
                                <p>At our banking platform, we recognize that wealth management is not merely about numbers;
                                    it’s about understanding your life’s goals and aligning your finances accordingly.
                                    Whether you’re planning for retirement, investing in real estate, or looking to leave a
                                    legacy, our team is here to guide you every step of the way. Together, we can build a
                                    path to financial prosperity that resonates with your aspirations and values.</p>
                            </div>
                            <ul class="list-style-four">
                                <li>Initiate your journey with an easy online form submission</li>
                                <li>Collaborate with experts for personalized strategies</li>
                                <li>Receive timely insights tailored to your financial goals</li>
                                <li>Experience a seamless and secure management process</li>
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
                                Start your banking journey by completing a simple online form. We ask for essential
                                information to ensure a smooth onboarding process. This step is designed to be quick and
                                user-friendly, setting you on the path to managing your finances effortlessly.
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
                                After submitting your details, you’ll need to verify your identity. This can be done easily
                                through various secure methods, such as online identification or bank transfers. We
                                prioritize your security to ensure a seamless experience.
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
                                Once your identity is verified, you’ll receive an SMS/Email with a secure code to access and
                                sign your contract electronically. This convenient process allows you to finalize your
                                account setup from anywhere, anytime.
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
