<?php
use App\Common;
?>

@extends ('layout.app')
@section('content')

	<!-- Bootstrap Boilerplate... -->


		<h1 text-align="center"> Student Info </h1>
		<div class="panel-body">

			@if (count($users) > 0)
				 <table class="table table-striped task-table" border="1" width="100%"
						style="border-collapse:collapse;font-family:Arial;">

			<a href="{{ url('/studentdashboard') }}">Student Home Page </a>
			<dl>
        <dt> Name: </dt>
        <dt> Email: </dt>
      </dl>
		</div>
 @endsection
