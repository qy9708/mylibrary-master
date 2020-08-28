<?php
use App\Common;
?>

@extends ('layout.app')
@section('content')

	<!-- Bootstrap Boilerplate... -->

		<h1> Author List </h1>
		<div class="panel-body">
			@if (count($authors) > 0)
			 <table class="table table-striped task-table" border="1" width="100%"
					style="border-collapse:collapse;font-family:Arial;">
			<!-- Table Headings -->
			<thead>
			<a href="{{ url('/admin') }}">Admin Home Page         </a>
				<a>  |  </a>
			<a href="{{ url('/author/create') }}">Add New Author</a>
			<br>
				<tr>
				 <th>No.</th>
				 <th>Name</th>
         <th>Created At</th>
         <th>Updated At</th>
				 <th colspan="2">Actions</th>
				 </tr>
				 </thead>

			<!-- Table Body -->
			<tbody>
			 @foreach ($authors as $i => $author)


			 <tr>
				 <td class="table-text">
				 <div>{{ $i+1 }}</div>
			 </td>
			  <td class="table-text">
				 <div>{{ $author->name }}</div>
			 </td>
			 <td class="table-text">
				<div>{{ $author->created_at }}</div>
			</td>
			 <td class="table-text">
				<div>{{ $author->updated_at }}</div>
			</td>

			 <td class="table-text">
				 <div>
				 {!! link_to_route( 'author.edit',
									 $title = 'Edit',
									 $parameters = ['id' => $author->id, ]
				  ) !!}

				 </div>
			 </td>
			 <td class="table-text">

				<div>

				{!! Form::open(['method' => 'DELETE',
								'route' => ['author.destroy',
								$author->id],
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
			<a href="{{ url('/author/create') }}">Add New Author</a>
			<br><br>
			 No records found
		 </div>
		@endif

		</div>
 @endsection
