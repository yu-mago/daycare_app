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
}