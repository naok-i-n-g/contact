<?php
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

    if ($content == '') {
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
    <p><?php echo $nickname_result; ?></p>
    <p><?php echo $email_result; ?></p>
    <p><?php echo $content_result; ?></p>

    <form action="thanks.php" method="POST">
        <input type="hidden" name="nickname" value=" <?= $nickname ?>">
        <input type="hidden" name="email" value=" <?= $email ?>">
        <input type="hidden" name="content" value=" <?= $content ?>">
        <button type="button" onclick="history.back()">戻る</button>
        <?php if ($nickname != '' && $email != '' && $content != ''): ?>
                    <input type="submit" value="OK">
        <?php endif; ?>    
    </form>
</body>
</html>  