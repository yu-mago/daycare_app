<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
{
   return view('posts/index')->with(['posts' => $post->get()]);
   //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入

    return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
}
public function create()
{
    return view('posts/create');
}
}
