<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>アーティスト登録</h1>
        <form action="/artists" method="POST">
            @csrf
            <div class="title">
                <h2>アーティスト名</h2>
                <input type="text" name="artist[name]" placeholder="アーティス名"/>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>