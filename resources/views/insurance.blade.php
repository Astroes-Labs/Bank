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
                    <h1>Insurance
                    </h1>
                    <ul class="page-breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>Insurance</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->
        <section class="contact-page-section">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row clearfix">
                        <!-- Info Column -->
                        <div class="info-column col-lg-12 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <h2 class="mb-3">Insurance Products Overview</h2>
                                <div class="text">
                                    Welcome to {{ config('app.name') }}! We offer a variety of insurance products designed
                                    to meet your needs. Our goal is to provide you with comprehensive coverage options that
                                    safeguard your assets and ensure peace of mind.
                                </div>

                                <h2 class="mb-3">1. Types of Insurance Offered</h2>
                                <div class="text">
                                    At {{ config('app.name') }}, we offer the following insurance products:
                                    <ul>
                                        <li><strong>Health Insurance:</strong> Coverage for medical expenses, hospital
                                            visits, and preventive care.</li>
                                        <li><strong>Auto Insurance:</strong> Protection against accidents, theft, and
                                            liability associated with vehicle ownership.</li>
                                        <li><strong>Home Insurance:</strong> Coverage for damages to your home and personal
                                            belongings due to fire, theft, or natural disasters.</li>
                                        <li><strong>Life Insurance:</strong> Financial security for your loved ones in the
                                            event of your passing, ensuring they are taken care of.</li>
                                    </ul>
                                </div>

                                <h2 class="mb-3">2. Benefits of Our Insurance Products</h2>
                                <div class="text">
                                    Our insurance policies come with numerous benefits, including:
                                    <ul>
                                        <li>Customizable coverage options tailored to your unique needs.</li>
                                        <li>Access to a dedicated claims support team to assist you throughout the process.
                                        </li>
                                        <li>Competitive premiums designed to fit your budget.</li>
                                        <li>24/7 customer service to address any inquiries or concerns.</li>
                                    </ul>
                                </div>

                                <h2 class="mb-3">3. How to Learn More</h2>
                                <div class="text">
                                    To learn more about our insurance products and find the best options for your needs,
                                    please contact one of our bank representatives. They are available to answer your
                                    questions, provide detailed information, and guide you through the process.
                                </div>

                                <h2 class="mb-3">4. Managing Your Policy</h2>
                                <div class="text">
                                    Once you have purchased a policy, you can easily manage it through your online account.
                                    You can view your coverage details, make payments, and file claims whenever necessary.
                                </div>

                                <h2 class="mb-3">5. FAQs</h2>
                                <div class="text">
                                    For more information, check our frequently asked questions section on our website. Here,
                                    you'll find answers to common inquiries about our insurance products, coverage options,
                                    and claims processes.
                                </div>

                                <div class="text">
                                    If you have any questions or need assistance, please contact us using the information <a
                                        href="/contact">here</a>. We are here to help you find the right insurance solution
                                    for your needs.
                                </div>
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
