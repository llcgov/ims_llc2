<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Supply;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['order'] = Order::where('confirmed', '0')->get();
        // $data['order'] = Order::all();
        return view('pages.order.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['order'] = Order::all();
        $data['products'] = Product::all();
        return view('pages.order.create', $data);
    }
    public function checkout($id, $quantity)
    {
        $quantity = -1 * abs($quantity);
        $order_id = intval($id);
        $totalstock = 0;
        $order = Order::find($order_id);
        $product = $order->product;

        foreach ($order->product->supplies as $supply) {
            $totalstock += $supply->quantity;
        }

        if ($totalstock > 0) {
            // $checkout = $totalstock - $quantity;
            $supplies = Supply::create([
                'product_id' => $order->product->id,
                
                'quantity' => $quantity,
                'measure_type' => "Checked Out",
                'amount' => "0",
                'remarks' => "Stuck_Out item",
                'stock_out' => 1
            ]);
            $order->confirmed = 1;
            $order->save();
        }




        return redirect()->route('order.index');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Order::find($id);
        $data->delete();

        return redirect()->back();
    }
}
