<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class Categories extends Controller
{
    public function index(){
        return view('categories.index', [ 'categories' => Category::all() ]);
    }

    public function show($id){
        return view('categories.show', [ 'category' => Category::findOrFail($id) ]);
    }

    public function create(){
        return view('categories.create');
    }

    public function store(Request $request){
        $data = $request->only([ 'title', 'slug', 'description']);
        Category::create($data);
        return redirect()->route('categories.index');
    }

    public function edit($id){
        return view('categories.edit', [ 'category' => Category::findOrFail($id) ]);
    }

    public function update(Request $request, $id){
        $category = Category::findOrFail($id);
        $data = $request->only([ 'title', 'slug', 'description']);
        $category->fill($data);
        $category->save();
        return redirect()->route('categories.index');
    }
}
