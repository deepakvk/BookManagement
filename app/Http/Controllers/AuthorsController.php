<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\authors;


class AuthorsController extends Controller
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
      $authors = authors::all();
	  return view('booksAuthor', ['authors'=> $authors]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('addAuthor');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      $author = new authors();

      $author->name = $request->name;

      $author->save();
	  return redirect()->route('author.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\booksCategory  $booksCategory
   * @return \Illuminate\Http\Response
   */
  public function show(booksCategory $booksCategory)
  {
      //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\booksCategory  $booksCategory
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      $author = authors::find($id);
	  return view('editAuthors',['author' => $author]);
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
		//Retrieve the Author and update
		$author = authors::find($request->input('id'));
		$author->name = $request->input('name');
        $author->save(); //persist the data
        return redirect()->route('author.index')->with('info','Author Updated Successfully');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\booksCategory  $booksCategory
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      //Retrieve the Author
        $author = authors::find($id);
        //delete
        $author->delete();
        return redirect()->route('author.index');
  }
}
