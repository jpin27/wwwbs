@extends('layouts.master')
@section('headcontent')

<!DOCTYPE html>

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

@endsection

@section('content')

  <section>
    <body style="background-color:rgb(123,184,108)">
    <div class="container">
        <p> </p>

    </div>
    <div class="container">
        <h2> My Bookings </h2><br>
        <div id="center" style="background-color:#eeeeee;"><span> You have no bookings right now</span></div>
        <p> </p>
        <!-- <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="active" style="background-color:#eeeeee;">Booking Description</th>
                        <th style="background-color:#eeeeee;">Date </th>
                        <th style="background-color:#eeeeee;">Time </th>
                        <th style="background-color:#eeeeee;">Practitioner </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Cell 1</td>
                        <td>Cell 2</td>
                        <td>Cell 3</td>
                        <td>Cell 4</td>
                    </tr>
                    <tr>
                        <td>Cell 5</td>
                        <td>Cell 6</td>
                        <td>Cell 7</td>
                        <td>Cell 8</td>
                    </tr>
                    <tr>
                        <td>Cell 9</td>
                        <td>Cell 10</td>
                        <td>Cell 11</td>
                        <td>Cell 12</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> -->
    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

@endsection
