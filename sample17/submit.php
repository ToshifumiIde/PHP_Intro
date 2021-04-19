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
  お名前：<?= htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES);?>
</pre>
<!-- $_REQUEST:グローバル変数。formの値を受け取る。ブラケット内のstringはinputタグのnameでつけたstringのmy_nameと紐づく -->
<!-- 次にセキュリティの考慮が必要。ユーザーが入力する値がurlに遷移するstringだった場合、悪意あるサイトに誘導される場合もある。したがって、htmlspecialchars functionを用いてhtmlタグに認識される文字列をescapeして、普通の文字列にする。htmlspecialchars functionは引数が2つ必要。第一引数はどの文字列を対象とするか。第二引数はどの様にescapeするかのflagを記載。基本的に「ENT-_QUOTES シングルクォート、ダブルクォートを変換する」でOK。ちなみにこのENT_QUOTESはINT型でありstring型ではないため、シングルクオートやダブルクオートで囲う必要はない。-->
<!-- $_GETはformのmethodがgetの時に有効、$_POSTはformのmethodがpostの時に有効。$_REQUESTはformのmethodがgetでもpostでも有効。-->
<!-- そうなると、なんでも$_REQUESTにすれば良いのか…というとそうでもない。$_GETか$_POSTか内容がわかっている場合はなるだけどちらか指定したほうが良い。 -->
<!-- DBにデータを登録したりする場合はfrom method="post"とし、$_POSTとしたほうが良い。逆にサーバーから読み取る場合は、form method="get"とし、$_GETを用いるべきである。 -->
</main>
</body>    
</html>