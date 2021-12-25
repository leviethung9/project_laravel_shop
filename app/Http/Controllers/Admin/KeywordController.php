<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminKeywordRequest;
use Illuminate\Http\Request;
use App\Model\Keyword;
use Carbon\Carbon;
use Illuminate\Support\Str;
class KeywordController extends Controller
{
    public function index()
    {
        $keyword = Keyword::paginate(10);
        $viewData = [
            'keyword' => $keyword
        ];
        return view('admin.keyword.list')->with($viewData);
    }

    public function create()
    {
        return view('admin.keyword.add');
    }

    public function store(AdminKeywordRequest $request)
    {
        $data = $request->except('_token');
        $data['created_at'] = Carbon::now();
        $data['k_slug'] = Str::slug($request->k_name, '-');
        $id = Keyword::insertGetId($data);
        if($id){
            return redirect()->route('keyword.index')->with('success', 'Thêm mới từ khóa thành công');
        }
        
    }
    
    public function show($id)
    {
    
    }

    public function status($id)
    {
        $keyword = Keyword::find($id);
        $keyword->k_status = !$keyword->k_status;
        $keyword->save();
        return redirect()->back();
    }
    
    public function edit ($id)
    {
        
        $keyword = Keyword::findOrFail($id);
        return view('admin.keyword.update', compact('keyword'));
      
    }
    public function update(AdminKeywordRequest $request, $id)
    {
        $keyword = Keyword::find($id);
        $data       = $request->except('_token');
        $data['update_at'] = Carbon::now();
 
        $keyword->update($data);
        return redirect()->route('keyword.index')->with('success', 'Cập nhật từ khóa thành công');
    }

    public function destroy($id)
    {
        $keyword = keyword::find($id);
        $keyword->delete();
        return redirect()->route('keyword.index')->with('success', 'Xóa từ khóa thành công');
    }
}
