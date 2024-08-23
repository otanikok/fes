<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>セットリスト</title>
</head>
<body>
    <h1>セットリスト</h1>
    <ul>
        @foreach ($setlists as $setlist)
            <li>{{ $setlist->title }}</li>
        @endforeach
    </ul>
</body>
</html>