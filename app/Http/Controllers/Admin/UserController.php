<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function index()
    {
        $user = User::paginate(10);
        $viewData = [
            'user' => $user
        ];
        return view('admin.user.list')->with($viewData);
    }
}
