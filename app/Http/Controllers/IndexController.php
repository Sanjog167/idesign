<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class IndexController extends Controller
{
    public function index(){

        $productsAll = Product::orderBy('id','DESC')->get();
        $categories = Category::with('categories')->where(['parent_id'=>0])->get();
        return view('front')->with(compact('productsAll','categories'));
    }
}
