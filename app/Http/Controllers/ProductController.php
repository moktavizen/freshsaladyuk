<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\View\View;

class ProductController extends Controller
{
    // Retrieve categories and products
    public function index($sort): View
    {
        return view('product', [
            'categories' => Category::orderBy('sort', 'asc')->get(),
            'selectedCategory' => Category::where('sort', $sort)
                ->with(['products' => function ($query) {
                    $query->orderBy('updated_at', 'desc');
                }])
                ->firstOrFail(),
        ]);
    }

    public function showProductDetails(Product $product): View
    {
        return view('productDetails', ['product' => $product]);
    }
}
