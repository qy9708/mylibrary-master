<?php
use App\Common;
?>

@extends ('layout.app')
@section('content')

	<!-- Bootstrap Boilerplate... -->

		<h1 text-align="center"> Company List </h1>
		<div class="panel-body">

			@if (count($firms) > 0)
				 <table class="table table-striped task-table" border="1" width="100%"
						style="border-collapse:collapse;font-family:Arial;">
				<!-- Table Headings -->
      <thead>
			<a href="{{ url('/lecturerdashboard') }}">Lecturer Home Page </a> //cannot center
			<br><br>
				<tr>
				 <th>No.</th>
				 <th>Name</th>
         <th>Registration Number</th>
         <th>Location</th>
         <th>Email</th>
         <th>Phone</th>
         <th>Website</th>
         <th>Nature of Business</th>
				 </tr>
				 </thead>



			<!-- Table Body -->
			<tbody>
			 @foreach ($firms as $i => $firm)


			 <tr>
				 <td class="table-text">
				 <div>{{ $i+1 }}</div>
			 </td>
			  <td class="table-text">
				 <div>{{ $firm->name }}</div>
			 </td>
       <td class="table-text">
        <div>{{ $firm->reg_no }}</div>
        </td>
        <td class="table-text">
          <div>{{ $firm->location }}</div>
        </td>
        <td class="table-text">
          <div>{{ $firm->email }}</div>
        </td>
        <td class="table-text">
          <div>{{ $firm->phone_no }}</div>
        </td>
        <td class="table-text">
          <div>{{ $firm->website }}</div>
        </td>
        <td class="table-text">
          <div>{{ $firm->nature_of_business }}</div>
        </td>
			 </tr>
			 @endforeach
       @else
       @endif
			 </tbody>
		 </table>




		</div>
 @endsection
