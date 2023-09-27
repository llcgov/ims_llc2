<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Brand;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['product'] = Product::all();
        return view('pages.product.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['brands'] = Brand::all();
        return view('pages.product.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Product::create([
            'name' => $request->prod_name,
            'model' => $request->model,
            'brand' => $request->brand,
            'type' => $request->type,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    public function edit($id)
    {
        $data['product'] = Product::find($id);

        return view('pages.product.edit', $data);
    }


    public function update(Request $request, Product $product)
    {
        $product->name = $request->prod_name;
        $product->brand = $request->brand;
        $product->model = $request->model;
        $product->type = $request->type;

        $product->save();

        return redirect()->route('product.index');

    }


    public function destroy($id)
    {
        $data = Product::find($id); 
        $data->delete();

        return redirect()->back();
    }
}
