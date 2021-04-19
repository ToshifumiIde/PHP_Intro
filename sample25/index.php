<?php
session_start();

$_SESSION["session_message"] = "セッションに保存している値はこちらです";

//sessionでの情報の記憶にはsession_start()functionを用いる必要がある
//$_SESSION:グローバル変数。後ろにブラケット・ブラケット内に名前（キー）をつけることで、session名をつけることが可能
//page遷移する場合にはsessionは値を保持しているが、ブラウザを閉じるとsessionの値は保持されなくなる。
?>

<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
<p>session_start()functionと$_SESSION["session_message"]グローバル変数を用いて、セッションに値を保存しました。</p>
&raquo; <a href="page02.php">Page02に移動</a>
</pre>
</main>
</body>    
</html>