@extends('layout.front')

@section('title','AboutUs')

@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <div class="w3-sidebar w3-bar-block w3-border-right" style="width:25%;height: auto;background-color:#E6E6FA">
    <a href="/aboutus" class="w3-bar-item w3-button">Introduction</a>
    <a href="/aboutusvision" class="w3-bar-item w3-button">Vision & Mission</a>
    <a href="/aboutusservice" class="w3-bar-item w3-button">Services</a>
    <a href="/aboutuscontactus" class="w3-bar-item w3-button">Contact Us</a>
  </div>

  <div style="margin-left:25%">

  <div class="w3-container w3-dark-grey">
    <h1>INTRODUCTION</h1>
  </div>

  <div class="w3-container">
  <p>The Web Library is located in the heart of Kuala Lumpur.
    A few common learning areas have been designated for student discussion,
    as opposed to the Quiet Learning Area for student self-study.
    In addition, there are also discussion rooms provided for group study and discussions,
    with computer laboratories integrated with the Library for student access to the digital learning resources and the Internet.</p>
  <br></br>
  <p>This Web Library Management System is a system that manages and stores books information electronically according to users needs.
    The system helps students, staffs and library manager to keep a constant track of all the books available in the library.</p>
  <br></br>
  </div>

  </div>
@endsection
