<style>
h{
  text-align: left;
  padding-left: 50px;
  font-weight: bold;
  font-size: 40px;
  text-decoration: underline;
}
ol{
  text-align: left;
  padding-left: 50px;
  font-weight: bold;
  font-size: 30px;
  color: blue;
}
p.a{
  font-size:20px;
  text-align: left;
  color: black;
}
</style>

@extends('layout.front')

@section('title','Facilities')

@section('content')
<h>LIBRARY FACILITIES</h>
<br></br>
<ol>
<li>Internet Access</li>
<p class="a">The Library is equipped with computers to allow easy access for patrons to check their emails, surf the internet or access online databases.</p>
<li>Wireless Internet Access</li>
<p class="a">The Library is equipped with wireless networking technology to allow library patrons easy access to the internet via their laptops or PDAs. Thus providing convenience and flexibility. This service is free of charge.</p>
<li>Discussion Rooms</li>
<p class="a">Discussion Rooms are available for group study anddiscussions. However, noise from discussions should be kept to an acceptable level.</p>
<br></br>
</ol>
@endsection
