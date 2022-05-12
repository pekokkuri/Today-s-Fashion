<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>作成ページ</title>
    </head>
    <body>
        <h1>新規投稿</h1>
        <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="image">
                <h3>画像</h3>
                <input type="file" name="post[image]"/>
            </div>
            <div class="body">
                <h3>投稿メッセージ</h3>
                <textarea name="post[body]" placeholder="メッセージを入力してください。"></textarea>
            </div>
            <p><input type="submit" value="保存"/></p>
        </form>
        <p class="back">[<a href="/">戻る</a>]</p>
    </body>
</html>