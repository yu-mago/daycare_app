<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

//use宣言は外部にあるクラスをPostController内にインポートできる。
//この場合、App\Models内のPostクラスをインポートしている。
use App\Models\Message;
use App\Http\Requests\PostRequest; // useする
/**
 * Post一覧を表示する
 * 
 * @param Post Postモデル
 * @return array Postモデルリスト
 */
 
class MessageController extends Controller
{
public function home(Message $message){
    return view('homes/home')->with(['messages' => $message->get()]);
}
public function edit(Message $message)
{
    return view('homes/messages/posts/edit')->with(['messages' => $message]);
}
public function index(Message $message){
    return view('homes/messages/index')->with(['messages' => $message->getPaginateByLimit()]);
}
public function create()
{
    return view('homes/messages/posts/post');
}
public function store(PostRequest $request, Message $message){
    $input = $request['post'];
   // dd($input);inputの中に入っているか確認
    //postを関数としたbodyのデータ（ユーザーが入力したもの）がインスタンス化され、インプットされる
    $message->fill($input)->save();
    //fillableに定義された$postのbodyのプロパティに上書きすることが出来る
    return redirect('homes/messages');
    //$post->idの引数を入れることで作成した投稿の詳細ページへ画面を遷移できる
}
public function show(Message $message)
{
    return view('homes/messages/posts/show')->with(['messages' => $message]);
 //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
}
public function update(PostRequest $request, Message $message)
{
    $input_message = $request['post'];
    $message->fill($input_message)->save();

    return redirect('messages/posts/' . $message->id);
    
}
public function delete(Message $message)
{
    $message->delete();
    return redirect('/messages');
}
}