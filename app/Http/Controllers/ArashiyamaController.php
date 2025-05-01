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
}
