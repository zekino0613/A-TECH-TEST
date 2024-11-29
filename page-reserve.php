<?php
get_template_part('template-parts/header'); // header.php をインクルード
?>

<main>
  <?php 
    get_template_part('template-parts/para-mainvisual'); // header.php をインクルード
  ?> 


  <section id="section-contects" class="reserve">
    <!-- パンくずリスト -->
    <?php
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<nav id="breadcrumbs">', '</nav>');
    }
    ?>
  </section>

  <div class="privacy-policy">
    <div class="privacy-policy__inner">

      <div class="privacy-download">
        <div class="privacy-download__textarea">
          <h2 class= "privacy-download__textarea--title">
          未成年のお客様は必ずお読みください
          </h2>    
          <p class= "privacy-download__textarea--text">
          脱毛箇所を問わず、未成年のお客様が施術を受けるためには、<br class="brsp">保護者の同意が必要です。<br>
          「未成年契約同意書」をダウンロードし、保護者にご記入いただいた上で初回ご来店時に持参ください。
          </p>
        </div><!-- /privacy-download__textarea -->

        <div class="download-content">
          <p class="download-content__text">未成年契約同意書</p>
          <a class="download-content__button btn" href="http://a-test.local/wp-content/uploads/2024/11/VALENTINE-ROSE-minors-consent-form.docx"
            download="未成年契約同意書.pdf" class="btn-download">
            <i class="fas fa-file-download"></i> Download
          </a>
        </div>
      </div><!-- /privacy-download -->

      <div class="contact-section">
        <div class="contact">
          <div class="contact__info">
            <h2 class="contact__info--title">TEL</h2>
            <p class="contact__info--description">
              サービス・料金の質問や無料体験のご予約などを希望の方は、ご希望の店舗にお問い合わせください。<br>
              なお、施術中は、お電話に対応することができない可能性がありますので、あらためてお電話いただくか、メールフォームからお問い合わせください。
            </p>
          </div>

          <div class="contact__details">
            <a class="contact__details--number" href="tel:0123456789">01-2345-6789</a>
            <span class="contact__details--hours">9:00〜22:00 定休日なし</span>
          </div>
        </div>
      </div>
    </div><!-- / -->
  </div><!-- /privacy-policy -->

    



      <?php echo apply_shortcodes('[contact-form-7 id="b8e27cb" title="reserve"]'); ?>


 
</main>



  <?php
    get_template_part('template-parts/footer'); // footer.php をインクルード
  ?>  
</body>       