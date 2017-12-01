@extends('layouts.master')

@section('content')

<h1>Book an Appointment</h1>
<p class="lead">Add to your appointment list below.</p>
<hr>

{{ Form::open([
    'route' => 'appointments.store'
]) }}

<div class="form-group">
    {{ Form::label('brief-desc', 'Brief Description:', ['class' => 'control-label']) }}
    {{ Form::text('brief-desc', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('full-desc', 'Other details:', ['class' => 'control-label']) }}
    {{ Form::textarea('full-desc', null, ['class' => 'form-control']) }} 
</div>

{{ Form::submit('Book Appointment', ['class' => 'btn btn-primary']) }}

{{ Form::close() }}

@endsection





