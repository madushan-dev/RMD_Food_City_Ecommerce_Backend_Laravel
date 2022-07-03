<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('Categories.categories',[
            'categories'=>$categories
        ]);
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories')->with('success','Successfully Deleted!');
    }

    public function store(Request $request)
    {

        $validate = $request->validate([
            'name'=>'required',
            'description'=>'required',
        ]);


        $category = Category::create([
            'name' =>$request->input('name'),
            'description' =>$request->input('description'),
        ]);

        return redirect()->route('categories')->with('success','Category Successfully Added!');

    }

}
