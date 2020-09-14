<?php
use App\Common;
?>

@extends ('layout.app')
@section('content')

	<!-- Bootstrap Boilerplate... -->


		<h1 text-align="center"> Document </h1>
		<div class="panel-body">

			@if (count($documents) > 0)
				 <table class="table table-striped task-table" border="1" width="100%"
						style="border-collapse:collapse;font-family:Arial;">
				<!-- Table Headings -->
      <thead>
			<a href="{{ url('/studentdashboard') }}">Student Home Page </a>
			<a>  |  </a>
			<a href="{{ url('/student/create') }}"> Add New Document</a>
			<br></br>


				<tr>
				 <th>No.</th>
				 <th>Document Name</th>
         <th>Description</th>
				 <th colspan="2">Actions</th>
				 </tr>
				 </thead>
			<!-- Table Body -->
			<tbody >
			 @foreach ($documents as $i => $document)
			 <tr>
				 <td class="table-text">
				 <div>{{ $i+1 }}</div>
			 </td>
			  <td class="table-text">
				 <div>{{ $document->name }}</div>
			 </td>
       <td class="table-text">
        <div>{{ $document->file }}</div>
        </td>
				<td class="table-text">
				 <div >
				 {!! link_to_route( 'student.edit',
									 $title = 'Edit',
									 $parameters = ['id' => $document->id, ]
					) !!}

				 </div>
			 </td>
				<td class="table-text" colspan="4">

				<div>

				{!! Form::open(['method' => 'DELETE',
								'route' => ['student.destroy',
								$document->id],
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
