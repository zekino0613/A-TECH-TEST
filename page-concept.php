<?php
get_template_part('template-parts/header'); // header.php をインクルード
?>

<main>

  <?php
  get_template_part('template-parts/para-mainvisual'); // header.php をインクルード
  ?>



  <section id="section-contects" class="concept">
    <!-- パンくずリスト -->
    <?php
    if (function_exists('yoast_breadcrumb')) {
      yoast_breadcrumb('<nav id="breadcrumbs">', '</nav>');
    }
    ?>

    <div class="concept-detail__inner">
      <div class="concept-detail__inner--flex">
        <img class="flex-image fade-in" src="<?php echo get_template_directory_uri(); ?>/assets/images/A-TECH-TEST-image/test-image/img/page-concept_about.webp"
          loading="lazy"
          alt="コンセプト画像１">

        <h2 class="flex-text fade-in">洗練されたワンランク上の<br> 女性を目指すために</h2>
      </div><!-- /.concept-detail__inner--flex -->

      <p class="concept-detail__inner--text fade-in">
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
      <h2 class="section-title__main">Instagram</h2>
      <p class="section-title__subtitle">公式インスタグラム</p>
    </div>


    <div class="instagram-feed-container fade-in">
      <?php echo do_shortcode('[instagram-feed feed=2]'); ?>
    </div>
  </section>


  <section id="company-profile">
    <div class="company-profile__inner">
      <div class="section-title fade-in">
        <span class="section-title__shadow">Company Profile</span>
        <h2 class="section-title__main">Company Profile</h2>
        <p class="section-title__subtitle">会社概要</p>
      </div>
      <img class="company-profile__inner--image-pc fade-in" src="<?php echo get_template_directory_uri(); ?>/assets/images/A-TECH-TEST-image/test-image/img/page-concept_profile-pc.webp"
        loading="lazy"
        alt="コンセプトpc画像2">

      <img class="company-profile__inner--image-sp fade-in" src="<?php echo get_template_directory_uri(); ?>/assets/images/A-TECH-TEST-image/test-image/img/page-concept_profile-sp.webp"
        loading="lazy"
        alt="コンセプトsp画像2">

      <div class="company-info">
        <div class="info-row border fade-in">
          <div class="info-title">運営会社</div>
          <div class="info-content">株式会社VALENTINE ROSE</div>
        </div>
        <div class="info-row fade-in">
          <div class="info-title">商号</div>
          <div class="info-content">VALENTINE ROSE</div>
        </div>
        <div class="info-row border fade-in">
          <div class="info-title">代表者</div>
          <div class="info-content">山田 花子</div>
        </div>
        <div class="info-row fade-in">
          <div class="info-title">所在地</div>
          <address class="info-content">〒000-0000 <br class="brsp"> 東京都港区青山0-00-00</address>
        </div>
        <div class="info-row border fade-in">
          <div class="info-title">電話番号</div>
          <address class="info-content">000-0000-0000</address>
        </div>
        <div class="info-row fade-in">
          <div class="info-title">資本金</div>
          <div class="info-content">3000万円</div>
        </div>
        <div class="info-row full-width fade-in">
          <div class="info-title">従業員数</div>
          <div class="info-content">200名</div>
        </div>
        <div class="info-row full-width fade-in">
          <div class="info-title">業務内容</div>
          <div class="info-content">-脱毛サロン「VALENTINE ROSE」の運営</div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php
get_template_part('template-parts/footer'); // footer.php をインクルード
?>
</body>