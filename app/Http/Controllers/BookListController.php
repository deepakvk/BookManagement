<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\books;
use App\authors;
use App\booksCategory;


class BookListController extends Controller
{
	public $successStatus = 200;
	/**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
    public function index()
    {
		//$user = Auth::user(); 
		//$success['token'] =  $user->createToken('MyApp')-> accessToken;
        //return response()->json(['success' => $user], $this-> successStatus); 
       $books = books::all();
	   return response()->json(['books' => $books], 201);
		
    }
	/**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
    public function store(Request $request)
    {
      //
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
  public function edit(booksCategory $booksCategory)
  {
      //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\booksCategory  $booksCategory
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, booksCategory $booksCategory)
  {
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\booksCategory  $booksCategory
   * @return \Illuminate\Http\Response
   */
  public function destroy(booksCategory $booksCategory)
  {
      //
  }
}
