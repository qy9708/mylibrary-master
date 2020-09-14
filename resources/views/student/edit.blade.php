<?php
 use App\Common;
 ?>
 @extends('layout.app')

 @section('content')

	 <!-- Bootstrap Boilerplate... -->

	 <div class="panel-body">
	 <button><a href="{{ url('/logindex') }}">Return to Log Records</a></button>
			 {!! Form::model($log, [
			 'route' => ['student.update', $log->id],
			 'method' => 'put',
			 'class' => 'form-horizontal',
			 ]) !!}

			<div class="form-group_row">
				{!! Form::label('log-week','Week',['class' => 'control-label col-sm-3',]) !!}
				<div class="col-sm-3">
					{!! Form::text('week',null,[
						'id'		=> 'log-week',
						'class'		=> 'form-control',
						'maxlength' => 10,
					]) !!}
				</div>
			<p>{{ $errors->getBag('default')->first('week') }}</p>
			</div>
		<br></br>
			<div class="form-group row">
				{!! Form::label('firm-description','Description',['class' => 'control-label col-sm-3',]) !!}
				<div class="col-sm-6 col-md-4">
          {!! Form::textarea('description',null,[
            'id'		=> 'log-description',
            'class'		=> 'form-control',
            'maxlength' => 5000,
          ]) !!}
				</div>
        <p>{{ $errors->getBag('default')->first('description') }}</p>
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
