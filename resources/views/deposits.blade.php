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
                    <h1>Deposits
                    </h1>
                    <ul class="page-breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>Deposits </li>
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
                                <h2 class="mb-3">Explore Our Deposit Options</h2>
                                <div class="text">
                                    Welcome to {{ config('app.name') }}! We offer a variety of deposit products designed to
                                    help you save and grow your wealth. Our deposit accounts provide secure ways to earn
                                    interest while keeping your funds accessible. Below, you'll find detailed information
                                    about our popular deposit options.
                                </div>

                                <h2 class="mb-3">6-Month Fixed Deposit</h2>
                                <div class="text">
                                    The 6-Month Fixed Deposit is an excellent option for individuals seeking a short-term
                                    investment with guaranteed returns. This type of deposit allows you to lock in a
                                    competitive interest rate for a period of six months, providing a secure way to grow
                                    your savings without the risks associated with more volatile investments.

                                    **Key Features:**
                                    - **Fixed Interest Rate:** One of the most significant advantages of a 6-month fixed
                                    deposit is the fixed interest rate. This means that regardless of market fluctuations,
                                    the interest rate you lock in at the time of deposit remains unchanged for the entire
                                    six-month period.

                                    - **Short Commitment:** This deposit is perfect for those who may need access to their
                                    funds in the near future. With a maturity period of only six months, you can quickly
                                    access your savings without lengthy waiting times.

                                    - **Guaranteed Returns:** Unlike stock market investments that can fluctuate widely, a
                                    6-month fixed deposit offers guaranteed returns. You know exactly how much interest you
                                    will earn by the end of the term, allowing for better financial planning.

                                    - **Low Risk:** This deposit type is ideal for conservative investors. Your principal
                                    amount is secure, making it a low-risk option for growing your savings.

                                    **Ideal For:**
                                    The 6-month fixed deposit is suitable for individuals who want to save for an upcoming
                                    expense, such as a vacation, home renovation, or a major purchase. It's also a good
                                    choice for those who want to park their money for a short time while still earning
                                    interest.

                                    **How to Open a 6-Month Fixed Deposit:**
                                    Opening a 6-month fixed deposit with us is easy. You can visit any of our branches or
                                    apply online through our user-friendly portal. Our staff will guide you through the
                                    application process, ensuring you understand the terms and conditions.

                                    **Conclusion:**
                                    With its fixed returns and short commitment, the 6-month fixed deposit is a fantastic
                                    way to grow your savings securely. It provides peace of mind and is a smart choice for
                                    those looking to make the most of their short-term savings.

                                </div>

                                <h2 class="mb-3">12-Month Fixed Deposit</h2>
                                <div class="text">
                                    The 12-Month Fixed Deposit is designed for individuals looking to maximize their savings
                                    over a longer term while enjoying a higher interest rate than shorter-term options. This
                                    deposit offers a fixed interest rate for a full year, making it an attractive choice for
                                    those willing to commit their funds for a longer duration.

                                    **Key Features:**
                                    - **Higher Interest Rates:** The 12-month fixed deposit typically offers higher interest
                                    rates compared to its 6-month counterpart. This can result in significantly more
                                    interest earned over the course of the year, making it an excellent choice for savers
                                    looking to grow their funds.

                                    - **Compounding Benefits:** With a full year for your money to grow, the interest earned
                                    can compound, potentially increasing your overall returns. This is especially beneficial
                                    if you choose to reinvest your interest at the end of the term.

                                    - **Security of Principal:** Like the 6-month option, the 12-month fixed deposit offers
                                    a secure way to save. Your principal is protected, providing peace of mind in uncertain
                                    economic times.

                                    - **Predictable Returns:** With a fixed interest rate, you can confidently plan your
                                    finances, knowing exactly how much you will earn by the end of the term.

                                    **Ideal For:**
                                    This deposit is ideal for individuals saving for specific goals, such as a wedding, a
                                    new car, or a down payment on a home. It's also suitable for those looking to build an
                                    emergency fund that they can access after a year without the risk of losing their
                                    principal.

                                    **How to Open a 12-Month Fixed Deposit:**
                                    Opening a 12-month fixed deposit is straightforward. You can apply online or in person
                                    at one of our branches. Our dedicated team will assist you in completing the application
                                    and explain the terms in detail.

                                    **Conclusion:**
                                    The 12-month fixed deposit is a strategic way to grow your savings over time. With
                                    higher interest rates and the security of your principal, it’s an excellent choice for
                                    those looking to maximize their financial goals.

                                </div>

                                <h2 class="mb-3">Benefits of Our Deposit Accounts</h2>
                                <div class="text">
                                    Our deposit accounts come with several advantages:
                                    <ul>
                                        <li>Guaranteed returns: Enjoy fixed interest rates that provide predictable growth
                                            for your savings.</li>
                                        <li>Low risk: Your principal is safe, making it a secure option for conservative
                                            investors.</li>
                                        <li>Easy management: You can manage your deposits conveniently through our online
                                            banking platform.</li>
                                        <li>Flexible terms: Choose between short-term and long-term options to match your
                                            financial goals.</li>
                                    </ul>
                                </div>

                                <h2 class="mb-3">FAQs</h2>
                                <div class="text">
                                    For more information, check our frequently asked questions section on our website. Here,
                                    you'll find answers to common inquiries about our deposit products, interest rates, and
                                    terms.
                                </div>

                                <div class="text">
                                    If you have any questions or need assistance, please contact us using the information <a
                                        href="/contact">here</a>. We are here to help you find the right deposit solution
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
