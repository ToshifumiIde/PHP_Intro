<?php

session_start();

//sessionに保存した値を呼び出すには、session_start()functionを実行する必要がある。
//sessionを使用する時は、先頭にsession_start()functionを記述する必要がある。この記述がないとPHPではsessionを使えない。
//ただし、設定ファイルであるphp.iniにて設定を変更すると、session_start()を記述しなくても使用できる様になる。
//設定で変更は可能だが、全体の負荷が向上するのと、明示した方が可読性が上がるため、必要な部分にsession_start()functionを実行した方が適切。
//sessionを取り出すときは$_SESSIONとグローバルsessionを用いる。
//sessionはcookieと異なり、サーバー上にデータが保存される。
//
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
  <?php
    print($_SESSION["session_message"]);
  ?>
</pre>
</main>
</body>    
</html>