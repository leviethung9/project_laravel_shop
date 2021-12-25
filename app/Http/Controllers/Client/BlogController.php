<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Post;
use App\Model\CatePost;
class BlogController extends Controller
{
    public function blog()
    {
        $catepost = CatePost::all();
        $post = Post::paginate(3);
        $viewData = [
            'catepost' => $catepost,
            'post' => $post
        ];
        return view('client.pages.blog')->with($viewData);
    }

    public function blogDetail($id)
    {
        $catepost = CatePost::all();
        $post = Post::find($id);
        $viewData = [
            'catepost' => $catepost,
            'post' => $post
        ];
        return view('client.pages.blog-detail')->with($viewData);
    }
}
