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
  date_default_timezone_set("Asia/Tokyo");
  // print(date("G"));
  // print("確認");
  if(date("G") < 9 || date("G") >= 22){
    print("※現在受付時間外です。" . "\n");
  }else{
  print("ようこそ！" . "\n");

  }

  $x = "あいうえお";
  //文字列は空の場合false、数字は0がfalse、0以外はtrue
  // if($x !==""){
  if(!$x){
    print("xには文字が入力されていません。" . "\n");
  }else{
    print("xには文字が入力されています。" . "\n");
  }
?>
<!-- ここにプログラムを記述します -->
</pre>
</main>
</body>    
</html>