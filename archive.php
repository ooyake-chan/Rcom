<?php get_header(); ?>
  <main>
    <div class="header">
      <div class="wrapper">
        <div class="breadcrumbs bread" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if(function_exists('bcn_display'))
            {
                bcn_display();
            }?>
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
            <time><?php the_time('Y年m月d日'); ?></time><span class="information"><?php the_category(','); ?></span>
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
                