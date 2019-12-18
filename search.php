<?php


// ファイルを読み込む
require_once('dbconnect.php');

// 検索ボタンをクリックしたら
// ユーザーが入力した内容と一致するデータを
// 画面に表示する

// ユーザーが入力した内容を取得
// 取得した内容は&nickbaneに代入\\
// 変数Snicknameを画面に表示して取得でくるか確認
// $_GET['nickname']が存在していれば
$nickname = '';
if(isset($_GET['nickname'])) {
    $nickname = $_GET['nickname'];
//  変数＄nicknameを画面に表示して湯徳できているか確認
    var_dump($nickname);
}


// ユーザーが入力した内容でDB（MySQL)を検索
//  prepare = 準備

    $stmt = $dbh->prepare('SELECT * FROM surveys WHERE nickname = ?');
//  execute = 実行する
    $stmt->execute([$nickname]);
//  実行した結果を変数resaltsに代入 
    $results = $stmt->fetchAll();



    // echo '<pre>';
    // var_dump($results);
    // exit;

// 検索結果を画面に表示する





?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>入力内容確認</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>入力内容確認</h1>
    <p><?php echo h($nickname_result); ?></p>
    <p><?php echo h($email_result); ?></p>
    <p><?php echo h($content_result); ?></p>

    <form method="POST" action="thanks.php">
        <input type="hidden" name="nickname" value="<?php echo $nickname; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="content" value="<?php echo $content; ?>">
        <input type="button" value="戻る" onclick="history.back()">
        <?php if ($nickname != '' && $email != '' && $content != ''): ?>
            <input type="submit" value="OK">
        <?php endif; ?>
    </form>
</body>
</html>