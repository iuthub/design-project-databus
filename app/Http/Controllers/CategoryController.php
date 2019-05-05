<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cats = Category::all();
        return view("category.index")
                    ->with("data", $cats);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("category.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), []); //todo:: add rules
        $validator->validate();
        $data = $request->all();
        Category::create($data);
        return redirect()
                ->route("category.index")
                ->with("info", "Created!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $cat = Category::find($request->id);
        return view("category.view")
                ->with("data", $cat);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $cat = Category::find($request->id);
        return view("category.edit")
                ->with("data", $cat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
         //validation of request?
         $data = $request->all();
         $cat = Category::find($request->id);
         $cat->update($data);
         return redirect()
             ->route("category.view")
             ->with("info", "Updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $cat = Category::find($request->id);
        // $announcement->delete();
        return redirect()
                ->route("category.index")
                ->with("info", "Deleted");
    }
}
