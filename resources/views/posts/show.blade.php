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
            {{ $post->image }}
        </h1>
        <div class="massage">
           <p>{{ $post->body }}</p>    
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>