<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminCatepostRequest;
use Illuminate\Http\Request;
use App\Model\CatePost;
class CatePostController extends Controller
{
    public function index()
    {
        $catepost = CatePost::paginate(5);
        $viewData = [
            'catepost' => $catepost
        ];
        return view('admin.catepost.list')->with($viewData);
    }

    public function create()
    {
        return view('admin.catepost.add');
    }

    public function store(AdminCatepostRequest $request)
    {
        $data = $request->except('_token');

        $id = CatePost::insertGetId($data);
        if($id){
            return redirect()->route('catepost.index')->with('success', 'Thêm mới chuyên mục thành công');
        }
        
    }
    
    public function show($id)
    {
    
    }

    public function status($id)
    {
        // $keyword = Color::find($id);
        // $keyword->k_status = !$keyword->k_status;
        // $keyword->save();
        // return redirect()->back();
    }
    
    public function edit ($id)
    {
        
        $catepost = CatePost::findOrFail($id);
        return view('admin.catepost.update', compact('catepost'));
      
    }
    public function update(AdminCatepostRequest $request, $id)
    {
        $catepost = CatePost::find($id);
        $data       = $request->except('_token');
        $catepost->update($data);
        return redirect()->route('catepost.index')->with('success', 'Cập nhật chuyên mục thành công');
    }

    public function destroy($id)
    {
        $catepost = CatePost::find($id);
        $catepost->delete();
        return redirect()->route('catepost.index')->with('success', 'Xóa chuyên mục thành công');
    }

}
