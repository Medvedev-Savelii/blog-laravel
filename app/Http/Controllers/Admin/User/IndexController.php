<?php

namespace App\Http\Controllers\Admin\User;
use App\Http\Controllers\Controller;
use App\Models\Category;


class IndexController extends Controller
{
    public function __invoke()
    {
        $users = Category::all();
        return view('admin.user.index', compact('users'));
    }
}
