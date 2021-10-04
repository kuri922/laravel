<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>栗山雅史の紹介ページ</title>
  <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
@section('layouts.layout')


  <div class="header">
    <img src="images/header.png" alt="海外の風景">

  </div>
  <div class="wrapper">


    <div class="nav">
      <ul>
        <li><a href="index.blade.php">トップ</a></li>
        <li><a href="#">ナビ１</a></li>
        <li><a href="{{url('/hello')}}">お問い合わせ</a></li>
        <li><a href="mypage.html">自己紹介</a></li>
      </ul>
    </div>
    <div class="container">
      <div class="main">
        <div class="post">
          <p>文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。</p>
        </div>
        <h2>見出し</h2>
        <p>見出しに関する文章が入ります。見出しに関する文章が入ります。見出しに関する文章が入ります。見出しに関する文章が入ります。見出しに関する文章が入ります。見出しに関する文章が入ります。見出しに関する文章が入ります。見出しに関する文章が入ります。見出しに関する文章が入ります。</p>

        <h2>見出し</h2>
        <p>見出しに関する文章が入ります。見出しに関する文章が入ります。見出しに関する文章が入ります。見出しに関する文章が入ります。見出しに関する文章が入ります。見出しに関する文章が入ります。見出しに関する文章が入ります。見出しに関する文章が入ります。見出しに関する文章が入ります。</p>
        <h2>見出し</h2>

        <p>見出しに関する文章が入ります。見出しに関する文章が入ります。見出しに関する文章が入ります。見出しに関する文章が入ります。見出しに関する文章が入ります。見出しに関する文章が入ります。見出しに関する文章が入ります。見出しに関する文章が入ります。見出しに関する文章が入ります。</p>
      
        <p>見出しに関する文章が入ります。見出しに関する文章が入ります。見出しに関する文章が入ります。見出しに関する文章が入ります。見出しに関する文章が入ります。見出しに関する文章が入ります。見出しに関する文章が入ります。見出しに関する文章が入ります。見出しに関する文章が入ります。</p>


      </div>
<div class="side">
  <div class="box">
    <h2>サイドメニュー</h2>
    <div class="boxbody">
      <ul>
        <li>項目１</li>
        <li>項目２</li>
        <li>項目３</li>
        <li>項目４</li>
      </ul>
    </div>
  </div>
</div>
    </div>
  </div>
    <div class="footer">
<p>&copy; 20xx ∞ ALL Rights Reserved.</p>
  </div>
  @endcomponent
</body>
</html>