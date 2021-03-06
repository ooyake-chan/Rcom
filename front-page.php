<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
  <title>アールコム工商株式会社</title>
</head>
<body>
  <div id="main-visual" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/main-img.png);">
    <div class="container wrapper">
      <nav class="">
        <div class="sp-menu-cover"></div>
        <div class="nav-wrapper flex">
          <div id="nav-logo">
            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/1.png" alt="Rcomロゴマーク"></a>
          </div>
          <div>
            <ul>
              <li id="menu-head"><a href="product">製品紹介</a></li>
              <li><a href="flow">製造工程</a></li>
              <li><a href="company">会社概要</a></li>
              <li><a href="greet">社長挨拶</a></li>
              <li id="menu-foot"><a href="recruit">採用情報</a></li>
            </ul>
          </div>
          <div id="nav-contact">
            <button class="btn contact-btn" onclick="location.href='form'"><img src="<?php echo get_template_directory_uri(); ?>/img/mail.png" alt="封筒のイラスト"><p>お問い合わせ</p></button>
            <button class="btn sp-contact-btn" onclick="location.href='form'"><img src="<?php echo get_template_directory_uri(); ?>/img/mail.png" alt="封筒のイラスト"><p>お問い合せ</p></button>
            <button class="btn sp-menu-btn" id="menu-show"><img src="<?php echo get_template_directory_uri(); ?>/img/menu-bar.png" alt="メニューバーのイラスト"><p>メニュー</p></button>
          </div>        
        </div>
        <div class="sp-menu">
          <ul>
            <li><a href="product">製品紹介</a></li>
            <li><a href="flow">製造工程</a></li>
            <li><a href="company">会社概要</a></li>
            <li><a href="greet">社長挨拶</a></li>
            <li><a href="recruit">採用情報</a></li>
          </ul>
        </div>  
      </nav><!-- /nav -->
      <div class="wrapper">
        <div id="sp-main-visual"></div>
        <div id="explain-card">
          <h1>アールコム工商tesusite</h1>
          <p class="explain-text-1">
            当サイトは勉強用に制作された<strong>架空の企業サイト</strong>です。実在する企業、商品ではありません。ご注意ください。製作者は公（ooyake）です。なにかありましたらご連絡ください<a href="https://twitter.com/OOyake_" style="color: yellow;">Twitter</a>
          </p>
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
            <!-- ループここから -->
            <?php $args = array(
                'post_type'   => 'post',
                'numberposts' => 2, //取得件数をデフォルト値から変更
                'orderby'     => 'date',
                'order'       => 'DESC',
                );
              $myposts = get_posts( $args );
              foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

            <li id="li-first" style="background: url(<?php echo get_template_directory_uri(); ?>/img/arrow-right.png) left 0px top 3px no-repeat;background-size: 15px auto;">
              <a href="<?php the_permalink(); ?>">
                <span>
                  <time><?php the_time('Y年m月d日'); ?></time>
                  <?php the_title(); ?>
                </span>
                  <p><?php the_excerpt(); ?></p>
              </a>
            </li>
          <?php endforeach; wp_reset_postdata(); ?>
            <!-- ループここまで -->
          </ul>
        </div>

        <div id="info-cov">
          <button class="btn cov-btn" onclick="location.href='/product/part'">コロナ対策製品</button>
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
              <a class="link" href="/product/acrylic"></a>
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
              <a class="link" href="/product/display"></a>
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
              <a class="link" href="/product/monitor"></a>
              <button class="btn sp-more-btn">もっと見る</button>
            </div>
          </div>
        </div>
        <div>
          <button class="btn cov-btn product-cov-btn" onclick="location.href='product/part'">コロナ対策製品</button>
        </div>
      </div><!-- /top-product -->
      <div class="top-flow-wrap">  
        <div id="top-flow" style="  background-image: url(<?php echo get_template_directory_uri(); ?>/img/top-flow-gb.png);background-size: cover;"></div>
        <div class="flow-cover"></div>
        <a href="flow" class="link"></a>
        <div id="top-flow-contents">
          <h2>製造工程</h2>
          <p>ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストーテキストーテキストーテキストーテキスト</p>
          <img src="<?php echo get_template_directory_uri(); ?>/img/view-more.png" alt="もっと見る">
          <a href="flow" class="link"></a>
        </div>
      </div><!-- top-flow -->
      <div id="top-company">
        <div class="container wrapper">
          <div class="top-company-card">
            <a href="company" class="link"></a>
            <div class="top-company-img">
              <div class="cover"><div class="view-more"></div></div>
              <a href="company" class="link"></a>
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
            <a href="greet" class="link"></a>
            <div class="top-company-img">
              <div class="cover"><div class="view-more"></div></div>
              <a href="greet" class="link"></a>
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
            <a href="recruit" class="link"></a>
            <div class="top-company-img">
              <div class="cover"><div class="view-more"></div></div>
              <a href="recruit" class="link"></a>
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
              <p>東京都かもめ町朝顔台たんぽぽ団地9854-11-13</p>
              <p>お気軽にお問い合わせ下さい<br>
                <span>Tel.</span>0438-000-000<span>Fax.</span>0438-000-000<br>
              営業時間　平日午前9時から午後18時（土日祝はお休みです）</p>
              <p>お問い合わせフォーム・Emailは24時間受け付けています<br>
              <span>Email.</span>rcom-factory@email.com</p>
              <button class="btn contact-btn" onclick="location.href='form'"><img src="<?php echo get_template_directory_uri(); ?>/img/mail.png" alt="封筒のイラスト"><p>お問い合わせ</p></button>
            </div>
            <div id="contact-img">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3242.408716954569!2d139.73577081489466!3d35.6423005397142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bba401e72d1%3A0xc129f2ffe867138!2z5pyd6aGU44Gu5LqV5oi4!5e0!3m2!1sja!2sjp!4v1591599285816!5m2!1sja!2sjp" width="420" height="420" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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

});
</script>
</body>
</html>