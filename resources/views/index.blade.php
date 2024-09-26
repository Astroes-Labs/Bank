@extends('layout.landing-layout')
@section('content')
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        @include('shared.l-index-header')

        <!--Main Slider-->
        <section class="main-slider style-two">
            <div class="main-slider-carousel owl-carousel owl-theme">

                <div class="slide" style="background-image:url(images/main-slider/3.jpg)">
                    <div class="auto-container">
                        <div class="content alternate">
                            <h1 class="alternate">Online banking: <br> Get access to your <span>bank,</span> <br> wherever
                                you are </h1>
                            <div class="text alternate">With our online banking services, you can manage your finances on
                                the go. Whether you're at home or traveling, you have 24/7 access to your account. Pay
                                bills, transfer funds, and check your balance with just a few taps.<br>
                                Experience the convenience of banking whenever and wherever you need it!</div>
                            <div class="btn-box">
                                <a href="/register" class="theme-btn btn-style-two">Let’s start now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slide" style="background-image:url(images/main-slider/7.jpg)">
                    <div class="auto-container">
                        <div class="content alternate">
                            <h1 class="alternate">Welcome To <span>{{ config('app.name') }} </span></h1>
                            <div class="text alternate">Manage your finances effortlessly with our eChecking account. Pay
                                bills and transfer money easily, all from the comfort of your home using online and mobile
                                banking. Enjoy interest earnings with no monthly fees.</div>
                            <div class="btn-box">
                                <a href="/register" class="theme-btn btn-style-two">Sign Up Now</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Services Section Three-->
        <section class="services-section-three">
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Services Block -->
                    <div class="services-block-three col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow bounceIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <span class="icon flaticon-coin"></span>
                            </div>
                            <h6><a href="#">Make Payments</a></h6>
                            <div class="text">Our payment solutions offer a seamless experience, allowing you to pay
                                bills, transfer money, and manage subscriptions with ease.</div>
                        </div>
                    </div>

                    <!-- Services Block -->
                    <div class="services-block-three col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow bounceIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <span class="icon flaticon-paper-plane"></span>
                            </div>
                            <h6><a href="#">Send and Withdraw Cash with Ease</a></h6>
                            <div class="text">Easily send and withdraw cash anytime, anywhere. </div>
                        </div>
                    </div>

                    <!-- Services Block -->
                    <div class="services-block-three col-lg-4 col-md-12 col-sm-12">
                        <div class="inner-box wow bounceIn" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <span class="icon flaticon-money-bag"></span>
                            </div>
                            <h6><a href="#">Finance Purchases</a></h6>
                            <div class="text">Whether it’s a big-ticket item or everyday essentials, our flexible payment
                                plans help you manage costs while enjoying what you love.</div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- About Section Two -->
        <section class="service-section-four">
            <div class="auto-container">
                <!-- Sec Title -->
                {{-- <div class="sec-title">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h2>We surve as the best <br> services <span>planner</span></h2>
                        </div>
                        <div class="pull-right">
                            <div class="text">The argument in favor of using filler text goes something like this: If you
                                use real content in the design process, anytime you reach a review point you’ll end up
                                reviewing and negotiating the content itself and not the design.</div>
                        </div>
                    </div>
                </div> --}}
                <div class="row clearfix">

                    <!-- Services Block Four -->
                    <div class="services-block-four col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="images/resource/service-19.jpg" alt="">
                                <div class="overlay-box">
                                    <div class="content">
                                        <div class="icon-box">
                                            {{-- <span class="icon flaticon-statistics-1"></span> --}}
                                        </div>
                                        <h6>Mobile payment</h6>
                                    </div>
                                </div>

                                <div class="overlay-box-two">
                                    <div class="overlay-inner-two">
                                        <div class="content">
                                            <div class="icon-box">
                                                {{-- <span class="icon flaticon-statistics-1"></span> --}}
                                            </div>

                                            <h6><a href="services-single.html">Mobile payment</a>
                                            </h6>
                                            <div class="text">
                                                Make payments or withdraw cash from ATMs
                                                anytime, anywhere with your mobile phone or smartwatch.
                                            </div>
                                            <a class="read-more" href="services-single.html">Let’s start <span
                                                    class="fa fa-angle-double-right"></span></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Services Block Four -->
                    <div class="services-block-four col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="images/resource/service-20.jpg" alt="">
                                <div class="overlay-box">
                                    <div class="content">
                                        <div class="icon-box">
                                            {{-- <span class="icon flaticon-target-1"></span> --}}
                                        </div>
                                        <h6>Payments of bills and taxes</h6>
                                    </div>
                                </div>

                                <div class="overlay-box-two">
                                    <div class="overlay-inner-two">
                                        <div class="content">
                                            <div class="icon-box">
                                                {{-- <span class="icon flaticon-target-1"></span> --}}
                                            </div>
                                            <h6><a href="services-single.html">Payments of bills and taxes</a>
                                            </h6>
                                            <div class="text">Set up your direct debits for free and without leaving
                                                home. Enjoy hassle-free management of your payments at your convenience!
                                            </div>
                                            <a class="read-more" href="services-single.html">Let’s start <span
                                                    class="fa fa-angle-double-right"></span></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Services Block Four -->
                    <div class="services-block-four col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="images/resource/service-21.jpg" alt="">
                                <div class="overlay-box">
                                    <div class="content">
                                        <div class="icon-box">
                                            {{-- <span class="icon flaticon-bank-building"></span> --}}
                                        </div>
                                        <h6>Transfers</h6>
                                    </div>
                                </div>

                                <div class="overlay-box-two">
                                    <div class="overlay-inner-two">
                                        <div class="content">
                                            <div class="icon-box">
                                                {{-- <span class="icon flaticon-bank-building"></span> --}}
                                            </div>
                                            <h6><a href="services-single.html">Transfers</a></h6>
                                            <div class="text">Send and schedule transfers at any time with ease.</div>
                                            <a class="read-more" href="services-single.html">Let’s start <span
                                                    class="fa fa-angle-double-right"></span></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                {{-- <div class="btn-box text-center">
                    <a href="services.html" class="theme-btn btn-style-two">More Services</a>
                </div> --}}

            </div>
        </section>

        <!-- Services Section Four-->
        <section class="about-section-two">
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Video Column -->
                    <div class="video-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!--Video Box-->
                            <div class="video-box">
                                <figure class="image">
                                    <img src="images/resource/video-img.jpg" alt="">
                                </figure>
                                <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                    class="lightbox-image overlay-box">{{-- <span class="flaticon-play-button"></span> --}}</a>
                            </div>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="content-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <h3>Acquire Products and Conduct <span> Simulations </span></h3>
                            <div class="text">
                                <p>Access comprehensive commercial information, benefits, and terms related to products to
                                    help you find the best option for your needs:</p>

                                <ul class="list-style-four">
                                    <li>Loan products for financing.</li>
                                    <li>Investment options like funds, pension plans, and securities.</li>
                                    <li>Insurance protection and rental services.</li>
                                    <li>Current accounts, pre-approved loans, and prepaid cards.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Services Section Four-->

        <!-- Business Section -->
        <section class="business-section">
            <div class="outer-container">
                <div class="clearfix sticky-container">

                    <!-- Title Column -->
                    <div class="title-column">
                        <div class="inner-column sticky-box">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.html"><img src="images/logo.png" alt="" title=""></a>
                            </div>
                            <h2>What should I do if I have an <br> <span>emergency?</span></h2>
                            <div class="text">


                                <p>In the event of a banking emergency, such as a lost or stolen card, fraudulent
                                    transactions, or issues accessing your account, it’s important to act quickly to protect
                                    your finances. Here’s what to do:</p>

                                <ol>
                                    <li><strong>Contact Customer Support:</strong> Immediately call our dedicated customer
                                        service line. Our representatives are available 24/7 to assist you with any urgent
                                        issues.</li>
                                    <li><strong>Report Lost or Stolen Cards:</strong> If your debit or credit card has been
                                        lost or stolen, report it right away. We can help you freeze your account and issue
                                        a replacement card.</li>
                                    <li><strong>Monitor Your Account:</strong> Regularly check your account statements for
                                        any unauthorized transactions. If you notice anything suspicious, inform us
                                        immediately.</li>
                                    <li><strong>Update Your Passwords:</strong> If you suspect unauthorized access to your
                                        account, change your online banking password and enable two-factor authentication
                                        for added security.</li>
                                    <li><strong>Stay Informed:</strong> Keep an eye on your email and phone for alerts from
                                        your bank regarding any unusual activity.</li>
                                </ol>

                                <p>Your financial security is our top priority. Don’t hesitate to reach out for help in any
                                    emergency situation.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Contents Column -->
                    <div class="contents-column">
                        <div class="inner-column">
                            <!-- Title Box -->
                            <div class="title-box">
                                <h2>Learn some info from possive of <br> our <span>latest update</span></h2>
                            </div>

                            <!-- Services Outer -->
                            <div class="services-blocks">

                                <!-- Services Block Five -->
                                <div class="services-block-five">
                                    <div class="inner-box">
                                        <div class="icon-box">
                                            <span class="fa fa-lock"></span>
                                        </div>
                                        <h6><a href="#">I need to change my passcode</a></h6>
                                        <div class="text">You can change your passcode through the security menu in your
                                            account area. To change your card's PIN, simply visit any ATM.</div>
                                    </div>
                                </div>

                                <!-- Services Block Five -->
                                <div class="services-block-five">
                                    <div class="inner-box">
                                        <div class="icon-box">
                                            <span class="fa fa-phone"></span>
                                        </div>
                                        <h6><a href="#">I need to report fraud</a></h6>
                                        <div class="text">If you notice any charges you don’t recognize or suspect
                                            fraudulent activity, please contact our customer service department or visit
                                            your local branch for assistance.</div>
                                    </div>
                                </div>

                                <!-- Services Block Five -->
                                {{-- <div class="services-block-five">
                                    <div class="inner-box">
                                        <div class="icon-box">
                                            <span class="icon flaticon-layers"></span>
                                        </div>
                                        <h6><a href="#">Easy to manage fund</a></h6>
                                        <div class="text">The argument in favor of using filler text goes some labore et
                                            dolore magna aliqua consectetur.</div>
                                    </div>
                                </div> --}}

                            </div>

                            <!-- Testimonial Boxed -->
                            <div class="testimonial-boxed" style="background-image:url(images/resource/image-2.jpg)">
                                <div class="inner-boxed">
                                    <div class="inner-content">
                                        <h2>Clients say <span>about us</span></h2>
                                        <div class="single-item-carousel owl-carousel owl-theme">

                                            <!-- Testimonial Block Two -->
                                            <div class="testimonial-block-two">
                                                <div class="inner-box">
                                                    <div class="content-box">
                                                        <div class="text">I couldn't be happier with the support I
                                                            received. They truly care about their clients.</div>
                                                    </div>
                                                    <div class="lower-box">
                                                        <div class="lower-inner">
                                                            <div class="image"><img src="images/resource/author-9.jpg"
                                                                    alt="" title=""></div>
                                                            <h3>Mateo R.</h3>
                                                            {{-- <div class="designation">Founder & CEO</div> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Testimonial Block Two -->
                                            <div class="testimonial-block-two">
                                                <div class="inner-box">
                                                    <div class="content-box">
                                                        <div class="text">Their attention to detail and customer service
                                                            is unmatched. I trust them completely with my finances.</div>
                                                    </div>
                                                    <div class="lower-box">
                                                        <div class="lower-inner">
                                                            <div class="image"><img src="images/resource/author-10.jpg"
                                                                    alt="" title=""></div>
                                                            <h3>Isabela P.</h3>
                                                            {{-- <div class="designation">Founder & CEO</div> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Testimonial Block Two -->
                                            <div class="testimonial-block-two">
                                                <div class="inner-box">
                                                    <div class="content-box">
                                                        <div class="text">Fast, reliable, and professional. I highly
                                                            recommend this bank!</div>
                                                    </div>
                                                    <div class="lower-box">
                                                        <div class="lower-inner">
                                                            <div class="image"><img src="images/resource/author-11.jpg"
                                                                    alt="" title=""></div>
                                                            <h3>Emilia T.</h3>
                                                            {{-- <div class="designation">Founder & CEO</div> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Awards Section -->
                            <div class="awards-blocks">
                                <div class="awards-inner">
                                    <h2>Our Award-Winning <span>Excellence</span> </h2>
                                    <div class="text">We are proud to be recognized for our outstanding achievements in
                                        the banking sector. Our commitment to innovation, customer service, and financial
                                        solutions has earned us numerous awards, reflecting our dedication to excellence.
                                        These accolades inspire us to continually enhance our services and provide our
                                        clients with the best banking experience possible. Thank you for trusting us with
                                        your financial needs!</div>
                                    <ul class="clearfix">
                                        <li><img src="images/clients/7.jpg" alt="" title=""></li>
                                        <li><img src="images/clients/8.jpg" alt="" title=""></li>
                                        <li><img src="images/clients/9.jpg" alt="" title=""></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Business Section -->

        <!-- Faq Section -->
        <section class="faq-section">
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Faq Column -->
                    <div class="faq-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="sec-title">
                                <h2>Frequently asked <span>question</span></h2>
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
                                        {{--
                                        <!--Column-->
                                        <div class="column counter-column">
                                            <div class="inner wow fadeInLeft" data-wow-delay="0ms"
                                                data-wow-duration="1500ms">
                                                <div class="count-outer count-box">
                                                    <span class="count-text" data-speed="2500" data-stop="1200">0</span>+
                                                    <h4 class="counter-title">Finishing Projects</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Column-->
                                        <div class="column counter-column">
                                            <div class="inner wow fadeInLeft" data-wow-delay="300ms"
                                                data-wow-duration="1500ms">
                                                <div class="count-outer count-box">
                                                    <span class="count-text" data-speed="3000" data-stop="50">0</span>
                                                    <h4 class="counter-title">Winning Awards</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Column-->
                                        <div class="column counter-column">
                                            <div class="inner wow fadeInLeft" data-wow-delay="600ms"
                                                data-wow-duration="1500ms">
                                                <div class="count-outer count-box">
                                                    <span class="count-text" data-speed="3500" data-stop="800">0</span>+
                                                    <h4 class="counter-title">Happy Clients</h4>
                                                </div>
                                            </div>
                                        </div> --}}

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

        <!-- News Section Two -->
        <section class="news-section-two">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title centered">
                    <h2>Explore Our <span>Services</span></h2>
                    <div class="text">Discover a range of banking solutions tailored to meet your needs.<br> From
                        personal accounts to investment options, we’re here to help you achieve your financial goals!</div>
                </div>

                <div class="row clearfix">

                    <!-- News Block Two -->
                    <div class="news-block-two col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="images/resource/news-4.jpg" alt="" />
                                <div class="overlay-box">
                                    <a href="images/resource/news-4.jpg" data-fancybox="news" data-caption=""
                                        class="plus flaticon-plus-symbol"></a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <ul class="post-meta">
                                    {{-- <li><span class="fa fa-calendar"></span>September 12, 2019</li>
                                    <li><span class="fa fa-user"></span>Admin</li> --}}
                                </ul>
                                <h5><a href="/personal">Personal</a></h5>
                                <div class="text mb-3">
                                    Explore checking, savings and mortgage products for your everyday banking.
                                </div>
                                <a href="/personal" class="theme-btn btn-style-four">View more</a>
                            </div>
                        </div>
                    </div>

                    <!-- News Block Two -->
                    <div class="news-block-two col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="images/resource/news-5.jpg" alt="" />
                                <div class="overlay-box">
                                    <a href="images/resource/news-5.jpg" data-fancybox="news" data-caption=""
                                        class="plus flaticon-plus-symbol"></a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <ul class="post-meta">
                                    {{-- <li><span class="fa fa-calendar"></span>September 12, 2019</li>
                                    <li><span class="fa fa-user"></span>Admin</li> --}}
                                </ul>
                                <h5><a href="/wealth-management">
                                        Wealth Management</a></h5>
                                <div class="text mb-3">
                                    Let our team of experienced advisors create customized lending, trust and asset
                                    management solutions for you.
                                </div>
                                <a href="/wealth-management" class="theme-btn btn-style-four">View more</a>
                            </div>
                        </div>
                    </div>

                    <!-- News Block Two -->
                    <div class="news-block-two col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="images/resource/news-6.jpg" alt="" />
                                <div class="overlay-box">
                                    <a href="images/resource/news-6.jpg" data-fancybox="news" data-caption=""
                                        class="plus flaticon-plus-symbol"></a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <ul class="post-meta">
                                    {{-- <li><span class="fa fa-calendar"></span>September 12, 2019</li>
                                    <li><span class="fa fa-user"></span>Admin</li> --}}
                                </ul>
                                <h5><a href="/commercial">
                                        Commercial</a></h5>
                                <div class="text mb-3">
                                    Get simple products, transparent terms and a dedicated team, so you can focus on your
                                    business.
                                </div>
                                <a href="/commercial" class="theme-btn btn-style-four">View more</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!--Sponsors Section-->
        <section class="sponsors-section">
            <div class="auto-container">

                <div class="carousel-outer">
                    <!--Sponsors Slider-->
                    <ul class="sponsors-carousel owl-carousel owl-theme">
                        <li>
                            <div class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a>
                            </div>
                        </li>
                        <li>
                            <div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a>
                            </div>
                        </li>
                        <li>
                            <div class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a>
                            </div>
                        </li>
                        <li>
                            <div class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a>
                            </div>
                        </li>
                        <li>
                            <div class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a>
                            </div>
                        </li>
                        <li>
                            <div class="image-box"><a href="#"><img src="images/clients/6.png" alt=""></a>
                            </div>
                        </li>
                        <li>
                            <div class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a>
                            </div>
                        </li>
                        <li>
                            <div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a>
                            </div>
                        </li>
                        <li>
                            <div class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a>
                            </div>
                        </li>
                        <li>
                            <div class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a>
                            </div>
                        </li>
                        <li>
                            <div class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a>
                            </div>
                        </li>
                        <li>
                            <div class="image-box"><a href="#"><img src="images/clients/6.png" alt=""></a>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </section>
        <!--End Sponsors Section-->

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
