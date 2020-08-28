<?php

 use App\Common;

 ?>
 @extends('layout.app')

 @section('content')

	 <!-- Bootstrap Boilerplate... -->

	 <div class="panel-body">
	 <button><a href="{{ url('/authorindex') }}">Return to Author List</a></button>
		 <!-- New Division Form -->
			 {!! Form::model($author, [
			 'route' => ['author.update', $author->id],
			 'method' => 'put',
			 'class' => 'form-horizontal'
			 ]) !!}

			<div class="form-group_row">
				{!! Form::label('author-name','Name',['class' => 'control-label col-sm-3',]) !!}
				<div class="col-sm-9">
					{!! Form::text('name',null,[
						'id'		=> 'author-name',
						'class'		=> 'form-control',
						'maxlength' => 1000,
					]) !!}
				</div>
			<p>{{ $errors->getBag('default')->first('name') }}</p>
			</div>
      <br></br>
      <br></br>


			 <!-- Submit Button -->
			<div class="form-group_row">
				<div class="col-sm-offset-3 col-sm-6">
					{!! Form::button('Update',[
						'type'		=> 'submit',
						'class'		=> 'btn_btn-primary',
					]) !!}
				</div>
			</div>
			 {!! Form::close() !!}
		 </div>

 @endsection
