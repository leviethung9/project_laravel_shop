<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Model\Category;
use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Color;
use App\Model\Keyword;
use App\Model\Size;
class ProductController extends Controller
{
    public function getProduct()
    {
        $products = Product::paginate(5);
        $viewData = [
            'products' => $products,
        ];

        return view('client.home')->with($viewData);
    }
    
    public function productDetail(Request $request, $slug)
    {
   
        $arraySlug = explode('-', $slug);
        $id = array_pop($arraySlug);
        if($id){
            $product = Product::findOrFail($id);
           $viewData = [
               'product' => $product,
               'productLike' => $this->productLike($product->pro_name_cate)
            ];
           
            return view('client.pages.product-detail',$viewData);
        }
        return redirect()->to('/');
       
    }
    public function productLike($categoriesID)
    {
        $product = Product::where([
            'pro_name_cate' => $categoriesID
        ])
        ->orderByDesc('id')
        ->select('id','pro_name','pro_name_cate','pro_avatar','pro_price','pro_price_sale')
        ->limit(4)
        ->get();

        return $product;
    }
    public function productFilterCate($cate_name)
    {
        $categories = Category::all();
        $sizes = Size::all();
        $colors = Color::all();
        $keywords = Keyword::all();
        $cateName = Category::find($cate_name);
        $products = Product::where('pro_name_cate','=',$cateName->c_name )
        ->orderByDesc('id')
        ->select('id','pro_name','pro_name_cate','pro_avatar','pro_price','pro_price_sale')
        ->paginate(4);

        return view('client.pages.shop-filter',compact('products', 'categories', 'sizes', 'colors', 'keywords'));
    }
    public function productFilterSize($cate_name)
    {
        $categories = Category::all();
        $sizes = Size::all();
        $colors = Color::all();
        $keywords = Keyword::all();
        $cateName = Category::find($cate_name);
        $products = Product::where('pro_name_cate','=',$cateName->c_name )
        ->orderByDesc('id')
        ->select('id','pro_name','pro_name_cate','pro_avatar','pro_price','pro_price_sale')
        ->paginate(4);

        return view('client.pages.shop-filter',compact('products', 'categories', 'sizes', 'colors', 'keywords'));
    }

}
