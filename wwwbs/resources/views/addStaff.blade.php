@extends ('layouts.master')


@section('content')

	<main role="main">
		<form>
			<label style="width: 10%">First Name:</label>
			<input type="text"><br>
			<label style="width: 10%">Last Name:</label>
			<input type="text"><br>
			<label style="width: 10%">Email:</label>
			<input type="email"><br>
			<label style="width: 10%">Choose Role:</label>
			<select style="width: 16%">
                <option> Choose </option>
                <option>Practitioner</option>
                <option>Receptionist</option>
                <option>Administrator</option>
            </select><br>
			<input type="submit" value="Save"class="button" style="width: 10%">
			
			
		</form>
		
		
		
	</main>






@endsection