<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminSizeRequest;
use App\Model\Size;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SizeController extends Controller
{
    public function index()
    {
        $sizes = Size::paginate(10);
        $viewData = [
            'sizes' => $sizes
        ];
        return view('admin.size.list')->with($viewData);
    }

    public function create()
    {
        return view('admin.size.add');
    }

    public function store(AdminSizeRequest $request)
    {
        $data = $request->except('_token');
        $data['created_at'] = Carbon::now();
        $id = Size::insertGetId($data);
        if($id){
            return redirect()->route('size.index')->with('success', 'Thêm mới size thành công');
        }
        
    }

    public function edit ($id)
    {
        
        $size = Size::findOrFail($id);
        return view('admin.size.update', compact('size'));
      
    }

    public function update(AdminSizeRequest $request, $id)
    {
        $size = Size::find($id);
        $data       = $request->except('_token');
        $data['update_at'] = Carbon::now();
 
        $size->update($data);
        return redirect()->route('size.index')->with('success', 'Cập nhật size thành công');
    }

    public function destroy($id)
    {
        $size = Size::find($id);
        $size->delete();
        return redirect()->route('size.index')->with('success', 'Xóa size thành công');
    }
}
