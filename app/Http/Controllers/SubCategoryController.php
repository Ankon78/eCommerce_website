<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sub_category_list = SubCategory::with('category')->get();
        return view('sub_category.index', compact('sub_category_list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sub_category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        SubCategory::create($request->all());
        return to_route('sub-category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sub_category = SubCategory::findOrFail($id);

        return view('sub_category.edit', compact('sub_category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        SubCategory::where('id', $id)->update($request->except('_token', '_method'));
        return to_route('sub-category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       SubCategory::where('id', $id)->delete();
       return to_route('sub-category.index');
    }
}
