<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $categories = Category::paginate(3);
        //
        return view('categories.index', compact('categories',));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
        $data = request()->validate([
            'name' => 'required|min:3',
        ]);
        $categories = new Category($data);
        $categories->save();
        return redirect()->action('CategoriesController@index');
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
        return view('categories.show', compact('categories'));
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
        return view('categories.edit', ['categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
        $categories = Category::find($id);
        $categories->name = $request->name;
        $categories->save();
        return redirect()->action('CategoriesController@index');
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
        return redirect()->action('CategoriesController@index');
    }
}
