<?php
use App\Common;
?>

@extends ('layout.app')
@section('content')

	<!-- Bootstrap Boilerplate... -->

		<h1> Company List </h1>
		<div class="panel-body">
      <thead>
			<a href="{{ url('/studentdashboard') }}">Student Home Page         </a>
			<br>
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

		@if (count($firms) > 0)
			 <table class="table table-striped task-table" border="1" width="100%"
					style="border-collapse:collapse;font-family:Arial;">
			<!-- Table Headings -->

			<!-- Table Body -->
			<tbody>
			 @foreach ($firms as $i => $firm)


			 <tr>
				 <td class="table-text">
				 <div>{{ $i+1 }}</div>
			 </td>
			  <td class="table-text">
				 <div>{{ $firms->name }}</div>
			 </td>
       <td class="table-text">
        <div>{{ $firms->reg_no }}</div>
        </td>
        <td class="table-text">
          <div>{{ $firms->location }}</div>
        </td>
        <td class="table-text">
          <div>{{ $firms->email }}</div>
        </td>
        <td class="table-text">
          <div>{{ $firms->phone_no }}</div>
        </td>
        <td class="table-text">
          <div>{{ $firms->website }}</div>
        </td>
        <td class="table-text">
          <div>{{ $firms->nature_of_business }}</div>
        </td>
			 </tr>
			 @endforeach
       @else
       @endif
			 </tbody>
		 </table>




		</div>
 @endsection
