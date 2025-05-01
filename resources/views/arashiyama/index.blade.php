<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>嵐山マップ</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>

<body>
    <h1>嵐山マップ一覧</h1>
    <form action="{{ route('arashiyama.search') }}" method="get">
        <select name="type">
            <option value="">タイプで絞り込み</option>
            <option value="カフェ">カフェ</option>
            <option value="レストラン">レストラン</option>
            <option value="食べ歩き">食べ歩き</option>
            <option value="観光">観光</option>
            <option value="お土産">お土産</option>
            <option value="施設・サービス">施設・サービス</option>

            <!-- 必要に応じて他のタイプも追加 -->

        </select>
        <button type="submit">検索</button>
    </form>

    <ul>
        @foreach ($places as $place)
        <li>
            <a href="/arashiyama/{{ $place->id }}">{{ $place->name }}</a>
        </li>
        @endforeach
    </ul>
</body>


</html>