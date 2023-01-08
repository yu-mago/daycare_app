<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>メッセージ一覧</h1>
        <form action="/posts" method="POST">
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='id'>{{ $post->id }}</h2>
                <p class='body'>{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
        <a href='/posts'>投稿</a>
    {{--　/以降が遷移するページ　--}}
         <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>