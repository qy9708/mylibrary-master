@extends('layout.app')

@section('content')

	<!-- Bootstrap Boilerplate... -->


	<div class="panel-body" style="font-size:20px;">
	<button><a href="{{ url('/showlogindex') }}">Return to Log Records</a></button>
		<!-- New Log Form -->
		{!! Form::model($logs,['route' => ['student.store'],
								 'class' => 'form-horizontal']) !!}

                 <div class="form-group_row">
           				{!! Form::label('log-week','Week',['class' => 'control-label col-sm-3',]) !!}
           				<div class="col-sm-9">
           					{!! Form::text('week',null,[
           						'id'		=> 'log-week',
           						'class'		=> 'form-control',
           						'maxlength' => 10,
           					]) !!}
           				</div>
           			<p>{{ $errors->getBag('default')->first('week') }}</p>
           			</div>
                 <br></br>
                 <br></br>
           			<div class="form-group_row">
           				{!! Form::label('log-description','Description',['class' => 'control-label col-sm-3',]) !!}
           				<div class="col-sm-6">
           					{!! Form::textarea('description',null,[
           						'id'		=> 'log-description',
           						'class'		=> 'form-control',
           						'maxlength' => 5000,
           					]) !!}
           				</div>
           			<p>{{ $errors->getBag('default')->first('description') }}</p>
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
