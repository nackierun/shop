<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\User;
use App\Product;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use vendor\project\StatusTest;

class CartController extends Controller
{
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
        $session_id = session()->get('session_id');
        $datas = Cart::where('session_id', $session_id)->get();

        $qty_sum = Cart::where('session_id', $session_id)->sum('quantity');
        $total_price = 0;
        foreach ($datas as $data) {
            $product = Product::find($data->product_id);
            $total_price += $product->price * $data->quantity;
        }
        return view('customers.cart', compact('datas', 'total_price', 'qty_sum'));
    }

    public function addToCart(Request $request)
    {
        $data = $request->all();
        $session_id = session()->get('session_id');
        if (empty($session_id)) {
            $session_id = str_random(40);
            Session::put('session_id', $session_id);
        }
        $data['session_id'] = $session_id;
        $data['customer_id'] = Auth::user()->id;
        Cart::create($data);
        session()->flash('message', 'เพิ่มแล้ว');
        return redirect()->action('CartController@index');
    }

    public function delete($id = null)
    {
        $del_item = Cart::findOrFail($id);
        $del_item->delete();
        return back();
    }

    public function updatequantity($id, $quantity)
    {
        DB::table('carts')->where('id', $id)->increment('quantity', $quantity);
        return back();
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
