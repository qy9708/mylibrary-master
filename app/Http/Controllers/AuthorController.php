<?php
namespace App\Http\Controllers;
use App\Author;
use App\Http\Requests\AuthorRequest;
use App\Http\Resources\AuthorCollection;
use App\Http\Resources\AuthorResource;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Gate;


class AuthorController extends Controller
{
  public function index(Request $request)
  {
    if (Gate::allows('admin-only',auth()->user())) {
    $authors = Author::orderBy('name','asc')->get();
      return view('/admin/author/index',['authors' => $authors]);
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
			]);
		$author = new Author();
		$author->fill($request->all());
		$author->save();

      	return redirect()->route('author.index');
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
          $author = Author::with('books')->find($id);
          if(!$author) throw new ModelNotFoundException;

          return new AuthorResource($author);
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
			]);

      $author = Author::find($id);
        if(!$author) throw new ModelNotFoundException;

         $author->fill($request->all());
         $author->save();

         return redirect()->route('author.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $author = Author::findOrFail($id);
    $author->delete();
    return redirect()->route('author.index')->with(['message'=> 'Successfully deleted!!']);
  }

  public function edit($id){
    if (Gate::allows('admin-only',auth()->user())) {
		$author = Author::find($id);
		if(!$author) throw new ModelNotFoundException;

    return view('/admin/author/edit', ['author'=> $author]);
  }
  return redirect('/');
	}

  public function create(){
    if (Gate::allows('admin-only',auth()->user())) {
    $author = new Author();

    return view('/admin/author/create', ['author' => $author,]);
  }
  return redirect('/');
  }
}
