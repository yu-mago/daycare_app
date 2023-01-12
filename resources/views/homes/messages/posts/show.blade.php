<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
            <div class="body">
                 <h2>メッセージ内容</h2>
                 {{$messages->body}}
            </div>
            </div>
            <div class="edit">
                <a href="/messages/posts/{{ $messages->id }}/edit">edit</a></div>
        <div class="footer">
            <a href="/messages">戻る</a>
        </div>
        <form action="messages/posts/{{ $messages->id }}" id="form_{{ $messages->id }}" method="post">
    @csrf
    @method('DELETE')
    <button type="button" onclick="deletePost({{ $messages->id }})">delete</button> 
        
    </body>
</html>
<script>
    function deletePost(id) {
        'use strict'

        if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
            document.getElementById(`form_${id}`).submit();
        }
    }
</script>