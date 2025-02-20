<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product\Product;
use App\Models\Product\Category; // Import model Category

class ProductsController extends Controller
{
    public function singleCategory($id)
    {
        $products = Product::select()->orderBy('id', 'desc')->where('category_id', $id)->get();
        return view('products.singleCategory', compact('products'));
    }

    public function singleProduct($id)
    {
        $product = Product::find($id);
        $relatedProducts = Product::where('category_id', $product->category_id)->where('id', '!=', $product->id)->get();
        return view('products.singleproduct', compact('product','relatedProducts'));
        }
    

    public function shop() // Phương thức shop được đặt bên trong class
    {
        $categories = Category::select()->orderBy('id', 'desc')->get();
        return view('products.shop', compact('categories'));
    }
}