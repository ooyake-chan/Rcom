<?php get_header(); ?>
  <main>
    <div class="header">
    <div class="wrapper">
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
    </div>
  </div><!-- header -->
  <div class="conteiner wrapper contents">
    <p>404 Not Found ^^;</p>
    

    </div><!-- contents -->
  </main><!-- main -->
<?php get_footer(); ?>