<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>{{ $arashiyama->name }}</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
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
    <p><strong>ルート情報：</strong>
        <a href="https://www.google.com/maps/search/{{ $arashiyama->name }}">

        </a>
    </p>

    <body>
        <div id="test">

        </div>
    </body>



    <div id="map" style="width: 80%; height: 400px; margin: 20px auto;"></div>
    <a href="/">一覧に戻る</a>


    <script>
        (g => {
            var h, a, k, p = "The Google Maps JavaScript API",
                c = "google",
                l = "importLibrary",
                q = "__ib__",
                m = document,
                b = window;
            b = b[c] || (b[c] = {});
            var d = b.maps || (b.maps = {}),
                r = new Set,
                e = new URLSearchParams,
                u = () => h || (h = new Promise(async (f, n) => {
                    await (a = m.createElement("script"));
                    e.set("libraries", [...r] + "");
                    for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]);
                    e.set("callback", c + ".maps." + q);
                    a.src = `https://maps.${c}apis.com/maps/api/js?` + e;
                    d[q] = f;
                    a.onerror = () => h = n(Error(p + " could not load."));
                    a.nonce = m.querySelector("script[nonce]")?.nonce || "";
                    m.head.append(a)
                }));
            d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) =>

                r.add(f) && u().then(() => d[l](f, ...n))
        })({
            key: "{{ config('services.googlemap.api') }}",
            v: "weekly",
        });
    </script>

    <script>
        function initMap() {
            const destination = {
                lat: parseFloat("{{ $arashiyama->lat }}"),
                lng: parseFloat("{{ $arashiyama->lng }}")
            };

            const map = new google.maps.Map(document.getElementById("map"), {
                center: destination,
                zoom: 14,
            });

            const destinationMarker = new google.maps.Marker({
                map: map,
                position: destination,
                title: "{{ $arashiyama->name }}",
            });

            // DirectionsServiceとRendererを作成
            const directionsService = new google.maps.DirectionsService();
            const directionsRenderer = new google.maps.DirectionsRenderer({
                map: map,
            });


            // 現在地取得
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    function(position) {
                        const currentPosition = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude,
                        };

                        //現在地マーカー
                        new google.maps.Marker({
                            position: currentPosition,
                            map: map,
                            title: "現在地",

                        });

                        map.setCenter(currentPosition);

                        let request = {
                            origin: currentPosition,
                            destination: destination,
                            travelMode: "WALKING", // "DRIVING" にすれば車ルート

                        };

                        directionsService.route(request, function(result, status) {
                            if (status === "OK") {
                                directionsRenderer.setDirections(result);

                                console.log("first;",
                                    result); // 全体の情報を表示
                                console.log("second", result.routes[0]); // 最初のルートの詳細を表示


                                const leg = result.routes[0].legs[0];
                                document.getElementById("test").innerHTML = `<p>距離: ${leg.distance.text} 時間: ${leg.duration.text}</p>`;

                            } else {
                                console.log(status);
                                alert("ルート情報が取得できませんでした。");
                            }
                        });
                    },

                );
            }
        }
    </script>


    <script
        src="https://maps.googleapis.com/maps/api/js?key={{ config('services.googlemap.api_key') }}&libraries=marker&callback=initMap"
        async
        defer>
    </script>
</body>

</html>