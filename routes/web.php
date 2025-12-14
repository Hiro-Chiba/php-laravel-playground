<?php
//Webサイトのページ を作る場所

// Illuminate : Laravel本体の機能群をまとめた名前空間（公式フレームワーク側のコード）
// Support    : フレームワーク全体を支える共通・補助機能を集めた領域
// Facades    : 中の本体クラスを簡単な名前で使うための窓口（Facade）が置かれているフォルダ
// Route      : ルーティング処理（URLと処理の対応付け）を行うFacade
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // view()   : 画面を返すLaravelの関数
    // 'welcome': Laravelが固定で決めている resources/views/ 配下のwelcome.blade.phpを指す
    return view('welcome');
});
