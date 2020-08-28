@extends('layout.app')

@section('content')

	<!-- Bootstrap Boilerplate... -->


	<div class="panel-body" style="font-size:20px;">
	<button><a href="{{ url('/publisherindex') }}">Return to publisher List</a></button>
		<!-- New publisher Form -->
		{!! Form::model($publisher,['route' => ['publisher.store'],
								 'class' => 'form-horizontal']) !!}

                 <div class="form-group_row">
           				{!! Form::label('publisher-name','Name',['class' => 'control-label col-sm-3',]) !!}
           				<div class="col-sm-9">
           					{!! Form::text('name',null,[
           						'id'		=> 'publisher-name',
           						'class'		=> 'form-control',
           						'maxlength' => 1000,
           					]) !!}
           				</div>
           			<p>{{ $errors->getBag('default')->first('name') }}</p>
           			</div>
                 <br></br>
                 <br></br>
           			<div class="form-group_row">
           				{!! Form::label('publisher-address','Address',['class' => 'control-label col-sm-3',]) !!}
           				<div class="col-sm-9">
           					{!! Form::text('address',null,[
           						'id'		=> 'publisher-address',
           						'class'		=> 'form-control',
           						'maxlength' => 1000,
           					]) !!}
           				</div>
           			<p>{{ $errors->getBag('default')->first('address') }}</p>
           			</div>
                 <br></br>
                 <br></br>
           			<div class="form-group_row">
           				{!! Form::label('publisher-email','Email',['class' => 'control-label col-sm-3',]) !!}
           				<div class="col-sm-9">
                     {!! Form::text('email',null,[
                       'id'		=> 'publisher-email',
                       'class'		=> 'form-control',
                       'maxlength' => 255,
                     ]) !!}
           				<p>{{ $errors->getBag('default')->first('email') }}</p>

           				</div>
           			</div>
                 <br></br>
           			<br></br>
			<!-- Submit Button -->
			<div class="form-group_row">
				<div class="col-sm-offset-3 col-sm-6">
					{!! Form::button('Save',[
						'type'		=> 'submit',
						'class'		=> 'btn_btn-primary',
					]) !!}
				</div>
			</div>

			{!! Form::close() !!}
	</div>

@endsection
