{{-- This is the wrapping HTML file - containing the header with the image, navbar, and footer. --}}
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student Wellness Centre Booking - University of Saskatchewan</title>

    {{-- We're using the Bootstrap CDN to layout the website --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Custom fonts for this template -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css" integrity="sha256-I/m6FhcACNYmRoqn1xUnizh6S7jOJsTq+aiJ6BtE2LE=" crossorigin="anonymous" />


    <!-- Plugin CSS -->
    <link href="css/magnific-popup.css" rel="stylesheet">



    <link rel="stylesheet" type='text/css' media="all" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">

    <!-- Custom styles for this template -->
    <link href="css/creative.css" rel="stylesheet">
    <link href="css/bootstrap-datepicker.css" rel="stylesheet">
  </head>

  <body id="page-top">

    @include('layouts.navbar')

    @yield('content')



    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>

    {{--Bug patch: this CDN supports the old jQuery scrolling animation.
        TODO: Change the easings in creative.js to reflect new refactored name in jQuery
     --}}
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>

    <!-- Bootstrap core JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>


{{--     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js" integrity="sha256-TueWqYu0G+lYIimeIcMI8x1m14QH/DQVt4s9m/uuhPw=" crossorigin="anonymous"></script> --}}

    <!-- Some more Javascript plugins to handle animation -->
{{--     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.compatibility.min.js"></script>
 --}}    <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/3.3.6/scrollreveal.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <script type="text/javascript">
        $('.date').datepicker({
           format: 'mm-dd-yyyy'
         });
    </script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.js"></script>
    <<script src="js/bootstrap-datepicker.min.js"></script>

  </body>

</html>
