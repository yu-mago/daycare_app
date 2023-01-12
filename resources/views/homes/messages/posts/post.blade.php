<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <form action="messages/posts" method="POST">
            @csrf
            
            <div class="body">
                <h1>メッセージ投稿</h1>
                 <h2>メッセージ内容</h2>
                <textarea name="post[body]" placeholder="今、なにしている？">{{ old('post.body') }}</textarea>
               <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            </div>
            <input type="submit" value="保存"/>
            </form>
        <div class="footer">
            <a href="/messages">戻る</a>
        </div>
    </body>
</html>