<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>お問い合わせ</title>
</head>
<body>
    <h1>お問い合わせ情報入力</h1>
    <form method="POST" action="check.php">
    
        <div>
            ニックネーム<br>
            <input type="text" name="nickname">
        </div>
        <div>
            メールアドレス<br>
            <input type="text" name="email">
        </div>
        <div>
            お問い合わせ内容<br>
            <textarea name="content"></textarea>
        </div>
        <input type="submit" value="送信">
    </form>
</body>
</html>
