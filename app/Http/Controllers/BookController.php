<?php

namespace App\Http\Controllers;

use DB;
use App\Book;
use App\Author;
use App\Http\Requests\BookRequest;
use App\Http\Resources\BookCollection;
use App\Http\Resources\BookResource;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Gate;


class BookController extends Controller
{
  public function getBook(){
    $category1 = ['category'=> 'Computer Science,Information & General Works'];
    $category2 = ['category'=> 'Philosophy & Psychology'];
    $category3 = ['category'=> 'Religion'];
  	$category4 = ['category'=> 'Social Sciences'];
  	$category5 = ['category'=> 'Language'];
  	$category6 = ['category'=> 'Science'];
  	$category7 = ['category'=> 'Technology'];
    $category8 = ['category'=> 'Arts and Recreation'];
  	$category9 = ['category'=> 'Literature'];
  	$category10= ['category'=> 'Geography and History'];
  	$getTenantsByCategory1 = Book::where($category1)->orderBy('title', 'asc')->get();
    $getTenantsByCategory2 = Book::where($category2)->orderBy('title', 'asc')->get();
    $getTenantsByCategory3 = Book::where($category3)->orderBy('title', 'asc')->get();
  	$getTenantsByCategory4 = Book::where($category4)->orderBy('title', 'asc')->get();
  	$getTenantsByCategory5= Book::where($category5)->orderBy('title', 'asc')->get();
  	$getTenantsByCategory6 = Book::where($category6)->orderBy('title', 'asc')->get();
  	$getTenantsByCategory7 = Book::where($category7)->orderBy('title', 'asc')->get();
  	$getTenantsByCategory8 = Book::where($category8)->orderBy('title', 'asc')->get();
  	$getTenantsByCategory9 = Book::where($category9)->orderBy('title', 'asc')->get();
  	$getTenantsByCategory10 = Book::where($category10)->orderBy('title', 'asc')->get();
      return view('/resources/book') ->with('getTenantsByCategory1', $getTenantsByCategory1)
          ->with('getTenantsByCategory2', $getTenantsByCategory2)
          ->with('getTenantsByCategory3', $getTenantsByCategory3)
  		->with('getTenantsByCategory4', $getTenantsByCategory4)
  		->with('getTenantsByCategory5', $getTenantsByCategory5)
  		->with('getTenantsByCategory6', $getTenantsByCategory6)
  		->with('getTenantsByCategory7', $getTenantsByCategory7)
  		->with('getTenantsByCategory8', $getTenantsByCategory8)
  		->with('getTenantsByCategory9', $getTenantsByCategory9)
  		->with('getTenantsByCategory10', $getTenantsByCategory10);
      return new BookCollection($books);
      	return view('/resources/book');
	  }


	  public function create()
	  {
		if (Gate::allows('admin-only',auth()->user())) {
		$book = new Book();
		$authors = Author::pluck('name','id');
		return view('/admin/book/create', [
			'book' => $book,
			'authors' => $authors,
			]);
		}
		return redirect('/');
      }


	  public function store(Request $request)
    {
        //
        $book = new Book();
		$book->fill($request->except('image'));
		
		if($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();//getting image extension
            $filename = time().'.'.$extension;
            $file->move('uploads/books/',$filename);
            $book->image = $filename;
        }
        else{
            $book->fill(['image'=>'']);
        }
        $book->save();
		$book->authors()->sync($request->get('authors'));
            return redirect()->route('book.index');
    }

      public function show($id)
	{
		$book = Book::find($id);
		if(!$book) throw new ModelNotFoundException;

		$authors = Author::pluck('name','id');

		$book = Book::find($id);
		$authors = $book->authors()->get();
		return view('/book/show',[
				'book'=> $book,
				'authors' =>$authors,
    ]);
	}

	public function update(Request $request, $id)
    {
          $book = Book::find($id);
            if(!$book) throw new ModelNotFoundException;

			$book->fill($request->except('image'));
		
			if($request->hasFile('image')) {
				$file = $request->file('image');
				$extension = $file->getClientOriginalExtension();//getting image extension
				$filename = time().'.'.$extension;
				$file->move('uploads/books/',$filename);
				$book->image = $filename;
			}
			else{
				$book->fill(['image'=>'']);
			}
			$book->save();
			$book->authors()->sync($request->get('authors'));

             return redirect()->route('book.index');
	}

	public function destroy($id){
		$book = Book::find($id);
        $book->delete();
		return redirect()->route('book.index')->with(['message'=> 'Books Successfully deleted!!']);

	}

    public function adminbookindex(){
		if (Gate::allows('admin-only',auth()->user())) {

      $books = Book::orderBy('title','category','asc')->get();
	  return view('/admin/book/index',['books' => $books]);
    	}
		return redirect('/');
	}

  public function edit($id){
	  if (Gate::allows('admin-only',auth()->user())) {
		$book = Book::find($id);
		if(!$book) throw new ModelNotFoundException;
		$authors = Author::pluck('name','id');

		return view('/admin/book/edit', ['book'=> $book,'authors' => $authors,]);
		}
  		return redirect('/');
	}
}
