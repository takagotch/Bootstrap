<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?></title>
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>

<body>

<div class="container">        <!-- 全体を囲むコンテナ -->

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target="#mainNav">
        <span class="sr-only">ナビゲーション</span>
        <span class="icon-bar"></span>
      </button>
      <a href="index.html" class="navbar-brand">My room</a>
    </div>
    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="nav navbar-nav">
        <li class="active">
          <a href="page.html"><span class="glyphicon glyphicon-home"></span>ホーム</a>
        </li>
     </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="page.html">連絡</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron"
     style="color:#FFF; text-shadow: 2px 2px 4px #666; 
            height:230px; background:url(<?php bloginfo('template_url'); ?>/photo/top.JPG); background-size:cover;">
  <span class="h2"><?php bloginfo('name'); ?></span>
  <p style="font-size:16px"></p>
</div>