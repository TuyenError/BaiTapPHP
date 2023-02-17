<!DOCTYPE html>
<html>

<head>
    <title>Từ điển</title>
</head>

<body>
    <h1>Từ điển</h1>
    <form method="post">
        <label for="word">Nhập từ cần tra:</label>
        <input type="text" name="word" id="word">
        <button name="btn" type="submit">Tra từ</button>
    </form>
</body>

</html>
<?php
$dictionary = array(
    "apple" => "quả táo",
    "banana" => "quả chuối",
    "carrot" => "củ cà rốt",
    "dog" => "con chó",
    // thêm các từ khác vào đây
);

if (isset($_POST['btn'])) {
    $word = $_POST["word"];
    if (array_key_exists($word, $dictionary)) {
        $definition = $dictionary[$word];
        echo "<p><strong>$word:</strong> $definition</p>";
    } else {
        echo "<p>Không tìm thấy từ \"$word\" trong từ điển.</p>";
    }
}
?>
