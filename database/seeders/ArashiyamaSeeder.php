<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ArashiyamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('arashiyama')->insert([

            'name' => 'eX cafe 京都嵐山店',
            'type' => 'カフェ',
            'description' => '古い邸宅を改装した路地裏カフェ',
            'website_url' => 'https://www.instagram.com/excafe_official/',
            'lat' => '35.014893994699925',
            'lng' => '135.6780149236579',
        ]);
        DB::table('arashiyama')->insert([

            'name' => 'タリーズコーヒー 嵐電嵐山店',
            'type' => 'カフェ',
            'description' => 'カフェのチェーン店。多彩なロースト コーヒー、紅茶、スムージーのほか、ペイストリーや軽食も提供',
            'website_url' => 'https://shop.tullys.co.jp/detail/1000772?utm_source=google&utm_medium=gbp&utm_campaign=map',
            'lat' => '35.01508515958793',
            'lng' => '135.67799714851876',
        ]);
        DB::table('arashiyama')->insert([

            'name' => 'アラビカコーヒー 嵐山店',
            'type' => 'カフェ',
            'description' => '渡月橋を眺めながらコーヒーが飲めるカフェ',
            'website_url' => 'https://arabica.com/location/arabica-kyoto-arashiyama/',
            'lat' => '35.01376177975529',
            'lng' => '135.67641522055757',
        ]);
        DB::table('arashiyama')->insert([
            'name' => 'みっふぃー桜きっちん&べーかりー嵐山店',
            'type' => 'カフェ',
            'description' => '焼きたてパンを販売するみっふぃーベーかりーとキッチン雑貨等を販売するみっふぃー桜きっちんが併設',
            'website_url' => 'https://miffykitchenbakery.jp/',
            'lat' => '35.01493690759607',
            'lng' => '135.6776981101659',

        ]);
        DB::table('arashiyama')->insert([
            'name' => '琴きき茶屋',
            'type' => 'カフェ',
            'description' => 'そばやうどん、定食等、桜、抹茶など幅広く提供',
            'website_url' => 'http://www.kotokikichaya.co.jp/kotokiki.html',
            'lat' => '35.013897562405376',
            'lng' => '135.67766878132997',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '上島珈琲店',
            'type' => 'カフェ',
            'description' => '',
            'website_url' => 'https://shop.ufs.co.jp/ufs/spot/detail?code=3729',
            'lat' => '35.01763863003542',
            'lng' => '135.67691884582536',
        ]);
        DB::table('arashiyama')->insert([
            'name' => 'musubi sweets factory',
            'type' => 'カフェ',
            'description' => 'ビーガン・グルテンフリーのスイーツ工房',
            'website_url' => 'https://musubi-cafe.jp/sweets-factory/',
            'lat' => '35.01109055702385',
            'lng' => '135.67776134085378',
        ]);








        DB::table('arashiyama')->insert([
            'name' => '新渡月',
            'type' => 'レストラン',
            'description' => '',
            'website_url' => 'https://shintogetsu.net/',
            'lat' => '35.014740058801',
            'lng' => '135.67769215375512',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '京都嵐山 和牛 六重亭',
            'type' => 'レストラン',
            'description' => '上質な和牛と京豆腐が楽しめるお店',
            'website_url' => '',
            'lat' => '35.01441470565866',
            'lng' => '135.6775148607284',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '嵯峨とうふ 稲',
            'type' => 'レストラン',
            'description' => '嵯峨とうふ、嵐山さくら餅、本蕨餅の専門店',
            'website_url' => 'https://www.kyo-ine.com/',
            'lat' => '35.01583894103798',
            'lng' => '135.67723182491673',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '嵐山グルメ横丁',
            'type' => 'レストラン',
            'description' => '6店舗（丼、とんかつ、うどん、スイーツ、串焼き・揚げ物、ドリンク）が軒を連ねる横丁スタイルの飲食店',
            'website_url' => '',
            'lat' => '35.01457396986852',
            'lng' => '135.67746255762412',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '篩月',
            'type' => 'レストラン',
            'description' => '名庭、四季折々の風景にかこまれながらいただく精進料理',
            'website_url' => 'https://www.tenryuji.com/shigetsu/',
            'lat' => '35.015217499794296',
            'lng' => '135.67355914847073',
        ]);








        DB::table('arashiyama')->insert([
            'name' => 'まめもとのたいやき',
            'type' => '食べ歩き',
            'description' => '賞味期限1分のあんバターたい焼きが人気',
            'website_url' => 'https://mamemono.com/',
            'lat' => '35.01497239863782',
            'lng' => '135.67704557023185',
        ]);
        DB::table('arashiyama')->insert([
            'name' => 'おかき処寺子屋本舗 嵐山店',
            'type' => '食べ歩き',
            'description' => 'カラフルな餡が乗ったお団子が有名',
            'website_url' => 'https://www.telacoya.co.jp/company/shop_detail/shop_detail-446/',
            'lat' => '35.01394863370592',
            'lng' => '135.67815543577277',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '京抹茶クレープ ARINCO',
            'type' => '食べ歩き',
            'description' => '京抹茶クレープの専門店',
            'website_url' => 'https://arincoroll.jp/',
            'lat' => '35.01526592165283',
            'lng' => '135.6774647745902',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '新八茶屋',
            'type' => '食べ歩き',
            'description' => '1941年創業の日本料理店を起点に、抹茶ソフトや和素材を生かしたイタリアンジェラートで知られる名店',
            'website_url' => 'https://shinpachichaya.com/#about',
            'lat' => '35.01383847574141',
            'lng' => '135.6779330201734',
        ]);
        DB::table('arashiyama')->insert([
            'name' => 'カランコロン京都 嵐山店',
            'type' => '食べ歩き',
            'description' => '抹茶やバニラ、ミックスなどのアイスクリームを提供',
            'website_url' => '',
            'lat' => '35.014423097811566',
            'lng' => '135.67780778215754',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '嵯峨野 コロッケ',
            'type' => '食べ歩き',
            'description' => '全国コロッケコンクールで金賞を受賞したコロッケをはじめ竹のこコロッケやかきフライなども販売',
            'website_url' => '',
            'lat' => '35.01418552984491',
            'lng' => '135.67757077092722',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '京豆庵',
            'type' => '食べ歩き',
            'description' => '逆さにしても落ちない濃厚ソフトクリーム',
            'website_url' => '',
            'lat' => '35.01771575196817',
            'lng' => '135.6764214629133',
        ]);





        DB::table('arashiyama')->insert([

            'name' => '竹林の小径',
            'type' => '観光',
            'description' => '青々とした竹林が約300m続く',
            'website_url' => 'https://ja.kyoto.travel/tourism/single01.php?category_id=8&tourism_id=2683',
            'lat' => '35.01745990517784',
            'lng' => '135.67517631187482',
        ]);
        DB::table('arashiyama')->insert([

            'name' => '天龍寺',
            'type' => '観光',
            'description' => '桜に花々、紅葉など季節ごとに美景が楽しめる禅寺',
            'website_url' => 'https://www.tenryuji.com/',
            'lat' => '35.01594553879225',
            'lng' => '135.67374930671144',
        ]);
        DB::table('arashiyama')->insert([

            'name' => '着物フォレスト',
            'type' => '観光',
            'description' => '約600本ものポールを林に見立てたフォトジェニックなスポット',
            'website_url' => '',
            'lat' => '35.01529804044352',
            'lng' => '135.67836472409374',
        ]);
        DB::table('arashiyama')->insert([

            'name' => '渡月橋',
            'type' => '観光',
            'description' => '嵯峨野と嵐山を隔てて流れる桂川に架かる橋',
            'website_url' => 'https://ja.kyoto.travel/tourism/single01.php?category_id=8&tourism_id=2682',
            'lat' => '35.01290143872623',
            'lng' => '135.6777739438169',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '嵐山モンキーパークいわたやま',
            'type' => '観光',
            'description' => '餌付けされた約120頭の野生のニホンザルが施設一帯に自由に滞留しており、間近に観察できる',
            'website_url' => 'http://www.monkeypark.jp/',
            'lat' => '35.011408501076424',
            'lng' => '135.6766237256147',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '野宮神社',
            'type' => '観光',
            'description' => '竹林の小径の中にある、縁結び・子宝安産の神様として信仰を集めるパワースポット',
            'website_url' => 'http://www.nonomiya.com/index.html',
            'lat' => '35.01778332317748',
            'lng' => '135.67414203555185',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '二尊院',
            'type' => '観光',
            'description' => '釈迦如来と阿弥陀如来の二尊がご本尊',
            'website_url' => 'https://nisonin.jp/',
            'lat' => '35.021720035963995',
            'lng' => '135.669653153842',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '虚空蔵法輪寺',
            'type' => '観光',
            'description' => '十三まいりで知られる、知恵と学業成就を祈る嵐山の古刹',
            'website_url' => 'https://www.kokuzohourinji.com/',
            'lat' => '35.010268673253584',
            'lng' => '135.67722564223277',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '常寂光寺',
            'type' => '観光',
            'description' => '紅葉の名所として人気の、静寂と趣に満ちた日蓮宗の寺院',
            'website_url' => 'https://jojakko-ji.or.jp/',
            'lat' => '35.01989937957515',
            'lng' => '135.66863521683004',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '保津川下り',
            'type' => '観光',
            'description' => '亀岡-嵐山間16キロの保津峡（桂川）の急流を約2時間かけて舟下りする',
            'website_url' => 'https://www.hozugawakudari.jp/',
            'lat' => '35.017261000996854',
            'lng' => '135.5868597985113',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '華厳寺（鈴虫寺）',
            'type' => '観光',
            'description' => '一年中鈴虫の音色が響く、願い事を一つ叶えてくれる「幸福地蔵」の寺',
            'website_url' => 'https://www.suzutera.or.jp/',
            'lat' => '34.99373834215775',
            'lng' => '135.68494329828647',
        ]);







        DB::table('arashiyama')->insert([

            'name' => 'トイレ',
            'type' => '施設・サービス',
            'description' => '嵐山昇龍苑2階と嵐電嵐山駅構内にある',
            'website_url' => '',
            'lat' => '35.015295829720365',
            'lng' => '135.67791499457883',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '外貨両替',
            'type' => '施設・サービス',
            'description' => '嵐電嵐山駅構内',
            'website_url' => '',
            'lat' => '35.01516892955991',
            'lng' => '135.67780662942965',
        ]);
        DB::table('arashiyama')->insert([
            'name' => 'ATM',
            'type' => '施設・サービス',
            'description' => '',
            'website_url' => '',
            'lat' => '35.01517167547167',
            'lng' => '135.6777751134708',
        ]);
        DB::table('arashiyama')->insert([
            'name' => 'ゴミ箱',
            'type' => '施設・サービス',
            'description' => 'トイレの中か商品を買ったお店で捨てる',
            'website_url' => '',
            'lat' => '35.015295829720365', //トイレの座標
            'lng' => '135.67791499457883',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '嵯峨野トロッコ電車/トロッコ嵯峨駅',
            'type' => '施設・サービス',
            'description' => '保津川沿いを走る、四季折々の絶景を楽しめる観光列車',
            'website_url' => 'https://www.sagano-kanko.co.jp/station/saga/',
            'lat' => '35.01862731358256',
            'lng' => '135.68077330804812',
        ]);
        DB::table('arashiyama')->insert([
            'name' => 'JR嵯峨嵐山駅',
            'type' => '施設・サービス',
            'description' => '',
            'website_url' => 'https://www.jr-odekake.net/eki/top?id=0610704',
            'lat' => '35.0188006641104',
            'lng' => '135.68117824209293',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '阪急嵐山駅',
            'type' => '施設・サービス',
            'description' => '',
            'website_url' => 'https://www.hankyu.co.jp/station/arashiyama.html',
            'lat' => '35.010416982561225',
            'lng' => '135.68158584965215',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '福田美術館',
            'type' => '施設・サービス',
            'description' => '江戸から近代にかけての画家の作品を約1,500点収蔵',
            'website_url' => 'https://fukuda-art-museum.jp/',
            'lat' => '35.01382109559178',
            'lng' => '135.67641502691006',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '嵐山昇龍苑',
            'type' => '施設・サービス',
            'description' => '京都の老舗店舗が一堂に揃う商業施設',
            'website_url' => 'https://www.syoryuen.jp/',
            'lat' => '35.01505196152907',
            'lng' => '135.6771726756483',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '人力車 乗り場',
            'type' => '施設・サービス',
            'description' => '四季折々の京都の風情を人力車が案内',
            'website_url' => 'https://www.ebisuya.com/branch/arashiyama/',
            'lat' => '35.01368330878791',
            'lng' => '135.67729247501697',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '嵐湯',
            'type' => '施設・サービス',
            'description' => '五感全てが満足するような癒やしの体験を提供',
            'website_url' => 'https://www.arashiyu.jp/arashiyama/',
            'lat' => '35.0145710701225',
            'lng' => '135.67791041121248',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '嵐山温泉 駅の足湯',
            'type' => '施設・サービス',
            'description' => '観光の合間に立ち寄れる、癒しと眺望を兼ね備えた足湯施設',
            'website_url' => 'https://www.kyotoarashiyama.jp/',
            'lat' => '35.015403361268646',
            'lng' => '135.67829914963778',
        ]);



        DB::table('arashiyama')->insert([
            'name' => '石川 竹乃店',
            'type' => 'お土産',
            'description' => '伝統的な竹細工の工芸品から若い世代向けのインテリア系商品まで幅広く製造・販売',
            'website_url' => 'https://www.takenomise.com/',
            'lat' => '35.01483973741103',
            'lng' => '135.67756593329574',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '井筒八ッ橋本舗',
            'type' => 'お土産',
            'description' => '京銘菓「八ッ橋」を中心に、歴史と味を受け継ぐ老舗和菓子店',
            'website_url' => 'https://www.takenomise.com/',
            'lat' => '35.015205823215595',
            'lng' => '135.67750229524506',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '嵐山ちりめん細工館 嵐山本店',
            'type' => 'お土産',
            'description' => '伝統的なものから、ユニークなミニチュア品のものまで、ちりめんのお細工小物を集積したお店',
            'website_url' => 'https://mrucompany.co.jp/realshop/chrimen-arashiyama/',
            'lat' => '35.015525979314084',
            'lng' => '135.67752637686334',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '嵐山 かづら野',
            'type' => 'お土産',
            'description' => '八ツ橋や京漬物、京ばあむ、抹茶スイーツ、コスメや雑貨など幅広い商品を扱っている',
            'website_url' => 'https://www.takenomise.com/',
            'lat' => '35.01377428786437',
            'lng' => '135.67856000392106',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '抹茶スイーツ処 茶和々',
            'type' => 'お土産',
            'description' => '京都宇治抹茶を使用したお菓子が揃う、抹茶スイーツ専門店。抹茶のドリンクやソフトクリームなどのメニューも豊富。',
            'website_url' => 'https://www.telacoya.co.jp/company/shop_detail/shop_detail-436/',
            'lat' => '35.014757186885035',
            'lng' => '135.67736977418286',
        ]);
    }
}
