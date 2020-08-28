<style>
ul{
  list-style-type: square;
}
</style>

@extends('layout.front')

@section('title','AboutUs')

@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <div class="w3-sidebar w3-bar-block w3-bar-right" style="width:25%;height: auto;background-color:#E6E6FA;">
    <a href="/aboutus" class="w3-bar-item w3-button">Introduction</a>
    <a href="/aboutusvision" class="w3-bar-item w3-button">Vision & Mission</a>
    <a href="/aboutusservice" class="w3-bar-item w3-button">Services</a>
    <a href="/aboutuscontactus" class="w3-bar-item w3-button">Contact Us</a>
  </div>

  <div style="margin-left:25%">

  <div class="w3-container" style="background-color:#E6E6FA">
  <h1 style="color:blue"> LIBRARY VISION </h1>
  <p>To be a reputable academic library that providing educational excellence with transformative societal impact.</p>
  <h1 style="color:blue"> LIBRARY MISSION </h1>
  <p>To provide quality resources and services in support of the advancement of teaching, learning and research.</p>
  <br></br>
  <h1 style="color:blue"> LIBRARY GOALS </h1>
  <p>In line with its mission, the Library is committed to:</p>
  <ul>
  <li>Provide relevant and adequate information resources in a timely manner.</li>
  <li>Provide efficient and quality services and facilities.</li>
  <li>Engage technology where appropriate to improve services.</li>
  <li>Ensure staff skills and professionalism are continuously upgraded to provide quality services .</li>
  </ul>
  </div>

@endsection
