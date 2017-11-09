{{-- 
    Powerful Blade layouting in action. Instead of typing the repetitive <html> blah blah,
    we just extend whatever's in the layout file at /resources/views/layouts/master.blade.php.
    No more repetitive html styling. Cool, eh? 
--}}
@extends ('layouts.master')

{{-- 
    Remember the @yield('content') in layouts/master.blade.php? Well, this is the section that replaces it. Here we put the actual body of our welcome page.
 --}}
@section ('content')

    {{-- I don't know what this shit is for. Got it from Bootstrap. --}}
    <main role="main">

        <!-- Jumbotron -->
        <div class="jumbotron">
          <h1>Fuck!</h1>
          <p class="lead">This fucking webpage took 4 hours to make. Shit! Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.</p>
          {{-- TODO: Read on Bootstrap components and use them --}}
          <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>
        </div>

        <div class="docSelector">
            <select>
                <option> Choose Doctor </option>
                <option>Dr. Tayyab</option>
                <option>Dr. Jay</option>
                <option>Dr. Thrwat</option>
                <option>Dr. Fahd</option>
                <option>Dr. Hiba</option>
                <option>Dr. Jesse</option>
                <option>Dr. Brennan</option>
                <option>Dr. Charles</option>
            </select>
        </div>

        <div class="dateSelector">
            <select>
                <option> Date </option>
                <option>October 13, 2017</option>
                <option>October 14, 2017</option>
                <option>October 15, 2017</option>
                <option>October 16, 2017</option>
                <option>October 17, 2017</option>
                <option>October 18, 2017</option>
                <option>October 19, 2017</option>
            </select>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Time</th>
                    <th style="width: 95%; text-align: left">Dr. Tayyab
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>09:00AM</td>
                    <td>Closed</td>
                </tr>
                <tr>
                    <td>09:30AM</td>
                    <td><a href="{{ url('/bookappt') }}">Available</a></td>
                </tr>
                <tr>
                    <td>10:00AM</td>
                    <td><a href="booking.php">Available</a></td>
                </tr>
                <tr>
                    <td>10:30AM</td>
                    <td><a href="booking.php">Available</a></td>
                </tr>
                <tr>
                    <td>11:00AM</td>
                    <td>Booked</td>
                </tr>
                <tr>
                    <td>11:30AM</td>
                    <td><a href="booking.php">Available</a></td>
                </tr>
                <tr>
                    <td>12:00PM</td>
                    <td rowspan="2" style="vertical-align: baseline">Lunch Hour</td>
                </tr>
                <tr>
                    <td>12:30PM</td>
                </tr>
                <tr>
                    <td>1:00PM</td>
                    <td><a href="booking.php">Available</a></td>
                </tr>
                <tr>
                    <td>1:30PM</td>
                    <td><a href="booking.php">Available</a></td>
                </tr>
                <tr>
                    <td>2:00PM</td>
                    <td><a href="booking.php">Available</a></td>
                </tr>
                <tr>
                    <td>2:30PM</td>
                    <td><a href="booking.php">Available</a></td>
                </tr>
                <tr>
                    <td>3:00PM</td>
                    <td><a href="booking.php">Available</a></td>
                </tr>
                <tr>
                    <td>3:30PM</td>
                    <td><a href="booking.php">Available</a></td>
                </tr>
                <tr>
                    <td>4:00PM</td>
                    <td><a href="booking.php">Available</a></td>
                </tr>
                <tr>
                    <td>4:30PM</td>
                    <td><a href="booking.php">Available</a></td>
                </tr>
                <tr>
                    <td>5:00PM</td>
                    <td><a href="booking.php">Available</a></td>
                </tr>
                <tr>
                    <td>5:30PM</td>
                    <td><a href="booking.php">Available</a></td>
                </tr>
                <tr>
                    <td>6:00PM</td>
                    <td>Closed</td>
                </tr>      
            </tbody>
        </table>

        <!-- Example row of columns -->
        {{-- <div class="row">
          <div class="col-lg-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-lg-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-lg-4">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
            <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
          </div>
        </div> --}}

      </main>

@endsection

{{-- We don't need to define a footer here because it's already in the master layout. 
    If we wanted a special footer, we could create a @section('footer') here