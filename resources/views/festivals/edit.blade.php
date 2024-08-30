<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>フェス名</title>
    </head>
    <body>
        <h1>フェス名の編集</h1>
        <form action="/festivals/{{$festival->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="title">
                <h2>フェス名</h2>
                <input type="text" name="festival[name]" value="{{$festival->name}}"/>
            </div>
            <div class="body">
                <h2>フェスの概要</h2>
                <textarea name="festival[overview]">{{$festival->overview}}</textarea>
            </div>
            <div class="date">
                <h2>日付</h2>
                <input type="text" name="festival[date]" value="{{$festival->date}}"/>
            </div>
            <div>
    </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>