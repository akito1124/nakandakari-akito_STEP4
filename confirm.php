<?php
$name = $_POST["name"] ?? "";
$age = $_POST["age"] ?? "";
$phone = $_POST["phone"] ?? "";
$email = $_POST["email"] ?? "";
$address = $_POST["address"] ?? "";
$question = $_POST["question"] ?? "";
$gender = $_POST["gender"] ?? "";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>入力内容確認</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="form-area">
            <h1>フォーム入力</h1>
            <form action="confirm.php" method="post">
                <label for="name">名前:</label>
                <input type="text" id="name" name="name">

                <label for="age">年齢:</label>
                <input type="number" id="age" name="age">

                <label for="phone">電話番号:</label>
                <input type="tel" id="phone" name="phone">

                <label for="email">メールアドレス:</label>
                <input type="email" id="email" name="email">

                <label for="address">住所:</label>
                <input type="text" id="address" name="address">

                <label for="question">質問:</label>
                <input type="text" id="question" name="question">

                <label for="gender">性別:</label>
                <select id="gender" name="gender">
                    <option value="男性">男性</option>
                    <option value="女性">女性</option>
                </select>

                <button type="submit">送信</button>
            </form>
        </div>

        <div class="confirm-area">
            <h1>入力内容確認</h1>
            <p>名前: <?= htmlspecialchars($name) ?></p>
            <p>年齢: <?= htmlspecialchars($age) ?></p>
            <p>電話番号: <?= htmlspecialchars($phone) ?></p>
            <p>メールアドレス: <?= htmlspecialchars($email) ?></p>
            <p>住所: <?= htmlspecialchars($address) ?></p>
            <p>質問: <?= htmlspecialchars($question) ?></p>
            <p>性別: <?= htmlspecialchars($gender) ?></p>
        </div>
    </div>
</body>
</html>
