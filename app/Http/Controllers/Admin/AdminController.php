<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Model\Category;
use App\Model\Product;
use App\Model\CatePost;
use App\Model\Post;
use App\Model\Transaction;
use App\Model\Keyword;
use App\Model\Size;
use App\Model\Color;
class AdminController extends Controller
{
    public function index()
    {
        $categories_count = Category::count();
        $products_count = Product::count();
        $catepost_count = CatePost::count();
        $post_count = Post::count();
        $user_count = User::count();
        $transaction_count = Transaction::count();
        $keyword_count = Keyword::count();
        $size_count = Size::count();
        $color_count = Color::count();
        return view('admin.index',compact('categories_count','products_count',
                                            'catepost_count','post_count','user_count',
                                           'keyword_count','transaction_count','color_count','size_count'));
    }
}
