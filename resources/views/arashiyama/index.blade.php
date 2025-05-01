<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>嵐山マップ</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>

<body>
    <h1>嵐山マップ一覧</h1>

    <ul>
        @foreach ($places as $place)
        <li>
            <a href="/arashiyama/{{ $place->id }}">{{ $place->name }}</a>
        </li>
        @endforeach
    </ul>
</body>


</html>