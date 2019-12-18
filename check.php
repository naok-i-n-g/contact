<?php
// ファイルの読み込み
require_once('function.php');

    // $nickname = $_GET['nickname'];
    // echo $nickname .'<br>';
    // // メールアドレス
    // $email = $_GET['email'];
    // echo $email .'<br>';
    // // お問い合わせ
    // $content = $_GET['content'];
    // echo $content .'<br>';

    // $nickname = $_POST['nickname'];
    // $email = $_POST['email'];
    // $content = $_POST['content'];

// POST送信でなかったら、
//  index.php にリダイレクトする
// echo '<pre>';
// var_dump($_SERVER);
// exit;

if ($_SERVER['REQUEST_METHOD'] !== 'POST'){
    header('Location: index.php');
}





    // 入力内容を取得
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $content = $_POST['content'];
    //入力の中のチェック 
    if ($nickname == '') {
        $nickname_result = 'ニックネームが入力されていません。';
    } else {
        $nickname_result = 'ようこそ、' . $nickname .'伯爵';
    }
    
    if ($email == '') {
        $email_result = 'メールアドレスが入力されていません。';
    } else {
        $email_result = 'メールアドレス：' . $email;
    }

    if ($contact == '') {
        $content_result =  'お問い合わせ内容が入力されていません。';
    } else {
        $content_result = 'お問い合わせ内容：' . $content;
    }
   
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>入力内容確認</title>
    <meta charset="utf-8">
</head>
<body>

    <h1>入力内容確認</h1>
    <!-- 画面に表示 -->
    <p><?php echo h($name_result); ?></p>
    <!-- 攻撃対策 -->
    <p><?php echo h($email_result); ?></p>
    <p><?php echo h($message_result); ?></p>

    <form action="thanks.php" method="POST">
        <input type="hidden" name="nickname" value=" <?= h($nickname) ?>">
        <input type="hidden" name="email" value=" <?= h($email) ?>">
        <input type="hidden" name="message" value=" <?= h($message) ?>">
        <button type="button" onclick="history.back()">戻る</button>
        <?php if ($nickname != '' && $email != '' && $content != ''): ?>
                    <input type="submit" value="OK">
        <?php endif; ?>    
    </form>
</body>
</html>  