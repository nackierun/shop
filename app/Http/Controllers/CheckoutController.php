<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
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
            $total_price += $data->price * $data->quantity;
        }

        $user_login = User::where('id', Auth::id())->first();
        return view('checkout.index', compact('user_login', 'datas', 'qty_sum', 'total_price'));
    }

    public function confirm(Request $request)
    {
        $this->validate($request, [


            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'grand_total' => 'required',

        ]);
        Order::create([
            'users_id' => request()->users_id,
            'product_id' => request()->product_id,
            'users_email' => request()->users_email,
            'name' => request()->name,
            'address' => request()->address,
            'phone' => request()->phone,
            'grand_total' => request()->grand_total,
        ]);
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
