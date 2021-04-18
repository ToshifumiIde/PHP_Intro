<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
<?php 
$date = sprintf("%04s年 % 2d月 %02d日 (%s)" , "abcde",1,2,"金");
// %04dの説明
// %の後ろの「0」は、空白を「0」で補うという意味
// %04dの「4」は、桁数を表す。4桁表記を行う
// %04dの「d」は「digit（桁）」の意味で入力チェックを果たす
// 格納する値が数字ではなく文字列だった場合（例:abcdeなど）、全て「0」で補われる
// 文字を格納したい場合「d」ではなく「s」を用いる
print("2018年 01月 05日") . PHP_EOL;
print($date) . PHP_EOL;
?>
</pre>
</main>
</body>    
</html>