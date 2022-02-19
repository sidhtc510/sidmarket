<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryFrontController extends Controller
{


    
    public function show($slug)
    {
        $category = Category::where('slug', $slug)->with('childrenCategories')->get()->toArray();
        // dd($category);
        // $products = $category->products()->orderBy('id', 'desc')->get();
        
        return view('category', compact('category'));
    }
}
