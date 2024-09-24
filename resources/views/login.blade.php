@extends('layout.landing-layout')
@section('content')
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>
        @include('shared.l-header')
        <!-- Contact Page Section -->
	<section class="contact-page-section">
		<div class="auto-container">
			<div class="inner-container">
				<h2>Get Access to your <span>Account</span></h2>
				<div class="row clearfix">


					<!-- Form Column -->
					<div class="form-column col-lg-12 col-md-12 col-sm-12">
						<div class="inner-column">

							<!--Contact Form-->
							<div class="contact-form">
								<form method="post" action="{{ route('login') }}" id="contact-form">


									<div class="form-group">
										<input type="text" name="email" value="" placeholder="Email" required>
									</div>

									<div class="form-group">
										<input type="password" name="password" value="" placeholder="Password" required>
									</div>




									<div class="form-group">
										<button type="submit" class="theme-btn">Sign In</button>
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







        @include('shared.l-footer')

    </div>
    <!--End pagewrapper-->
@endsection
