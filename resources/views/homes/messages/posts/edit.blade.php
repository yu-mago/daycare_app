<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
         <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/messages/posts/{{ $messages->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="content_body">
                 <h2>メッセージ内容</h2>
                <input type='text' name='post[body]' value="{{ $messages->body}}">
                </div>
                <input type="submit" value="更新"/>
            </form>
        <div class="footer">
            <a href="/messages/posts/{{$messages->id}}">戻る</a>
            
        </div>
    </body>
</html>