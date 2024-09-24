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
                    <h1>Lending
                    </h1>
                    <ul class="page-breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>Lending </li>
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
                                <h2 class="mb-3">Explore Our Comprehensive Loan Options</h2>
                                <div class="text">
                                    Welcome to {{ config('app.name') }}! We offer a range of loan products tailored to meet
                                    your financial needs. Whether you're looking to purchase a home, fund your education, or
                                    cover unexpected expenses, our loan options are designed to provide you with the support
                                    you need.
                                </div>

                                <h2 class="mb-3">1. Types of Loans Offered</h2>
                                <div class="text">
                                    At {{ config('app.name') }}, we provide the following types of loans:
                                    <ul>
                                        <li><strong>Personal Loans:</strong> Unsecured loans that can be utilized for a
                                            variety of purposes. Whether you need to consolidate debt, cover unexpected
                                            medical expenses, or fund a significant home improvement project, personal loans
                                            offer flexibility. With competitive interest rates and customizable repayment
                                            terms, these loans can help you manage your finances effectively.</li>

                                        <li><strong>Home Loans:</strong> Also known as mortgages, these loans are
                                            specifically designed for purchasing residential properties. They typically
                                            offer lower interest rates because the home serves as collateral. Home loans can
                                            vary in terms, including fixed-rate and adjustable-rate options. Our experts can
                                            guide you through the process of securing a mortgage that fits your budget and
                                            long-term goals.</li>

                                        <li><strong>Auto Loans:</strong> Tailored for those looking to purchase a vehicle,
                                            auto loans can be secured with the car itself or unsecured based on your
                                            creditworthiness. These loans generally feature flexible repayment terms and
                                            competitive rates. Our team can help you navigate the various options to find an
                                            auto loan that makes your dream vehicle affordable.</li>

                                        <li><strong>Student Loans:</strong> Designed to assist students in covering the
                                            costs of higher education, these loans often come with lower interest rates and
                                            flexible repayment plans. Many student loans allow for deferment while you are
                                            still in school, providing financial relief as you pursue your education. We can
                                            help you understand the different federal and private options available to
                                            ensure you have the funding you need.</li>

                                        <li><strong>Business Loans:</strong> These loans provide essential funding for small
                                            and medium-sized businesses to support growth initiatives, purchase inventory,
                                            or cover operational costs. Business loans can come in various forms, such as
                                            term loans, lines of credit, or equipment financing. Our specialists are ready
                                            to work with you to create a financial plan that supports your business's unique
                                            needs and ambitions.</li>
                                    </ul>
                                </div>

                                <h2 class="mb-3">2. Benefits of Our Loan Products</h2>
                                <div class="text">
                                    Our loan offerings come with a variety of advantages, including:
                                    <ul>
                                        <li>Flexible repayment terms that fit your financial situation.</li>
                                        <li>Competitive interest rates designed to save you money.</li>
                                        <li>Fast approval processes to get you the funds you need quickly.</li>
                                        <li>Dedicated customer support to assist you through every step of your loan
                                            journey.</li>
                                    </ul>
                                </div>

                                <h2 class="mb-3">3. How to Learn More</h2>
                                <div class="text">
                                    To explore our loan products and find the right option for you, please contact one of
                                    our loan specialists. They are available to answer your questions, provide detailed
                                    information, and guide you through the application process.
                                </div>

                                <h2 class="mb-3">4. Managing Your Loan</h2>
                                <div class="text">
                                    After securing a loan, you can manage your account easily through our online portal. You
                                    can track your loan balance, make payments, and view payment history at any time.
                                </div>

                                <h2 class="mb-3">5. FAQs</h2>
                                <div class="text">
                                    For more information, check our frequently asked questions section on our website. Here,
                                    you'll find answers to common inquiries about our loan products, application processes,
                                    and repayment options.
                                </div>

                                <div class="text">
                                    If you have any questions or need assistance, please contact us using the information <a
                                        href="/contact">here</a>. We are here to help you find the right loan solution for
                                    your needs.
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
