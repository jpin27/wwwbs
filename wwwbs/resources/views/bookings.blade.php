@extends('layouts.master')
@section('headcontent')

      <link rel="stylesheet" href="css/Footer-Basic.css">
@endsection
@section('content')
<section>
<body style="background-color:rgb(123,184,108)">
    <div class="container">
      <h2 > Make a Booking </h2><br>
        <div class="row">
            <div class="col-md-1 center-block mx-auto">
                <div id="datepicker" data-date="new Date"></div>
        		<input type="hidden" id="my_hidden_input">
            </div>

            <div class="col-md-3 center-block mx-auto">

              <select style="margin:30px 0px 0px 0px; width:300px; background-color:rgb(65,150,65); color:#ffff;">
                     <option> Select Practitioner</option>
                     <option value="1">Dr. Jay</option>
                     <option value="2">Dr. Hiba</option>
                     <option value="3">Dr. Tayyab</option>
                     <option value="4">Dr. Thrwat</option>
                     <option value="5">Dr. Fahd</option>
                     <option value="6">Dr. Charles</option>
                     <option value="7">Dr. Jesse</option>
                     <option value="8">Dr. Brennan</option>

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
                            <li role="presentation"><a href="#">Dr. Jay</a></li>
                            <li role="presentation"><a href="#">Dr. Hiba</a></li>
                            <li role="presentation"><a href="#">Dr. Tayyab</a></li>
                            <li role="presentation"><a href="#">Dr. Thrwat</a></li>
                            <li role="presentation"><a href="#">Dr. Fahd</a></li>
                            <li role="presentation"><a href="#">Dr. Charles</a></li>
                            <li role="presentation"><a href="#">Dr. Brennan</a></li>
                            <li role="presentation"><a href="#">Dr. Jesse</a></li>
                    </ul>

                </div>

                <div class="dropdown" style="margin:10px 0px 0px 0px;">
                    <button class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="width:300px;padding:0px;background-color:#4C934C;height:34px;">Select Time </button>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation"><a href="#">First Item</a></li>
                        <li role="presentation"><a href="#">Second Item</a></li>
                        <li role="presentation"><a href="#">Third Item</a></li>
                    </ul>
                </div>

                <div class="dropdown" style="margin:10px 0px 0px 0px;">
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
                <form>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Brief Description">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Detailed Description (optional)"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success" type="button" style="background-color:#4C934C;">Save </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</section>
@endsection
