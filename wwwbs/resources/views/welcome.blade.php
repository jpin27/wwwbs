{{-- Powerful Blade layouting in action. Instead of typing the repetitive <html> blah blah, we just extend whatever's in the layout file at /resources/views/layouts/master.blade.php. No more repetitive html styling. Cool, eh? --}}
@extends ('layouts.master')

{{--
Remember the @yield('content') in layouts/master.blade.php? Well, this is the section that replaces it. Here we put the actual body of our welcome page.
--}}
@section ('content')

{{-- Praise the LORD for HTML5 sections and headers! --}}
<header class="masthead text-center text-white d-flex">
	{{-- my-auto: automatic Bootstrap layouting --}}
	<div class="container my-auto">
		<div class="row">

			<div class="col-lg-10 mx-auto">
				<h1 class="text-uppercase">
					<strong>Welcome to the Fucking Student Wellness Centre</strong>
				</h1>
				<hr>
			</div>

			<div class="col-lg-8 mx-auto">
				<p class="text-faded mb-5">I spent 4 hours on this shit. Book an appointment online for your medical wellness... things. Get started today!</p>

				{{-- Fucking Form class isn't included in Laravel 5 so I had to install it in the app ugh --}}
				<div id="datepicker" data-date="12/03/2012"></div>
				<input type="hidden" id="my_hidden_input">

				<a class="btn btn-primary btn-xl js-scroll-trigger" href="#services">Book by Service</a><strong>  OR  </strong><a class="btn btn-primary btn-xl js-scroll-trigger" href="#practitioners">Book by Practitioner</a>
			</div>

		</div>
	</div>
</header>



<section class="pt-4" id="services">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">Our services</h2>
				<article>Click on a service to book an appointment today.</article>
				<hr class="my-4">
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row">

			<div class="col-lg-3 col-md-3 text-center">
				<div class="service-box mt-5 mx-auto">
					<a href="{{ url('/bookappt') }}">
						<i class="fa fa-4x fa-stethoscope text-primary mb-3 sr-icons"></i>
					</a>
					<h3 class="mb-3">Medical Appointment</h3>
					<p class="text-muted mb-0">Our templates are updated regularly so they don't break.</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 text-center">
				<div class="service-box mt-5 mx-auto">
					<a href="{{ url('/bookappt') }}">
						<i class="fa fa-4x fa-paper-plane text-primary mb-3 sr-icons"></i>
					</a>
					<h3 class="mb-3">Mental Health Assessment</h3>
					<p class="text-muted mb-0">You can use this theme as is, or you can make changes!</p>
				</div>
			</div>


			<div class="col-lg-3 col-md-3 text-center">
				<div class="service-box mt-5 mx-auto">
					<a href="{{ url('/bookappt') }}">
						<i class="fa fa-4x fa-cutlery text-primary mb-3 sr-icons"></i>
					</a>
					<h3 class="mb-3">Nutritional Counseling</h3>
					<p class="text-muted mb-0">We update dependencies to keep things fresh.</p>
				</div>
			</div>


			<div class="col-lg-3 col-md-3 text-center">
				<div class="service-box mt-5 mx-auto">
					<a href="{{ url('/bookappt') }}">
						<i class="fa fa-4x fa-wheelchair text-primary mb-3 sr-icons"></i>
					</a>
					<h3 class="mb-3">Sexual Health Care</h3>
					<p class="text-muted mb-0">Our templates are updated regularly so they don't break.</p>
				</div>
			</div>

		</div>

		<div class="row">

			<div class="col-lg-3 col-md-3 text-center">
				<div class="service-box mt-5 mx-auto">
					<a href="{{ url('/bookappt') }}">
						<i class="fa fa-4x fa-paper-plane text-primary mb-3 sr-icons"></i>
					</a>
					<h3 class="mb-3">Physiotherapy</h3>
					<p class="text-muted mb-0">You can use this theme as is, or you can make changes!</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 text-center">
				<div class="service-box mt-5 mx-auto">
					<a href="{{ url('/bookappt') }}">
						<i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
					</a>
					<h3 class="mb-3">Massage Therapy</h3>
					<p class="text-muted mb-0">We update dependencies to keep things fresh.</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 text-center">
				<div class="service-box mt-5 mx-auto">
					<a href="{{ url('/bookappt') }}">
						<i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons"></i>
					</a>
					<h3 class="mb-3">Chiropractice</h3>
					<p class="text-muted mb-0">Our templates are updated regularly so they don't break.</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 text-center">
				<div class="service-box mt-5 mx-auto">
					<a href="{{ url('/bookappt') }}">
						<i class="fa fa-4x fa-plane text-primary mb-3 sr-icons"></i>
					</a>
					<h3 class="mb-3">Travel Immunization</h3>
					<p class="text-muted mb-0">You can use this theme as is, or you can make changes!</p>
				</div>
			</div>

		</div>

	</div>
</div>
</section>




<section class="bg-dark text-white" id="practitioners" >

<div class="container pb-5 mt-0">
	<div class="row">
		<div class="col-lg-8 mx-auto text-center">
			<h2 class="section-heading text-lighter">Meet our Practitioners</h2>
			<hr class="primary my-4">
			<p class="text-faded mb-4">This website is part of a CMPT370 student project we so lovingly call the Wacky Waving Wellness Booking System. We used modern web frameworks to design and code this site, and all of our work is properly documented and available to view!</p>

			<a class="btn btn-primary btn-xl js-scroll-trigger" href="#services">Find practitioners</a>
		</div>
	</div>
</div>

<div class="container-fluid p-0">
	<div class="row popup-gallery">
		<div class="col-lg-4 col-sm-6">
			<a class="portfolio-box" href="images/portfolio/fullsize/1.jpg">
				<img class="img-fluid" src="images/portfolio/thumbnails/1.jpg" alt="">
				<div class="portfolio-box-caption">
					<div class="portfolio-box-caption-content">
						<div class="project-category text-faded">
							Category
						</div>
						<div class="project-name">
							Project Name
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-lg-4 col-sm-6">
			<a class="portfolio-box" href="images/portfolio/fullsize/2.jpg">
				<img class="img-fluid" src="images/portfolio/thumbnails/2.jpg" alt="">
				<div class="portfolio-box-caption">
					<div class="portfolio-box-caption-content">
						<div class="project-category text-faded">
							Category
						</div>
						<div class="project-name">
							Project Name
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-lg-4 col-sm-6">
			<a class="portfolio-box" href="images/portfolio/fullsize/3.jpg">
				<img class="img-fluid" src="images/portfolio/thumbnails/3.jpg" alt="">
				<div class="portfolio-box-caption">
					<div class="portfolio-box-caption-content">
						<div class="project-category text-faded">
							Category
						</div>
						<div class="project-name">
							Project Name
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-lg-4 col-sm-6">
			<a class="portfolio-box" href="images/portfolio/fullsize/4.jpg">
				<img class="img-fluid" src="images/portfolio/thumbnails/4.jpg" alt="">
				<div class="portfolio-box-caption">
					<div class="portfolio-box-caption-content">
						<div class="project-category text-faded">
							Category
						</div>
						<div class="project-name">
							Project Name
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-lg-4 col-sm-6">
			<a class="portfolio-box" href="images/portfolio/fullsize/5.jpg">
				<img class="img-fluid" src="images/portfolio/thumbnails/5.jpg" alt="">
				<div class="portfolio-box-caption">
					<div class="portfolio-box-caption-content">
						<div class="project-category text-faded">
							Category
						</div>
						<div class="project-name">
							Project Name
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-lg-4 col-sm-6">
			<a class="portfolio-box" href="images/portfolio/fullsize/6.jpg">
				<img class="img-fluid" src="images/portfolio/thumbnails/6.jpg" alt="">
				<div class="portfolio-box-caption">
					<div class="portfolio-box-caption-content">
						<div class="project-category text-faded">
							Category
						</div>
						<div class="project-name">
							Project Name
						</div>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>
</section>

<section class="bg-primary" id="about">
<div class="container">
	<div class="row">
		<div class="col-lg-8 mx-auto text-center">
			<h2 class="section-heading text-white">What's WWWBS?</h2>
			<hr class="light my-4">
			<p class="text-faded mb-4">This website is part of a CMPT370 student project we so lovingly call the Wacky Waving Wellness Booking System. We used modern web frameworks to design and code this site, and all of our work is properly documented and available to view!</p>
			<a class="btn btn-light btn-xl" href="https://git.cs.usask.ca/hih050/Wacky-Waving-Wellness-Booking-System" target="_blank">Check out the developer page!</a>
		</div>
	</div>
</div>
</section>

<section id="contact">
<div class="container">
	<div class="row">
		<div class="col-lg-8 mx-auto text-center">
			<h2 class="section-heading">Keep in Touch!</h2>
			<hr class="my-4">
			<p class="mb-5">The Wellness Centre can also be reached via phone or email, or you could drop by the centre at the third floor (Rm. 310) and fourth floor of the Place Riel Student Centre.</p>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4 ml-auto text-center">
			<i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
			<p>1-306-966-5768</p>
		</div>
		<div class="col-lg-4 mr-auto text-center">
			<i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
			<p>
				<a href="mailto:student.wellness@usask.ca">student.wellness@usask.ca</a>
			</p>
		</div>
	</div>
</div>
</section>

@endsection

{{-- We don't need to define a footer here because it's already in the master layout.
If we wanted a special footer, we could create a @section('footer') here --}}
