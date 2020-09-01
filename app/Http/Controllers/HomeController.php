<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function getHome(){
    return view('homepage');
  }

  public function getaboutusintro(){
    return view('/aboutus/aboutus');
  }

  public function getaboutusvisionmission(){
    return view('/aboutus/VisionMission');
  }

  public function getaboutusservices(){
    return view('/aboutus/services');
  }

  public function getaboutcontactus(){
    return view('/aboutus/contactus');
  }

  public function getStudentInfo(){
    return view('/student/studentinfo');
  }

  public function getContactUs(){
    return view('contactus');
  }

  public function getbookshow(){
    return view('/book/show');
  }
  public function getPublisher(){
    return view('/resources/publisher');
  }

  public function getAuthor(){
    return view('/resources/author');
  }

  public function getPage(){
    if (Gate::allows('student-only',auth()->user())) {

      return view('/student/studentdashboard');
    } else if (Gate::allows('admin-only',auth()->user())) {

      return view('/admin/admindashboard');
    } else {
      return view('/lecturer/lecturerdashboard');
    }
    return redirect('/');
  }


}
