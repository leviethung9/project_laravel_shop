<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Color;
use App\Http\Requests\AdminColorRequest;
class ColorController extends Controller
{
    public function index()
    {
        $colors = Color::paginate(6);
        $viewData = [
            'colors' => $colors
        ];
        return view('admin.color.list')->with($viewData);
    }

    public function create()
    {
        return view('admin.color.add');
    }

    public function store(AdminColorRequest $request)
    {
        $data = $request->except('_token');

        $id = Color::insertGetId($data);
        if($id){
            return redirect()->route('color.index')->with('success', 'Thêm mới màu sắc thành công');
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
        
        $color = Color::findOrFail($id);
        return view('admin.color.update', compact('color'));
      
    }
    public function update(AdminColorRequest $request, $id)
    {
        $colors = Color::find($id);
        $data       = $request->except('_token');
    
 
        $colors->update($data);
        return redirect()->route('color.index')->with('success', 'Cập nhật màu sắc thành công');
    }

    public function destroy($id)
    {
        $colors = Color::find($id);
        $colors->delete();
        return redirect()->route('color.index')->with('success', 'Xóa màu sắc thành công');
    }
}
