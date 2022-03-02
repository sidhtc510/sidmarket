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
        $products = $category->products()->orderBy('id', 'desc')->paginate(8);


// foreach($category->childrenCategories as $item){
//     dump($item->id);
// }
// die;

    


        return view('category', compact('category', 'products'));
    }
}
