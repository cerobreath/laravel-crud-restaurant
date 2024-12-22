<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use MongoDB\Driver\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::paginate(5);
        return view('management.category', compact('categories'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('management.createCategory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories|max:255',
        ]);
        $category = new Category;
        $category->name = $request->name;
        $category->save();
        $request->session()->flash('status', $request->name . ' has been created');
        return(redirect('management/category'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        return view('management.editCategory', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
           'name' => 'required|unique:categories|max:255',
        ]);
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();

        $request->session()->flash('status', $request->name . ' has been updated');
        return(redirect('management/category'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::destroy($id);
        Session()->flash('status', 'The category has been deleted');
        return(redirect('management/category'));
    }
}