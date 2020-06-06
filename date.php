<?php get_header(); ?>
  <main>
    <div class="header">
      <div class="wrapper">
        <div class="bread">
          <ol itemscope itemtype="https://schema.org/BreadcrumbList">
            <!-- 1つめ -->
            <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem">
              <a itemprop="item" href="<?php home_url(); ?>">
                  <span itemprop="name">ホーム</span>
              </a>
              <meta itemprop="position" content="1" />
            </li>
          
            <!-- 2つめ -->
            <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem">
              <a itemprop="item" href="<?php home_url('/'); ?>archives">
                  <span itemprop="name">お知らせ</span>
              </a>
              <meta itemprop="position" content="2" />
            </li>
            <!-- 3つめ -->
            <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem">
              <a itemprop="item" href="#">
                  <span itemprop="name"><?php the_title(); ?></span>
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
        <ul class="data-menu">
        <?php 
        $get_data = wp_get_archives(array(
        'type'=>'yearly', 
        'show_post_count'=>true, 
        'limit'=>20, 
        'post_type'=>'post', 
        'format'=>'html' ,
        'show_post_count'=>'0'
    ));
    ?></ul>
      </div><!-- contents-menu -->

      <?php
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                ?>

      <div class="archives-wrapper"><!-- お知らせここから -->
        <div class="archive-head">
          <p>
            <time><?php the_date(); ?></time><span class="information"><?php the_category(','); ?></span>
          </p>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
                