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
        <div class='messages'>
            @foreach ($messages as $message)
                <div class='message'>
                    <h2 class='id'>{{ $message->id }}</h2>
                {{--<p class='body'>{{ $post->body }}</p>--}}
                </div>
            @endforeach
        </div>
    </body>
</html>