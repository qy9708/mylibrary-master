<style>
ul{
  list-style-type:disc;
}
p.a{
  text-align: left;
}

</style>

@extends('layout.front')

@section('title','Services')

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
    <h1>MEMBERSHIP</h1>
  </div>
  <div class="w3-container">
  <ul>
  <li>	Library membership can be applied through registration. Each member can borrow maximun 5 books.</li>
  </ul>
  </div>

  <div class="w3-container w3-dark-grey">
    <h1>LOAN ENTITLEMENT</h1>
  </div>
  <div class="w3-container">
  <ul>
  <li>Privilege</li>
  <p class="a">The borrowing of library books in accordance with this Regulation is merely a privilege granted to eligible members which privilege may be revoked by the Library at any time whether in accordance with this Rule or for any or without any reason or ground whatsoever.</p>
  <li>Renewal of Books</li>
  <p class="a">Library books can be renewed twice through loan counter. However, renewal is denied under these circumstances :</p>
  <p class="a">The item is overdue.</p>
  <p class="a">The item is being requested by another patron.</p>
  <p class="a">The maximum number of renewal for the item has been exceeded.</p>
  </ul>
  </div>

  <div class="w3-container w3-dark-grey">
    <h1>RULES AND REGULATIONS</h1>
  </div>
  <div class="w3-container">
  <ul>
  <li>Eating and smoking are strictly prohibited in the Library. Drinking is permitted for water only, all other beverages are not allowed.</li>
  <li>A quiet environment must be preserved in the Library. The use of personal radios, cassettes, audio/visual gadgets and mobile telephones is not permitted in the Library to avoid disturbance to other patrons.</li>
  <li>Littering is prohibited.</li>
  </ul>
  <br></br>
  </div>
  </div>
@endsection
