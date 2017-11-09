<?php ?>


<html>
 <head>
  <title>Wacky Waving Wellness Booking System</title>

  <!-- Use Blade to grab the CSS file. It's stored in /public/css/ -->
  <link href="{{ asset('/css/styles.css') }}" rel="stylesheet">

 </head>
 <body>
    <div id="container">
     <div id="header">
         <h1>Wacky Waving Wellness Centre</h1>
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
            				<<td><a href="booking.php">Available</a></td>
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
            	</thead>
            </table>
            <nav>
            <ul>
           <li> <a href="https://cas.usask.ca/cas/login">Log In</a></li>
           <li><a href="index.php">Search Practitioners</a></li>
           <li> <a href="booking.php">My Bookings</a></li>
            </ul>
            </nav>
</div>
	<div id="footer">
		<ul>
		<a href="#">Contact</a>
		<a href="#">Feedback</a>
		</ul>
		
<ul>
	<a href="#">Disclaimer</a>
	<a href="#">Privacy</a>
	&copy;Wacky Waving Wellnes Booking Center
		</ul>
	</div>
     </div>
 </body>
</html>
