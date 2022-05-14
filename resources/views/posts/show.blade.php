<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>詳細ページ</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1 class="image">
           <img src='{{ $post->image }}' width='220px' height='220px'>
        </h1>
        <div class="massage">
           <p>{{ $post->body }}</p>    
        </div>
        <form action="/posts/{{ $post->id }}" id="form_delete" method="post">
            {{ csrf_field() }}
            {{ method_field('delete') }}
            <input type="submit" style="display:none"> 
            <p class='delete'>
                <button onclick="return deletePost(this);">削除する</button>
            </p>
        </form>
        <script>
            function deletePost(e){
                'use strict';
                if (confirm('削除すると復元できません. \n本当に削除しますか？')){
                   document.getElementById("form_delete").submit(); 
                }
            }
        </script>
        <p class="footer">
            <a href="/">戻る</a>
        </p>
    </body>
</html>
