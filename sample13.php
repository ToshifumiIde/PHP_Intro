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
  
  $success = file_put_contents("../../news_data/news.txt","2021-04-20 ホームページをリニューアルいたしました");
  if($success){
    print("ファイルの書き込みが完了しました $success") . PHP_EOL;
  }else{
    print("ファイルへの書き込みが失敗しました。フォルダの権限などを確認してください");
  }
  //file_put_contents()は実行後、値(ファイルに書き込まれたバイト数)を返却する。作成されたnews.txtのデータは68バイトで作成されている。
  //それ(68)を$successで受け取って、if文で条件分岐している。
  ?>
</pre>
</main>
</body>    
</html>