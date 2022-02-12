<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
// 
        $products = Product::with('gallery', 'category')->paginate(20);
        // $categories = Category::with('product')->get();
        // $users = User::with('contact')->get();
      
    //    dd($products);
        return view('index', compact('products'));
        
    }
}
