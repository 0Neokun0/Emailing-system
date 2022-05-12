<?php
require_once("setting.php");

header( "Content-Type: text/html; charset=utf-8" );

// 固有の処理
require_once("model.php");

// **************************
// 初期画面( URL 呼び出し )
// **************************
if ( $_SERVER["REQUEST_METHOD"] == "GET" ) {

}

// **************************
// 更新処理
// **************************
if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
    // メール送信の自作関数実行
    send_mail();
}

// **************************
// 画面定義
// **************************
require_once("view.php");

?>
