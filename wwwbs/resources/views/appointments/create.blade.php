@extends('layouts.master')

@section('content')

<h1>Book an Appointment</h1>
<p class="lead">Add to your appointment list below.</p>
<hr>

{!! Form::open([
    'route' => 'appointments.store'
]) !!}

<div class="form-group">
    {!! Form::label('title', 'Brief Description:', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Other details:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Book Appointment', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@endsection





