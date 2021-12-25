<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\CatePost;
class AboutusController extends Controller
{
    public function get_aboutus(){
        $catepost = CatePost::all();
        $viewData = [
            'catepost' => $catepost
        
        ];
        return view('client.pages.about-us')->with($viewData);
    }
}
