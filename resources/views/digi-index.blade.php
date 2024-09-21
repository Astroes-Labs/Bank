@extends('layout.landing-layout')
   @section('content')


    <!-- Offcanvas area start -->
    <div class="fix">
        <div class="offcanvas-area">
            <div class="offcanva-wrapper">
                <div class="offcanvas-content">
                    <div class="offcanvas-top d-flex justify-content-between align-items-center">
                        <div class="offcanvas-logo">
                            <a href="index.html">
                                <img src="assets/global/images/pQDEwg1YYTTukX4dH51w.png" alt="logo not found">
                            </a>
                        </div>
                        <div class="offcanvas-close">
                            <button class="offcanvas-close-icon animation--flip">
                                <span class="offcanvas-m-lines">
                                    <span class="offcanvas-m-line line--1"></span><span
                                        class="offcanvas-m-line line--2"></span><span
                                        class="offcanvas-m-line line--3"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="mobile-menu fix"></div>
                    <div class="offcanvas-btn mb-3">
                        <a class="gradient-btn" href="login.html">
                            <span><i data-lucide="circle-user-round"></i></span>
                            Log In
                        </a>
                        <a class="td-primary-btn" href="register/step1.html">
                            <span><i data-lucide="user-round-plus"></i></span>
                            Sign Up
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-overlay"></div>
    <div class="offcanvas-overlay-white"></div>
    <!-- Offcanvas area start -->
    <!-- Backtotop start -->
    <div class="backtotop-wrap cursor-pointer">
        <svg class="backtotop-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>
    <!-- Backtotop end -->

    <!-- Header area start -->
    <header>
        <div id="header-sticky" class="header-area header-transparent">
            <div class="container">
                <div class="mega-menu-wrapper position-relative">
                    <div class="header-main">
                        <div class="header-left">
                            <div class="header-logo">
                                <a href="index.htm">
                                    <img class="logo-white" src="assets/global/images/pQDEwg1YYTTukX4dH51w.png"
                                        style="height:35px;width:auto;max-width:none" alt="Digi Bank">
                                </a>
                            </div>
                        </div>

                        <div class="header-middle">
                            <div class="mean__menu-wrapper d-none d-lg-block">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="">
                                                <a href="index.htm">Home</a>
                                            </li>
                                            <li class="">
                                                <a href="about-us.html">About</a>
                                            </li>
                                            <li class="">
                                                <a href="how-it-works.html">How It Works</a>
                                            </li>
                                            <li class="">
                                                <a href="solutions.html">Solutions</a>
                                            </li>
                                            <li class="">
                                                <a href="rewards.html">Rewards</a>
                                            </li>
                                            <li class="">
                                                <a href="blog.html">Blog</a>
                                            </li>
                                            <li class="">
                                                <a href="contact.html">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="header-right">
                            <div class="header-action">
                                <div class="quick-use">
                                    <div class="language-switcher">
                                        <select name="language" class="langu-swit small"
                                            onchange="window.location.href=this.options[this.selectedIndex].value;">
                                            <option value="https://digibank.tdevs.co/language-update?name=en"
                                                selected="">English</option>
                                            <option value="https://digibank.tdevs.co/language-update?name=ar">Arabic
                                            </option>
                                        </select>
                                    </div>
                                    <div class="color-switcher">
                                        <img class="light-icon" src="assets/front/images/icons/sun.png"
                                            alt="">
                                        <img class="dark-icon" src="assets/front/images/icons/moon.png"
                                            alt="">
                                    </div>
                                </div>

                                <div class="header-btn-wrap d-none d-xl-inline-flex">
                                    <a class="td-primary-btn" href="register/step1.html">
                                        <span><i data-lucide="user-round-plus"></i></span>
                                        Sign Up
                                    </a>
                                    <a class="gradient-btn" href="login.html">
                                        <span><i data-lucide="circle-user-round"></i></span>
                                        Log In
                                    </a>
                                </div>
                                <div class="header-hamburger ml-20 d-xl-none">
                                    <div class="sidebar-toggle">
                                        <a class="bar-icon" href="javascript:void(0)">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header area end -->

    <!-- Body main wrapper start -->
    <main class="fix">

        <!-- Banner area start -->
        <section class="banner-area">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xxl-7 col-xl-6 col-lg-6">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <span data-aos="fade-right" data-aos-duration="1000" class="sbu-title">
                                    Fast, Secure and Hassle Free
                                </span>
                                <h1 data-aos="fade-right" data-aos-duration="1500" class="title">
                                    Effortlessly manage your finances with
                                    <span>DigiBank</span>
                                </h1>
                                <p data-aos="fade-up" data-aos-duration="2000" class="description">
                                    We have considered our solutions to support every stage of your growth and get the
                                    potential service.
                                </p>
                                <div class="btn-wrrapper d-flex gap-3 align-items-center" data-aos="fade-up"
                                    data-aos-duration="2500">
                                    <a class="gradient-btn" href="register/step1.html" target="_self">
                                        Get Started
                                        <span><i class="fa-regular fa-angle-right"></i></span>
                                    </a>

                                    <a class="text-btn" href="how-it-works.html" target="_self">
                                        How It Works
                                        <span><i class="fa-regular fa-arrow-right-long"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-6 col-lg-6">
                        <div class="banner-thumb-wrapper" data-aos="fade-left" data-aos-duration="2000">
                            <div class="banner-thumb">
                                <img src="assets/global/images/dLsNX2K9uBj3SNukYiQG.png" alt="thumb not found">
                            </div>
                            <div class="user-one">
                                <img src="assets/global/images/HUxM5iSi2CSCdRr5siCf.png" alt="user not found">
                            </div>
                            <div class="user-two">
                                <img src="assets/global/images/QjwmPaTcxacRTIlHQ7J4.png" alt="user not found">
                            </div>
                            <div class="shape-text">
                                <span>
                                    <svg width="48" height="48" viewbox="0 0 48 48" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="24" cy="24" r="24" fill="#40D9BD"></circle>
                                        <path
                                            d="M32 25.0004C32 30.0004 28.5 32.5005 24.34 33.9505C24.1222 34.0243 23.8855 34.0207 23.67 33.9405C19.5 32.5005 16 30.0004 16 25.0004V18.0004C16 17.7352 16.1054 17.4809 16.2929 17.2933C16.4804 17.1058 16.7348 17.0004 17 17.0004C19 17.0004 21.5 15.8004 23.24 14.2804C23.4519 14.0994 23.7214 14 24 14C24.2786 14 24.5481 14.0994 24.76 14.2804C26.51 15.8104 29 17.0004 31 17.0004C31.2652 17.0004 31.5196 17.1058 31.7071 17.2933C31.8946 17.4809 32 17.7352 32 18.0004V25.0004Z"
                                            stroke="black" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M21 24L23 26L27 22" stroke="black" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                                <h6>
                                    100% Safe &amp; Secure
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-shapes">
                <div class="shape-one">
                    <img data-parallax='{"y" : 50, "smoothness": 20}'
                        src="assets/global/images/JLkDDa0oBDODEJSsCVeK.png" alt="shape not found">
                </div>
                <div class="shape-two upDown">
                    <img src="assets/global/images/hDDTTddCaKUAH0hPgKkE.png" alt="shape not found">
                </div>
                <div class="shape-round"></div>
                <div class="shape-round-two"></div>
            </div>
        </section>
        <!-- Banner area end -->
        <!-- Features area start -->
        <section class="features-area fix position-relative section-space">
            <div class="container">
                <div class="row section-title-space justify-content-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-8">
                        <div class="section-title-wrapper text-center">
                            <span data-aos="fade-up" data-aos-duration="1500" class="section-subtitle">
                                Banking Solution
                            </span>
                            <h2 data-aos="fade-up" data-aos-duration="2000" class="section-title">
                                Our Professional Features
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="row gy-30 align-items-end">
                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                        <div class="features-item is-warning" data-aos="fade-up" data-aos-duration="1000">
                            <div class="icon">
                                <span><i data-lucide="circle-plus"></i></span>
                            </div>
                            <h3 class="title">Deposit</h3>
                            <p class="description">
                                Depositing money securely involves ensuring that the process of transferring funds into
                                a bank account is protected from unauthorized access or potential risks. This can
                                include various measures such as
                            </p>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                        <div class="features-item is-info" data-aos="fade-up" data-aos-duration="1000">
                            <div class="icon">
                                <span><i data-lucide="archive"></i></span>
                            </div>
                            <h3 class="title">DPS</h3>
                            <p class="description">
                                Depositing money securely involves ensuring that the process of transferring funds into
                                a bank account is protected from unauthorized access or potential risks. This can i
                                nclude various measures such as Depositing money securely involves ensuring that the
                                process of transferring funds into a
                            </p>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                        <div class="features-item is-success" data-aos="fade-up" data-aos-duration="1000">
                            <div class="icon">
                                <span><i data-lucide="badge-pound-sterling"></i></span>
                            </div>
                            <h3 class="title">FDR</h3>
                            <p class="description">
                                Depositing money securely involves ensuring that the process of transferring funds into
                                a bank account is protected from unauthorized access or potential risks. This can
                                include various measures such as
                            </p>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                        <div class="features-item is-purplish" data-aos="fade-up" data-aos-duration="1000">
                            <div class="icon">
                                <span><i data-lucide="circle-alert"></i></span>
                            </div>
                            <h3 class="title">Transaction</h3>
                            <p class="description">
                                Depositing money securely involves ensuring that the process of transferring funds into
                                a bank account is protected
                            </p>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                        <div class="features-item is-danger" data-aos="fade-up" data-aos-duration="1000">
                            <div class="icon">
                                <span><i data-lucide="package"></i></span>
                            </div>
                            <h3 class="title">Withdraw</h3>
                            <p class="description">
                                Depositing money securely involves ensuring that the process of transferring funds into
                                a bank account is protected from unauthorized access or potential risks. This can
                                include various measures such as
                            </p>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                        <div class="features-item " data-aos="fade-up" data-aos-duration="1000">
                            <div class="icon">
                                <span><i data-lucide="users"></i></span>
                            </div>
                            <h3 class="title">Referral</h3>
                            <p class="description">
                                Depositing money securely involves ensuring that the process of transferring funds into
                                a bank account is protected This can include various measures such as
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="features-shapes">
                <div class="shape-one">
                    <img data-parallax='{"y" : 200, "smoothness": 20}'
                        src="assets/front/images/features/features-shape.png" alt="shape not found">
                </div>
            </div>
        </section>
        <!-- Features area end -->
        <!-- Our solutions area start -->
        <section class="our-solutions-area position-relative z-index-11 fix section-space include-bg"
            data-background="https://digibank.tdevs.co/assets/front/images/solutions/bg-pattern.png">
            <div class="container">
                <div class="row gy-30">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="our-solutions-left">
                            <div class="section-title-wrapper" data-aos="fade-up" data-aos-duration="1000">
                                <span class="section-subtitle bg-lightest">Banking Powered</span>
                                <h2 class="section-title text-white">Our Powerful Solutions</h2>
                            </div>
                            <div class="content" data-aos="fade-up" data-aos-duration="2000">
                                <p class="description">
                                    Bank fund transfer refers to the process of moving money from one bank account to
                                    another. This can be done through various means, including online banking, mobile
                                    banking apps, wire transfers, Bank fund transfer refers to the process of moving
                                    money from one bank account to another.
                                </p>
                            </div>
                            <div class="thumb-wrap" data-aos="fade-up" data-aos-duration="3000">
                                <div class="thumb"
                                    style="-webkit-mask-image:url('assets/global/images/pJKbUFqIorpzdmi8H0mJ.png');mask-image:url('assets/global/images/pJKbUFqIorpzdmi8H0mJ.png')">
                                    <img src="assets/global/images/6WNNQQuh1wsN94HrO2xX.png"
                                        alt="solutions not found">
                                </div>
                                <div class="mask-shape">
                                    <img src="assets/global/images/pJKbUFqIorpzdmi8H0mJ.png" alt="mask shape">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="our-solutions-right" data-aos="fade-up" data-aos-duration="2000">
                            <div class="our-solutions-item">
                                <div class="content">
                                    <div class="title-inner">
                                        <div class="icon">
                                            <span>
                                                <img src="assets/global/images/biPqhPyJgng3tbowWfSm.png"
                                                    alt="Not found">
                                            </span>
                                        </div>
                                        <h3 class="title">Fund Transferss</h3>
                                    </div>
                                    <p class="description">
                                        Bank fund transfer refers to the process of moving money from one bank account
                                        to another. This can be done through various means, including online banking,
                                        mobile banking apps, wire transfers,ss
                                    </p>
                                </div>
                            </div>
                            <div class="our-solutions-item">
                                <div class="content">
                                    <div class="title-inner">
                                        <div class="icon">
                                            <span>
                                                <img src="assets/global/images/dgwe7IANYaEUAEsuW2ma.png"
                                                    alt="Not found">
                                            </span>
                                        </div>
                                        <h3 class="title">Loan</h3>
                                    </div>
                                    <p class="description">
                                        Bank fund transfer refers to the process of moving money from one bank account
                                        to another. This can be done through various means, including online banking,
                                        mobile banking apps, wire transfers,
                                    </p>
                                </div>
                            </div>
                            <div class="our-solutions-item">
                                <div class="content">
                                    <div class="title-inner">
                                        <div class="icon">
                                            <span>
                                                <img src="assets/global/images/UEXov3AgraeaRIMTCIFm.png"
                                                    alt="Not found">
                                            </span>
                                        </div>
                                        <h3 class="title">Pay Bill</h3>
                                    </div>
                                    <p class="description">
                                        Bank fund transfer refers to the process of moving money from one bank account
                                        to another. This can be done through various means, including online banking,
                                        mobile banking apps, wire transfers,
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="our-solutions-shapes">
                <div class="round-glow"></div>
                <div class="shape-one">
                    <img data-parallax='{"y" : 175, "smoothness": 20}'
                        src="assets/global/images/04C4SrC8P2fi2eXDpVYA.png" alt="shape not found">
                </div>
            </div>
        </section>

        <!-- Our solutions area end -->
        <!-- Work step area start -->
        <section class="work-step-area section-space">
            <div class="container">
                <div class="work-step-grid">
                    <div class="item">
                        <div class="icon">
                            <span>
                                <img src="assets/global/images/Pd267BP7vL30U4eOoBnZ.png" alt="step icon not found">
                            </span>
                        </div>
                        <div class="content">
                            <h3 class="title">Signup</h3>
                        </div>
                        <div class="arrow-line">
                            <svg width="175" height="21" viewbox="0 0 175 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M168.143 16.8367L172.878 7.85717L163.899 3.12235" stroke="#747373"
                                    stroke-opacity="0.5" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path class="line-dash-path"
                                    d="M0.999425 12.2663C11.4911 4.49184 43.4295 -6.39242 87.2493 12.2663C102.374 17.2521 139.922 26.7624 171.553 8.03699"
                                    stroke="#747373" stroke-opacity="0.5" stroke-width="2.5" stroke-dasharray="5 5">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon">
                            <span>
                                <img src="assets/global/images/ApdFrf8flvCrnbz9pS5C.png" alt="step icon not found">
                            </span>
                        </div>
                        <div class="content">
                            <h3 class="title">Start Banking</h3>
                        </div>
                        <div class="arrow-line">
                            <svg width="175" height="21" viewbox="0 0 175 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M168.143 16.8367L172.878 7.85717L163.899 3.12235" stroke="#747373"
                                    stroke-opacity="0.5" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path class="line-dash-path"
                                    d="M0.999425 12.2663C11.4911 4.49184 43.4295 -6.39242 87.2493 12.2663C102.374 17.2521 139.922 26.7624 171.553 8.03699"
                                    stroke="#747373" stroke-opacity="0.5" stroke-width="2.5" stroke-dasharray="5 5">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon">
                            <span>
                                <img src="assets/global/images/YOSqN7Xqba6GA8jKgbyc.png" alt="step icon not found">
                            </span>
                        </div>
                        <div class="content">
                            <h3 class="title">Collect Paybacks</h3>
                        </div>
                        <div class="arrow-line">
                            <svg width="175" height="21" viewbox="0 0 175 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M168.143 16.8367L172.878 7.85717L163.899 3.12235" stroke="#747373"
                                    stroke-opacity="0.5" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path class="line-dash-path"
                                    d="M0.999425 12.2663C11.4911 4.49184 43.4295 -6.39242 87.2493 12.2663C102.374 17.2521 139.922 26.7624 171.553 8.03699"
                                    stroke="#747373" stroke-opacity="0.5" stroke-width="2.5" stroke-dasharray="5 5">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon">
                            <span>
                                <img src="assets/global/images/R8wKjIlmOjUTaIreUwjK.png" alt="step icon not found">
                            </span>
                        </div>
                        <div class="content">
                            <h3 class="title">Enjoy Banking</h3>
                        </div>
                        <div class="arrow-line">
                            <svg width="175" height="21" viewbox="0 0 175 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M168.143 16.8367L172.878 7.85717L163.899 3.12235" stroke="#747373"
                                    stroke-opacity="0.5" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path class="line-dash-path"
                                    d="M0.999425 12.2663C11.4911 4.49184 43.4295 -6.39242 87.2493 12.2663C102.374 17.2521 139.922 26.7624 171.553 8.03699"
                                    stroke="#747373" stroke-opacity="0.5" stroke-width="2.5" stroke-dasharray="5 5">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Work step area end -->
        <!-- Plan start  -->
        <section class="pricing-area theme-bg-1 section-space">
            <div class="container">
                <div class="row gy-3 align-items-center justify-content-between section-title-space">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="section-title-wrapper">
                            <span data-aos="fade-up" data-aos-duration="1000" class="section-subtitle">
                                All Plans
                            </span>
                            <h2 data-aos="fade-up" data-aos-duration="1500" class="section-title">
                                Our Plans
                            </h2>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div data-aos="fade-up" data-aos-duration="1500" class="pricing-tab customize-tab ">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="price-tab-one" data-bs-toggle="tab"
                                        data-bs-target="#price-tab-one-pane" type="button" role="tab"
                                        aria-controls="price-tab-one-pane" aria-selected="true"><span><i
                                                class="fa-regular fa-archive"></i></span>DPS</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="price-tab-two" data-bs-toggle="tab"
                                        data-bs-target="#price-tab-two-pane" type="button" role="tab"
                                        aria-controls="price-tab-two-pane" aria-selected="false"><i
                                            class="fa-regular fa-book-blank"></i>FDR</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="price-tab-three" data-bs-toggle="tab"
                                        data-bs-target="#price-tab-three-pane" type="button" role="tab"
                                        aria-controls="price-tab-three-pane" aria-selected="false"><span><i
                                                class="fa-regular fa-triangle-exclamation"></i></span>Loan</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="price-tab-one-pane" role="tabpanel"
                        aria-labelledby="price-tab-one" tabindex="0">
                        <div class="row gy-30">
                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                <div class="price-item" data-aos="fade-up" data-aos-duration="6000">
                                    <span class="price-badge">Best</span>
                                    <div class="price-top">
                                        <div class="price-title">
                                            <h4>Education DPS</h4>
                                        </div>
                                        <div class="price-value">
                                            <strong>$100</strong>
                                            <sub>/ 30 Days</sub>
                                        </div>
                                    </div>
                                    <div class="info-list">
                                        <ul>
                                            <li><span><i class="fa-regular fa-check"></i></span>Interest Rate : 10%
                                            </li>
                                            <li><span><i class="fa-regular fa-check"></i></span>Number of Installments
                                                : 4</li>
                                            <li><span><i class="fa-regular fa-check"></i></span>Per Installment : $100
                                            </li>
                                            <li><span><i class="fa-regular fa-check"></i></span>Installment Slice : 30
                                                Days</li>
                                            <li><span><i class="fa-regular fa-check"></i></span>All Deposits : $400.00
                                            </li>
                                            <li><span><i class="fa-regular fa-check"></i></span>Final Maturity :
                                                $440.00</li>
                                        </ul>
                                    </div>
                                    <div class="price-btn">
                                        <a class="pricing-btn w-100" href="login.html">Subscribe</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                <div class="price-item" data-aos="fade-up" data-aos-duration="6000">
                                    <span class="price-badge">Best DPS Plan</span>
                                    <div class="price-top">
                                        <div class="price-title">
                                            <h4>Future DPS Plan</h4>
                                        </div>
                                        <div class="price-value">
                                            <strong>$2000</strong>
                                            <sub>/ 15 Days</sub>
                                        </div>
                                    </div>
                                    <div class="info-list">
                                        <ul>
                                            <li><span><i class="fa-regular fa-check"></i></span>Interest Rate : 10%
                                            </li>
                                            <li><span><i class="fa-regular fa-check"></i></span>Number of Installments
                                                : 24</li>
                                            <li><span><i class="fa-regular fa-check"></i></span>Per Installment : $2000
                                            </li>
                                            <li><span><i class="fa-regular fa-check"></i></span>Installment Slice : 15
                                                Days</li>
                                            <li><span><i class="fa-regular fa-check"></i></span>All Deposits :
                                                $48000.00</li>
                                            <li><span><i class="fa-regular fa-check"></i></span>Final Maturity :
                                                $52800.00</li>
                                        </ul>
                                    </div>
                                    <div class="price-btn">
                                        <a class="pricing-btn w-100" href="login.html">Subscribe</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                <div class="price-item" data-aos="fade-up" data-aos-duration="6000">
                                    <span class="price-badge">My house</span>
                                    <div class="price-top">
                                        <div class="price-title">
                                            <h4>House Plan DPS</h4>
                                        </div>
                                        <div class="price-value">
                                            <strong>$500</strong>
                                            <sub>/ 10 Days</sub>
                                        </div>
                                    </div>
                                    <div class="info-list">
                                        <ul>
                                            <li><span><i class="fa-regular fa-check"></i></span>Interest Rate : 15%
                                            </li>
                                            <li><span><i class="fa-regular fa-check"></i></span>Number of Installments
                                                : 500</li>
                                            <li><span><i class="fa-regular fa-check"></i></span>Per Installment : $500
                                            </li>
                                            <li><span><i class="fa-regular fa-check"></i></span>Installment Slice : 10
                                                Days</li>
                                            <li><span><i class="fa-regular fa-check"></i></span>All Deposits :
                                                $250000.00</li>
                                            <li><span><i class="fa-regular fa-check"></i></span>Final Maturity :
                                                $287500.00</li>
                                        </ul>
                                    </div>
                                    <div class="price-btn">
                                        <a class="pricing-btn w-100" href="login.html">Subscribe</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="price-tab-two-pane" role="tabpanel"
                        aria-labelledby="price-tab-two" tabindex="0">
                        <div class="row gy-30">
                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                <div class="price-item" data-aos="fade-up" data-aos-duration="6000">
                                    <span class="price-badge">Best FDR</span>
                                    <div class="price-top">
                                        <div class="price-title">
                                            <h4>Starters</h4>
                                        </div>
                                        <div class="price-value">
                                            <strong>8%</strong>
                                            <sub>/ 30 Days</sub>
                                        </div>
                                    </div>
                                    <div class="info-list">
                                        <ul>
                                            <li><span><i class="fa-regular fa-check"></i></span>Lock In Period : 365
                                                Days</li>
                                            <li><span><i class="fa-regular fa-check"></i></span>Get Profit Every : 30
                                                Days</li>
                                            <li><span><i class="fa-regular fa-check"></i></span>Profit Rate : 8%</li>
                                            <li><span><i class="fa-regular fa-check"></i></span>Minimum FDR : $100.00
                                            </li>
                                            <li><span><i class="fa-regular fa-check"></i></span>Miximum FDR : $500.00
                                            </li>
                                            <li><span><i class="fa-regular fa-check"></i></span>Compounding : Yes</li>
                                            <li><span><i class="fa-regular fa-check"></i></span>Cancel In : Anytime
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price-btn">
                                        <a class="pricing-btn w-100"
                                            href="https://digibank.tdevs.co/user/fdr/subscribe?eyJpdiI6IjV5MXpGKzRRV01HNEw4MktiWHRvY2c9PSIsInZhbHVlIjoidFVVOUUveFBhenBXZlp0QjA2TlhYdz09IiwibWFjIjoiZmFmODJhZWQ5MWVkYzJhNjRjMjIyNWMzNDk1MWY2OGZiZTM5Zjc5ODk1YTJjZjMwYTA3NzM2OTk2M2FlMDg2MCIsInRhZyI6IiJ9">Subscribe</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="price-tab-three-pane" role="tabpanel"
                        aria-labelledby="price-tab-three" tabindex="0">
                        <div class="row gy-30">
                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                <div class="price-item" data-aos="fade-up" data-aos-duration="6000">
                                    <div class="price-top">
                                        <div class="price-title">
                                            <h4>Education Loan</h4>
                                        </div>
                                        <div class="price-value">
                                            <strong>10%</strong>
                                            <sub>/ 30 Days</sub>
                                        </div>
                                    </div>
                                    <div class="info-list">
                                        <ul>
                                            <li><span><i class="fa-regular fa-check"></i></span>Minimum Loan : $100.00
                                            </li>
                                            <li><span><i class="fa-regular fa-check"></i></span>Miximum Loan : $500.00
                                            </li>
                                            <li><span><i class="fa-regular fa-check"></i></span>Installment Rate : 10%
                                            </li>
                                            <li><span><i class="fa-regular fa-check"></i></span>Installment Slice : 30
                                                Days</li>
                                            <li><span><i class="fa-regular fa-check"></i></span>Total Installment : 12
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price-btn">
                                        <a class="pricing-btn w-100" href="login.html">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Plan end  -->
        <!-- Experiences area start -->
        <div class="experiences-area sectiton-bg position-relative z-index-11">
            <div class="container">
                <div class="row gy-30">
                    <div class="col-xxl-7 col-xl-6 col-lg-6">
                        <div class="experiences-content">
                            <div class="section-title-wrapper">
                                <span data-aos="fade-up" data-aos-duration="1000"
                                    class="section-subtitle bg-lightest">Tailored experiences</span>
                                <h2 data-aos="fade-up" data-aos-duration="1500" class="section-title text-white">
                                    Our Powerful Solutions
                                </h2>
                            </div>
                            <p data-aos="fade-up" data-aos-duration="2000" class="description">
                                Fund transfer involves moving money from one account to another, whether it&#039;s
                                within the same financial institution or between different banks. This process can be
                                initiated through various channels, including online banking, mobile banking apps, ATM
                                transactions, wire transfers, or in-person visits to bank branches.
                            </p>
                            <div data-aos="fade-up" data-aos-duration="2500" class="experiences-info">
                                <div class="list">
                                    <ul>
                                        <li><i data-lucide="check"></i>Learning and Development Ability</li>
                                        <li><i data-lucide="check"></i>Ease of Integration</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-6 col-lg-6">
                        <div class="experiences-thumb">
                            <img data-aos="fade-left" data-aos-duration="1500"
                                src="assets/global/images/1f8FXE7JpoP575p3ky43.png" alt="experiences thumb not found">
                        </div>
                    </div>
                </div>
            </div>
            <div class="experiences-bg">
                <img src="assets/front/images/bg/experiences-bg.png" alt="experiences bg not found">
            </div>
            <div class="experiences-shapes">
                <div class="shape-one">
                    <img src="assets/global/images/04C4SrC8P2fi2eXDpVYA.png" alt="cercle shape not found">
                </div>
            </div>
        </div>
        <!-- Experiences area end -->
        <!-- FAQ area start -->
        <section class="faq-area fix position-relative section-space include-bg"
            data-background="https://digibank.tdevs.co/assets/front/images/bg/faq-bg-pattern.png">
            <div class="container">
                <div class="section-title-wrapper text-center section-title-space">
                    <span data-aos="fade-up" data-aos-duration="1000" class="section-subtitle">Faq Questions</span>
                    <h2 data-aos="fade-up" data-aos-duration="1500" class="section-title">Explore Your Questions.
                    </h2>
                </div>
                <div class="row align-items-center gy-50">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="faq-thumb" data-aos="fade-right">
                            <img class="thumb-normal" src="assets/global/images/myHAdGFhBugGzWy0TUdV.png"
                                alt="faq thumb bot found">
                            <img class="thumb-dark" src="assets/global/images/myHAdGFhBugGzWy0TUdV.png"
                                alt="faq thumb bot found">
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="td-faq style-three">
                            <div class="accordion" id="accordionExample">
                                <div data-aos="fade-up" data-aos-duration="1000" class="accordion-item">
                                    <h2 class="accordion-header" id="heading14">
                                        <button class="accordion-button  " type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse14" aria-expanded="true"
                                            aria-controls="collapse14">
                                            How does it work with two wallets?
                                        </button>
                                    </h2>
                                    <div id="collapse14" class="accordion-collapse  collapse show "
                                        aria-labelledby="heading14" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                It is a long established fact that a reader will be distracted by <br>
                                                the readable content of a page when looking at its layout. The point of
                                                using Lorem Ipsum is that it has a more-or-less normal distribution of
                                                letters, as opposed to using &#039;Content here, content here&#039;,
                                                making it look like readable English.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div data-aos="fade-up" data-aos-duration="1000" class="accordion-item">
                                    <h2 class="accordion-header" id="heading15">
                                        <button class="accordion-button collapsed " type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse15"
                                            aria-expanded="false" aria-controls="collapse15">
                                            Is there an option for manual Deposit?
                                        </button>
                                    </h2>
                                    <div id="collapse15" class="accordion-collapse  collapse  "
                                        aria-labelledby="heading15" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus
                                                molestiae voluptatem id ut repudiandae totam fugit harum architecto
                                                dolorem deleniti incidunt,
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div data-aos="fade-up" data-aos-duration="1000" class="accordion-item">
                                    <h2 class="accordion-header" id="heading28">
                                        <button class="accordion-button collapsed " type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse28"
                                            aria-expanded="false" aria-controls="collapse28">
                                            How to Withdraw Money
                                        </button>
                                    </h2>
                                    <div id="collapse28" class="accordion-collapse  collapse  "
                                        aria-labelledby="heading28" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout. The point of
                                                using Lorem Ipsum is that it has a more-or-less normal distribution of
                                                letters, as opposed to using &#039;Content here, content here&#039;,
                                                making it look like readable English.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div data-aos="fade-up" data-aos-duration="1000" class="accordion-item">
                                    <h2 class="accordion-header" id="heading29">
                                        <button class="accordion-button collapsed " type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse29"
                                            aria-expanded="false" aria-controls="collapse29">
                                            How can I upgrade my Ranking
                                        </button>
                                    </h2>
                                    <div id="collapse29" class="accordion-collapse  collapse  "
                                        aria-labelledby="heading29" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout. The point of
                                                using Lorem Ipsum is that it has a more-or-less normal distribution of
                                                letters, as opposed to using &#039;Content here, content here&#039;,
                                                making it look like readable English.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div data-aos="fade-up" data-aos-duration="1000" class="accordion-item">
                                    <h2 class="accordion-header" id="heading30">
                                        <button class="accordion-button collapsed " type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse30"
                                            aria-expanded="false" aria-controls="collapse30">
                                            How the Referral Levels works?
                                        </button>
                                    </h2>
                                    <div id="collapse30" class="accordion-collapse  collapse  "
                                        aria-labelledby="heading30" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout. The point of
                                                using Lorem Ipsum is that it has a more-or-less normal distribution of
                                                letters, as opposed to using &#039;Content here, content here&#039;,
                                                making it look like readable English.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="faq-shapes">
                <div class="shape-two">
                    <img data-parallax='{"y" : -120, "smoothness": 20}' src="assets/front/images/shapes/faq-02.png"
                        alt="faq shape not found">
                </div>
            </div>
        </section>
        <!-- FAQ area end -->
        <!-- Video area start -->
        <section class="video-area position-relative">
            <div class="container">
                <div class="section-title-wrapper text-center section-title-space">
                    <span data-aos="fade-up" data-aos-duration="1000" class="section-subtitle">Bank
                        Introduction</span>
                    <h2 data-aos="fade-up" data-aos-duration="1500" class="section-title">Know The digi Bank</h2>
                </div>
                <div data-aos="fade-up" data-aos-duration="2000" class="video-wrapper">
                    <div class="video-thumb">
                        <img src="assets/global/images/6tmA9zZGvPmVS5aEVOF3.jpg" alt="video thumb not found">
                    </div>
                    <div class="video-play">
                        <a class="play-btn popup-video animate-play"
                            href="https://www.youtube.com/watch?v=Q_EYoV1kZWk">
                            <span><i class="fa-solid fa-play"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="video-thumb-pattern"
                data-background="https://digibank.tdevs.co/assets/front/images/video/bg-pattern.png">
            </div>
            <div class="video-shapes">
                <div class="shape-one shortUPDown">
                    <img src="assets/global/images/bB8WRVsqjXx0f18mObW1.png" alt="faq shape not found">
                </div>
            </div>
        </section>
        <!-- Video area end -->
        <!-- Testimonial area start -->
        <section class="testimonial-area section-space">
            <div class="container">
                <div class="row section-title-space justify-content-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="section-title-wrapper text-center">
                            <span data-aos="fade-up" data-aos-duration="1000"
                                class="section-subtitle">Testimonials</span>
                            <h2 data-aos="fade-up" data-aos-duration="1500" class="section-title">Trustworthy
                                Feedback From Our Customers</h2>
                        </div>
                    </div>
                </div>
                <div class="wrapper position-relative">
                    <div data-aos="fade-up" data-aos-duration="2500" class="row">
                        <div class="col-xxl-12">
                            <div class="swiper testimonial-active">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="testimonial-content">
                                                <div class="feedback-quote-wrap position-relative">
                                                    <div class="feedback__quote">
                                                        <svg width="65" height="44" viewbox="0 0 65 44"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g opacity="0.2">
                                                                <path
                                                                    d="M26.1065 0H0.532785C0.234282 0 0 0.235948 0 0.536572V26.292C0 26.5926 0.234282 26.8286 0.532785 26.8286H14.5338C12.6369 37.9672 4.60236 42.9472 4.51803 43.0119C4.32656 43.1197 4.21953 43.3772 4.28375 43.6132C4.34797 43.8275 4.56085 44 4.79514 44C20.3102 44 24.8066 32.9681 26.1066 26.4011C26.6394 23.8476 26.6394 22.0652 26.6394 22.0005V0.536451C26.6394 0.235827 26.405 0 26.1065 0Z"
                                                                    fill="#F49E57"></path>
                                                                <path
                                                                    d="M64.4672 0H38.8934C38.5949 0 38.3606 0.235948 38.3606 0.536572V26.292C38.3606 26.5926 38.5949 26.8286 38.8934 26.8286H52.8944C50.9976 37.9672 42.963 42.9472 42.8787 43.0119C42.6872 43.1197 42.5801 43.3772 42.6444 43.6132C42.7086 43.8275 42.9215 44 43.1558 44C58.6708 44 63.1672 32.9681 64.4672 26.4011C65 23.8476 65 22.0652 65 22.0005V0.536451C65 0.235827 64.7657 0 64.4672 0Z"
                                                                    fill="#F49E57"></path>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <p class="description">
                                                    Bank registration typically refers to the process by which a
                                                    financial institution obtains the necessary licenses Bank
                                                    registration typically refers to the process by which a financial.
                                                </p>
                                                <div class="testimonial-author">
                                                    <div class="testimonial-author-thumb-3">
                                                        <img src="assets/global/images/kfLFG4L0iY8GyNqQDz7I.png"
                                                            alt="image not found">
                                                    </div>
                                                    <div class="testimonial-author-info">
                                                        <h4 class="title">John Doess</h4>
                                                        <p class="info">Software Engineer at Tdevs</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="testimonial-content">
                                                <div class="feedback-quote-wrap position-relative">
                                                    <div class="feedback__quote">
                                                        <svg width="65" height="44" viewbox="0 0 65 44"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g opacity="0.2">
                                                                <path
                                                                    d="M26.1065 0H0.532785C0.234282 0 0 0.235948 0 0.536572V26.292C0 26.5926 0.234282 26.8286 0.532785 26.8286H14.5338C12.6369 37.9672 4.60236 42.9472 4.51803 43.0119C4.32656 43.1197 4.21953 43.3772 4.28375 43.6132C4.34797 43.8275 4.56085 44 4.79514 44C20.3102 44 24.8066 32.9681 26.1066 26.4011C26.6394 23.8476 26.6394 22.0652 26.6394 22.0005V0.536451C26.6394 0.235827 26.405 0 26.1065 0Z"
                                                                    fill="#F49E57"></path>
                                                                <path
                                                                    d="M64.4672 0H38.8934C38.5949 0 38.3606 0.235948 38.3606 0.536572V26.292C38.3606 26.5926 38.5949 26.8286 38.8934 26.8286H52.8944C50.9976 37.9672 42.963 42.9472 42.8787 43.0119C42.6872 43.1197 42.5801 43.3772 42.6444 43.6132C42.7086 43.8275 42.9215 44 43.1558 44C58.6708 44 63.1672 32.9681 64.4672 26.4011C65 23.8476 65 22.0652 65 22.0005V0.536451C65 0.235827 64.7657 0 64.4672 0Z"
                                                                    fill="#F49E57"></path>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <p class="description">
                                                    Bank registration typically refers to the process by which a
                                                    financial institution obtains the necessary licenses Bank
                                                    registration typically refers to the process by which a financial.
                                                </p>
                                                <div class="testimonial-author">
                                                    <div class="testimonial-author-thumb-3">
                                                        <img src="assets/global/images/08qYc4HTRP9QulkSXRbn.png"
                                                            alt="image not found">
                                                    </div>
                                                    <div class="testimonial-author-info">
                                                        <h4 class="title">Donald Roman</h4>
                                                        <p class="info">Frontend Engineer at Tdevs</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="testimonial-content">
                                                <div class="feedback-quote-wrap position-relative">
                                                    <div class="feedback__quote">
                                                        <svg width="65" height="44" viewbox="0 0 65 44"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g opacity="0.2">
                                                                <path
                                                                    d="M26.1065 0H0.532785C0.234282 0 0 0.235948 0 0.536572V26.292C0 26.5926 0.234282 26.8286 0.532785 26.8286H14.5338C12.6369 37.9672 4.60236 42.9472 4.51803 43.0119C4.32656 43.1197 4.21953 43.3772 4.28375 43.6132C4.34797 43.8275 4.56085 44 4.79514 44C20.3102 44 24.8066 32.9681 26.1066 26.4011C26.6394 23.8476 26.6394 22.0652 26.6394 22.0005V0.536451C26.6394 0.235827 26.405 0 26.1065 0Z"
                                                                    fill="#F49E57"></path>
                                                                <path
                                                                    d="M64.4672 0H38.8934C38.5949 0 38.3606 0.235948 38.3606 0.536572V26.292C38.3606 26.5926 38.5949 26.8286 38.8934 26.8286H52.8944C50.9976 37.9672 42.963 42.9472 42.8787 43.0119C42.6872 43.1197 42.5801 43.3772 42.6444 43.6132C42.7086 43.8275 42.9215 44 43.1558 44C58.6708 44 63.1672 32.9681 64.4672 26.4011C65 23.8476 65 22.0652 65 22.0005V0.536451C65 0.235827 64.7657 0 64.4672 0Z"
                                                                    fill="#F49E57"></path>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <p class="description">
                                                    Bank registration typically refers to the process by which a
                                                    financial institution obtains the necessary licenses Bank
                                                    registration typically refers to the process by which a financial.
                                                </p>
                                                <div class="testimonial-author">
                                                    <div class="testimonial-author-thumb-3">
                                                        <img src="assets/global/images/RvNRCrXbVHT7JYRaqCgu.png"
                                                            alt="image not found">
                                                    </div>
                                                    <div class="testimonial-author-info">
                                                        <h4 class="title">Angel Rose</h4>
                                                        <p class="info">UI/UX Designer at Tdevs</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="testimonial-navigation d-flex justify-content-md-end">
                        <button class="testimonial-button-prev"><i class="fa-regular fa-arrow-left-long"></i></button>
                        <button class="testimonial-button-next"><i
                                class="fa-regular fa-arrow-right-long"></i></button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial area end -->
        <!-- Why Choose area start -->
        <section class="why-choose-area position-relative z-index-11 fix section-space"
            data-background="https://digibank.tdevs.co/assets/front/images/bg/choose-bg.png">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="section-title-wrapper section-title-space text-center">
                            <span data-aos="fade-up" data-aos-duration="1000"
                                class="section-subtitle bg-lightest">Why Choose Us</span>
                            <h2 data-aos="fade-up" data-aos-duration="1500" class="section-title text-white">Explore
                                Why You Will Choose Us.</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-6 col-xl-6">
                        <div class="why-choose-wrapper">
                            <div data-aos="fade-up" data-aos-duration="1500" class="why-choose-timeline">
                                <div class="timeline-icon">
                                    <span><i class="fa-solid fa-check"></i></span>
                                </div>
                                <div class="why-choose-content">
                                    <div class="content">
                                        <h4 class="title">We are Fast</h4>
                                        <p class="description">
                                            Bank registration typically refers to the process by which a financial
                                            institution obtains the necessary licenses Bank registration typically
                                            refers to the process...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="1500" class="why-choose-timeline">
                                <div class="timeline-icon">
                                    <span><i class="fa-solid fa-check"></i></span>
                                </div>
                                <div class="why-choose-content">
                                    <div class="content">
                                        <h4 class="title">Easy to Use</h4>
                                        <p class="description">
                                            Bank registration typically refers to the process by which a financial
                                            institution obtains the necessary licenses Bank registration typically
                                            refers to the process...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="1500" class="why-choose-timeline">
                                <div class="timeline-icon">
                                    <span><i class="fa-solid fa-check"></i></span>
                                </div>
                                <div class="why-choose-content">
                                    <div class="content">
                                        <h4 class="title">Extra-Secure Transactions</h4>
                                        <p class="description">
                                            Bank registration typically refers to the process by which a financial
                                            institution obtains the necessary licenses Bank registration typically
                                            refers to the process...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="1500" class="why-choose-timeline">
                                <div class="timeline-icon">
                                    <span><i class="fa-solid fa-check"></i></span>
                                </div>
                                <div class="why-choose-content">
                                    <div class="content">
                                        <h4 class="title">Live customer support when you need it</h4>
                                        <p class="description">
                                            Bank registration typically refers to the process by which a financial
                                            institution obtains the necessary licenses Bank registration typically
                                            refers to the process...
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6">
                        <div class="why-choose-thumb">
                            <img data-aos="fade-right" data-aos-duration="1500"
                                src="assets/global/images/GIv0ZICbO5mZ910LTMcO.png" alt="thumb not found">
                        </div>
                    </div>
                </div>
            </div>
            <div class="why-choose-shapes">
                <div class="shape-one shortUPDown">
                    <img src="assets/front/images/shapes/triangle-shape.png" alt="triangle shape not found">
                </div>
                <div class="round"></div>
            </div>
        </section>
        <!-- Why Choose area end -->
        <!-- Blog area start -->
        <div class="blog-area section-space-top">
            <div class="container">
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="section-title-wrapper section-title-space">
                        <span data-aos="fade-up" data-aos-duration="1000" class="section-subtitle">News &amp;
                            Articles</span>
                        <h2 data-aos="fade-up" data-aos-duration="1500" class="section-title">Latest News</h2>
                    </div>
                </div>
                <div class="row gy-5">
                    <div class="col-xxl-4 col-xl-4 col-lg-6">
                        <article class="blog-grid-item" data-aos="fade-up" data-aos-duration="1000">
                            <div class="blog-thumb">
                                <a href="blog/10.html">
                                    <img src="assets/global/images/Jt0SYQ1Kp8ZHvJb5v5J2.jpg" alt="image not found">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta-inner">
                                    <div class="date-badge">
                                        <span>11 June 2024</span>
                                    </div>
                                    <div class="blog-button">
                                        <a class="blog-link" href="blog/10.html"><i
                                                class="fa-regular fa-arrow-up-right"></i></a>
                                    </div>
                                </div>
                                <h3 class="blog-title">
                                    <a href="blog/10.html">Looking for a safe a secure Payment Gateways for
                                        business</a>
                                </h3>
                            </div>
                        </article>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-6">
                        <article class="blog-grid-item" data-aos="fade-up" data-aos-duration="1000">
                            <div class="blog-thumb">
                                <a href="blog/2.html">
                                    <img src="assets/global/images/HakGs5KUQoi3ygMN9hoO.jpg" alt="image not found">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta-inner">
                                    <div class="date-badge">
                                        <span>31 July 2023</span>
                                    </div>
                                    <div class="blog-button">
                                        <a class="blog-link" href="blog/2.html"><i
                                                class="fa-regular fa-arrow-up-right"></i></a>
                                    </div>
                                </div>
                                <h3 class="blog-title">
                                    <a href="blog/2.html">The banking platform works headless</a>
                                </h3>
                            </div>
                        </article>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-6">
                        <article class="blog-grid-item" data-aos="fade-up" data-aos-duration="1000">
                            <div class="blog-thumb">
                                <a href="blog/1.html">
                                    <img src="assets/global/images/lUSzcI6gIWTKgdz2PFH5.jpg" alt="image not found">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta-inner">
                                    <div class="date-badge">
                                        <span>31 July 2023</span>
                                    </div>
                                    <div class="blog-button">
                                        <a class="blog-link" href="blog/1.html"><i
                                                class="fa-regular fa-arrow-up-right"></i></a>
                                    </div>
                                </div>
                                <h3 class="blog-title">
                                    <a href="blog/1.html">Yearly Best Investment authority here</a>
                                </h3>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog area start -->
        <!-- Brand area start -->
        <div class="section brand-area section-space include-bg"
            data-background="https://digibank.tdevs.co/assets//front/images/bg/brand-bg.png">
            <div class="container">
                <div class="row">
                    <div data-aos="fade-up" data-aos-duration="1500" class="brand-main-wrapper">
                        <div class="brand-grid">
                            <div class="brand-item">
                                <div class="thumb">
                                    <img src="assets/global/gateway/paypal.png" alt="thumb not found">
                                </div>
                            </div>
                            <div class="brand-item">
                                <div class="thumb">
                                    <img src="assets/global/gateway/stripe.png" alt="thumb not found">
                                </div>
                            </div>
                            <div class="brand-item">
                                <div class="thumb">
                                    <img src="assets/global/gateway/mollie.png" alt="thumb not found">
                                </div>
                            </div>
                            <div class="brand-item">
                                <div class="thumb">
                                    <img src="assets/global/gateway/perfectmoney.png" alt="thumb not found">
                                </div>
                            </div>
                            <div class="brand-item">
                                <div class="thumb">
                                    <img src="assets/global/gateway/coinbase.png" alt="thumb not found">
                                </div>
                            </div>
                            <div class="brand-item">
                                <div class="thumb">
                                    <img src="assets/global/gateway/paystack.png" alt="thumb not found">
                                </div>
                            </div>
                        </div>
                        <div class="brand-grid">
                            <div class="brand-item">
                                <div class="thumb">
                                    <img src="assets/global/gateway/voguepay.png" alt="thumb not found">
                                </div>
                            </div>
                            <div class="brand-item">
                                <div class="thumb">
                                    <img src="assets/global/gateway/flutterwave.png" alt="thumb not found">
                                </div>
                            </div>
                            <div class="brand-item">
                                <div class="thumb">
                                    <img src="assets/global/gateway/coingate.png" alt="thumb not found">
                                </div>
                            </div>
                            <div class="brand-item">
                                <div class="thumb">
                                    <img src="assets/global/gateway/monnify.svg" alt="thumb not found">
                                </div>
                            </div>
                            <div class="brand-item">
                                <div class="thumb">
                                    <img src="assets/global/gateway/securionpay.png" alt="thumb not found">
                                </div>
                            </div>
                            <div class="brand-item">
                                <div class="thumb">
                                    <img src="assets/global/gateway/coinpayments.svg" alt="thumb not found">
                                </div>
                            </div>
                        </div>
                        <div class="brand-grid">
                            <div class="brand-item">
                                <div class="thumb">
                                    <img src="assets/global/gateway/nowpayments.png" alt="thumb not found">
                                </div>
                            </div>
                            <div class="brand-item">
                                <div class="thumb">
                                    <img src="assets/global/gateway/coinremitter.png" alt="thumb not found">
                                </div>
                            </div>
                            <div class="brand-item">
                                <div class="thumb">
                                    <img src="assets/global/gateway/cryptomus.png" alt="thumb not found">
                                </div>
                            </div>
                            <div class="brand-item">
                                <div class="thumb">
                                    <img src="assets/global/gateway/paymongo.png" alt="thumb not found">
                                </div>
                            </div>
                            <div class="brand-item">
                                <div class="thumb">
                                    <img src="assets/global/gateway/btcpayserver.png" alt="thumb not found">
                                </div>
                            </div>
                            <div class="brand-item">
                                <div class="thumb">
                                    <img src="assets/global/gateway/binance.svg" alt="thumb not found">
                                </div>
                            </div>
                        </div>
                        <div class="brand-grid">
                            <div class="brand-item">
                                <div class="thumb">
                                    <img src="assets/global/gateway/cashmaal.png" alt="thumb not found">
                                </div>
                            </div>
                            <div class="brand-item">
                                <div class="thumb">
                                    <img src="assets/global/gateway/blockio.png" alt="thumb not found">
                                </div>
                            </div>
                            <div class="brand-item">
                                <div class="thumb">
                                    <img src="assets/global/gateway/blockchain.png" alt="thumb not found">
                                </div>
                            </div>
                            <div class="brand-item">
                                <div class="thumb">
                                    <img src="assets/global/gateway/instamojo.png" alt="thumb not found">
                                </div>
                            </div>
                            <div class="brand-item">
                                <div class="thumb">
                                    <img src="assets/global/gateway/paytm.png" alt="thumb not found">
                                </div>
                            </div>
                            <div class="brand-item">
                                <div class="thumb">
                                    <img src="assets/global/gateway/razorpay.png" alt="thumb not found">
                                </div>
                            </div>
                        </div>
                        <div class="brand-grid">
                            <div class="brand-item">
                                <div class="thumb">
                                    <img src="assets/global/gateway/twocheckout.png" alt="thumb not found">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand area end -->
        <!-- Newsletter area start -->
        <section class="newsletter-area position-relative z-index-11">
            <div class="container">
                <div class="newsletter-wrapper"
                    data-background="https://digibank.tdevs.co/assets/front/images/shapes/newsletter-mask.png">
                    <div class="newsletter-grid">
                        <div data-aos="fade-up" data-aos-duration="1000" class="newsletter-content">
                            <h2 class="title text-white">
                                Liberate your time for concentrating on other significant endeavors.
                            </h2>
                            <p class="description text-white">
                                Join us today and experience the power of AI-powered text creation for yourself!
                            </p>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="1500" class="button">
                            <a class="gradient-btn" href="index.htm" target="_self"><span><i
                                        class="fa-solid fa-user-plus"></i></span>Join Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Newsletter area end -->

    </main>
    <!-- Body main wrapper end -->

    <!-- Footer area start -->
    <footer>
        <div class="footer-area footer-primary position-relative z-index-1 include-bg"
            data-background="https://digibank.tdevs.co/assets//front/images/bg/footer-ring.png">
            <div class="container">
                <div class="footer-main">
                    <div class="row gy-50">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="footer-widget-1-1">
                                <div class="footer-logo">
                                    <a href="index.htm">
                                        <img src="assets/global/images/pQDEwg1YYTTukX4dH51w.png"
                                            style="height:35px;width:auto;max-width:none" alt="logo not found">
                                    </a>
                                </div>
                                <div class="footer-content">
                                    <p>
                                        Outsource your HR functions to industry-specialized HR.
                                    </p>
                                    <h6 class="title">Subscribe Now</h6>
                                    <form action="https://digibank.tdevs.co/subscriber" method="post">
                                        <input type="hidden" name="_token"
                                            value="WrPokxZitOr0cofSvoM5hSB8OBCL66afu9XLmNGO" autocomplete="off">
                                        <div class="footer-newsletter-from">
                                            <div class="footer-newsletter-input position-relative">
                                                <input type="text" placeholder="Enter your email"
                                                    name="email" autocomplete="off">
                                                <button class="footer-round-btn" type="submit">Subscribe</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget-1-2">
                                <div class="footer-widget-title">
                                    <h5>Base Navigation</h5>
                                </div>
                                <div class="footer-link">
                                    <ul>
                                        <li><a href="login.html">Account Login</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="privacy-policy.html">Privacy</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-sm-6">
                            <div class="footer-widget-1-3">
                                <div class="footer-widget-title">
                                    <h5>Important Links</h5>
                                </div>
                                <div class="footer-link">
                                    <ul>
                                        <li><a href="terms-and-conditions.html">Terms and Conditions</a></li>
                                        <li><a href="about-us.html">About</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget-1-4 justify-content-lg-end">
                                <div class="footer-widget-title">
                                    <h5>Need Help?</h5>
                                </div>
                                <div class="footer-contact">
                                    <div class="footer-info">
                                        <div class="single-item">
                                            <h6 class="title">Email Us</h6>
                                            <div class="footer-info-item">
                                                <div class="footer-info-icon">
                                                    <span><i class="fa-solid fa-envelope"></i></span>
                                                </div>
                                                <div class="footer-info-text">
                                                    <span><a
                                                            href="mailto:info@digibank.com">info@digibank.com</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-item">
                                            <h6 class="title">Telegram</h6>
                                            <div class="footer-info-item">
                                                <div class="footer-info-icon">
                                                    <span><i class="fa-brands fa-telegram"></i></span>
                                                </div>
                                                <div class="footer-info-text">
                                                    <span><a href="https://telegram.com"
                                                            target="_blank">https://telegram.com</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="footer-bottom">
                            <div class="footer-copyright">
                                <p>Copyright © Digibank 2024. All rights reserved.</p>
                            </div>
                            <div class="footer-social">
                                <a href="https://www.facebook.com"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com"><i class="fa-brands fa-instagram"></i></a>
                                <a href="https://youtube.com"><i class="fa-brands fa-youtube"></i></a>
                                <a href="https://discord.com"><i class="fa-brands fa-discord"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-shapes">
                <div class="shape-one">
                    <img src="assets/front/images/shapes/footer/shape-01.png" alt="shape not found">
                </div>
                <div class="shape-two">
                    <img src="assets/front/images/shapes/footer/shape-02.png" alt="shape not found">
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer area end -->
    <div class="caches-privacy cookiealert" hidden="">
        <div class="content">
            <h4 class="title">Cookie Settings</h4>
            <p>Please allow us to collect data about how you use our website. We will use it to improve our website,
                make your browsing experience and our business decisions better. Learn more</p>
        </div>
        <div class="caches-btn">
            <a class="learn-more" href="privacy-policy.html" target="_blank">Learn More</a>
            <button class="site-btn primary-btn acceptcookies">Accept All</button>
        </div>
    </div>
@endsection
