<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Category;
use App\Http\Requests\AdminRequestCategory;
use Illuminate\Support\Carbon;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $dataSearch = $request->all();
        $key = isset($dataSearch['key']) ? $dataSearch['key'] : "";

        $query = Category::where('id', '>=', 1);

        if (!is_null($key)) {
            $query->where(function($q) use ($key) {
                $q->where('c_name', 'like', '%'.$key.'%')->orWhere('id', $key);
            });
        };
       
        $categories = $query->paginate(5);
        $viewData = [
            'categories' => $categories
        ];
        return view('admin.category.list')->with($viewData);
    }

    public function create()
    {
        return view('admin.category.add');
    }

    public function store(AdminRequestCategory $request)
    {
        
        $data = $request->except('_token');
        $data['created_at'] = Carbon::now();
        $id = Category::insertGetId($data);
        
        if($id){
            return redirect()->route('category.index')->with('success', 'Thêm mới danh mục thành công');
        }
        
    }

    public function show($id)
    {
    
        $categories = Category::findOrFail($id);
        return view('admin.category.update', compact('categories'));
    }

    public function edit (AdminRequestCategory $request,$id)
    {
       $categories = Category::find($id);
       $data       = $request->except('_token');
       $data['update_at'] = Carbon::now();

       $categories->update($data);
       return redirect()->route('category.index')->with('success', 'Cập nhật danh mục thành công');
    }
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $categories = Category::find($id);
        $categories->delete();
        return redirect()->route('category.index')->with('success', 'Xóa danh mục thành công');
    }
}
