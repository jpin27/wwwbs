@extends('layouts.master')


@section('headcontent')
    <link rel="stylesheet" href="css/Footer-Basic.css">
@endsection


@section('content')

<section>
<body style="background-color:rgb(123,184,108)">

    <div class="container">


        <h1>{{ $appointment->brief_desc }}</h1>
        <p class="lead">{{ $appointment->full_desc }}</p>
        <hr>

        <a href="{{ route('appointments.index') }}" class="btn btn-info">Back to all appointments</a>
        <a href="{{ route('appointments.edit', $appointment->id) }}" class="btn btn-primary">Edit Appointment</a>

        <div class="pull-right">
            {{ Form::open([
                'method' => 'DELETE',
                'route' => ['appointments.destroy', $appointment->id]
            ]) }}
            {{ Form::submit('Cancel this appointment?', ['class' => 'btn btn-danger']) }}
            {{ Form::close() }}
        </div>



    </div>


</body>
</section>


@endsection
