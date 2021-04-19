<?php
$value = "値です";
setcookie("save_message" , "Cookieに保存した値です" , time() + 60*60*24*14);


//setcookie()functionについて。
//第一引数:保存する値の名称
//第二引数:保存する値
//第三引数:保存する期間。time() + ~(秒)と記載することで、保存日時からの経過時間分ブラウザのcookieに保管することが可能

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
  <a href="page02.php">Page2へ移動</a>
</pre>
</main>
</body>    
</html>