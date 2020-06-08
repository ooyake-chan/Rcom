<?php get_header(); ?>
  <main>
    <div class="header">
    <div class="wrapper">

        <?php 
         if (have_posts()) : 
          while (have_posts()) :
            the_post(); ?>

        <?php
          $parent_id = $post->post_parent; // 親ページのIDを取得
        ?>   

        <?php
          $parent_id = $post->post_parent; // 親ページのIDを取得
          $parent_slug = get_post($parent_id)->post_name; // 親ページのスラッグを取得
          $parent_title = get_post($parent_id)->post_title; // 親ページのタイトルを取得
        ?>

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
            <a itemprop="item" href="<?php echo the_permalink($parent_id); ?>">
                <span itemprop="name"><?php echo $parent_title; ?></span>
            </a>
            <meta itemprop="position" content="2" />
          </li>
          <!-- 3つめ -->
          <?php 
          if( get_the_id () !== $parent_id ) : ?>
            
            <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem">
              <a itemprop="item" href="<?php echo the_permalink(); ?>">
                  <span itemprop="name"><?php echo the_title(); ?></span>
              </a>
              <meta itemprop="position" content="3" />
            </li>
          <?php endif ; ?>

        </ol>
      </div>
      <div class="clear"></div><!-- パンくずリスト -->
      <h1><?php the_title(); ?></h1>
<!-- カテゴリの説明文 -->
<?php if (is_category() && //カテゴリページの時
          !is_paged() &&   //カテゴリページのトップの時
          category_description()) : //カテゴリの説明文が空でない時 ?>
<div class="category-description"><?php echo category_description(); ?></div>
<?php endif; ?>
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