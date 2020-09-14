<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Document;
use App\Http\Resources\DocumentCollection;
use App\Http\Resources\DocumentResource;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function showdocumentindex(){
     if (Gate::allows('student-only',auth()->user())) {

       $documents = Document::orderBy('name','asc')->get();
       return view('/student/showdocuments',['documents' => $documents]);
     }
      if (Gate::allows('admin-only',auth()->user())) {

         $documents = Document::orderBy('name','asc')->get();
         return view('/admin/showdocuments',['documents' => $documents]);
      }
      if (Gate::allows('lecturer-only',auth()->user())) {

           $documents = Document::orderBy('name','asc')->get();
           return view('/lecturer/showdocuments',['documents' => $documents]);
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
        $documents = new Document();

        return view('/student/doccreate', ['documents' => $documents]);
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
      $document = new Document();
      $document->fill($request->all());
      $document->save();

      return redirect()->route('document.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $document = Document::findOrFail($id);
      if(!$document) throw new ModelNotFoundException;
      $document = Document::findOrFail($id);
      return view('student.showdocuments',[
          'document'=> $document,
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
      $document = Document::find($id);
      if(!$document) throw new ModelNotFoundException;

      return view('/student/docedit', ['document'=> $document]);
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
      $document = Document::find($id);
        if(!$document) throw new ModelNotFoundException;

         $document->fill($request->all());
         $document->save();

         return redirect()->route('document.index');
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
        $document = Document::findOrFail($id);
        $document->delete();
        return redirect()->route('document.index')->with(['message'=> 'Successfully deleted!!']);
      }
      return redirect('/');
    }
}
