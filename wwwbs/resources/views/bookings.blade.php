@extends('layouts.master')

@section('content')

<section>
    <div class="container">
        <div class="row">


        
            <div class="col-md-1 center-block mx-auto">
                <div id="datepicker" data-date="12/03/2012"></div>
        		<input type="hidden" id="my_hidden_input">
            </div>

            <div class="col-md-4 center-block mx-auto">

                <div class="dropdown" style="margin:10px 0px 0px 0px;">
                    <button class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="background-color:#4C934C;width:300px;">Select Practitioner </button>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation"><a href="#">First Item</a></li>
                        <li role="presentation"><a href="#">Second Item</a></li>
                        <li role="presentation"><a href="#">Third Item</a></li>
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
                        <li role="presentation"><a href="#">First Item</a></li>
                        <li role="presentation"><a href="#">Second Item</a></li>
                        <li role="presentation"><a href="#">Third Item</a></li>
                    </ul>
                </div>

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
</section>
@endsection