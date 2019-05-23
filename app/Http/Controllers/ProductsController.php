<?php

namespace App\Http\Controllers;

use App\Category;
use DemeterChain\C;
use Illuminate\Filesystem\Cache;
use Illuminate\Http\Request;
use App\Product;
use Intervention\Image\Image;
use  App\Http\Requests\ProductsRequest;

class ProductsController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('index','show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(3);
        //
        return view('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductsRequest $request)
    {
        //
        $products = new Product();
        $products->name = $request->name;
        //$products->category_id = $request->category_id;
        $products->description = $request->description;
        $products->qty = $request->qty;
        $products->price = $request->price;
        $products->images = $request->images;
        $products->save();
        return redirect()->action('ProductsController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $products = Product::find($id);
        return view('products.show',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $products = Product::findOrFail($id);
        $categories = Category::all();
        return view('products.edit',['products'=>$products,'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductsRequest $request, $id)
    {
        //
        $products = Product::find($id);
        $products->name = $request->name;
        //$products->category_id = $request->category_id;
        $products->description = $request->description;
        $products->qty = $request->qty;
        $products->price = $request->price;
        $products->save();
        return redirect()->action('ProductsController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $products = Product::find($id);
        $products->delete();
        return redirect()->action('ProductsController@index');
    }
}
