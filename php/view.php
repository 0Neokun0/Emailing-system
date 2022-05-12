<!DOCTYPE html>
<html>

<head>
<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
<meta charset="utf-8">
<title>メール送信</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style>
* {
    font-size: 16px;
    font-family: "ヒラギノ角ゴPro W6","Hiragino Kaku Gothic Pro W6","メイリオ",Meiryo,"ＭＳ Ｐゴシック",Verdana,Arial,Helvetica,sans-serif;
}

/* PC 用の表示 */
@media screen and ( min-width:480px ) {
    #content {
        margin: 26px;
    }
    #base {
        width: 650px;
        border: 0px solid #ff0000;
    }
    .left,.right {
        height: 50px;
    }	
    
    .left {
        display:inline-block;
        width: 100px;
        vertical-align: baseline;
        padding-top: 0.5rem;	
    }
    .right {
        display:inline-block;
        padding-bottom: 60px;
    }

}

/* スマホ用の表示 */
@media screen and ( max-width:479px ) {
    #content {
        margin: 0px;
    }
    #base {
        margin-top: 8px;
    }
    .unit {
        width: 100%;
    }
    
    .left,.right {
    }

    .left {
        padding: 4px;
    }

    #text {
        width: 100%;
    }

}

</style>


<script>
// ******************************
// jQuery onload イベント
// ******************************
$(function(){


});

// ******************************
// 確認ボタンの時の送信チェック
// ******************************
function check(){

    if ( !confirm("送信してもよろしいですか?") ) {
        return false;
    }

    return true;
}
</script>
</head>

<body>
<h3 class="alert alert-primary"><a href="control.php">メール送信</a></h3>
<div id="content">
    <form id="base" method="post"
        onsubmit="return check()">

        <div class="body">
            <div class="left">宛先</div>

            <div class="right">
                <input
                    size="50"
                    maxlength="50"
                    required
                    type="email" 
                    name="to" 
                    id="to" 
                    class="unit">
            </div>
        </div>
        <div class="body">
            <div class="left">タイトル</div>

            <div class="right">
                <input 
                    size="50"
                    maxlength="50"
                    type="text" 
                    name="subject" 
                    id="subject" 
                    class="unit">
            </div>
        </div>
        <div class="body">
            <div class="left">ひとこと</div>

            <div class="right">
                <input 
                    size="50"
                    maxlength="50"
                    type="text" 
                    name="text" 
                    id="text" 
                    class="unit">
            </div>
        </div>

        <div>
            <input type="submit" name="btn" id="btn" value="メール送信" class="btn btn-primary unit mt-5">
        </div>

    </form>
    <div id="result" class="m-4"><?= $message ?></div>
    
</div>
</body>
</html>
