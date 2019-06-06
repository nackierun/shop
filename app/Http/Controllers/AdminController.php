<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Order;
use App\OrderDetail;
use App\User;
use Illuminate\Http\Request;
use App\SlideShow;
use App\Product;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //public function __construct()
    //{
    //    $this->middleware('auth');
    //}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$this->authorize('index', Admin::class);
        return view('admin.index');
    }

    public function vieworder()
    {
        $datas2 = Order::paginate(3);
        return view('admin.vieworder', compact('datas2'));
    }

    public function vieworderdetail($id)
    {
        $order = Order::where('id', $id)->first();
        $orderdetail = $order->orderdetail;
        return view('admin.orderdetail', compact('order', 'orderdetail'));


    }

    public function slideshow(Request $request)
    {
        $slideshow = SlideShow::all();
        return view('admin.slideshow', compact('slideshow'));
    }

    public function addslide(Request $request)
    {
        SlideShow::create(
            [
                'image' => $request->file('slideshow')->store('images', 'public'),
            ]
        );
        return redirect('admin/slideshow');
    }

    public function delslide($id)
    {
        $slideshows = SlideShow::find($id);
        $slideshows->delete();
        session()->flash('status', 'ลบแล้ว');
        return redirect('admin/slideshow');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->authorize('create', Admin::class);
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
