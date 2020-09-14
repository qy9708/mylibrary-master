<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(){
        if (Gate::allows('student-only',auth()->user())) {

          $logs = Log::orderBy('week','asc')->get();
          return view('/student/showlogs',['logs' => $logs]);
        }

        return redirect('/');
      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      if (Gate::allows('student-only',auth()->user())) {
        $logs = new Log();

        return view('/student/create', ['logs' => $logs]);
      }
      return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $log = new Log();
      $log->fill($request->all());
      $log->save();

      return redirect()->route('logindex');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      if (Gate::allows('student-only',auth()->user())) {
      $log = Log::find($id);
      if(!$log) throw new ModelNotFoundException;

      return view('/student/edit', ['log'=> $log]);
      }
      return redirect('/');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $log = Log::find($id);
        if(!$log) throw new ModelNotFoundException;

         $log->fill($request->all());
         $log->save();

         return redirect()->route('log.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      if (Gate::allows('student-only',auth()->user())) {
        $log = Log::findOrFail($id);
        $log->delete();
        return redirect()->route('log.index')->with(['message'=> 'Successfully deleted!!']);
      }
      return redirect('/');
    }

    public function studentdashboard(){
      return view('/student/studentdashboard');
    }
}
