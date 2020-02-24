<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\books;
use App\authors;
use App\booksCategory;

class BooksController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $books = books::all();
    return view('booksList', ['books'=> $books]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {

    $auths = authors::all();
    $cats = booksCategory::all();

    return view('addBooks', array('auths' => $auths, 'cats'=> $cats ));

      //return "Create Function called";
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $book = new books();

    $book->bookTitle = $request->title;
    $book->edition = $request->edition;
    $book->authId = authors::where('name', $request->author)->first()->id;
    $book->catId = booksCategory::where('catName', '=', $request->cat)->first()->id;
    $book->totalAvail = $request->booksAvail;

    $book->save();
    return redirect('/booksList');

  }

  /**
   * Display the specified resource.
   *
   * @param  \App\booksCategory  $booksCategory
   * @return \Illuminate\Http\Response
   */
  public function show()
  {

  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\booksCategory  $booksCategory
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      //Edit the book
        $book = books::find($id);
		$auths = authors::all();
		$cats = booksCategory::all();

        return view('editBooks',['book'=> $book, 'auths' => $auths, 'cats'=> $cats]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\booksCategory  $booksCategory
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request)
  {
       //Retrieve the Book and update
        $book = books::find($request->input('id'));
        $book->bookTitle = $request->input('title');
        $book->edition = $request->input('edition');
        $book->authId = $request->input('author');
        $book->catId = $request->input('cat');
        $book->save(); //persist the data
        return redirect()->route('book.index')->with('info','Book Updated Successfully');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\booksCategory  $booksCategory
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
       //Retrieve the Book
        $book = books::find($id);
        //delete
        $book->delete();
        return redirect()->route('book.index');
  }
}
