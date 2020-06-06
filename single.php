<?php get_header(); ?> 
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
          <time><?php the_date(); ?></time><span class="information"><?php the_category(','); ?></span>
          </p>
          <h2>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h2>
        </div>
        <div class="archive-body">
          
          <?php the_content(); ?>
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