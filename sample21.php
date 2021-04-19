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
  $zip = "１２３−４５６７";

  $zip = mb_convert_kana($zip ,"a" , "UTF-8");
  if(preg_match("/\A\d{3}[-]\d{4}\z/" , $zip)){
    print("郵便番号：〒" . $zip);
  }else{
    print("※郵便番号が正しく入力されていません");
  }
  // preg_match()（ピーレグマッチ）functionは正規表現を確認する関数
  // preg_match()の第一引数：正規表現の方法d{3} decimalが3回続く[-]ハイフンで繋げ。\Aは文字の先頭を意味する。\zは文章の最後を意味する
  // preg_match()の第二引数：入力する値
?>

</pre>
</main>
</body>    
</html>