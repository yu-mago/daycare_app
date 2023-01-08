<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

//use宣言は外部にあるクラスをPostController内にインポートできる。
//この場合、App\Models内のPostクラスをインポートしている。
use App\Models\Message;
/**
 * Post一覧を表示する
 * 
 * @param Post Postモデル
 * @return array Postモデルリスト
 */
 
class MessageController extends Controller
{

public function index(Message $message){
    return view('messages/index')->with(['messages' => $message->get()]);
}
public function create()
{
    return view('messages/posts/post');
}
public function store(Request $request, Message $message){
    $input = $request['post'];
    //postを関数としたbodyのデータ（ユーザーが入力したもの）がインスタンス化され、インプットされる
    $message->fill($input);
    //fillableに定義された$postのbodyのプロパティに上書きすることが出来る
    return redirect('/posts'.$message->id);
    //$post->idの引数を入れることで作成した投稿の詳細ページへ画面を遷移できる
}
}