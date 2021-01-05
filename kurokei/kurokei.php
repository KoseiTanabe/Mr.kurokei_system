<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>tweet裏技</title>
<!-- ファビコンの読み込み --!>
<link rel="icon" type="image/png" href="image/icon.png">
<!-- fontawesomeの読み込み --!>
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body>
<p>ツイートしたい内容を記入してね</p>
<p>ツイートの内容に使用する文字数は230文字以下でお願いします</p>
<p>記号はURLに使用できないので記号は使わない様にして下さい</p>
<form action="kurokei_result.php" method="POST">
<textarea name="tweet" rows="10" cols="40">ここにツイートしたい文章を入力してね</textarea><br>
<button type="submit">
<i class="fas fa-pen"></i>URLを作成する
</button>
</form>
</body>
<html>
