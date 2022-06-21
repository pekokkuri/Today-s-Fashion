<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>編集ページ</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
         <h1 class="title">編集画面</h1>
         <div class="content">
              <form action="/posts/{{ $post->id }}" method="POST">
                  @csrf
                  @method('PUT')
                  <div class='image'>
                      <h3>画像</h3>
                      <input type='file' name='image' value="{{ $post->image }}">
                  </div>
                  <div class='body'>
                      <h3>投稿メッセージ</h3>
                      <textarea name='post[body]'>{{ $post->body }}</textarea>
                　</div>
                　<p class='store'>
                　    <input type="submit" value="保存"/>
                　</p>
              </form>
              <p class='back'>[<a href="/posts/{{ $post->id }}">戻る</a>]</p>
        　</div>
    </body>
</html>