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
                    <h1>Accounts and Account Types
                    </h1>
                    <ul class="page-breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>Accounts </li>
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
                                <h2 class="mb-3">Explore Our Account Options</h2>
                                <div class="text">
                                    At {{ config('app.name') }}, we understand that every financial journey is unique. That’s why we offer a variety of account types to cater to your specific needs. Below, you’ll find detailed descriptions of our current, payroll, savings, and other accounts designed to help you manage your finances effectively.
                                </div>

                                <h2 class="mb-3">1. Open Current Account</h2>
                                <div class="text">
                                    Our Current Account is perfect for individuals and businesses that require a flexible banking solution for day-to-day transactions. With no restrictions on the number of deposits or withdrawals, this account is ideal for those who want to manage their finances without hassle.

                                    **Key Features:**
                                    - **Unlimited Transactions:** Make as many deposits and withdrawals as you need without any fees.
                                    - **Online Banking Access:** Enjoy 24/7 access to your account through our secure online banking platform.
                                    - **Overdraft Facility:** Benefit from an overdraft facility that allows you to cover short-term cash flow needs.

                                    **Ideal For:**
                                    This account is well-suited for business owners, freelancers, and anyone requiring a versatile banking solution for daily transactions.

                                </div>

                                <h2 class="mb-3">2. Open Payroll Account</h2>
                                <div class="text">
                                    The Payroll Account is designed specifically for employers to manage employee salaries efficiently. This account simplifies the payroll process, ensuring timely and secure payments to your staff.

                                    **Key Features:**
                                    - **Direct Salary Deposits:** Automate salary payments to employees directly from the account.
                                    - **Monthly Statements:** Receive detailed monthly statements to track payroll expenses easily.
                                    - **Employee Benefits:** Offer employees access to various banking products and services.

                                    **Ideal For:**
                                    This account is ideal for business owners and HR managers looking for a streamlined payroll solution that enhances employee satisfaction.

                                </div>

                                <h2 class="mb-3">3. Welcome Savings Account</h2>
                                <div class="text">
                                    Our Welcome Savings Account is perfect for individuals looking to kickstart their savings journey. With attractive interest rates and no minimum balance requirements, this account encourages you to save more.

                                    **Key Features:**
                                    - **Competitive Interest Rates:** Earn interest on your savings with rates that grow over time.
                                    - **No Maintenance Fees:** Enjoy a fee-free experience, making saving easier.
                                    - **Access to Online Tools:** Use our online tools to set savings goals and track your progress.

                                    **Ideal For:**
                                    This account is suitable for anyone looking to build a financial cushion or save for specific goals, such as vacations or major purchases.

                                </div>

                                <h2 class="mb-3">4. Young Savings Account</h2>
                                <div class="text">
                                    The Young Savings Account is tailored for children and teenagers, encouraging them to develop good savings habits early on. This account comes with engaging features that make saving fun and educational.

                                    **Key Features:**
                                    - **Higher Interest Rates:** Young savers enjoy competitive rates to help their savings grow faster.
                                    - **Financial Education Resources:** Access to tools and resources to learn about money management.
                                    - **Parental Controls:** Parents can oversee the account to help guide their children in saving responsibly.

                                    **Ideal For:**
                                    This account is perfect for young individuals looking to save for future endeavors, such as college or personal projects.

                                </div>

                                <h2 class="mb-3">5. Other Accounts</h2>
                                <div class="text">
                                    In addition to the accounts mentioned, we offer various other account types tailored to different financial needs. Whether you’re interested in joint accounts, investment accounts, or specialized savings accounts, we have options to suit every lifestyle.

                                    **Key Features:**
                                    - **Variety of Options:** Choose from a range of accounts designed for specific financial goals.
                                    - **Customizable Solutions:** Our team can help you find the right account based on your individual needs.

                                    **Ideal For:**
                                    This category is ideal for anyone seeking specialized banking solutions that fit unique financial situations.

                                </div>

                                <h2 class="mb-3">Conclusion</h2>
                                <div class="text">
                                    At {{ config('app.name') }}, our goal is to provide you with the best banking experience possible. By offering a diverse range of accounts, we aim to meet the varied financial needs of our customers. If you have any questions or need assistance in selecting the right account for you, please contact us using the information <a href="/contact">here</a>. We are here to help you achieve your financial goals!
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
