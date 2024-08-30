<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="/songs" method="POST">
            @csrf
            <div class="title">
                <h2>曲名</h2>
                <input type="text" name="song[name]" placeholder="曲名"/>
            </div>
            <div class="artist_name">
                <h2>アーティスト名</h2>
                <select name="song[artist_id]">
                    @foreach ($artists as $artist)
                    <option value="{{ $artist->id}}">{{ $artist->name }}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>