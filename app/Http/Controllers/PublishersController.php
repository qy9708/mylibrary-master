<?php
namespace App\Http\Controllers;

use App\Publisher;
use App\Http\Requests\PublisherRequest;
use App\Http\Resources\PublisherCollection;
use App\Http\Resources\PublisherResource;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Gate;


class PublishersController extends Controller
{
  public function index(Request $request)
  {
    if (Gate::allows('admin-only',auth()->user())) {

    $publishers = Publisher::orderBy('name','asc')->get();
      return view('/admin/publisher/index',['publishers' => $publishers]);
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
    $request->validate([
			'name' => 'required|max:255',
			'address' => 'required|max:200',
			'email'=> "required|string|email|max:255",
			]);
		$publisher = new Publisher();
		$publisher->fill($request->all());
		$publisher->save();

      	return redirect()->route('publisher.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      try {
          $publisher = Publisher::with('books')->find($id);
          if(!$publisher) throw new ModelNotFoundException;

          return new PublisherResource($publisher);
      }
      catch(ModelNotFoundException $ex) {
          return response()->json([
              'message' => $ex->getMessage(),
          ], 404);
      }
  }

  /**
   * Update the specified resource in storage.
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $request->validate([
			'name' => 'required|max:255',
			'address' => 'required|max:200',
			'email'=> "required|string|email|max:255",
			]);

      $publisher = Publisher::find($id);
        if(!$publisher) throw new ModelNotFoundException;

         $publisher->fill($request->all());
         $publisher->save();

         return redirect()->route('publisher.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $publisher = Publisher::findOrFail($id);
    $publisher->delete();
    return redirect()->route('publisher.index')->with(['message'=> 'Successfully deleted!!']);
  }

  public function edit($id){
    if (Gate::allows('admin-only',auth()->user())) {
		$publisher = Publisher::find($id);
		if(!$publisher) throw new ModelNotFoundException;

    return view('/admin/publisher/edit', ['publisher'=> $publisher]);
    }
    return redirect('/');
	}

  public function create(){
    if (Gate::allows('admin-only',auth()->user())) {

    $publisher = new Publisher();
    return view('/admin/publisher/create', ['publisher' => $publisher,]);
  }
  return redirect('/');
  }
}
