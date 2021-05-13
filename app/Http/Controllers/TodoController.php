<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class TodoController extends Controller
{

    // トップページの表
    public function index(Request $request)
    {
        $blogs = Blog::all();
        return view('index', ['blogs' => $blogs]);
    }

    // タスクの作成
    public function create(Request $request)
    {
        $this->validate($request, Blog::$rules);
        $blog = new Blog;
        $form = $request->all();
        unset($form['_token']);
        $blog->fill($form)->save();
        return redirect('/');
    }


    // タスクの更新
    // public function update()
    // {
    //     return "Hello";
    // }

    // タスクの消去
    // public function delete()
    // {
    //     return "Hello";
    // }




}