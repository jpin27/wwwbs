@extends('layouts.master')

@section('content')


<h1>Task List</h1>
<p class="lead">Here's a list of all your tasks. 
	<a href="{{ route('appointments.create') }}">Add a new one?</a>
</p>
<hr>


@endsection





