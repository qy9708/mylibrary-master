<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if (Gate::allows('admin-only',auth()->user())) {
        $firms = Firm::orderBy('name','asc')->get();
        return view('/admin/showfirms',['firms' => $firms]);
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
        if (Gate::allows('admin-only',auth()->user())) {
          $firms = new Firm();

          return view('/admin/create', ['firm' => $firm,]);
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

      $firm = new Firm();
      $firm->fill($request->all());
      $firm->save();

      return redirect()->route('firm.index');
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
      if (Gate::allows('admin-only',auth()->user())) {
      $firm = Firm::find($id);
      if(!$firm) throw new ModelNotFoundException;

      return view('/admin/edit', ['firm'=> $firm]);
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
      $firm = Firm::find($id);
        if(!$firm) throw new ModelNotFoundException;

         $firm->fill($request->all());
         $firm->save();

         return redirect()->route('firm.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      if (Gate::allows('admin-only',auth()->user())) {
        $firm = Firm::findOrFail($id);
        $firm->delete();
        return redirect()->route('firm.index')->with(['message'=> 'Successfully deleted!!']);
      }
      return redirect('/');
    }

    public function admindashboard(){
      return view('/admin/admindashboard');
    }
}
