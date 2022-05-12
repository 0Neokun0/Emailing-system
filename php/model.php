<?php
// ***************************
// メール送信
// ***************************
function send_mail(){

    global $server,$user,$dbname,$password,$message;

    // シングルクォートをエスケープ
    $to = str_replace("'", "''", $_POST["to"]);
    $subject = str_replace("'", "''", $_POST["subject"]);
    $text = str_replace("'", "''", $_POST["text"]);

    // メール送信の準備( サーバ上のメールアドレスを使用 )
    $mail_address = "2180022@i-seifu.jp";  // 送信元のメールアドレス(偽装ができてしまう)
    $mail_name = "Meher Nishant";
    $from_header = "From: " . mb_encode_mimeheader( mb_convert_encoding($mail_name,"iso-2022-jp") );
    $from_header .= " <{$mail_address}>";

    // メール送信
    // $_POST["to"] => あて先メールアドレス
    // $_POST["subject"] => メールの件名
    // $_POST["text"] => メールの本文
    // $from_header => 送信元情報
    $result = mb_send_mail($_POST["to"], $_POST["subject"], $_POST["text"], $from_header);

    if ( $result === true) {
        $message = "メール送信が成功しました";
    }
    else {
        $message = "メール送信は失敗しました( C:\\xampp\\sendmail\\error.log を確認してください )";
    }

}
