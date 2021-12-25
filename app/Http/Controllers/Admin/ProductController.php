<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminProductRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Model\Product;
use Illuminate\Support\Str;
use App\Model\Category;
use App\Model\Color;
use App\Model\Keyword;
use App\Model\Size;
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(5);
        $viewData = [
            'products' => $products
        ];
        return view('admin.product.list')->with($viewData);
    }
    public function create()
    {
        $categories = Category::all();
        $sizes = Size::all();
        $colors = Color::all();
        $keywords = Keyword::all();
        $viewData = [
            'categories' => $categories,
            'sizes' => $sizes,
            'colors' => $colors,
            'keywords' => $keywords,
        ];
        return view('admin.product.add')->with($viewData);
    }

    public function store(AdminProductRequest $request)
    {
        $data = $request->except('_token');
        if ($request->has('pro_avatar')) {

            $file = $request->pro_avatar;
            // get name file
            $ext = $request->pro_avatar->extension();
            $file_name = time().'-'.'product'.'.'.$ext;
            // upload
            $file->move(public_path('uploads'), $file_name);
            $data['pro_avatar'] = $file_name;
        }
        
        $data['pro_slug'] = Str::slug($request->pro_name, '-');
        $data['created_at'] = Carbon::now();
        $id = Product::insertGetId($data);
        if ($id) {
            return redirect()->route('product.index')->with('success', 'Thêm mới sản phẩm thành công');
        }
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('admin.product.detail', compact('product'));
    }

    public function edit($id)
    {
        $categories = Category::all();
        $sizes = Size::all();
        $colors = Color::all();
        $keywords = Keyword::all();
        $viewData = [
            'categories' => $categories,
            'sizes' => $sizes,
            'colors' => $colors,
            'keywords' => $keywords,
        ];

        $product = Product::find($id);
        return view('admin.product.update', compact('product'))->with($viewData);
    }

    public function update(AdminProductRequest $request, $id)
    {

        $products = Product::find($id);
        $data = $request->except('_token');
        if ($request->has('pro_avatar')) {

            $file = $request->pro_avatar;
            // get name file
            $ext = $request->pro_avatar->extension();
            $file_name = time().'-'.'product'.'.'.$ext;
            // upload
            $file->move(public_path('uploads'), $file_name);
            $data['pro_avatar'] = $file_name;
        }
        
        $data['pro_slug'] = Str::slug($request->pro_name, '-');
        $data['update_at'] = Carbon::now();
        $products->update($data);
        return redirect()->route('product.index')->with('success', 'Cập nhật sản phẩm thành công');

        
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Xóa sản phẩm thành công');
    }

}
