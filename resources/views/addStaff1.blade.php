<!DOCTYPE html>
@extends('layouts.master')
@section('headcontent')
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="css/Footer-Basic-1.css">
    <link rel="stylesheet" href="css/Footer-Basic.css">
    <link rel="stylesheet" href="css/Header-Dark.css">
    <link rel="stylesheet" href="css/Login-Form-Dark.css">
    <link rel="stylesheet" href="css/Navigation-with-Button1.css">
    <link rel="stylesheet" href="css/styles.css">
@endsection

@section('content')

<section>
<body class="background-basic">

    <p> </p>
    <div class="container">
        <h2 style="color:rgb(65,150,65);">Add Staff</h2>
        <p> </p>
        <div id="form">
            <form>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="First Name">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <input class="form-control" type="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="width:100%;">Choose Role <span class="caret"></span> </button>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="#">Practitioner </a></li>
                            <li role="presentation"><a href="#">Admin </a></li>
                            <li role="presentation"><a href="#">Receptionist </a></li>
                        </ul>
                    </div>
                </div>
                <button class="btn btn-success" type="button">Save </button>
            </form>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</section>
@endsection
