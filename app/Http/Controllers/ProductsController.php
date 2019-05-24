<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\ProductsRequest;
use App\Product;
use Image;

class ProductsController extends Controller
{
    /** public function __construct(){
     * $this->middleware('auth')->except('index','show');
     * }*/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        //  \App\Product::create([
        //'name' => request()->name,
        //'category_id' => request()->category_id,
        //'description' => request()->description,
        //'qty' => request()->qty,
        //'price' => request()->price,
        //'image' => $request->file('image')->store('images', 'public'),
        //]);
        $data = $request->all();
        if ($request->file('image')) {
            $image = $request->file('image');
            if ($image->isValid()) {
                $fileName = time() . '-' . str_slug($data['name'], "-") . '.' . $image->getClientOriginalExtension();
                $large_image_path = public_path('products/large/' . $fileName);
                $medium_image_path = public_path('products/medium/' . $fileName);
                $small_image_path = public_path('products/small/' . $fileName);
                //Resize Image
                Image::make($image)->save($large_image_path);
                Image::make($image)->resize(600, 600)->save($medium_image_path);
                Image::make($image)->resize(300, 300)->save($small_image_path);
                $data['image'] = $fileName;
            }
        }
        Product::create($data);
        //$products = new Product();
        //$products->name = $request->name;
        //$products->category_id = $request->category_id;
        //$products->description = $request->description;
        //$products->qty = $request->qty;
        //$products->price = $request->price;
        //$products->images = $request->images;
        //$products->save();
        return redirect('admin/products',);
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
        $products = Product::find($id);
        $products->name = $request->name;
        //$products->category_id = $request->category_id;
        $products->description = $request->description;
        $products->qty = $request->qty;
        $products->price = $request->price;
        $products->save();
        return redirect('admin.products');
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
        return redirect('admin/products');
    }
}
