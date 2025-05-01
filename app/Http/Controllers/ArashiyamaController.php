<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arashiyama;

class ArashiyamaController extends Controller
{
    public function show(Arashiyama $arashiyama)
    {
        return view('arashiyama.show')->with(['arashiyama' => $arashiyama]);
    }
    public function search(Request $request)
    {
        // クエリパラメータからタイプを取得
        $type = $request->input('type');

        // タイプが指定されていればそのタイプでフィルタリング
        if ($type) {
            $places = Arashiyama::where('type', $type)->get();
        } else {
            // タイプが指定されていなければ全件表示
            $places = Arashiyama::all();
        }

        return view('arashiyama.index', compact('places'));
    }
}
