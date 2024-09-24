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
                    <h1>Frequently Asked <span>Questions </span></h1>
                    <ul class="page-breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>FAQ</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->

        <!-- Faq Section -->
        <section class="faq-section">
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Faq Column -->
                    <div class="faq-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="sec-title">
                                <h2>Frequently Asked <span>Questions</span></h2>
                            </div>

                            <!--Accordion Box-->
                            <ul class="accordion-box">

                                <!-- Block -->
                                <li class="accordion block">
                                    <div class="acc-btn active">
                                        <div class="icon-outer">
                                            <span class="icon icon-plus fa fa-arrow-right"></span>
                                            <span class="icon icon-minus fa fa-arrow-down"></span>
                                        </div>
                                        <span class="icon-inner flaticon-user"></span> How do I change my personal data?
                                        <span class="arrow fa fa-angle-right"></span>
                                    </div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <p>You can change your personal data by logging into your account and navigating
                                                to the profile settings section. From there, you can update your information
                                                as needed.</p>
                                        </div>
                                    </div>
                                </li>

                                <!-- Block -->
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer">
                                            <span class="icon icon-plus fa fa-arrow-right"></span>
                                            <span class="icon icon-minus fa fa-arrow-down"></span>
                                        </div>
                                        <span class="icon-inner flaticon-download"></span> I've downloaded a document, now
                                        what?
                                        <span class="arrow fa fa-angle-right"></span>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <p>After downloading a document, you can view it on your device or print it if
                                                needed. Make sure to save it in a secure location for future reference.</p>
                                        </div>
                                    </div>
                                </li>

                                <!-- Block -->
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer">
                                            <span class="icon icon-plus fa fa-arrow-right"></span>
                                            <span class="icon icon-minus fa fa-arrow-down"></span>
                                        </div>
                                        <span class="icon-inner flaticon-security"></span> Is my account secure?
                                        <span class="arrow fa fa-angle-right"></span>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <p>Yes, we use advanced security measures, including encryption and two-factor
                                                authentication, to protect your account and personal information.</p>
                                        </div>
                                    </div>
                                </li>

                                <!-- Block -->
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer">
                                            <span class="icon icon-plus fa fa-arrow-right"></span>
                                            <span class="icon icon-minus fa fa-arrow-down"></span>
                                        </div>
                                        <span class="icon-inner flaticon-transaction"></span> How can I transfer money
                                        between accounts?
                                        <span class="arrow fa fa-angle-right"></span>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <p>You can transfer money between accounts by logging into your online banking
                                                account and selecting the transfer option. Follow the prompts to complete
                                                your transaction.</p>
                                        </div>
                                    </div>
                                </li>

                                <!-- Block -->
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer">
                                            <span class="icon icon-plus fa fa-arrow-right"></span>
                                            <span class="icon icon-minus fa fa-arrow-down"></span>
                                        </div>
                                        <span class="icon-inner flaticon-bill"></span> How do I set up bill payments?
                                        <span class="arrow fa fa-angle-right"></span>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <p>To set up bill payments, log into your online banking account and navigate to
                                                the bill payment section. Follow the instructions to add your bills and
                                                schedule payments.</p>
                                        </div>
                                    </div>
                                </li>

                                <!-- Block -->
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer">
                                            <span class="icon icon-plus fa fa-arrow-right"></span>
                                            <span class="icon icon-minus fa fa-arrow-down"></span>
                                        </div>
                                        <span class="icon-inner flaticon-help"></span> What should I do if I forget my
                                        password?
                                        <span class="arrow fa fa-angle-right"></span>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <p>If you forget your password, click on the "Forgot Password?" link on the
                                                login page. Follow the instructions to reset your password securely.</p>
                                        </div>
                                    </div>
                                </li>

                                <!-- Block -->
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer">
                                            <span class="icon icon-plus fa fa-arrow-right"></span>
                                            <span class="icon icon-minus fa fa-arrow-down"></span>
                                        </div>
                                        <span class="icon-inner flaticon-notification"></span> How can I receive account
                                        alerts?
                                        <span class="arrow fa fa-angle-right"></span>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <p>You can set up account alerts by navigating to the notifications settings in
                                                your account. Choose the types of alerts you wish to receive via email or
                                                SMS.</p>
                                        </div>
                                    </div>
                                </li>

                                <!-- Block -->
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer">
                                            <span class="icon icon-plus fa fa-arrow-right"></span>
                                            <span class="icon icon-minus fa fa-arrow-down"></span>
                                        </div>
                                        <span class="icon-inner flaticon-question"></span> How do I close my account?
                                        <span class="arrow fa fa-angle-right"></span>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <p>To close your account, please contact our customer support team through the
                                                contact options available on our website for assistance.</p>
                                        </div>
                                    </div>
                                </li>

                                <!-- Block -->
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer">
                                            <span class="icon icon-plus fa fa-arrow-right"></span>
                                            <span class="icon icon-minus fa fa-arrow-down"></span>
                                        </div>
                                        <span class="icon-inner flaticon-info"></span> Can I open multiple accounts?
                                        <span class="arrow fa fa-angle-right"></span>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <p>Yes, you can open multiple accounts with {{ config('app.name') }}. Just log
                                                into your account and follow the prompts to open new accounts based on your
                                                needs.</p>
                                        </div>
                                    </div>
                                </li>

                                <!-- Block -->
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer">
                                            <span class="icon icon-plus fa fa-arrow-right"></span>
                                            <span class="icon icon-minus fa fa-arrow-down"></span>
                                        </div>
                                        <span class="icon-inner flaticon-contact"></span> How can I contact customer
                                        service?
                                        <span class="arrow fa fa-angle-right"></span>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <p>You can contact our customer service via email, phone, or the live chat
                                                feature on our website. We’re here to help you with any inquiries!</p>
                                        </div>
                                    </div>
                                </li>

                            </ul>

                        </div>
                    </div>

                    <!-- Counter Column -->
                    <div class="counter-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="row clearfix">

                                <!--Image Column -->
                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <div class="image">
                                        <img src="images/resource/counter-img.jpg" alt="" title="">
                                    </div>
                                </div>

                                <!--Content Column -->
                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <div class="fact-counter style-two">
                                        {{-- Additional counters can be added here --}}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="side-image" style="background-image:url(images/resource/image-3.jpg)"></div>
            </div>
        </section>
        <!-- End Faq Section -->




        <!-- Call To Action Two -->
        <section class="call-to-action-two">
            <div class="auto-container">
                <div class="clearfix">

                    <div class="pull-left">
                        <h2>Prior<span> Arrangement</span></h2>
                        <div class="text text-white">
                            Avoid the queues and choose a day and time to go into your local branch.
                        </div>
                    </div>
                    <div class="pull-right">
                        <a href="/contact" class="theme-btn btn-style-five">Request now <span
                                class="icon fa fa-arrow-right"></span></a>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Call To Action Two -->

        @include('shared.l-footer')
    </div>
    <!--End pagewrapper-->
@endsection
