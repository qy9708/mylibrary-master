<?php
use App\Common;
?>
<html>
<style>
.wrapper {
    text-align: center;
    padding: 10px 24px;
    cursor: pointer;
    display: block;
    font-size: 20px;
}

.button {
    position: absolute;
    top: 50%;
}
.h{
  text-align: center;
  font-size: 20px;
}
</style>

@extends ('layout.app')
@section('content')
<br></br>
<div class="wrapper">
  <h>Please select one table:</h>
<br></br>
<button type="button" onclick="window.location='{{ url("/bookindex") }}'">Book</button>
<button type="button" onclick="window.location='{{ url("/publisherindex") }}'">Publisher</button>
<button type="button" onclick="window.location='{{ url("/authorindex") }}'">Author</button>
</div>
<div>
    <img src="/images/banner.png" alt = "Banner" height ="500" width="100%">
    <div>
@endsection
