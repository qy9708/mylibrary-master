@extends('layout.app')

@section('content')

	<!-- Bootstrap Boilerplate... -->


	<div class="panel-body" style="font-size:20px;">
	<button><a href="{{ url('/showdocindex') }}">Return to Document Submission</a></button>
		<!-- New publisher Form -->
		{!! Form::model($document,['route' => ['document.store'],
								 'class' => 'form-horizontal']) !!}

                 <div class="form-group_row">
           				{!! Form::label('document-name','Document Name',['class' => 'control-label col-sm-3',]) !!}
           				<div class="col-sm-9">
           					{!! Form::text('name',null,[
           						'id'		=> 'document-name',
           						'class'		=> 'form-control',
           						'maxlength' => 100,
           					]) !!}
           				</div>
           			<p>{{ $errors->getBag('default')->first('name') }}</p>
           			</div>
                 <br></br>
                 <br></br>
           			<div class="form-group_row">
           				{!! Form::label('document-file','File',['class' => 'control-label col-sm-3',]) !!}
           				<div class="col-sm-6">
           					{!! Form::file('file') !!}
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
