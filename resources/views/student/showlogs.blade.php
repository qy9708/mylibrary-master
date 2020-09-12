<?php
use App\Common;
?>

@extends ('layout.app')
@section('content')

	<!-- Bootstrap Boilerplate... -->

		<h1 text-align="center"> Logbook </h1>
		<div class="panel-body">

			@if (count($logs) > 0)
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
				 <th colspan="2">Actions</th>
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
				<td class="table-text">
				 <div>
				 {!! link_to_route( 'student.edit',
									 $title = 'Edit',
									 $parameters = ['id' => $student->id, ]
					) !!}

				 </div>
			 </td>
				<td class="table-text">

				<div>

				{!! Form::open(['method' => 'DELETE',
								'route' => ['student.destroy',
								$student->id],
								'onsubmit' => 'return confirm("Are you sure ?")']
				) !!}

				{!! Form::submit('Delete',
								['class' => 'btn btn-danger']
				) !!}

				{!! Form::close()
				!!}
				</div>

				</td>
			 </tr>
			 @endforeach
       @else
       @endif
			 </tbody>
		 </table>




		</div>
 @endsection
