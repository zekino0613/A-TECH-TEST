<footer id="footer"> 
  <div class="footer-contents">
      <a href="<?php echo home_url(''); ?>#reserve" class="footer-contents__reserve fade-in">
        <div class="select-btn">
          <p class="select-btn__main">RESERVE</p>
          <span class="select-btn__sub">予約はこちらから</span>
        </div>
      </a><!-- /.footer-contents__reserve -->

      <div class="footer-contents__flex">
        <a href="<?php echo home_url(''); ?>#salons" class="footer-contents__flex--salons fade-in">
          <div class="select-btn">
            <p class="select-btn__main">SALONS</p>
            <span class="select-btn__sub">店舗一覧</span>
          </div>  
        </a><!-- /footer__grid--salons -->

        <a href="<?php echo home_url(''); ?>#sns" class="footer-contents__flex--sns fade-in">
          <div class="select-btn">
            <p class="select-btn__main">SNS</p>
            <span class="select-btn__sub">インスタグラム</span>
          </div>  
        </a><!-- /footer__grid--sns -->
      </div><!-- /.footer-contents -->

    <div class="footer-contents__end fade-in">
      <a class="a-logo" href="<?php echo home_url('/#/'); ?>#">
        <div class="h-logo fade-in">
          <img loading="lazy" class="h-logo__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/A-TECH-TEST-image/test-image/img/logo.png" alt="フッターロゴ">
          <h1 class="h-logo__text">VALENTINE <br>ROSE</h1>
        </div>
      </a>
      <!-- nav PC用 -->
      <ul class="f-nav-pc fade-in">
        <li><a href="#">TOP</a></li>
        <li><a href="<?php echo home_url('/concept/'); ?>#concept">Concept</a></li>
        <li><a href="<?php echo home_url('/price-menu/'); ?>#price-menu">Price</a></li>
        <li><a href="<?php echo get_post_type_archive_link('news'); ?>#news">News</a></li>
        <li><a href="<?php echo home_url('/contact2/'); ?>#Reserve">Reserve</a></li>
      </ul>
      <ul class="f-nav-pc fade-in">
        <li><a href="<?php echo home_url('/Privacy-Policy/'); ?>#Privacy-Policy">Privacy Policy</a></li>
        <li><a href="<?php echo home_url('/Site-Map/'); ?>#Site-Map">Site Map</a></li>
      </ul>

      <!-- nav SP用 -->
      <ul class="f-nav-sp first fade-in">
        <li><a href="#">TOP</a></li>
        <li><a href="#concept">Concept</a></li>
        <li><a href="#prise-menu">Price</a></li>
      </ul>

      <ul class="f-nav-sp second fade-in">
        <li><a href="#news">News</a></li>
        <li><a href="<?php echo home_url('/contact2/'); ?>#Reserve">Reserve</a></li>
      </ul>

      <ul class="f-nav-sp third fade-in">
        <li><a href="<?php echo home_url('/Privacy-Policy/'); ?>#Privacy-Policy">Privacy Policy</a></li>
        <li><a href="<?php echo home_url('/Site-Map/'); ?>#Site-Map">Site Map</a></li>
      </ul>
    </div><!-- /.footer-contents__end -->


  </div><!-- /.footer-contents -->  

  <p class="last-text">
    &copy; 2024 Valentine Rose., Ltd. All rights Reserved.
  </p> 

</footer> 
  <!-- <script src="assets/js/jquery-3.7.1.min.js"></script>  -->
  <?php wp_footer(); ?> 
  </body>   
</html> 
