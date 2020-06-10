<?php get_header(); ?>
  <main>
    <div class="header">
    <div class="wrapper">

        <?php 
         if (have_posts()) : 
          while (have_posts()) :
            the_post(); ?>

      <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
          <?php if(function_exists('bcn_display'))
          {
              bcn_display();
          }?>
      </div>
            
      <div class="clear"></div>
      <h1><?php the_title(); ?></h1>
<!-- カテゴリの説明文 -->
    <p><?php echo post_custom('ページの説明'); ?></p>
    </div>
    </div><!-- header -->
    <div class="conteiner wrapper contents">

      <?php the_content(); ?>

      <?php
        endwhile;
        else :
          ?>
          <p>no page</p>
      <?php 
      endif;
       ?>    

    </div><!-- contents -->
  </main><!-- main -->
<?php get_footer(); ?>