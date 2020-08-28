<?php

 use App\Common;

 ?>
 @extends('layout.app')

 @section('content')

	 <!-- Bootstrap Boilerplate... -->

	 <div class="panel-body">
	 <button><a href="{{ url('/bookindex') }}">Return to Book List</a></button>
		 <!-- New Division Form -->
			 {!! Form::model($book, [
			 'route' => ['book.update', $book->id],
			 'method' => 'put',
			 'class' => 'form-horizontal',
			 'files' =>true
			 ]) !!}

			<div class="form-group_row">
				{!! Form::label('book-title','Title',['class' => 'control-label col-sm-3',]) !!}
				<div class="col-sm-9">
					{!! Form::text('title',null,[
						'id'		=> 'book-title',
						'class'		=> 'form-control',
						'maxlength' => 1000,

					]) !!}
				</div>
			<p>{{ $errors->getBag('default')->first('name') }}</p>
			</div>
      <br></br>
      <div class="form-group_row">
				{!! Form::label('book-image','Image',['class' => 'control-label col-sm-3',]) !!}
				<div class="col-sm-0">
			{!! Form::file('image') !!}
			</div>
		</div>
		<br>
			<div class="form-group row">
				{!! Form::label('book-category','Category',['class' => 'control-label col-sm-3',]) !!}
				<div class="col-sm-9">
					@foreach(Common::$categorys as $key => $val)
					{!! Form::radio('category',$key) !!} {{$val}}<br>
					@endforeach
				<p>{{ $errors->getBag('default')->first('category') }}</p>
				</div>
			</div>
			<br></br>
      <div class="form-group row">
				{!! Form::label('book-status','Status',['class' => 'control-label col-sm-3',]) !!}
				<div class="col-sm-9">
					@foreach(Common::$status as $key => $val)
					{!! Form::radio('status',$key) !!} {{$val}}<br>
					@endforeach
				<p>{{ $errors->getBag('default')->first('status') }}</p>
				</div>
			</div>
			<br></br>
      <div class="form-group_row">
        {!! Form::label('book-edition','edition',['class' => 'control-label col-sm-3',]) !!}
        <div class="col-sm-9">
          {!! Form::text('edition',null,[
            'id'		=> 'book-edition',
            'class'		=> 'form-control',
            'maxlength' => 6,
          ]) !!}
          <p>{{ $errors->getBag('default')->first('edition') }}</p>
        </div>
      </div>
      <br>
      <div class="form-group_row">
        {!! Form::label('book-year','Year',['class' => 'control-label col-sm-3',]) !!}
        <div class="col-sm-9">
          {!! Form::text('year',null,[
            'id'		=> 'book-year',
            'class'		=> 'form-control',
            'maxlength' => 5,
          ]) !!}
          <p>{{ $errors->getBag('default')->first('year') }}</p>
        </div>
      </div>
      <br>
	  <div class="form-group row">
					{!! Form::label('authors-name','Authors',['class' => 'control-label col-sm-3',]) !!}
					<br>
					<div class="col-sm-9">
						{!! Form::select('authors[]',
							$authors,
							null,
							['class' => 'form-control',
							'multiple' => 'multiple']) !!}
					</div>
				</div>
        <br></br>
        <div class="form-group_row">
          {!! Form::label('book-publisher_id','Publisher Id',['class' => 'control-label col-sm-3',]) !!}
          <div class="col-sm-9">
            {!! Form::text('publisher_id',null,[
              'id'		=> 'book-status',
              'class'		=> 'form-control',
              'maxlength' => 2,
            ]) !!}
            <p>{{ $errors->getBag('default')->first('publisher_id') }}</p>
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
