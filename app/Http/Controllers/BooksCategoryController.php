<?php

namespace App\Http\Controllers;

use App\booksCategory;
use Illuminate\Http\Request;

class BooksCategoryController extends Controller
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
        $cats = booksCategory::all();
        return view('booksCat', ['cats' => $cats]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat = new booksCategory();

        $cat->catName = $request->catName;

        $cat->save();
		return redirect()->route('category.index');
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
        $category = booksCategory::find($id);
		return view('editCategory',['category' => $category]);
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
        //Retrieve the Category and update
		$category = booksCategory::find($request->input('id'));
		$category->catName = $request->input('catName');
        $category->save(); //persist the data
        return redirect()->route('category.index')->with('info','Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\booksCategory  $booksCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         //Retrieve the Category
        $category = booksCategory::find($id);
        //delete
        $category->delete();
        return redirect()->route('category.index');
    }
}
