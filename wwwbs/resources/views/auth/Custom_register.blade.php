
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
  <body style="background-color:rgb(123,184,108)">
    <div class="container">
        <h2>Register </h2><p></p>
        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
                <input id="firstName" type="text" class="form-control" name="firstName" value="{{ old('firstName') }}" required placeholder="First Name*">

                @if ($errors->has('firstName'))
                    <span class="help-block">
                        <strong>{{ $errors->first('firstName') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('lastName') ? ' has-error' : '' }}">
                <input id="lastName" type="text" class="form-control" name="lastName" value="{{ old('lastName') }}" required placeholder="Last Name*">

                @if ($errors->has('lastName'))
                    <span class="help-block">
                        <strong>{{ $errors->first('lastName') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email*">
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <input id="password" type="password" class="form-control" name="password" required placeholder="Password*">

              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
            </div>

            <div class="form-group">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password*">
            </div>

            <div class="form-group{{ $errors->has('nsid') ? ' has-error' : '' }}">
              <input id="nsid" type="text" class="form-control" name="nsid" value="{{ old('nsid') }}" required placeholder="NSID*" pattern="(^[a-z]{3}[0-9]{3}$)">

              @if ($errors->has('nsid'))
                  <span class="help-block">
                      <strong>{{ $errors->first('nsid') }}</strong>
                  </span>
              @endif
            </div>

            <div class="form-group{{ $errors->has('healthNum') ? ' has-error' : '' }}">
                <input id="healthNumber" type="text" class="form-control" name="healthNumber" value="{{ old('healthNumber') }}" placeholder="Health Number (xxxxxxxxx)*" pattern="^([0-9]{9})$">
                @if ($errors->has('healthNumber'))
                    <span class="help-block">
                        <strong>{{ $errors->first('healthNumber') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('birthDate') ? ' has-error' : '' }}">
                <input id="birthDate" type="text" class="form-control" name="birthDate" value="{{ old('birthDate') }}" placeholder="Date of Birth (yyyy-mm-dd)*" pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))">

                @if ($errors->has('birthDate'))
                    <span class="help-block">
                        <strong>{{ $errors->first('birthDate') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                <input id="address" class="form-control" type="text" name="address" value="{{ old('address') }}" placeholder="Address*">

                @if ($errors->has('address'))
                    <span class="help-block">
                        <strong>{{ $errors->first('address') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <input id="subRole" class="form-control" type="hidden" name="subRole" value="student">

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
