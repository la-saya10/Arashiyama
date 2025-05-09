<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ArashiyamaController;
// タイプでフィルタリングするためのルート
Route::get('/search', [ArashiyamaController::class, 'search'])->name('arashiyama.search');


Route::get('/', function () {
    $places = DB::table('arashiyama')->get(); // arashiyamaテーブルの全データを取得
    return view('arashiyama.index', ['places' => $places]);
});
Route::get('/arashiyama/{arashiyama}', [ArashiyamaController::class, 'show']);


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
