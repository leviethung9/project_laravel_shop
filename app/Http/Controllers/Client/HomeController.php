<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\CatePost;
use App\Model\Product;
use App\Model\Post;
class HomeController extends Controller
{
    public function home()
    {
        $categories = Category::paginate(5);
        $catepost = CatePost::paginate(5);
        $products = Product::paginate(8);
        $post = Post::paginate(4);
        $viewData = [
            'categories' => $categories,
            'catepost' => $catepost,
            'products' => $products,
            'post' => $post
        ];
        return view('client.home')->with($viewData);
    }

}
