<?php get_header(); ?>
  <main>
    <div class="header">
      <div class="wrapper">
        <div class="bread">
          <ol itemscope itemtype="https://schema.org/BreadcrumbList">
            <!-- 1つめ -->
            <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem">
              <a itemprop="item" href="index.html">
                  <span itemprop="name">ホーム</span>
              </a>
              <meta itemprop="position" content="1" />
            </li>
          
            <!-- 2つめ -->
            <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem">
              <a itemprop="item" href="archives.html">
                  <span itemprop="name">お知らせ</span>
              </a>
              <meta itemprop="position" content="2" />
            </li>
            <!-- 3つめ -->
            <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem">
              <a itemprop="item" href="#">
                  <span itemprop="name">2020年</span>
              </a>
              <meta itemprop="position" content="2" />
            </li>
          </ol>
        </div>
        <div class="clear"></div><!-- パンくずリスト -->
        <h1>お知らせ</h1>
    </div>
    </div><!-- header -->
    <div class="conteiner wrapper contents">
      <div class="contents-menu">
        <button class="btn contents-menu-btn" onclick="location.href='#'">2020年</button>
        <button class="btn contents-menu-btn" onclick="location.href='#'">2019年</button>
        <button class="btn contents-menu-btn" onclick="location.href='#'">2018年</button>
        <button class="btn contents-cov-btn" onclick="location.href='#'">2017年</button>
        <button class="btn contents-cov-btn" onclick="location.href='#'">2016年</button>
      </div><!-- contents-menu -->
      <div class="archives-wrapper"><!-- お知らせここから -->
        <div class="archive-head">
          <p>
            <time datetime="2020-01-01">2020年1月1日</time><span class="information">お知らせ</span>
          </p>
          <h2>明けましておめでとうございます。本年も宜しくお願いいたします。</h2>
        </div>
        <div class="archive-body">
          <p>ダミーテキストダミーテキストダミーテストダミーテキストダミーテストダミーテキストダミーテストダミーテキストダミーテストダミーテキストダミーテストダミーテキストダミーテストダミーテキストダミーテキストダミーテキスト</p>
        </div>
      </div><!-- おしらせここまで -->
      <div class="archives-wrapper"><!-- お知らせここから -->
        <div class="archive-head">
          <p>
            <time datetime="2020-01-01">2020年1月1日</time><span class="information">お知らせ</span>
          </p>
          <h2>明けましておめでとうございます。本年も宜しくお願いいたします。</h2>
        </div>
        <div class="archive-body">
          <p>ダミーテキストダミーテキストダミーテストダミーテキストダミーテストダミーテキストダミーテストダミーテキストダミーテストダミーテキストダミーテストダミーテキストダミーテストダミーテキストダミーテキストダミーテキスト</p>
        </div>
      </div>
      <div class="contents-end"></div><!-- おしらせここまで -->
    </div><!-- contents -->
  </main><!-- main -->

  <footer>
    <div class="wrapper">
      <div id="foot-wrapper">
        <div class="site-map">
          <h3>製品紹介</h3>
          <ul>
            <li><a href ="product/product_acrylic.html">アクリル加工品</li></a>
            <li><a href ="product/product_display.html">ディスプレイ</li></a>
            <li><a href ="product/product_monitor.html">モニターディスプレイ</a></li>
            <li><a href ="product/product_part.html">アクリルパーテーション</a></li>
            <li><a href ="product/product_face.html">フェイスガード</a></li>
          </ul>
        </div>
        <div class="site-map">
          <h3>製造工程</h3>
          <ul>
            <li><a href="flow.html">ご注文から納品までのフロー</a></li>
            <li><a href="equipment.html">加工設備</a></li>
          </ul>
        </div>
        <div class="site-map">
          <a href="company.html"><h3>会社概要</h3></a>
          <a href="greet.html"><h3>社長挨拶</h3></a>
          <a href="recruit.html"><h3>採用情報</h3></a>
          <ul>
            <li><a href="interview.html">社員インタビュー</a></li>
          </ul>
        </div>
      </div>
      <div class="comp-info">
        <div id="footlogo">
          <a href ="index.html"><img src="img/1.png" alt="Rcomロゴマーク"></a>
        </div>
        <div id="foot-phone-num">
          <img src="img/phone.png" alt="">
          <h3>0438-000-000</h3>
          <p>(受付時間　午前9時から午後18時)</p>
        </div>
        <div id="foot-address">
          <h3>会社所在地</h3>
          <p>東京都町田市木祖9854-11-13</p>
        </div>
      </div>
      <div class="copy-right">
        <small>© 2020 Rcom Co,Ltd.</small>
      </div>
    </div>
  </footer><!-- /footer -->
<script src="script.js"></script>  
</body>
</html>