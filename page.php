<?php get_header(); ?>
  <main>
    <div class="header">
    <div class="wrapper">

        <?php 
         if (have_posts()) : 
          while (have_posts()) :
            the_post(); ?>

      <div class="bread">
        <ol itemscope itemtype="https://schema.org/BreadcrumbList">
          <!-- 1つめ -->
          <li itemprop="itemListElement" itemscope
              itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="<?php echo home_url(); ?>">
                <span itemprop="name">ホーム</span>
            </a>
            <meta itemprop="position" content="1" />
          </li>
        
          <!-- 2つめ -->
          <li itemprop="itemListElement" itemscope
              itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="<?php echo the_permalink(); ?>">
                <span itemprop="name"><?php echo the_title(); ?></span>
            </a>
            <meta itemprop="position" content="2" />
          </li>
        </ol>
      </div>
      <div class="clear"></div><!-- パンくずリスト -->
      <h1><?php the_title(); ?></h1>
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