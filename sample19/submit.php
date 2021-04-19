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
  <?php foreach($_POST["reserve"] as $reserve) :?>
  <p>
    <?=htmlspecialchars($reserve,ENT_QUOTES);?>
  </p>
  <?php endforeach ?>
</pre>
<!-- 上記の様にindex.htmlから複数のcheckboxの値（name="reserve[]"）として$_POSTを受け取った場合、foreachにて配列を展開して処理する必要がある -->
</main>
</body>    
</html>