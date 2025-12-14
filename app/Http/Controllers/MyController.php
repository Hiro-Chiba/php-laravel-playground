<?php
//php artisan make:controller MyController によって作成される

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// Illuminate\Http\Request : ブラウザやAPIから送られてきた「リクエスト（URL・GET/POSTデータ・ヘッダ等）」
//                           を1つのオブジェクトとしてまとめたLaravelのクラス
// この1行を書くことで、このコントローラ内で Request 型として受け取り、
// フォーム入力やクエリパラメータを安全に扱えるようになる
use Illuminate\Http\Request;

class MyController extends Controller
{
    //
}
