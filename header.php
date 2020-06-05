<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

  <?php wp_header(); ?>
  <title><?php wp_title('-', true, 'right'); bloginfo('name'); ?></title>
</head>
<body>
  <nav>
    <div class="sp-menu-cover"></div>
    <div class="nav-wrapper nav-common">
      <div class="flex wrapper">
        <div id="nav-logo">
          <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/1.png" alt="Rcomロゴマーク"></a>
        </div>
        <div>
          <ul>
            <li id="menu-head"><a href="product.html">製品紹介</a></li>
            <li><a href="flow.html">製造工程</a></li>
            <li><a href="company.html">会社概要</a></li>
            <li><a href="greet.html">社長挨拶</a></li>
            <li id="menu-foot"><a href="recruit.html">採用情報</a></li>
          </ul>
        </div>
        <div id="nav-contact">
          <button class="btn contact-btn" onclick="location.href='form.html'"><img src="<?php echo get_template_directory_uri(); ?>/img/mail.png" alt="封筒のイラスト"><p>お問い合わせ</p></button>
          <button class="btn sp-contact-btn" onclick="location.href='form.html'"><img src="<?php echo get_template_directory_uri(); ?>/img/mail.png" alt="封筒のイラスト"><p>お問い合せ</p></button>
          <button class="btn sp-menu-btn" id="menu-show"><img src="<?php echo get_template_directory_uri(); ?>/img/menu-bar.png" alt="メニューバーのイラスト"><p>メニュー</p></button>
      </div>
    </div>
    </div>
    <div class="sp-menu">
      <ul>
        <li><a href="product.html">製品紹介</a></li>
        <li><a href="flow.html">製造工程</a></li>
        <li><a href="company.html">会社概要</a></li>
        <li><a href="greet.html">社長挨拶</a></li>
        <li><a href="recruit.html">採用情報</a></li>
      </ul>
    </div>
  </nav><!-- /nav -->