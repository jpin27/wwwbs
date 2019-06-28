@extends('layouts.master')


@section('headcontent')
    <link rel="stylesheet" href="css/Footer-Basic.css">
@endsection


@section('content')






<section>
<body style="background-color:rgb(123,184,108)">


	{{ Form::open([
	    'route' => 'appointments.store'
	]) }}



    <div class="container">

    	<h1>Book an Appointment</h1>
		<p class="lead">Add to your appointment list below.</p>
		<hr>

		{{-- Show error messages --}}
		@include('layouts.errors')

		{{-- Show success message --}}
		@if(Session::has('flash_message'))
		    <div class="alert alert-success">
		        {{ Session::get('flash_message') }}
		    </div>
		@endif



      <form>


        <div class="row">
            <div class="col-md-1 center-block mx-auto">
                <div id="datepicker" data-date="new Date"></div>
        		<input type="hidden" id="my_hidden_input">
            </div>



            <div class="col-md-3 center-block mx-auto">

              <select style="margin:30px 0px 0px 0px; width:300px; background-color:rgb(65,150,65); color:#ffff;">
                     <option> Select Practitioner</option>
                     @foreach ($doctors as $doctor)
                          <option>Dr. {{$doctor->lastName}} </option>
                     @endforeach;

            </select>

            <select style="margin:30px 0px 0px 0px; width:300px; background-color:rgb(65,150,65); padding:150px; color:#ffff;">
                   <option>Select time</option>
                   <option value="9">9:30am</option>
                   <option value="10">10:00am</option>
                   <option value="11">10:30am</option>
                   <option value="12">11:00am</option>
                   <option value="13">11:30am</option>
          </select>

          <select style="margin:30px 0px 0px 0px; width:300px; background-color:rgb(65,150,65); padding:150px; color:#ffff;">
                 <option> Select Service type</option>
                 <option value="14">Medical Appointment</option>
                 <option value="15">Mental Health Assessment</option>
                 <option value="16">Nutritional Counseling</option>
                 <option value="17">Sexual Health Care</option>
                 <option value="18">Physiotherapy</option>
                 <option value="19">Massage Therapy</option>
                 <option value="20">Chiropractice</option>
                 <option value="21">Travel Immunization</option>
        </select>

                <!-- <div class="dropdown" style="margin:10px 0px 0px 0px;">
                    <button class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="background-color:#4C934C;width:300px;">Select Practitioner </button>
                    <ul class="dropdown-menu" role="menu">


                        @foreach ($doctors as $doctor)
                            <li role="presentation"><a href="#">Dr. {{$doctor->lastName}}</a></li>
                        @endforeach;
                    </ul>

                </div> -->

                <!-- <div class="dropdown" style="margin:10px 0px 0px 0px;">
                    <button class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="width:300px;padding:0px;background-color:#4C934C;height:34px;">Select Time </button>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation"><a href="#">First Item</a></li>
                        <li role="presentation"><a href="#">Second Item</a></li>
                        <li role="presentation"><a href="#">Third Item</a></li>
                    </ul>
                </div> -->

                <!-- <div class="dropdown" style="margin:10px 0px 0px 0px;">
                    <button class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="width:300px;padding:0px;background-color:#4C934C;height:34px;">Service Type</button>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation"><a href="#">Medical Appointment</a></li>
                        <li role="presentation"><a href="#">Mental Health Assessment</a></li>
                        <li role="presentation"><a href="#">Nutritional Counseling</a></li>
                        <li role="presentation"><a href="#">Sexual Health Care</a></li>
                    </ul>
                </div> -->
            </div>

        </div>

        <div class="row">
            <div class="col-md-12" style="padding:35px 0px;">





                    <div class="form-group">
					    {{ Form::label('brief_desc', 'Brief Description:', ['class' => 'control-label']) }}
					    {{ Form::text('brief_desc', null, ['class' => 'form-control']) }}
					</div>


					<div class="form-group">
					    {{ Form::label('full_desc', 'Other details:', ['class' => 'control-label']) }}
					    {{ Form::textarea('full_desc', null, ['class' => 'form-control']) }}
					</div>



                    <div class="form-group">
                        {{ Form::submit('Book Appointment', ['class' => 'btn btn-primary']) }}
                    </div>



            </div>
        </div>
    </div>

{{ Form::close() }}

</body>
</section>


@endsection
