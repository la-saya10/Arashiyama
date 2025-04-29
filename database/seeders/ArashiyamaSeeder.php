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
            'description' => 'おしゃれなカフェでリラックス。',
            'website_url' => 'https://www.instagram.com/excafe_official/',
        ]);
        DB::table('arashiyama')->insert([

            'name' => 'タリーズコーヒー 嵐電嵐山店',
            'type' => 'カフェ',
            'description' => '',
            'website_url' => 'https://shop.tullys.co.jp/detail/1000772?utm_source=google&utm_medium=gbp&utm_campaign=map',
        ]);
        DB::table('arashiyama')->insert([

            'name' => 'アラビカコーヒー 嵐山店',
            'type' => 'カフェ',
            'description' => '',
            'website_url' => 'https://arabica.com/location/arabica-kyoto-arashiyama/',
        ]);
        DB::table('arashiyama')->insert([
            'name' => 'みっふぃー桜きっちん&べーかりー嵐山店',
            'type' => 'カフェ',
            'description' => '',
            'website_url' => 'https://miffykitchenbakery.jp/',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '琴きき茶屋',
            'type' => 'カフェ',
            'description' => '',
            'website_url' => 'http://www.kotokikichaya.co.jp/kotokiki.html',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '上島珈琲店',
            'type' => 'カフェ',
            'description' => '',
            'website_url' => 'https://shop.ufs.co.jp/ufs/spot/detail?code=3729',
        ]);
        DB::table('arashiyama')->insert([
            'name' => 'musubi sweets factory',
            'type' => 'カフェ',
            'description' => 'ビーガン・グルテンフリーのスイーツ工房',
            'website_url' => 'https://musubi-cafe.jp/sweets-factory/',
        ]);








        DB::table('arashiyama')->insert([
            'name' => '新渡月',
            'type' => 'レストラン',
            'description' => '',
            'website_url' => 'https://shintogetsu.net/',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '嵐山三芳亭',
            'type' => 'レストラン',
            'description' => '上質な和牛と京豆腐が楽しめるお店',
            'website_url' => '',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '嵯峨とうふ 稲',
            'type' => 'レストラン',
            'description' => '嵯峨とうふ、嵐山さくら餅、本蕨餅の専門店',
            'website_url' => 'https://www.kyo-ine.com/',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '嵐山グルメ横丁',
            'type' => 'レストラン',
            'description' => '6店舗（丼、とんかつ、うどん、スイーツ、串焼き・揚げ物、ドリンク）が軒を連ねる横丁スタイルの飲食店',
            'website_url' => '',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '篩月',
            'type' => 'レストラン',
            'description' => '名庭、四季折々の風景にかこまれながらいただく精進料理',
            'website_url' => 'https://www.tenryuji.com/shigetsu/',
        ]);








        DB::table('arashiyama')->insert([
            'name' => 'まめもとのたいやき',
            'type' => '食べ歩き',
            'description' => '',
            'website_url' => 'https://mamemono.com/',
        ]);
        DB::table('arashiyama')->insert([
            'name' => 'おかき処寺子屋本舗 嵐山店',
            'type' => '食べ歩き',
            'description' => 'カラフルな餡が乗った和スイーツ',
            'website_url' => 'https://www.telacoya.co.jp/company/shop_detail/shop_detail-446/',
        ]);
        DB::table('arashiyama')->insert([
            'name' => 'ARINCO',
            'type' => '食べ歩き',
            'description' => '',
            'website_url' => 'https://arincoroll.jp/',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '新八茶屋',
            'type' => '食べ歩き',
            'description' => '',
            'website_url' => 'https://shinpachichaya.com/#about',
        ]);
        DB::table('arashiyama')->insert([
            'name' => 'カランコロン京都 嵐山店',
            'type' => '食べ歩き',
            'description' => '',
            'website_url' => '',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '嵯峨野 コロッケ',
            'type' => '食べ歩き',
            'description' => '',
            'website_url' => '',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '京豆庵',
            'type' => '食べ歩き',
            'description' => '逆さにしても落ちない濃厚ソフトクリーム',
            'website_url' => '',
        ]);





        DB::table('arashiyama')->insert([

            'name' => '竹林の小径',
            'type' => '観光',
            'description' => '青々とした竹林が約300m続く',
            'website_url' => 'https://ja.kyoto.travel/tourism/single01.php?category_id=8&tourism_id=2683',
        ]);
        DB::table('arashiyama')->insert([

            'name' => '天龍寺',
            'type' => '観光',
            'description' => '桜に花々、紅葉など季節ごとに美景が楽しめる禅寺',
            'website_url' => 'https://www.tenryuji.com/',
        ]);
        DB::table('arashiyama')->insert([

            'name' => '着物フォレスト',
            'type' => '観光',
            'description' => '約600本ものポールを林に見立てたフォトジェニックなスポット',
            'website_url' => '',
        ]);
        DB::table('arashiyama')->insert([

            'name' => '渡月橋',
            'type' => '観光',
            'description' => '',
            'website_url' => 'https://ja.kyoto.travel/tourism/single01.php?category_id=8&tourism_id=2682',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '嵐山モンキーパークいわたやま',
            'type' => '観光',
            'description' => '',
            'website_url' => 'http://www.monkeypark.jp/',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '野宮神社',
            'type' => '観光',
            'description' => '竹林の小径の中にある、縁結び・子宝安産の神様として信仰を集めるパワースポット',
            'website_url' => 'http://www.nonomiya.com/index.html',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '二尊院',
            'type' => '観光',
            'description' => '釈迦如来と阿弥陀如来の二尊がご本尊',
            'website_url' => 'https://nisonin.jp/',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '法輪寺',
            'type' => '観光',
            'description' => '',
            'website_url' => 'https://www.kokuzohourinji.com/',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '常寂光寺',
            'type' => '観光',
            'description' => '',
            'website_url' => 'https://jojakko-ji.or.jp/',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '保津川下り',
            'type' => '観光',
            'description' => '',
            'website_url' => 'https://www.hozugawakudari.jp/',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '華厳寺（鈴虫寺）',
            'type' => '観光',
            'description' => '',
            'website_url' => 'https://www.suzutera.or.jp/',
        ]);







        DB::table('arashiyama')->insert([

            'name' => 'トイレ',
            'type' => '施設・サービス',
            'description' => '',
            'website_url' => '',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '外貨両替',
            'type' => '施設・サービス',
            'description' => '',
            'website_url' => '',
        ]);
        DB::table('arashiyama')->insert([
            'name' => 'ATM',
            'type' => '施設・サービス',
            'description' => '',
            'website_url' => '',
        ]);
        DB::table('arashiyama')->insert([
            'name' => 'ゴミ箱',
            'type' => '施設・サービス',
            'description' => '',
            'website_url' => '',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '嵯峨野トロッコ電車/トロッコ嵯峨駅',
            'type' => '施設・サービス',
            'description' => '',
            'website_url' => 'https://www.sagano-kanko.co.jp/station/saga/',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '福田美術館',
            'type' => '施設・サービス',
            'description' => '江戸から近代にかけての画家の作品を約1,500点収蔵',
            'website_url' => 'https://fukuda-art-museum.jp/',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '嵐山昇龍苑',
            'type' => '施設・サービス',
            'description' => '京都の老舗店舗が一堂に揃う商業施設',
            'website_url' => 'https://www.syoryuen.jp/',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '人力車',
            'type' => '施設・サービス',
            'description' => '',
            'website_url' => 'https://www.ebisuya.com/branch/arashiyama/',
        ]);






        DB::table('arashiyama')->insert([
            'name' => '嵐湯',
            'type' => '足湯',
            'description' => '',
            'website_url' => 'https://www.arashiyu.jp/',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '嵐山温泉 駅の足湯',
            'type' => '足湯',
            'description' => '',
            'website_url' => 'https://www.kyotoarashiyama.jp/',
        ]);



        DB::table('arashiyama')->insert([
            'name' => '石川 竹乃店',
            'type' => 'お土産',
            'description' => '伝統的な竹細工の工芸品から若い世代向けのインテリア系商品まで幅広く製造・販売',
            'website_url' => 'https://www.takenomise.com/',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '井筒八ッ橋本舗',
            'type' => 'お土産',
            'description' => '',
            'website_url' => 'https://www.takenomise.com/',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '嵐山ちりめん細工館 嵐山本店',
            'type' => 'お土産',
            'description' => '',
            'website_url' => 'https://mrucompany.co.jp/realshop/chrimen-arashiyama/',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '嵐山 かづら野',
            'type' => 'お土産',
            'description' => '八ツ橋や京漬物、京ばあむ、抹茶スイーツ、コスメや雑貨など幅広い商品を扱っている',
            'website_url' => 'https://www.takenomise.com/',
        ]);
        DB::table('arashiyama')->insert([
            'name' => '抹茶スイーツ処 茶和々',
            'type' => 'お土産',
            'description' => '京都宇治抹茶を使用したお菓子が揃う、抹茶スイーツ専門店。抹茶のドリンクやソフトクリームなどのメニューも豊富。',
            'website_url' => 'https://www.telacoya.co.jp/company/shop_detail/shop_detail-436/',
        ]);
    }
}
