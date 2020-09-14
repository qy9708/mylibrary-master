<style>
div.gallery {
  margin: 10px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
  align-items: center;

}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height:150px;
  border-style: double;
  border-color: black;
  align-items:center;

}
div.gallery button {
  width: 100%;
  text-align: center;

}

div.desc {
  padding: 15px;
  text-align: center;
  background-color: white;
  border-color: black;
}
.tabContainer {
	margin:10px 0;
	width:470px;
}

#tabContent {
	padding:2% 25%;
	background-color:#fff;
	overflow:hidden;
	float:left;
	width:100%;

}
image{
  width: 100%;
  height:100%;
  border-style: double;
  border-color: black;
  float:center;
}

h2.a{
  font-size: 30px;
}


</style>

@extends('layout.front')

@section('title','STUDENT')

@section('content')
<div  >
<div id="tabContent" >

<div class="gallery">
<img src="/images/user.png"></i>
<button type="button" onclick="window.location='{{ url("/firmindex") }}'" style="padding:2px 5px">Student Info</button>
</div>

<div class="gallery">
  <img src="/images/list.png"></i>
  <button type="button" onclick="window.location='{{ url("/firmindex") }}'" style="padding:2px 5px">Company List</button>
</div>

<div class="gallery" >
  <img src="/images/list.png"></i>
  <button type="button" onclick="window.location='{{ url("/logindex") }}'" style="padding:2px 5px">Log Records</button>
</div>

<div class="gallery">
  <img src="/images/document.png"></i>
  <button type="button" onclick="window.location='{{ url("/docindex") }}'" style="padding:2px 5px">Document Submission</button>
</div>

</div>
</div>
<br></br>

@endsection
