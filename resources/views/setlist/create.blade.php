<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>セットリストの登録</title>
    <script>
        function addSongField() {
            const container = document.getElementById('songs');
            const input = document.createElement('input');
            input.type = 'text';
            input.name = 'songs[]';
            input.placeholder = '曲名';
            container.appendChild(input);
        }
    </script>
</head>
<body>
    <h1>セットリストの登録</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/setlists" method="POST">
        @csrf
        <div>
            <label for="title">タイトル:</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
        </div>
        <div>
            <label for="description">説明:</label>
            <textarea name="description" id="description">{{ old('description') }}"></textarea>
        </div>
        <div id="songs">
            <label for="songs">曲名:</label>
            <input type="text" name="songs[]" placeholder="曲名">
        </div>
        <button type="button" onclick="addSongField()">曲を追加</button>
        <div>
            <button type="submit">登録</button>
        </div>
    </form>
</body>
</html>