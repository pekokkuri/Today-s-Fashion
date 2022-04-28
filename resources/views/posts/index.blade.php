<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Fashion</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <center><h1>Today's fashion</h1></center>
        <div class='API'>
            <h4>服装指数,カレンダー,天気予報</h4>
        </div>
        <div class='posts'>
            <h2 class='title'>タイムライン</h2>
            @foreach ($posts as $post)
            <div class='post'>
                <h1 class='post_title'>
                    {{ $post->title }}
                </h1>
                <p class='body'>
                    {{ $post->body }}
                </p>
                <p class='image'>image</p>
            </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>