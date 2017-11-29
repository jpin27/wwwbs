
<!DOCTYPE html>

<?php
//require_once('C:\Users\User\Dropbox\School_Stuff\Comp_Science\CMPT370\Wacky-Waving-Wellness-Booking-System\wwwbs\resources\views\auth\user_queries.php');
?>

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
  <body style="background-color:rgb(123,184,108)">
    <div class="container">
        <h2>Register </h2><p></p>
        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Full Name">

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email">
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <input id="password" type="password" class="form-control" name="password" required placeholder="Password">

              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
            </div>

            <div class="form-group">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" placeholder="NSID">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Health Number">
            </div>
            <div class="form-group">
                <input class="form-control" type="text"  placeholder="Date of Birth (yyyy-mm-dd)" pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Address">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Register</button>
            </div>
        </form>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
  </section>
@endsection
