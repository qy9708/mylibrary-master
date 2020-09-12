<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Log;
use App\Http\Resources\LogCollection;
use App\Http\Resources\LogResource;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function showlogindex(){
     if (Gate::allows('student-only',auth()->user())) {

       $logs = Log::orderBy('week','asc')->get();
       return view('/student/showlogs',['logs' => $logs]);
     }
      if (Gate::allows('admin-only',auth()->user())) {

         $logs = Log::orderBy('week','asc')->get();
         return view('/admin/showlogs',['logs' => $logs]);
      }
      if (Gate::allows('lecturer-only',auth()->user())) {

           $logs = Log::orderBy('week','asc')->get();
           return view('/lecturer/showlogs',['logs' => $logs]);
      }
     return redirect('student.studentdashboard');
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      if (Gate::allows('student-only',auth()->user())) {
        $logss = new Log();

        return view('/student/create', ['log' => $log,]);
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
      $log = Log::findOrFail($id);
      if(!$log) throw new ModelNotFoundException;
      $log = Log::findOrFail($id);
      return view('student.showlogs',[
          'log'=> $log,
      ]);
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
}
