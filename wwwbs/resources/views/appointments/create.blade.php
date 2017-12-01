@extends('layouts.master')

@section('content')

	<h1>Book an Appointment</h1>
	<p class="lead">Add to your appointment list below.</p>
	<hr>

	{{-- Show error messages --}}
	@if($errors->any())
	    <div class="alert alert-danger">
	        @foreach($errors->all() as $error)
	            <p>{{ $error }}</p>
	        @endforeach
	    </div>
	@endif

	{{-- Show success message --}}
	@if(Session::has('flash_message'))
	    <div class="alert alert-success">
	        {{ Session::get('flash_message') }}
	    </div>
	@endif


	{{ Form::open([
	    'route' => 'appointments.store'
	]) }}

	<div class="form-group">
	    {{ Form::label('brief_desc', 'Brief Description:', ['class' => 'control-label']) }}
	    {{ Form::text('brief_desc', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group">
	    {{ Form::label('full_desc', 'Other details:', ['class' => 'control-label']) }}
	    {{ Form::textarea('full_desc', null, ['class' => 'form-control']) }} 
	</div>

	{{ Form::submit('Book Appointment', ['class' => 'btn btn-primary']) }}

	{{ Form::close() }}

@endsection





