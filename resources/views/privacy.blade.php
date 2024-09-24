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
                    <h1>Privacy and Cookie Policy
                    </h1>
                    <ul class="page-breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>Privacy and Cookie Policy</li>
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
                                <h2 class="mb-3">Privacy Policy</h2>
                                <div class="text">
                                    At {{ config('app.name') }}, your privacy is our priority. We are committed to
                                    safeguarding your personal information and ensuring transparency in how we collect, use,
                                    and protect it. This Privacy Policy outlines our practices in accordance with applicable
                                    laws, including the California Consumer Privacy Act (CCPA), which grants California
                                    residents additional rights regarding their personal data.
                                </div>

                                <h2 class="mb-3">Information We Collect</h2>
                                <div class="text">
                                    We collect personal information from you in various ways, including when you fill out
                                    forms on our website or engage with our online services. Additionally, we gather data
                                    indirectly through cookies and internet access logs, which track your interaction with
                                    our site to enhance your user experience.
                                </div>

                                <h2 class="mb-3">Cookies and Tracking Technologies</h2>
                                <div class="text">
                                    Our website utilizes cookies—small files that help us remember your preferences and
                                    improve our services. While session cookies are temporary and deleted after your browser
                                    is closed, persistent cookies remain on your device to personalize your future visits.
                                    You can manage cookie settings through your browser, but please note that blocking
                                    cookies may limit your access to certain features on our site.
                                </div>

                                <h2 class="mb-3">Security Measures</h2>
                                <div class="text">
                                    We implement physical, electronic, and procedural safeguards to protect your
                                    information. Any data you share with us is encrypted to industry standards, and we
                                    continually review our security measures to keep your information safe from unauthorized
                                    access. Remember, we will never ask for sensitive personal information via email.
                                </div>

                                <h2 class="mb-3">Children’s Privacy</h2>
                                <div class="text">
                                    {{ config('app.name') }} does not knowingly collect information from children under the
                                    age of 13. If we discover that we have received information from a child, we will take
                                    steps to delete that information promptly.
                                </div>

                                <h2 class="mb-3">Your Rights</h2>
                                <div class="text">
                                    If you are a California resident, you have specific rights under the CCPA, including the
                                    right to know what personal information we collect, the right to request deletion of
                                    your information, and the right to opt out of the sale of your information. For more
                                    details on exercising these rights, please refer to our full notice.
                                </div>

                                <h2 class="mb-3">Changes to Our Policy</h2>
                                <div class="text">
                                    This Privacy Policy may be updated periodically. We encourage you to review it regularly
                                    for any changes. The "Last updated" date will reflect the most recent revisions.
                                </div>

                                <div class="text">
                                    For any questions or concerns regarding our privacy practices, please contact us using
                                    the information below. For additional information on our services, feel free to explore
                                    other sections of our website.
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
