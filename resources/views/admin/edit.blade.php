<?php
 use App\Common;
 ?>
 @extends('layout.app')

 @section('content')

	 <!-- Bootstrap Boilerplate... -->

	 <div class="panel-body">
	 <button><a href="{{ url('/firmindex') }}">Return to Company List</a></button>
			 {!! Form::model($firm, [
			 'route' => ['admin.update', $firm->id],
			 'method' => 'put',
			 'class' => 'form-horizontal',
			 ]) !!}

			<div class="form-group_row">
				{!! Form::label('firm-name','Company Name',['class' => 'control-label col-sm-3',]) !!}
				<div class="col-sm-9">
					{!! Form::text('name',null,[
						'id'		=> 'firm-name',
						'class'		=> 'form-control',
						'maxlength' => 1000,
					]) !!}
				</div>
			<p>{{ $errors->getBag('default')->first('name') }}</p>
			</div>
		<br></br>
			<div class="form-group row">
				{!! Form::label('firm-reg_no','Registration Number',['class' => 'control-label col-sm-3',]) !!}
				<div class="col-sm-3">
          {!! Form::text('reg_no',null,[
            'id'		=> 'firm-reg_no',
            'class'		=> 'form-control',
            'maxlength' => 1000,
          ]) !!}
				</div>
        <p>{{ $errors->getBag('default')->first('reg_no') }}</p>
			</div>
      <div class="form-group row">
				{!! Form::label('firm-location','Location',['class' => 'control-label col-sm-3',]) !!}
				<div class="col-sm-3">
          {!! Form::text('location',null,[
            'id'		=> 'firm-location',
            'class'		=> 'form-control',
            'maxlength' => 100,
          ]) !!}
				</div>
        <p>{{ $errors->getBag('default')->first('location') }}</p>
			</div>
      <div class="form-group row">
        {!! Form::label('firm-email','Email',['class' => 'control-label col-sm-3',]) !!}
        <div class="col-sm-3">
          {!! Form::text('email',null,[
            'id'		=> 'firm-email',
            'class'		=> 'form-control',
            'maxlength' => 50,
          ]) !!}
        </div>
        <p>{{ $errors->getBag('default')->first('email') }}</p>
      </div>
      <div class="form-group row">
        {!! Form::label('firm-phone_no','Phone Number',['class' => 'control-label col-sm-3',]) !!}
        <div class="col-sm-3">
          {!! Form::text('phone_no',null,[
            'id'		=> 'firm-phone_no',
            'class'		=> 'form-control',
            'maxlength' => 20,
          ]) !!}
        </div>
        <p>{{ $errors->getBag('default')->first('phone_no') }}</p>
      </div>
      <div class="form-group row">
        {!! Form::label('firm-website','Website',['class' => 'control-label col-sm-3',]) !!}
        <div class="col-sm-3">
          {!! Form::text('website',null,[
            'id'		=> 'firm-website',
            'class'		=> 'form-control',
            'maxlength' => 30,
          ]) !!}
        </div>
        <p>{{ $errors->getBag('default')->first('website') }}</p>
      </div>
      <div class="form-group row">
        {!! Form::label('firm-nature_of_business','Nature of Business',['class' => 'control-label col-sm-3',]) !!}
        <div class="col-sm-9">
          {!! Form::text('nature_of_business',null,[
            'id'		=> 'firm-nature_of_business',
            'class'		=> 'form-control',
            'maxlength' => 30,
          ]) !!}
        </div>
        <p>{{ $errors->getBag('default')->first('nature_of_business') }}</p>
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
