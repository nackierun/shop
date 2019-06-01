<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\ProductsRequest;
use App\Product;

class ProductsController extends Controller
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
        //$this->authorize('index',Product::class);
        $products = Product::paginate(3);
        //
        return view('admin.products.index', compact('products'));
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
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductsRequest $request)
    {
        //
        \App\Product::create([
            'name' => request()->name,
            'category_id' => request()->category_id,
            'description' => request()->description,
            'qty' => request()->qty,
            'price' => request()->price,
            'image' => $request->file('image')->store('images', 'public'),
        ]);
        //$products = new Product();
        //$products->name = $request->name;
        //$products->category_id = $request->category_id;
        //$products->description = $request->description;
        //$products->qty = $request->qty;
        //$products->price = $request->price;
        //$products->images = $request->images;
        //$products->save();

        session()->flash('status', 'เรียบร้อย');
        return redirect('admin/products');
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
        return view('admin.products.show', compact('products'));
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
        $products = Product::findOrFail($id);
        $categories = Category::all();
        return view('admin.products.edit', ['products' => $products, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductsRequest $request, $id)
    {
        //
        Product::where('id', $id)->update(request()->except('_token'));
        
        if ($request->hasFile('image')) {
            Product::where('id', $id)->update(['image' => $request->file('image')->store('images', 'public')]);
        }

        session()->flash('status', 'อัปเดทแล้ว');
        return redirect('admin/products');
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

        $products = Product::find($id);
        $products->delete();
        session()->flash('status', 'ลบแล้ว');
        return redirect('admin/products');
    }
}
