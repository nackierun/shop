<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use App\Order_details;
use App\User;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $session_id = session()->get('session_id');
        $datas = Cart::where('session_id', $session_id)->get();
        $qty_sum = Cart::where('session_id', $session_id)->sum('quantity');

        $total_price = 0;
        foreach ($datas as $data) {
            $product = Product::find($data->product_id);
            $total_price += $product->price * $data->quantity;
        }

        $user_login = User::where('id', Auth::id())->first();
        return view('checkout.index', compact('user_login', 'datas', 'qty_sum', 'total_price'));
    }

    public function confirm(Request $request)
    {
        $session_id = session()->get('session_id');
        $carts = Cart::where('session_id', $session_id)->get();
        
        $order = Order::create([
                'customer_id' => Auth::user()->id,
                'address'     => request()->address,
                'phone'       => request()->phone,
                'total'       => request()->total,
                'status'      => 'pending',
            ]);

        foreach ($carts as $cart) {

            $product = Product::find($cart['product_id']);
            \App\OrderDetail::create([
                'order_id'   => $order->id,
                'product_id' => $cart['product_id'],
                'price'      => $product->price,
                'qty'        => $cart['quantity'],
                'total' => $product->price * $cart['quantity'],
            ]);
        }
        Cart::where('session_id', $session_id)->delete();

        return redirect()->action('CustomersController@index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
