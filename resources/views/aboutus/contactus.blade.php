<style>
table.table1 {
  border-collapse: collapse;
  width: 50%;
}

td{
  border: 1px solid #ddd;
  border-color: black;
  background-color:#E6E6FA;
}
</style>
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
    <h1>CONTACT US</h1>
  </div>
  <br></br>
  <div class="w3-container">
    <table class ="table1">
    	<tr>
      	<td style="font-weight:bold">Library General Enquiry</td>
    	</tr>
  		<tr>
      	<td style="border-bottom-color:#E6E6FA">Email:weblibrary@gmail.com</td>
    	</tr>
      <tr>
          <td style="border-bottom-color:#E6E6FA">Phone:03-1234567</td>
      </tr>
      <tr>
        <td >Fax:03-9876543</td>
      </tr>
  	</table>
  <br></br>
  </div>

  </div>
@endsection
