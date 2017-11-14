<!DOCTYPE html>
@extends('layouts.mastertest')
@section('content')
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="/css/Footer-Basic.css">
    <link rel="stylesheet" href="/css/Header-Dark.css">
    <link rel="stylesheet" href="/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="/css/Navigation-with-Button1.css">
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body>

    <div class="login-dark" style="background-image:url(&quot;none&quot;);background-color:#efecec;">
        <form method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline" style="color:#4C934C;"></i>
                <div class="form-group">
                    <button class="btn btn-success" type="button" id="bg-image" style="background-color:#4C934C;width:100%;height:34px;background-image:url(&quot;none&quot;);background-repeat:no-repeat;background-position:left;background-size:25px;"><img src="/img/paws.png" height=20px> Login with PAWS</button>
                </div>
                <p style="font-size:25px;color:#4C934C;">OR </p>
            </div>
            <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label class="control-label">
                        <input type="checkbox">Remember me</label>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit" style="background-color:#4C934C;">Log In</button>
            </div><a href="#" class="forgot">Forgot your email or password?</a></form>
    </div>
    <script src="/js/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
@endsection