<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Category;
use App\Http\Requests;

class ProductsController extends Controller
{
    public function index(){
    	$products = Product::paginate(9);
    	$categories = Category::all();
    	// dd($categories);
    	return view('products.index')->with('products', $products)->with('categories', $categories);
    }

    public function show($id){
    	$categories = Category::all();
    	$product = Product::findOrFail($id);
    	// dd($product);
    	return view('products.show')->with('product', $product)->with('categories', $categories);;
    }

    public function search(Request $request) {
        $results = Product::where('title', 'LIKE', '%'. $request->get('searchKeyWords') .'%')
        // ->orWhere('email', 'LIKE', '%'. Input::get('searchKeyWords') .'%')
        // ->orWhere('password', 'LIKE', '%'. Input::get('searchKeyWords') .'%')
        ->get();
    return View::make('products.search')->with('results', $results);
    }

    public function showCategoryWithProducts(Category $category) {
        $catPro = Category::find($category)->products()->get();
        dd($catPro);
    }
}
