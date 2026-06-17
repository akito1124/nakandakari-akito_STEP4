<?php
$name = $_POST["name"];
$age = $_POST["age"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$gender = $_POST["gender"];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>入力内容確認</title>
</head>
<body>
    <h1>入力内容確認</h1>

    <p>名前：<?= htmlspecialchars($name) ?></p>
    <p>年齢：<?= htmlspecialchars($age) ?></p>
    <p>電話番号：<?= htmlspecialchars($phone) ?></p>
    <p>メールアドレス：<?= htmlspecialchars($email) ?></p>
    <p>性別：<?= htmlspecialchars($gender) ?></p>
</body>
</html>
