<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta name="description" content="Consulting Finance Corporate Business - Consulting HTML Template">
<meta name="keywords" content="consulting, accountant, advisor, audit, beaver builder, broker, business, clean, company, consulting, corporate, finance, financial, insurance, trader">
<meta name="author" content="Themexriver">
<title>{{ config('app.name') }} | Contact</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    @include('shared.l-header')

	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/8.jpg)">
    	<div class="auto-container">
			<div class="content">
				<h1>Contact <span>us</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="/">Home</a></li>
					<li>contact</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->

	<!-- Contact Page Section -->
	<section class="contact-page-section">
		<div class="map-section">
			<!--Map Outer-->
			<div class="map-outer">
				<!--Map Canvas-->
				<div class="map-canvas"
					data-zoom="12"
					data-lat="-37.817085"
					data-lng="144.955631"
					data-type="roadmap"
					data-hue="#ffc400"
					data-title="Envato"
					data-icon-path="images/icons/map-marker.png"
					data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
				</div>
			</div>
		</div>
		<div class="auto-container">
			<div class="inner-container">
				<h2>Contact <span>Us</span></h2>
				<div class="row clearfix">

					<!-- Info Column -->
					<div class="info-column col-lg-7 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="text">Please contact us using the information below. For additional information on our management consulting services, please visit the appropriate page on our site.</div>
							<ul class="list-style-five">
								<li><span class="icon fa fa-building"></span> 131 Dartmouth Street <br> Boston, Massachusetts 02116 <br> United States</li>
								<li><span class="icon fa fa-fax"></span> +1 617 572 2000</li>
								<li><span class="icon fa fa-envelope-o"></span>support@finance.com</li>
							</ul>
						</div>
					</div>

					<!-- Form Column -->
					<div class="form-column col-lg-5 col-md-12 col-sm-12">
						<div class="inner-column">

							<!--Contact Form-->
							<div class="contact-form">
								<form method="post" action="/contact" id="contact-form">

									<div class="form-group">
										<input type="text" name="firstname" value="" placeholder="Full name" required>
									</div>

									<div class="form-group">
										<input type="text" name="email" value="" placeholder="Email" required>
									</div>

									<div class="form-group">
										<select class="custom-select-box">
											<option>Select topic</option>
											<option>Topic One</option>
											<option>Topic Two</option>
										</select>
									</div>

									<div class="form-group">
										<textarea name="message" placeholder="write.."></textarea>
									</div>

									<div class="form-group">
										<button type="submit" class="theme-btn">Submit</button>
									</div>

								</form>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- End Team Page Section -->

	<!-- Contact Info Section -->
	<section class="contact-info-section d-none" style="background-image:url(images/background/10.jpg)">
		<div class="auto-container">
			<div class="row clearfix">

				<div class="column col-lg-4 col-md-6 col-sm-12 col-auto-offset">
					<h4>United Kingdom</h4>
					<ul class="list-style-six">
						<li><span class="icon flaticon-map-1"></span> 49488 Avenida Obregon, <br> La Quinta, CA 92253</li>
						<li><span class="icon flaticon-phone-receiver"></span> +1-(281)-813 926 <br> +1-(281)-813 612</li>
						<li><span class="icon flaticon-e-mail-envelope"></span>support@finance.com.uk</li>
					</ul>
				</div>
				{{-- <div class="column col-lg-4 col-md-6 col-sm-12">
					<h4>Australia</h4>
					<ul class="list-style-six">
						<li><span class="icon flaticon-map-1"></span> 13/1 Dixon Street, Sydney <br> NSW 2000</li>
						<li><span class="icon flaticon-phone-receiver"></span> +1-(281)-813 926 <br> +1-(281)-813 612</li>
						<li><span class="icon flaticon-e-mail-envelope"></span>support@finance.com.uk</li>
					</ul>
				</div>
				<div class="column col-lg-4 col-md-6 col-sm-12">
					<h4>Netherlands</h4>
					<ul class="list-style-six">
						<li><span class="icon flaticon-map-1"></span> Nieuwe Leliestraat 27-HS <br> 101J Amsterdam</li>
						<li><span class="icon flaticon-phone-receiver"></span> +1-(281)-813 926 <br> +1-(281)-813 612</li>
						<li><span class="icon flaticon-e-mail-envelope"></span>support@finance.com.uk</li>
					</ul>
				</div> --}}

			</div>
		</div>
	</section>
	<!-- End Contact Info Section -->

	@include('shared.l-footer')

</div>
<!--End pagewrapper-->

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/validate.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/main.js"></script>
<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyDTPlX-43R1TpcQUyWjFgiSfL_BiGxslZU"></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->

</body>
</html>
