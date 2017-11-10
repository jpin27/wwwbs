{{-- This is the wrapping HTML file - containing the header with the image, navbar, and footer. --}}
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Wacky Waving Wellness Booking System</title>

    {{-- We're using the Bootstrap CDN to layout the website --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    {{-- 
      Here's the custom styles for this template. TODO: Move this to Sass and personalize the stylesheet
    --}}
    <link href="/css/justified-nav.css" rel="stylesheet">

    
  </head>

  <body>
    {{-- Let's enclose the main body in a container div for Bootstrap styling later.  --}}
  	<div class="container">

      {{-- This just says we must include the navbar found at /resources/views/layouts/navbar.blade.php --}}
      @include ('layouts.navbar')

      {{-- 
          When compiled, this part will be replaced with whatever we enclose in @section('content').
          Check out /resources/layouts/welcome.blade.php for a demo
      --}}
      @yield ('content')

      {{-- This is where our footer is gonna be. It's gonna be different for each page... I think. --}}
      @include ('layouts.footer')

    </div> <!-- /container -->

    {{-- Some Bootstrap JS --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>