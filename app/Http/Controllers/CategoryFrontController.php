<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class CategoryFrontController extends Controller
{

    

    public function show($slug)
    {

        // $category = Category::where('slug', $slug)->with('childrenCategories')->firstOrFail();
        // $products = $category->products()->orderBy('id', 'desc')->paginate(8);

        $category = Category::where('slug', $slug)->firstOrFail();
        $products = $category->getAllProducts();

        // dd($products);

        return view('category', compact('category', 'products'));
    }
}
