<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
  <?php get_header(); ?>
  <title>アールコム工商-<?php wp_title('-', true, 'right'); bloginfo('name'); ?></title>
</head>
<body>
  <nav>
    <div class="sp-menu-cover"></div>
    <div class="nav-wrapper nav-common">
      <div class="flex wrapper">
        <div id="nav-logo">
          <a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/1.png" alt="Rcomロゴマーク"></a>
        </div>
        <div>
          <ul>
            <li id="menu-head"><a href="<?php echo home_url('/'); ?>product">製品紹介</a></li>
            <li><a href="<?php echo home_url('/'); ?>flow">製造工程</a></li>
            <li><a href="<?php echo home_url('/'); ?>company">会社概要</a></li>
            <li><a href="<?php echo home_url('/'); ?>greet">社長挨拶</a></li>
            <li id="menu-foot"><a href="<?php echo home_url('/'); ?>recruit">採用情報</a></li>
          </ul>
        </div>
        <div id="nav-contact">
          <button class="btn contact-btn" onclick="location.href='/form'"><img src="<?php echo get_template_directory_uri(); ?>/img/mail.png" alt="封筒のイラスト"><p>お問い合わせ</p></button>
          <button class="btn sp-contact-btn" onclick="location.href='/form'"><img src="<?php echo get_template_directory_uri(); ?>/img/mail.png" alt="封筒のイラスト"><p>お問い合せ</p></button>
          <button class="btn sp-menu-btn" id="menu-show"><img src="<?php echo get_template_directory_uri(); ?>/img/menu-bar.png" alt="メニューバーのイラスト"><p>メニュー</p></button>
      </div>
    </div>
    </div>
    <div class="sp-menu">
      <ul>
        <li><a href="<?php echo home_url('/'); ?>product">製品紹介</a></li>
        <li><a href="<?php echo home_url('/'); ?>flow">製造工程</a></li>
        <li><a href="<?php echo home_url('/'); ?>company">会社概要</a></li>
        <li><a href="<?php echo home_url('/'); ?>greet">社長挨拶</a></li>
        <li><a href="<?php echo home_url('/'); ?>recruit">採用情報</a></li>
      </ul>
    </div>
  </nav><!-- /nav -->