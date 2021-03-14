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
// print(time() + 60*60*24 . "\n");
// time()はタイムスタンプ 1970年01月01日0:00からの経過秒を計算
//strtotime("+2day")
//strtotime = string to time
// for($i = 1;$i <= 365 ; $i++){
//   print(date("n/j(D)" , time() + 60*60*24 * $i) . "\n");
// }

for($i=0;$i<365;$i++){
  $date = strtotime("+" . $i . "day");
  print(date("n/j(D)" , $date) . "\n");
}

while($n <= 365):
  $date = strtotime("+" . $n . "day");
  print(date("n/j(D)" , $date));
  $n++;
  print("\n");
endwhile;

?>
<!-- ここにプログラムを記述します -->
</pre>
</main>
</body>    
</html>