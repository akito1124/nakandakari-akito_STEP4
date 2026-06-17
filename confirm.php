<?php
function show_confirm() {
    $name = $_POST["name"] ?? "";
    $age = $_POST["age"] ?? "";
    $phone = $_POST["phone"] ?? "";
    $email = $_POST["email"] ?? "";
    $address = $_POST["address"] ?? "";
    $question = $_POST["question"] ?? "";
    $gender = $_POST["gender"] ?? "";

    echo "<h2>入力内容確認</h2>";
    echo "<p>名前: " . htmlspecialchars($name) . "</p>";
    echo "<p>年齢: " . htmlspecialchars($age) . "</p>";
    echo "<p>電話番号: " . htmlspecialchars($phone) . "</p>";
    echo "<p>メールアドレス: " . htmlspecialchars($email) . "</p>";
    echo "<p>住所: " . htmlspecialchars($address) . "</p>";
    echo "<p>質問: " . htmlspecialchars($question) . "</p>";
    echo "<p>性別: " . htmlspecialchars($gender) . "</p>";
}
?>
