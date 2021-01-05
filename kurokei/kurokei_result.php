<?php
if (isset($_POST['tweet'])) {
	$tweet = $_POST['tweet'];
	/*入力された文字を第二引数で指定した文字数で区切る
	但し文字数ではなく厳密にはバイト数で区切る
	日本語は一文字あたり3バイト使用するので文字数 / 3バイト
	mb_str_splitはバイト数ではなく、純粋に文字数で区切る
	*/
	$arrays = mb_str_split($tweet, 23);
	//配列の要素数の取得:
	$count = count($arrays);
	//xss対策
	function h($str) {
		return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
	}
	for ($i = 0; $i < $count; $i++) {
		$arrays[$i] = 'http://' . $arrays[$i] . '.jp';
	}
	$result = implode(' ', $arrays);
} else {
header('Location: kurokei.php');
exit();
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>tweet裏技</title>
<link rel="icon" type="image/png" href="image/icon.png">
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body>
<p><?php echo trim($result); ?></p>
<br>
<a href="kurokei.php"><i class="fas fa-undo"></i>入力フォームに戻る</a>
</body>
</html>
