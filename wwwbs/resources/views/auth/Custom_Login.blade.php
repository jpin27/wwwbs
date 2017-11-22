<!DOCTYPE html>
@extends('layouts.master')

@section('headcontent')
    <link rel="stylesheet" href="/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">

    <link rel="stylesheet" href="/css/Login-Form-Dark.css">
@endsection

@section('content')

    <div class="login-dark" style="background-color:#ffffff;">
        <form method="post" action="{{ route('login') }}">
        {{ csrf_field() }}
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline" style="color:#4C934C;"></i>
                <div class="form-group">
                    <button class="btn btn-success" type="button" id="bg-image" style="background-color:#4C934C;width:100%;height:34px;background-repeat:no-repeat;background-position:left;background-size:25px;"><img src="/img/paws.png" height=20px> Login with PAWS</button>
                </div>
                <p style="font-size:25px;color:#4C934C;">OR</p>
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input class="form-control" type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                  @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input class="form-control" type="password" name="password" placeholder="Password" required>
                  @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label class="control-label">
                        <input type="checkbox" {{ old('remember') ? 'checked' : '' }}> Remember me</label>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit" style="background-color:#4C934C;">Log In</button>
            </div><a href="{{ route('password.request') }}" class="forgot">Forgot your password?</a><p></p>
            <a href="{{ 'register' }}" class="forgot">Register here!</a></form>
    </div>

@endsection