<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>フォーム入力</title>
    <link rel="stylesheet" href="style.css?v=20">
</head>
<body>

    <h1 class="page-title">フォーム入力</h1>

    <div class="container">
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

            <button type="submit" class="submit-btn">送信</button>
        </form>
    </div>

</body>
</html>
