
<?php
get_template_part('template-parts/header'); // header.php をインクルード
?>

<main>

<?php 
get_template_part('template-parts/para-mainvisual'); // header.php をインクルード
?> 



  <section id="section-contects">
    <!-- パンくずリスト -->
    <?php
      if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<nav id="breadcrumbs">', '</nav>');
      }
    ?>

    <div class="concept-detail__inner">
      <div class="concept-detail__inner--flex">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/A-TECH-TEST-image/test-image/img/page-concept_about.jpg" 
        loading="lazy"
        alt="コンセプト画像１">

        <h2>洗練されたワンランク上の<br> 女性を目指すために</h2>
      </div><!-- /.concept-detail__inner--flex -->

      <p class="concept-detail__inner--text">
      バレンタインローズは、東京や大阪、名古屋などの都市部をはじめ日本全国に店舗を構える脱毛サロンで、
      「洗練されたワンランク上の女性を目指す」というコンセプトのもとオーダーメイドの脱毛サービスを提供しています。<br>
      毎年30,000人以上のお客様にバレンタインローズの脱毛サービスをご利用いただいており、これまで年齢を問わず様々な女性の脱毛をサポートさせていただきました。
      しかし、私たちは、脱毛はあくまでもお客様がワンランク上の女性に近づくための一歩であり、目指すべきゴールではないと考えています。<br>
      お客様と脱毛サロンという関係だけでなく、脱毛の卒業後もお客様の隣で女性磨きをサポートすることができる存在となり、
      そしてバレンタインローズに通っていることを誇りに思ってもらえる、そんな脱毛サロンを目指していきます。
      </p>
    </div> <!--/.concept-detail__inner -->    
  </section> 

  <section id="instagram">    
    <div class="section-title fade-in">
      <span class="section-title__shadow">Instagram</span>
      <h2 class="section-title__main">INSTAGRAM</h2>
    </div>


    <div class="instagram-feed-container">
      <?php echo do_shortcode('  [instagram-feed feed=2]'); ?>
    </div>
  </section>  











</main>




<?php
  get_template_part('template-parts/footer'); // footer.php をインクルード
?>  
</body>  