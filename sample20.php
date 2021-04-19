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
  $age = "２０";
  
  $age = mb_convert_kana($age ,"n" , "UTF-8");
  //mb_convert_kana()functionのmbはmulti_byteのmb
  //第一引数：convertする値、第二引数：変換方法（"n"は全角数字を半角数字に変換）、第三引数：文字コード（多くは"UTF-8"）
  if(is_numeric($age)){
    print($age . "歳") . PHP_EOL;
  } else{
    print("※ 年齢が数字ではありません。") . PHP_EOL;
  }
  ?>
</pre>
</main>
</body>    
</html>