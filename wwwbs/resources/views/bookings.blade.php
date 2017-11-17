@extends('layouts.master')
@section('content')


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="css/Footer-Basic.css">
    <link rel="stylesheet" href="css/Header-Dark.css">
    <link rel="stylesheet" href="css/Login-Form-Dark.css">
    <link rel="stylesheet" href="css/Navigation-with-Button1.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body style="background-color:rgb(251,251,251);">
    
    <div>
        <div class="container">
         <p class="lead" style="color:#4C934C;">Book an Appointment</p>
            <div class="row">
                   <div class="col-md-1 center-block" id="display">
                <div id="datepicker" data-date="12/03/2012"></div>
					<input type="hidden" id="my_hidden_input">
                </div>
                <div class="col-md-4 center-block" id="display_Center">
                    <div class="dropdown" style="margin:10px 0px 0px 0px;">
                        <button class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="background-color:#4C934C;width:300px;">Select Practitioner </button>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="#">First Item</a></li>
                            <li role="presentation"><a href="#">Second Item</a></li>
                            <li role="presentation"><a href="#">Third Item</a></li>
                        </ul>
                    </div>
                    <div class="dropdown" style="margin:10px 0px 0px 0px;">
                        <button class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="width:300px;padding:0px;background-color:#4C934C;height:34px;">Select Time </button>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="#">First Item</a></li>
                            <li role="presentation"><a href="#">Second Item</a></li>
                            <li role="presentation"><a href="#">Third Item</a></li>
                        </ul>
                    </div>
                    <div class="dropdown" style="margin:10px 0px 0px 0px;">
                        <button class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="width:300px;padding:0px;background-color:#4C934C;height:34px;">Service Type</button>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="#">First Item</a></li>
                            <li role="presentation"><a href="#">Second Item</a></li>
                            <li role="presentation"><a href="#">Third Item</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="padding:35px 0px;">
                    <form>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Brief Description">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Detailed Description (optional)"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success" type="button" style="background-color:#4C934C;">Save </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
@endsection