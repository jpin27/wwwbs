<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Wacky Waving Wellness Booking System</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="/css/justified-nav.css" rel="stylesheet">
  </head>

  <body>
  		<div class="container">

    	{{-- This just says we must include the navbar found at /resources/views/layouts/navbar.blade.php --}}
      	@include ('layouts.navbar')

          {{-- 
              And then, this part will be replaced with whatever we enclose in @section('content').
              Check out /resources/layouts/welcome.blade.php for a demo
           --}}
      	   @yield ('content')

      {{-- Let's summon the footer --}}
      @include ('layouts.footer')

		</div> <!-- /container -->
  </body>
</html>








{{--

This is the wrapping HTML file - containing the header with the image, navbar, and footer. 
<!DOCTYPE html>
<html>
<head>
	<title>Wacky Waving Wellness Booking System</title>
</head>
<body>
	
 Let's define our header here. TODO: Replace with static navbar 
	@yield('header')

	Let's enclose the main body in a container div for Bootstrap styling later. 
	<div class="container">

		When compiled, everything defined by "content" will be pasted here.
			i.e., the code below will be replaced with whatever we define as 'content'
			in our pages.
		 
		@yield('content')
	
	</div>

	 
		This is where our footer is gonna be. It's gonna be different for each page... I think.
	 
	@yield('footer')
</body>
</html> --}}