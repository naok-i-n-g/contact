<?php
    require_once('function.php');
    require_once('dbconnect.php');

    //SQLを実行
    // ⓵DBからデータを取得する
    $stmt = $dbh->prepare('SELECT * FROM surveys');
    $stmt->execute();
    $results = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>一覧</title>
</head>
<body>
<!-- //画面に表示する -->
<!-- ➁  画面の表示 -->
    <?php foreach ($results as $result): ?>
        <p><?php echo h($result['nickname']); ?></p>
        <p><?php echo h($result['email']); ?></p>
        <p><?php echo h($result['content']); ?></p>
    <?php endforeach; ?>
</body>
</html>