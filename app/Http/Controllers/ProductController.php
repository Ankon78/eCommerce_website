<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product_list = Product::with('brand', 'category', 'sub_category')->get();
        return view('products.index', compact('product_list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $requestData = $request->except('image');

        //check if has file
        if ($request->hasFile('image')) {

            // hold image in a variable
            $imagefile = $request->image;

            // give new name of image
            $image_name = mt_rand() . '.' . $imagefile->extension();

            // upload image in a file
            $imagefile->move(public_path('images/product'), $image_name);

            // define image path name
            $path = 'images/product/' . $image_name;

            // store image in database variable
            $requestData['image'] = $path;
        }

        // Create product
        Product::create($requestData);
        return to_route('product.index');
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
        $product = Product::with('sub_category')->findOrFail($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $requestData = $request->except('_token', '_method', 'image');

        $product = Product::where('id', $id)->first();

        //check if has file
        if ($request->hasFile('image')) {

            // hold image in a variable
            $imagefile = $request->image;

            // give new name of image
            $image_name = mt_rand() . '.' . $imagefile->extension();

            // upload image in a file
            $imagefile->move(public_path('images/product'), $image_name);

            // define image path name
            $path = 'images/product/' . $image_name;

            // store image in database variable
            $requestData['image'] = $path;

            // delete existing image
            $image_path = public_path($product->image);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
        }

        $product->update($requestData);

        return to_route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::where('id', $id)->delete();
        return to_route('product.index');
    }
}
