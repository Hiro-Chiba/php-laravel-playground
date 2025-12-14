<?php
// 自作コマンドの管理所

// Foundation : Laravelアプリ全体の起動・設定・例外処理などを担う基盤レイヤ
// Inspiring : デモ用に用意された「名言」を返すだけのサンプルクラス
use Illuminate\Foundation\Inspiring;
// Artisan    : php artisan コマンドをコードから実行するためのFacade
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    // $this は「今実行中の artisan コマンド自身」を指す
    // comment() はターミナルに文字を表示するためのメソッド
    // Inspiring::quote() は英語の名言を1つ返す
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
