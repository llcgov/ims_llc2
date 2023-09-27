<?php

namespace App\Http\Controllers;

use App\Models\Supply;
use App\Models\Product;
use Illuminate\Http\Request;

class SupplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['supply'] = Supply::all();
        return view('pages.supply.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['products'] = Product::all();
        return view('pages.supply.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Supply::create([
            'product_id' => $request->product_id,
            'quantity' => $request->qty,
            'measure_type' => $request->mtype,
            'amount' => $request->amount,
            'remarks' => $request->remarks,
        ]);

        return redirect()->route('supply.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function show(Supply $supply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['supply'] = Supply::find($id);
        $data['products'] = Product::all();

        return view('pages.supply.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supply $supply)
    {
        $supply->quantity = $request->qty;
        $supply->measure_type = $request->mtype;
        $supply->amount =  $request->amount;
        $supply->remarks = $request->remarks;

        $supply->save();

        return redirect()->route('supply.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Supply::find($id);
        $data->delete();
        
        return redirect()->back();
    }
}
