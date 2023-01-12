<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <a href='/'>保育Clip</a>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>交流</h1>
        <form action="/posts" method="POST">
        <div class='messages'>
            @foreach ($messages as $message)
                <div class='message'>
                    {{--<h2 class='id'>{{ $message->id }}</h2>--}}
                <p class='body'>
                 <a href="messages/posts/{{ $message->id }}">{{ $message->body }}</a>
                </p>
                </div>
                
</form>
            @endforeach
        </div>
        <a href='messages/posts'>投稿</a>
        <div class='paginate'>
            {{ $messages->links() }}
        </div>
    </body>
</html>