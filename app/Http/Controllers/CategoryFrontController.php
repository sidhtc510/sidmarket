<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class CategoryFrontController extends Controller
{

    public $subProduct;

    public function show($slug)
    {
        $category = Category::where('slug', $slug)->with('childrenCategories')->firstOrFail();

        // $products = Product::where('category_id', $category->id)->orderBy('id', 'desc')->get();
        // dump($products);
        $products = $category->products()->orderBy('id', 'desc')->paginate(10);
      
        return view('category', compact('category', 'products'));
    }
}
