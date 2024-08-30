<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>フェス名</title>
    </head>
    <body>
        <h1>フェス名</h1>
        <form action="/festivals" method="POST">
            @csrf
            <div class="title">
                <h2>フェス名</h2>
                <input type="text" name="festival[name]" placeholder="フェスの名前を記入してください"/>
            </div>
            <div class="body">
                <h2>フェスの概要</h2>
                <textarea name="festival[overview]" placeholder="フェスの概要を書いてください"></textarea>
            </div>
            <div class="date">
                <h2>日付</h2>
                <input type="text" name="festival[date]" placeholder="20xx年x月x日～20xx年x月x日"/>
            </div>
            <div>
        <h2>出演アーティスト</h2>
        @foreach($artists as $artist)

            <label>
                {{-- valueを'$subjectのid'に、nameを'配列名[]'に --}}
                <input type="checkbox" value="{{ $artist->id }}" name="artists_array[]">
                    {{$artist->name}}
                </input>
            </label>
            
        @endforeach         
    </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>