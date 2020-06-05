<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
  <title>アールコム工商株式会社</title>
</head>
<body>
  <div id="main-visual" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/main-img.png);">
    <div class="container wrapper">
      <nav class="">
        <div class="sp-menu-cover"></div>
        <div class="nav-wrapper flex">
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
      <div class="wrapper">
        <div id="sp-main-visual"></div>
        <div id="explain-card">
          <h1>アールコム工商</h1>
          <p class="explain-text-1">ダミーテキストくぁｗせｄｒｆｔｇｙふじこｌｐ；＠：「」ダミーテキストくぁｗせｄｒｆｔｇｙふじこｌｐ；＠：「」ダミーテキストくぁｗせｄｒｆｔｇｙふじ：「」ダミーテキストくぁｗせｄｒｆｔｇｙふじこｌｐ；＠：「」ダミーテキストくぁｗせｄｒｆｔｇｙふじこｌｐ；＠：「」</p>
          <div class="flex explain-change">
            <p id="explain-change-1">●</p>
            <p id="explain-change-2">●</p>
            <p id="explain-change-3">●</p>
            <!-- <p id="explain-change-4">●</p> -->
          </div>
        </div>
      </div>
      <div class="info-wrapper">
        <h2>お知らせ</h2>
        <div class="info">
          <ul>
            <li id="li-first" style="background: url(<?php echo get_template_directory_uri(); ?>/img/arrow-right.png) left 0px top 3px no-repeat;background-size: 15px auto;"><a href="archives.html"><span>2020年1月1日</span>明けましておめでとうございます。本年も宜しくお願いします。</li></a>
            <li id="li-first" style="background: url(<?php echo get_template_directory_uri(); ?>/img/arrow-right.png) left 0px top 3px no-repeat;background-size: 15px auto;"><a href="archives.html"><span>2020年1月1日</span>明けましておめでとうございます。本年も宜しくお願いします。</li></a>            
          </ul>
        </div>
        <div id="info-cov">
          <button class="btn cov-btn" onclick="location.href='product/product_part.html'">コロナ対策製品</button>
        </div>
      </div>
    </div>
  </div><!-- /pagetop -->
  <main>
      <div id="top-product-head">
          <h2>製品紹介</h2>
          <p>ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</p>
      </div>
      <div class="container wrapper" id="top-product">
        <div id="top-product-cards">
          <div class="top-product-card">
            <div class="top-product-img">
              <div class="img-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/top-product-1.png" alt="">
                <div class="view-more"></div>
              </div>
              <h3>アクリル加工品</h3>
              <p>ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</p>
              <a class="link" href="product/product_acrylic.html"></a>
              <button class="btn sp-more-btn">もっと見る</button>
            </div>
          </div>
          <div class="top-product-card">
            <div class="top-product-img">
              <div class="img-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/top-product-2.png" alt="">
                <div class="view-more"></div>
              </div>
              <h3>アクリル加工品</h3>
              <p>ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</p>
              <a class="link" href="product/product_display.html"></a>
              <button class="btn sp-more-btn">もっと見る</button>
            </div>
          </div>
          <div class="top-product-card">
            <div class="top-product-img">
              <div class="img-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/top-product-3.png" alt="">
                <div class="view-more"></div>
              </div>
              <h3>アクリル加工品</h3>
              <p>ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</p>
              <a class="link" href="product/product_monitor.html"></a>
              <button class="btn sp-more-btn">もっと見る</button>
            </div>
          </div>
        </div>
        <div>
          <button class="btn cov-btn product-cov-btn" onclick="location.href='product/product_part.html'">コロナ対策製品</button>
        </div>
      </div><!-- /top-product -->
      <div class="top-flow-wrap">  
        <div id="top-flow" style="  background-image: url(<?php echo get_template_directory_uri(); ?>/img/top-flow-gb.png);background-size: cover;"></div>
        <div class="flow-cover"></div>
        <a href="flow.html" class="link"></a>
        <div id="top-flow-contents">
          <h2>製造工程</h2>
          <p>ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストーテキストーテキストーテキストーテキスト</p>
          <img src="<?php echo get_template_directory_uri(); ?>/img/view-more.png" alt="もっと見る">
          <a href="flow.html" class="link"></a>
        </div>
      </div><!-- top-flow -->
      <div id="top-company">
        <div class="container wrapper">
          <div class="top-company-card">
            <a href="company.html" class="link"></a>
            <div class="top-company-img">
              <div class="cover"><div class="view-more"></div></div>
              <a href="company.html" class="link"></a>
              <img src="<?php echo get_template_directory_uri(); ?>/img/top-comp-1.png" alt="握手している写真" class="pc-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/sp-top-comp.png" alt="握手している写真" class="sp-img">
            </div>
            <div class="company-card-contents">
              <h3>会社概要</h3>
              <p>ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</p>
              <button class="btn sp-more-btn">もっと見る</button>
            </div>
          </div>
          
          <div class="top-company-card">
            <a href="greet.html" class="link"></a>
            <div class="top-company-img">
              <div class="cover"><div class="view-more"></div></div>
              <a href="greet.html" class="link"></a>
              <img src="<?php echo get_template_directory_uri(); ?>/img/top-comp-2.png" alt="握手している写真"class="pc-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/sp-top-greet.png" alt="握手している写真" class="sp-img">
            </div>
            <div class="company-card-contents">
              <h3>社長挨拶</h3>
              <p>ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</p>
              <button class="btn sp-more-btn">もっと見る</button>
            </div>
          </div>
          
          <div class="top-company-card">
            <a href="recruit.html" class="link"></a>
            <div class="top-company-img">
              <div class="cover"><div class="view-more"></div></div>
              <a href="recruit.html" class="link"></a>
              <img src="<?php echo get_template_directory_uri(); ?>/img/top-comp-3.png" alt="握手している写真"class="pc-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/sp-top-rec.png" alt="握手している写真" class="sp-img">
            </div>
            <div class="company-card-contents">
              <h3>採用情報</h3>
              <p>ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</p>
              <button class="btn sp-more-btn">もっと見る</button>
            </div>
          </div>
        </div>
      </div><!-- top-company -->
      <div id="top-contact">
        <div class="container wrapper">
          <h2>お問い合わせ</h2>
          <div id="contact-wrapper">
            <div id="contact-contents">
              <p>東京都町田市木祖9854-11-13</p>
              <p>お気軽にお問い合わせ下さい<br>
                <span>Tel.</span>0438-000-000<span>Fax.</span>0438-000-000<br>
              営業時間　平日午前9時から午後18時（土日祝はお休みです）</p>
              <p>お問い合わせフォーム・Emailは24時間受け付けています<br>
              <span>Email.</span>rcom-factory@email.com</p>
              <button class="btn contact-btn" onclick="location.href='form.html'"><img src="<?php echo get_template_directory_uri(); ?>/img/mail.png" alt="封筒のイラスト"><p>お問い合わせ</p></button>
            </div>
            <div id="contact-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/contact-map.png" alt="地図" class="pc-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/contact-map.png" alt="地図" class="sp-img">
            </div>
          </div>
        </div>
      </div><!-- top-contact -->
  </main><!-- /main -->
  <?php get_footer(); ?>
<!-- <script src="script.js"></script>   -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
  const mainImg = [
  "<?php echo get_template_directory_uri(); ?>/img/main-img.png",
  "<?php echo get_template_directory_uri(); ?>/img/main-img-2.png",
  "<?php echo get_template_directory_uri(); ?>/img/main-img-3.png"
  ]

  const change1 = $("#explain-change-1").click(function(){
      $("#main-visual").css('background-image',`url(${mainImg[0]})`);
    });

  const change2 = $("#explain-change-2").click(function(){
      $("#main-visual").css('background-image',`url(${mainImg[1]})`);
    });

  const change3 = $("#explain-change-3").click(function(){
    $("#main-visual").css('background-image',`url(${mainImg[2]})`);
  });

  $("#menu-show").click(function(){
    if($("nav").hasClass("show")){
      $("nav").removeClass("show")
      $(".sp-menu").slideUp();
      }else{
      $("nav").addClass("show")
      $(".sp-menu").slideDown();
    }
  });
});
</script>
</body>
</html>