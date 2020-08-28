<style>
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

p.a{
  text-align: left;
  font-size: 20px;
}
</style>
@extends('layout.front')

@section('title','ContactUs')

@section('content')
<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
  </div>
  <div class="row">
    <div class="column">
      <img src="/images/building.jpg" style="width:100%">
      <br></br>
      <p class="a">Email: weblibrary@gmail.com</p>
      <p class="a">Phone: 03-1234567</p>
      <p class="a">Address: Lot 3A, Persiaran Raja Chulan Road, Bukit Bintang, 50200 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur</p>
    </div>
    <div class="column">
      <form action="/">
        <label for="fname">Full Name</label>
        <input type="text" id="fname" name="fullname" placeholder="Your full name..">
        <label for="lname">Email</label>
        <input type="text" id="email" name="email" placeholder="Your email..">
        <label for="subject">Enquiry</label>
        <textarea id="subject" name="enquiry" placeholder="Write something.." style="height:170px"></textarea>
        <br></br>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>
@endsection
