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

      <?php
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                ?>

      <div class="archives-wrapper"><!-- お知らせここから -->
        <div class="archive-head">
          <p>
            <time datetime="2020-01-01"><?php echo get_the_date(); ?></time><span class="information"><?php the_category(', '); ?></span>
          </p>
          <h2><?php the_permalink(); ?>"><?php the_title(); ?></h2>
        </div>
        <div class="archive-body">
        <?php the_excerpt(); ?>
        </div>
      </div><!-- おしらせここまで -->

      <?php
                    endwhile;
                else:
                ?>

                <p>記事はありません！</p>

                <?php
                endif;
                ?>

    </div><!-- contents -->
  </main><!-- main -->
<?php get_footer(); ?>
<script src="script.js"></script>  
</body>
</html>