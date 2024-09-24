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
                    <h1>Terms of Use
                    </h1>
                    <ul class="page-breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>Terms of Use</li>
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
                                <h2 class="mb-3">Terms of Use</h2>
                                <div class="text">
                                    Welcome to {{config('app.name')}}. These Terms of Use govern your access to and use of our website located at <a href="{{ url('/') }}">{{ config('app.name') }} - {{ request()->getSchemeAndHttpHost() }}</a> (the "Website"). By accessing or using the Website, you agree to comply with these terms. If you do not agree, please refrain from using the site.
                                </div>

                                <h2 class="mb-3">1. Purpose and General Information</h2>
                                <div class="text">
                                    {{config('app.name')}} aims to provide users with information regarding its financial products and services. Users can access various services, and both customers and non-customers can apply for products through our public and private sections.
                                </div>

                                <h2 class="mb-3">2. Definitions</h2>
                                <div class="text">
                                    - **Website/Portal**: The pages hosted under <a href="{{ url('/') }}">{{ config('app.name') }} - {{ request()->getSchemeAndHttpHost() }}</a>.<br>
                                    - **User**: Any individual or entity accessing the Website.<br>
                                    - **Registered User**: Users who have registered on the Website.<br>
                                    - **Customer User**: A Registered User who has taken out a product or service from {{config('app.name')}}.
                                </div>

                                <h2 class="mb-3">3. Registration</h2>
                                <div class="text">
                                    Users must keep their access codes confidential and notify {{config('app.name')}} of any potential misuse. The responsibility for any unauthorized use falls solely on the Registered User.
                                </div>

                                <h2 class="mb-3">4. Use of the Service</h2>
                                <div class="text">
                                    Access to the products and services requires acceptance of the Privacy Policy and specific terms related to each product or service.
                                </div>

                                <h2 class="mb-3">5. Right of Exclusion</h2>
                                <div class="text">
                                    {{config('app.name')}} reserves the right to deny access to the Website to users who violate these Terms of Use.
                                </div>

                                <h2 class="mb-3">6. Acquisition Process</h2>
                                <div class="text">
                                    New customers must complete a registration form and provide identification documents. Existing customers can access their accounts using their credentials.
                                </div>

                                <h2 class="mb-3">7. Products and Services</h2>
                                <div class="text">
                                    Users can manage various products, including deposit and credit products, cards, and investment services.
                                </div>

                                <h2 class="mb-3">8. Use of the Website</h2>
                                <div class="text">
                                    While we strive for uninterrupted service, {{config('app.name')}} does not guarantee the Website’s availability or error-free operation. Users assume responsibility for their actions while accessing the site.
                                </div>

                                <h2 class="mb-3">9. Links</h2>
                                <div class="text">
                                    {{config('app.name')}} is not responsible for content on third-party sites linked from our Website.
                                </div>

                                <h2 class="mb-3">10. Intellectual Property</h2>
                                <div class="text">
                                    All content on the Website is protected by intellectual property laws. Users may not reproduce or distribute any part of the site without explicit permission from {{config('app.name')}}.
                                </div>

                                <h2 class="mb-3">11. Applicable Law and Jurisdiction</h2>
                                <div class="text">
                                    These Terms of Use are governed by Spanish law. Disputes will be handled in the courts of Madrid.
                                </div>

                                <h2 class="mb-3">12. Amendments</h2>
                                <div class="text">
                                    {{config('app.name')}} reserves the right to modify these Terms at any time without prior notice. Continued use of the Website constitutes acceptance of the updated terms.
                                </div>

                                <h2 class="mb-3">13. Data Protection and Privacy Policy</h2>
                                <div class="text">
                                    By using the Website, users consent to the processing of their personal data in accordance with our Privacy Policy. Please refer to our Privacy Policy and Cookies Policy for details on how we manage your information.
                                </div>

                                <div class="text">
                                    For any questions regarding these Terms of Use or our services, please contact us using the information <a href="/contact">here</a>. We encourage you to explore other sections of our website for additional information.
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
