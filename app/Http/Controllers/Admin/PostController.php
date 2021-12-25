<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Post;
use App\Model\Category;
use App\Model\CatePost;
use App\Http\Requests\AdminPostRequest;
use Carbon\Carbon;
class PostController extends Controller
{
    public function index()
    {
        $post = Post::paginate(10);
        $viewData = [
            'post' => $post
        ];
        return view('admin.post.list')->with($viewData);
    }
    public function create()
    {
        $catepost = CatePost::all();
        $viewData = [
            'catepost' => $catepost
        ];
        return view('admin.post.add')->with($viewData);
    }

    public function store(AdminPostRequest $request)
    {
        $data = $request->except('_token');
        if ($request->has('p_avatar')) {

            $file = $request->p_avatar;
            // get name file
            $ext = $request->p_avatar->extension();
            $file_name = time().'-'.'post'.'.'.$ext;
            // upload
            $file->move(public_path('uploads2'), $file_name);
            $data['p_avatar'] = $file_name;
        }

        $id = Post::insertGetId($data);
        $data['create_at'] = Carbon::now();
        if ($id) {
            return redirect()->route('post.index')->with('success', 'Thêm mới bài viết thành công');
        }
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('admin.post.detail', compact('post'));
    }

    public function edit ($id)
    {
        $catepost = CatePost::all();
       
        $viewData = [
            'catepost' => $catepost,
        ];
        $post = Post::findOrFail($id);
        return view('admin.post.update', compact('post'))->with($viewData);
      
    }
    public function update(AdminPostRequest $request, $id)
    {
        $post = Post::find($id);
        $data       = $request->except('_token');
        if ($request->has('p_avatar')) {
            $file = $request->p_avatar;
            // get name file
            $ext = $request->p_avatar->extension();
            $file_name = time().'-'.'post'.'.'.$ext;
            // upload
            $file->move(public_path('uploads2'), $file_name);
            $data['p_avatar'] = $file_name;
        }
        $post->update($data);
        return redirect()->route('post.index')->with('success', 'Cập nhật bài viết thành công');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('post.index')->with('success', 'Xóa bài viết thành công');
    }
}
