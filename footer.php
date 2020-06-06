  
  <footer>
    <div class="wrapper container">
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
        <a href ="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/1.png" alt="Rcomロゴマーク"></a>
      </div>
      <div id="foot-phone-num">
        <img src="<?php echo get_template_directory_uri(); ?>/img/phone.png" alt="">
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
 $("#menu-show").click(function(){
    if($("nav").hasClass("show")){
      $("nav").removeClass("show")
      $(".sp-menu").slideUp();
      }else{
      $("nav").addClass("show")
      $(".sp-menu").slideDown();
    }});
});
</script>
</body>
</html>
  <?php wp_footer(); ?>