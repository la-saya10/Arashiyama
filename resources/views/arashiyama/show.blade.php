<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>{{ $arashiyama->name }}</title>
</head>

<body>
    <h1>{{ $arashiyama->name }}</h1>

    <p><strong>タイプ：</strong>{{ $arashiyama->type }}</p>
    <p><strong>紹介文：</strong>{{ $arashiyama->description }}</p>
    <p><strong>公式サイト：</strong>
        <a href="{{ $arashiyama->website_url }}" target="_blank">
            {{ $arashiyama->website_url }}
        </a>
    </p>

    <a href="/">一覧に戻る</a>
</body>

</html>