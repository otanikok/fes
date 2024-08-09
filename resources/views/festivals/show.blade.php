<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='festival'>
            <h1 class="festival_name">{{ $festival->name }}</h1>
            <p class="festival_overview">{{ $festival->overview}}</p>
        </div>
        <div class="artists">
            @foreach($festival->artists as $artist)
                 <p class="artist_name">{{ $artist->name }}</P>
            @endforeach
        </div>
    </body>
</html>