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
  $news = file_get_contents("../../news_data/news.txt");
  $news = "2021-06-05 としさんの誕生日を迎えました\n" . $news;
  file_put_contents("../../news_data/news.txt", $news);

  print($news);
  //file_get_contents()関数を使うと、戻り値にファイルの内容を取得することが可能
  //ただ、ファイルを読み込むためだけに変数に格納しprintするのは面倒。
  //その場合readfile()関数を使う。戻り値不要でそのまま表示する。
  //readfile("../../news_data/news.txt");
  //ただしreadfile()ファンクションの場合、読み込んだ内容に書き込みなどはできない。
?>
</pre>
</main>
</body>    
</html>