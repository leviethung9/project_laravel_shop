<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\Product;
use App\Model\Size;
use App\Model\Color;
use App\Model\Keyword;

class ShopController extends Controller
{
    public function shop()
    {
        $categories = Category::all();
        $products = Product::paginate(9);
        $sizes = Size::all();
        $colors = Color::all();
        $keywords = Keyword::all();
        $viewData = [
            'categories' => $categories,
            'products' => $products,
            'sizes' => $sizes,
            'colors' => $colors,
            'keywords' => $keywords,
        ];
        return view('client.pages.shop')->with($viewData);
    }
}
