<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Firm;
use App\Http\Resources\FirmCollection;
use App\Http\Resources\FirmResource;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use DB;

class FirmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function showfirmindex(){

     if (Gate::allows('student-only',auth()->user())) {

       $firms = Firm::orderBy('name','asc')->paginate(1);
     return view('/student/showfirms',['firms' => $firms]);
       }
       if (Gate::allows('admin-only',auth()->user())) {

         $firms = Firm::orderBy('name','asc')->paginate(1);
       return view('/admin/showfirms',['firms' => $firms]);
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
      if (Gate::allows('admin-only',auth()->user())) {
        $firms = new Firm();

        return view('/admin/create', ['firms' => $firms,]);
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
      $firms = new Firm();
      $firms->fill($request->all());
      $firms->save();

      return redirect()->route('firmindex');
    }

    public function search(Request $request)
    {
      if (Gate::allows('student-only',auth()->user())) {
        $search = $request->get('search');
        $firms = DB::table('firms')->where('name', 'LIKE', '%'.$search.'%')
                                    ->Orwhere('location', 'LIKE', '%'.$search.'%')
                                    ->Orwhere('nature_of_business', 'LIKE', '%'.$search.'%')
                                    ->paginate(1);
        return view('/student/showfirms', compact('firms'));
      }
      return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $firm = Firm::findOrFail($id);
        if(!$firm) throw new ModelNotFoundException;
        $firm = Firm::findOrFail($id);
        return view('student.showfirms',[
            'firm'=> $firm,
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
}
