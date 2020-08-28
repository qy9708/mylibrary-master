<?php
use App\Common;
?>

@extends ('layout.app')
@section('content')

	<!-- Bootstrap Boilerplate... -->

		<h1> Publisher List </h1>
		<div class="panel-body">
			@if (count($publishers) > 0)
			 <table class="table table-striped task-table" border="1" width="100%"
					style="border-collapse:collapse;font-family:Arial;">
			<!-- Table Headings -->
			<thead>
			<a href="{{ url('/admin') }}">Admin Home Page         </a>
				<a>  |  </a>
			<a href="{{ url('/publisher/create') }}"> Add New Publisher</a>
			<br>
				<tr>
				 <th>No.</th>
				 <th>Name</th>
				 <th>Address</th>
				 <th>Email</th>
         <th>Created At</th>
         <th>Updated At</th>
				 <th colspan="2">Actions</th>
				 </tr>
				 </thead>

			<!-- Table Body -->
			<tbody>
			 @foreach ($publishers as $i => $publisher)


			 <tr>
				 <td class="table-text">
				 <div>{{ $i+1 }}</div>
			 </td>
			  <td class="table-text">
				 <div>{{ $publisher->name }}</div>
			 </td>

			 <td class="table-text">
				 <div>{{ $publisher->address }}</div>
			 </td>
			 <td class="table-text">
				 <div>{{ $publisher->email }}</div>
			 </td>
			 <td class="table-text">
				 <div>{{ $publisher->created_at }}</div>
			 </td>
       <td class="table-text">
        <div>{{ $publisher->updated_at }}</div>
      </td>
			 <td class="table-text">
				 <div>
				 {!! link_to_route( 'publsher.edit',
									 $title = 'Edit',
									 $parameters = ['id' => $publisher->id, ]
				  ) !!}

				 </div>
			 </td>
			 <td class="table-text">

				<div>

				{!! Form::open(['method' => 'DELETE',
								'route' => ['publisher.destroy',
								$publisher->id],
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

			 </tbody>
		 </table>


		@else
		<div>
			<a href="{{ url('/publisher/create') }}">Add New Publisher</a>
			<br><br>
			 No records found
		 </div>
		@endif

		</div>
 @endsection
