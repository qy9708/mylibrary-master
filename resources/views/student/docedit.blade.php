<?php
 use App\Common;
 ?>
 @extends('layout.app')

 @section('content')

	 <!-- Bootstrap Boilerplate... -->

	 <div class="panel-body">
	 <button><a href="{{ url('/docindex') }}">Return to Document</a></button>
			 {!! Form::model($document, [
			 'route' => ['student.update', $document->id],
			 'method' => 'put',
			 'class' => 'form-horizontal',
			 ]) !!}

			<div class="form-group_row">
				{!! Form::label('document-name','File Name',['class' => 'control-label col-sm-3',]) !!}
				<div class="col-sm-3">
					{!! Form::text('name',null,[
						'id'		=> 'document-name',
						'class'		=> 'form-control',
						'maxlength' => 100,
					]) !!}
				</div>
			<p>{{ $errors->getBag('default')->first('name') }}</p>
			</div>
		<br></br>
			<div class="form-group row">
				{!! Form::label('document-file','File',['class' => 'control-label col-sm-3',]) !!}
				<div class="col-sm-6 col-md-4">
          {!! Form::file('file') !!}
				</div>
			</div>
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
