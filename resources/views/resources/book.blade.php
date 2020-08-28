<style>
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;

}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height:auto;
  border-style: double;
  border-color: black;
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
	padding:10px;
	background-color:#fff;
	overflow:hidden;
	float:left;
	margin-bottom:10px;
  border-bottom: 1px solid black;
	width:100%;
}

h2.a{
  font-size: 30px;
}

</style>

@extends('layout.front')

@section('title','STUDENT')

@section('content')
<div>
<div id="tabContent" style="background-color:#E6E6FA;">
<div class="gallery">
  <i class="fa fa-user-circle-o" aria-hidden="true"></i>
  </a>
  <div class="desc">
    {!! link_to_route(
    '/bookshow',
    $title = 'Student Information',

) !!}
  </div>
</div>
@endforeach
@endif
</div>

<h2 class="a">Philosophy & Psychology</h2>
@if(count($getTenantsByCategory2) > 0)
<div id="tabContent" style="background-color:#E6E6FA;">
@foreach($getTenantsByCategory2 as $tenant)
<div class="gallery">
      <img src= "/uploads/books/<?php echo $tenant['image']; ?>" style="width="600";height="400""/ >
  </a>
  <div class="desc">
    {!! link_to_route(
    '/bookshow',
    $title = $tenant->title,
    $parameters = [
    'id' => $tenant->id,
]
) !!}
  </div>
</div>
@endforeach
@endif
</div>

<h2 class="a">Religion</h2>
@if(count($getTenantsByCategory3) > 0)
<div id="tabContent" style="background-color:#E6E6FA;">
@foreach($getTenantsByCategory3 as $tenant)
<div class="gallery">
      <img src= "/uploads/books/<?php echo $tenant['image']; ?>" style="width="600";height="400""/ >
  </a>
  <div class="desc">
    {!! link_to_route(
    '/bookshow',
    $title = $tenant->title,
    $parameters = [
    'id' => $tenant->id,
]
) !!}
  </div>
</div>
@endforeach
@endif
</div>

<h2 class="a">Social Sciences</h2>
@if(count($getTenantsByCategory4) > 0)
<div id="tabContent" style="background-color:#E6E6FA;">
@foreach($getTenantsByCategory4 as $tenant)
<div class="gallery">
      <img src= "/uploads/books/<?php echo $tenant['image']; ?>" style="width="600";height="400""/ >
  </a>
  <div class="desc">
    {!! link_to_route(
    '/bookshow',
    $title = $tenant->title,
    $parameters = [
    'id' => $tenant->id,
]
) !!}
  </div>
</div>
@endforeach
@endif
</div>

<h2 class="a">Language</h2>
@if(count($getTenantsByCategory5) > 0)
<div id="tabContent" style="background-color:#E6E6FA;">
@foreach($getTenantsByCategory5 as $tenant)
<div class="gallery">
     <img src= "/uploads/books/<?php echo $tenant['image']; ?>" style="width="600";height="400""/ >
  </a>
  <div class="desc">
    {!! link_to_route(
    '/bookshow',
    $title = $tenant->title,
    $parameters = [
    'id' => $tenant->id,
]
) !!}
  </div>
</div>
@endforeach
@endif
</div>

<h2 class="a">Science</h2>
@if(count($getTenantsByCategory6) > 0)
<div id="tabContent" style="background-color:#E6E6FA;">
@foreach($getTenantsByCategory6 as $tenant)
<div class="gallery">
      <img src= "/uploads/books/<?php echo $tenant['image']; ?>" style="width="600";height="400""/ >
  </a>
  <div class="desc">
    {!! link_to_route(
    '/bookshow',
    $title = $tenant->title,
    $parameters = [
    'id' => $tenant->id,
]
) !!}
  </div>
</div>
@endforeach
@endif
</div>

<h2 class="a">Technology</h2>
@if(count($getTenantsByCategory7) > 0)
<div id="tabContent" style="background-color:#E6E6FA;">
@foreach($getTenantsByCategory7 as $tenant)
<div class="gallery">
      <img src= "/uploads/books/<?php echo $tenant['image']; ?>" style="width="600";height="400""/ >
  </a>
  <div class="desc">
    {!! link_to_route(
    '/bookshow',
    $title = $tenant->title,
    $parameters = [
    'id' => $tenant->id,
  ]
  ) !!}
  </div>
</div>
@endforeach
@endif
</div>


<h2 class="a">Arts and Recreation</h2>
@if(count($getTenantsByCategory8) > 0)
<div id="tabContent" style="background-color:#E6E6FA;">
@foreach($getTenantsByCategory8 as $tenant)
<div class="gallery">
      <img src= "/uploads/books/<?php echo $tenant['image']; ?>" style="width="600";height="400""/ >
  </a>
  <div class="desc">
    {!! link_to_route(
    '/bookshow',
    $title = $tenant->title,
    $parameters = [
    'id' => $tenant->id,
  ]
  ) !!}
  </div>
</div>
@endforeach
@endif
</div>

<h2 class="a">Literature</h2>
@if(count($getTenantsByCategory9) > 0)
<div id="tabContent" style="background-color:#E6E6FA;">
@foreach($getTenantsByCategory9 as $tenant)
<div class="gallery">
      <img src= "/uploads/books/<?php echo $tenant['image']; ?>" style="width="600";height="400""/ >
  </a>
  <div class="desc">
    {!! link_to_route(
    '/bookshow',
    $title = $tenant->title,
    $parameters = [
    'id' => $tenant->id,
  ]
  ) !!}
  </div>
</div>
@endforeach
@endif
</div>

<h2 class="a">Geographic and History</h2>
@if(count($getTenantsByCategory10) > 0)
<div id="tabContent" style="background-color:#E6E6FA;">
@foreach($getTenantsByCategory10 as $tenant)
<div class="gallery">
      <img src= "/uploads/books/<?php echo $tenant['image']; ?>" style="width="600";height="400""/ >
  </a>
  <div class="desc">
    {!! link_to_route(
    '/bookshow',
    $title = $tenant->title,
    $parameters = [
    'id' => $tenant->id,
]
) !!}
  </div>
  </div>
@endforeach
@endif
</div>
</div>
<br></br>

@endsection
