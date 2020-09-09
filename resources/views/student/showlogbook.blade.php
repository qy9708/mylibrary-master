<?php
use App\Common;
?>

@extends ('layout.app')
@section('content')

	<!-- Bootstrap Boilerplate... -->

		<h1 text-align="center"> Logbook </h1>
		<div class="panel-body">

			@if (count($firms) > 0)
				 <table class="table table-striped task-table" border="1" width="100%"
						style="border-collapse:collapse;font-family:Arial;">
				<!-- Table Headings -->
      <thead>
			<a href="{{ url('/studentdashboard') }}">Student Home Page </a>
			<br><br>
				<tr>
				 <th>No.</th>
				 <th>Week</th>
         <th>Description</th>
				 </tr>
				 </thead>



			<!-- Table Body -->
			<tbody>
			 @foreach ($logs as $i => $log)


			 <tr>
				 <td class="table-text">
				 <div>{{ $i+1 }}</div>
			 </td>
			  <td class="table-text">
				 <div>{{ $log->week }}</div>
			 </td>
       <td class="table-text">
        <div>{{ $log->description }}</div>
        </td>
			 </tr>
			 @endforeach
       @else
       @endif
			 </tbody>
		 </table>




		</div>
 @endsection
