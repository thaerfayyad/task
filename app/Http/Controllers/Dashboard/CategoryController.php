<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index(Request $request)
    {
        $categories = Category::when($request->search, function ($q) use ($request){
            return $q->where('name', 'like', '%' .$request->search .'%');
        })->latest()->paginate(5);

        return view('dashboard.categories.index',compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required',
        'description'  => 'required',

        ]);
//        dd($request->all());

        Category::create($request->except(['_token']));
        session()->flash('success',('category added successfully'));
        return redirect()->route('categories.index');
    }


    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        return view('dashboard.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name'     => 'required',
            'description'  => 'required',

        ]);
//        dd($request->all());
        $category->update($request->all());
        session()->flash('success',('category added successfully'));
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        session()->flash('success','category deleted successfully');
        return redirect()->route('categories.index');
    }
}
