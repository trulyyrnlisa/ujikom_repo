<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;git


class ProductController extends Controller
{

    public function index() {
        $products = DB::table('products')->get();


        return view('pages.products.index', [
            "products"=> $products,
        ]);
    }
    public function create() {
        $categories = Category::all();

        return view('pages.products.create', [
            "categories" => $categories,
        ]);
    }
    public function store(Request $request) {

        $validated = $request->validate([
            "name" => "required|min:3",
            "description" => "nullable",
            "sku" => "required",
            "price" => "required",
            "stock" => "required",
            "category_id" => "required",
        ]);

        Product::create([
            "name" => $request->input('name'),
            "description" => $request->input('description'),
            "sku" => $request->input('sku'),
            "price" => $request->input('price'),
            "stock" => $request->input('stock'),
            "category_id" => $request->input('category_id'),
        ]);
        
        return redirect('/');
    }

}

