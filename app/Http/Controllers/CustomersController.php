<?php

namespace App\Http\Controllers;

use App\Cart;
use App\OrderDetail;
use App\Order;
use DemeterChain\C;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Category;
use App\SlideShow;

class CustomersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('create', 'edit', 'update', 'destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $slideshow = SlideShow::all();
        $categories = Category::all();
        $products = Product::paginate(20);
        return view('customers.index', compact('products', 'categories', 'slideshow'));
    }
    public function test()
    {
        return view('customers.test');
    }

    public function products()
    {
        $products = Product::paginate(3);
        //
        return view('customers.products.index', compact('products'));
    }

    public function cat()
    {
        $categories = Category::paginate(3);
        return view('customers.categories.index', compact('categories'));
    }

    public function showcatproducts($id)
    {
        $categories = Category::find($id);
        if ($categories !== null) {
            $products = $categories->products;
            return view('customers.showcat', compact('categories', 'products'));
        }
    }

    public function checkout($id)
    {
        $products = Product::find($id);
        return view('checkout.index', compact('products'));
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
        $products = Product::find($id);
        return view('customers.products.show', compact('products'));
    }

    public function showcat($id)
    {
        $categories = Category::find($id);
        return view('customers.categories.show', compact('categories'));
    }

    public function vieworder()
    {
        $datas = OrderDetail::all();
        $datas2 = Order::all();
        return view('checkout.vieworder', compact('datas', 'datas2'));
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
