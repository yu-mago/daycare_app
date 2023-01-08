<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <form action="/posts" method="POST">
            @csrf
            
            <div class="body">
                <h1>メッセージ投稿</h1>
                 <h2>メッセージ内容</h2>
                <textarea name="post[body]" placeholder="今、なにしている？"></textarea>
                {{--"message[body]"の部分は--}}
            </div>
            <input type="submit" value="保存"/>
            </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>