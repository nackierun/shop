<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoriesRequest;
use Image;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoriesController extends Controller
{
    //public function __construct()
    //{
    //   $this->middleware('auth');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $categories = Category::paginate(3);
        //
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(CategoriesRequest $request)
    {
        \App\Category::create([
            'name' => request()->name,
            'image' => $request->file('image')->store('images', 'public'),
        ]);
        return redirect('admin/categories');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
        $categories = Category::find($id);
        return view('admin.categories.show', compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
        $categories = Category::findOrFail($id);
        return view('admin.categories.edit', ['categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(CategoriesRequest $request, $id)
    {
        //
        $categories = Category::find($id);
        $categories->name = $request->name;
        $categories->save();
        return redirect('admin/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        $categories = Category::find($id);
        $categories->delete();
        return redirect('admin/categories');
    }
}
