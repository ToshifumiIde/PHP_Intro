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
3000円の商品を100円値引きした商品は、
<?php print(floor(100/3000 * 100));?>%
値引きとなります。
■その他の計算
切り上げ(ceil)→<?php print(ceil(100 / 3000 * 100)) . "\n";?>
四捨五入(round)→<?php print(round(100/3000 * 100 ,1)) . "\n";?>
<!-- ここにプログラムを記述します -->
</pre>
</main>
</body>    
</html>